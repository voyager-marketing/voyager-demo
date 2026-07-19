<#
.SYNOPSIS
  Bootstrap a local Voyager Demo WP install under Laragon.

.DESCRIPTION
  Idempotent: safe to re-run. Sets up:
    * C:\laragon\www\voyager-demo\   - WordPress root (vhost: voyager-demo.test)
    * wp-content/themes/voyager-block-theme/ - parent theme (cloned via gh)
    * wp-content/themes/voyager-demo/        - junction to this repo
    * wp-content/plugins/voyager-{core,blocks,orbit}/ - cloned via gh
    * MySQL database 'voyager_demo_local' (Laragon default root creds)
    * Dev-friendly wp-config.php (WP_DEBUG, WP_DEVELOPMENT_MODE=theme, etc.)

  Matches the staging path layout (theme slug 'voyager-demo') so behavior
  parity with the SpinupWP deploy is one-to-one.

  Diverges from the voyager-blank-child canonical in two machine-specific ways:
    * Uses a directory junction (mklink /J) instead of a symlink (/D), so no
      Administrator elevation is required.
    * Writes the Laragon auto-vhost conf itself if missing (useful when
      Apache was started outside the Laragon GUI). The hosts-file entry
      still needs one elevated command; the script prints it if missing.

.PARAMETER LaragonRoot
  Path to Laragon install. Default: C:\laragon (matches this machine).

.PARAMETER RepoRoot
  Path to this repo (canonical source of the child theme).
  Default: C:\Users\benne\dev\voyager\demo-site\voyager-demo

.PARAMETER SiteUrl
  Local URL. Default: http://voyager-demo.test

.PARAMETER DbName
  MySQL database name. Default: voyager_demo_local

.PARAMETER AdminUser / AdminPass / AdminEmail
  WP admin creds. Defaults: admin / admin / ben@voyagermark.com

.PARAMETER SkipPlugins
  Skip cloning the Voyager plugin trio.

.PARAMETER Force
  Wipe the existing C:\laragon\www\voyager-demo\ before bootstrapping.
  Does NOT touch the git repo.

.EXAMPLE
  powershell -ExecutionPolicy Bypass -File C:\Users\benne\dev\voyager\demo-site\voyager-demo\scripts\bootstrap-laragon.ps1

.NOTES
  Prereqs (script will check and bail if missing):
    1. Laragon installed at -LaragonRoot, Apache + MySQL running
    2. GitHub CLI authed: `gh auth status` returns OK
#>

[CmdletBinding()]
param(
  [string]$LaragonRoot = 'C:\laragon',
  [string]$RepoRoot    = 'C:\Users\benne\dev\voyager\demo-site\voyager-demo',
  [string]$SiteUrl     = 'http://voyager-demo.test',
  [string]$DbName      = 'voyager_demo_local',
  [string]$AdminUser   = 'admin',
  [string]$AdminPass   = 'admin',
  [string]$AdminEmail  = 'ben@voyagermark.com',
  [switch]$SkipPlugins,
  [switch]$Force
)

$SiteSlug  = 'voyager-demo'   # www folder + local hostname
$ThemeSlug = 'voyager-demo'   # wp-content/themes/<ThemeSlug> = this repo

# EAP=Continue (not 'Stop'). PowerShell 5.1 wraps native stderr writes as
# NativeCommandError; with EAP=Stop that kills the script even on exit 0.
# Real error handling is explicit via $LASTEXITCODE checks.
$ErrorActionPreference = 'Continue'
$ProgressPreference    = 'SilentlyContinue'

# ---------- helpers ----------
function Write-Step ($msg)  { Write-Host "`n==> $msg" -ForegroundColor Cyan }
function Write-Info ($msg)  { Write-Host "    $msg" -ForegroundColor Gray }
function Write-Ok   ($msg)  { Write-Host "    OK: $msg" -ForegroundColor Green }
function Write-Warn ($msg)  { Write-Host "    WARN: $msg" -ForegroundColor Yellow }
function Die        ($msg)  { Write-Host "`nFATAL: $msg`n" -ForegroundColor Red; exit 1 }

function Invoke-Wp {
  param([Parameter(ValueFromRemainingArguments=$true)][string[]]$Args)
  # 2>&1 merges stderr so PHP warnings don't become ErrorRecords.
  $wp = $script:WpBin
  & $wp @Args 2>&1 | ForEach-Object { Write-Host $_ }
  if ($LASTEXITCODE -ne 0) { Die "wp-cli failed: wp $($Args -join ' ')" }
}

# ---------- pre-flight ----------
Write-Step 'Pre-flight checks'

if (-not (Test-Path $LaragonRoot)) { Die "Laragon not found at $LaragonRoot. Set -LaragonRoot or install from https://laragon.org/" }
Write-Ok "Laragon: $LaragonRoot"

# Detect PHP_INI_SCAN_DIR pollution (scoop PHP is a known offender): an outside
# ini merged on top of Laragon's silently breaks mysqli + DLL extensions.
$scanDirUser    = [Environment]::GetEnvironmentVariable('PHP_INI_SCAN_DIR', 'User')
$scanDirMachine = [Environment]::GetEnvironmentVariable('PHP_INI_SCAN_DIR', 'Machine')
$scanDir        = @($scanDirUser, $scanDirMachine) | Where-Object { $_ }
if ($scanDir) {
  $offending = $scanDir | Where-Object { $_ -notmatch [regex]::Escape($LaragonRoot) }
  if ($offending) {
    Write-Warn "PHP_INI_SCAN_DIR is set to: $($offending -join '; ')"
    Write-Warn 'Clear it, then fully quit + relaunch Laragon:'
    Write-Warn "  [Environment]::SetEnvironmentVariable('PHP_INI_SCAN_DIR', `$null, 'User')"
  } else {
    Write-Ok 'PHP_INI_SCAN_DIR: clean'
  }
} else {
  Write-Ok 'PHP_INI_SCAN_DIR: not set'
}

if (-not (Test-Path $RepoRoot)) { Die "Repo not found at $RepoRoot" }
Write-Ok "Repo:    $RepoRoot"

# Find php.exe under Laragon (version-agnostic)
$phpBin = Get-ChildItem -Path "$LaragonRoot\bin\php" -Recurse -Filter 'php.exe' -ErrorAction SilentlyContinue | Select-Object -First 1 -ExpandProperty FullName
if (-not $phpBin) { Die "No php.exe under $LaragonRoot\bin\php. Open Laragon -> Menu -> PHP -> install a PHP version." }
Write-Ok "PHP:     $phpBin"

# Pin wp-cli to Laragon's PHP (global shims may resolve a PHP without zip).
$env:WP_CLI_PHP = $phpBin

# Find mysql.exe under Laragon
$mysqlBin = Get-ChildItem -Path "$LaragonRoot\bin\mysql" -Recurse -Filter 'mysql.exe' -ErrorAction SilentlyContinue | Select-Object -First 1 -ExpandProperty FullName
if (-not $mysqlBin) { Die "No mysql.exe under $LaragonRoot\bin\mysql. Open Laragon and start MySQL." }
Write-Ok "MySQL:   $mysqlBin"

# Ensure Laragon's main php.ini has the extensions WordPress needs (Apache
# reads this ini when serving the site; wp-cli uses its own ini below).
$phpDir = (Get-Item $phpBin).Directory.FullName
$phpIni = Join-Path $phpDir 'php.ini'
if (Test-Path $phpIni) {
  $wpExts  = @('mysqli','zip','curl','mbstring','openssl','fileinfo','exif','gd','intl','sockets')
  $iniText = Get-Content $phpIni -Raw
  $changed = $false
  foreach ($e in $wpExts) {
    if (-not (Test-Path (Join-Path "$phpDir\ext" "php_$e.dll"))) { continue }
    if ($iniText -match "(?m)^\s*extension\s*=\s*$e(\s|$)") { continue }
    if ($iniText -match "(?m)^\s*;\s*extension\s*=\s*$e(\s|$)") {
      $iniText = $iniText -replace "(?m)^\s*;\s*extension\s*=\s*$e(\s|$)","extension=$e`$1"
      $changed = $true
      continue
    }
    $iniText += "`r`nextension=$e"
    $changed = $true
  }
  if ($changed) {
    Copy-Item $phpIni "$phpIni.bak" -Force -ErrorAction SilentlyContinue
    Set-Content -Path $phpIni -Value $iniText -Encoding ASCII
    Write-Ok "php.ini: enabled extensions (backup at $phpIni.bak). RESTART APACHE to pick this up."
  } else {
    Write-Ok 'php.ini: WP-required extensions already enabled'
  }
} else {
  Write-Warn "Couldn't find php.ini at $phpIni - Apache may need extensions enabled manually."
}

# Verify MySQL is reachable before doing anything.
& $mysqlBin -u root --connect-timeout=3 -e 'SELECT 1;' *> $null
if ($LASTEXITCODE -ne 0) {
  Die 'MySQL is not reachable on localhost. Open Laragon and Start All, then re-run.'
}
Write-Ok 'MySQL:   reachable (root@localhost)'

# gh CLI
$ghBin = (Get-Command gh -ErrorAction SilentlyContinue).Source
if (-not $ghBin) { Die 'GitHub CLI (gh) not on PATH. Install: winget install --id GitHub.cli' }
& $ghBin auth status 2>&1 | Out-Null
if ($LASTEXITCODE -ne 0) { Die 'GitHub CLI not authenticated. Run: gh auth login' }
Write-Ok 'gh:      authed'

# wp-cli: always run wp-cli.phar via Laragon's PHP with a dedicated ini so we
# control exactly which extensions load (zip in particular).
$wpPharLocal = Join-Path $RepoRoot 'scripts\wp-cli.phar'
$wpShim      = Join-Path $RepoRoot 'scripts\wp.ps1'
$wpIniLocal  = Join-Path $RepoRoot 'scripts\wp-cli-php.ini'

if (-not (Test-Path $wpPharLocal)) {
  Write-Info "  Downloading wp-cli.phar -> $wpPharLocal"
  Invoke-WebRequest 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar' -OutFile $wpPharLocal
}

$phpExtDir = Join-Path $phpDir 'ext'
if (-not (Test-Path $phpExtDir)) { Die "Could not find Laragon PHP extension dir at $phpExtDir" }

$wantExt = @('zip','curl','mbstring','openssl','fileinfo','mysqli','exif','sockets')
$haveExt = @()
foreach ($e in $wantExt) {
  if (Test-Path (Join-Path $phpExtDir "php_$e.dll")) { $haveExt += $e }
}
if ($haveExt -notcontains 'zip') {
  Die "php_zip.dll not found in $phpExtDir. wp-cli core download can't proceed."
}

$iniLines = @()
$iniLines += '; Auto-generated by bootstrap-laragon.ps1. Do not edit by hand.'
$iniLines += "extension_dir = `"$phpExtDir`""
$iniLines += 'memory_limit = 512M'
$iniLines += 'date.timezone = UTC'
foreach ($e in $haveExt) { $iniLines += "extension=$e" }
$iniLines -join "`r`n" | Set-Content -Path $wpIniLocal -Encoding ASCII
Write-Info "  wp-cli php.ini: $($haveExt -join ', ')"

@"
`$ErrorActionPreference = 'Continue'
& '$phpBin' -c '$wpIniLocal' '$wpPharLocal' @args 2>&1
exit `$LASTEXITCODE
"@ | Set-Content -Path $wpShim -Encoding ASCII

$script:WpBin = $wpShim
Write-Ok "wp-cli:  $wpPharLocal (Laragon PHP + dedicated ini)"

# ---------- paths ----------
$SiteRoot   = Join-Path "$LaragonRoot\www" $SiteSlug
$ParentDir  = Join-Path $SiteRoot 'wp-content\themes\voyager-block-theme'
$ChildLink  = Join-Path $SiteRoot "wp-content\themes\$ThemeSlug"
$PluginsDir = Join-Path $SiteRoot 'wp-content\plugins'

# ---------- wipe (if -Force) ----------
if ($Force -and (Test-Path $SiteRoot)) {
  # Snapshot before the wipe: wp-config.php, the DB, and uploads/ (the only
  # non-reproducible parts).
  $wipeBackupDir = Join-Path $RepoRoot "scripts\.force-wipe-backup-$(Get-Date -Format 'yyyyMMdd-HHmmss')"
  Write-Step "Backing up to $wipeBackupDir before -Force wipe"
  New-Item -ItemType Directory -Path $wipeBackupDir -Force | Out-Null

  $wpConfigSrc = Join-Path $SiteRoot 'wp-config.php'
  if (Test-Path $wpConfigSrc) {
    Copy-Item $wpConfigSrc (Join-Path $wipeBackupDir 'wp-config.php') -Force
    Write-Info '  wp-config.php backed up'
  }

  $mysqldumpBin = Get-ChildItem -Path "$LaragonRoot\bin\mysql" -Recurse -Filter 'mysqldump.exe' -ErrorAction SilentlyContinue | Select-Object -First 1 -ExpandProperty FullName
  if ($mysqldumpBin) {
    $dbDump = Join-Path $wipeBackupDir "$DbName.sql"
    & $mysqldumpBin -u root --add-drop-table --default-character-set=utf8mb4 $DbName 2>$null | Set-Content -Path $dbDump -Encoding ASCII -NoNewline
    if ((Test-Path $dbDump) -and ((Get-Item $dbDump).Length -gt 1KB)) {
      Write-Info "  DB dumped to $dbDump"
    } else {
      if (Test-Path $dbDump) { Remove-Item $dbDump -Force }
    }
  }

  $uploadsSrc = Join-Path $SiteRoot 'wp-content\uploads'
  if ((Test-Path $uploadsSrc) -and (@(Get-ChildItem $uploadsSrc -Recurse -File -ErrorAction SilentlyContinue)).Count -gt 0) {
    $uploadsBackup = Join-Path $wipeBackupDir 'uploads.zip'
    Compress-Archive -Path "$uploadsSrc\*" -DestinationPath $uploadsBackup -Force -ErrorAction SilentlyContinue
    if (Test-Path $uploadsBackup) { Write-Info '  wp-content/uploads/ backed up to uploads.zip' }
  }
  Write-Ok "Snapshot saved to $wipeBackupDir"

  Write-Step "Force wipe: removing $SiteRoot"
  # Drop the junction before nuking the tree so we don't follow it to the repo.
  if (Test-Path $ChildLink) {
    Write-Info "  Removing junction $ChildLink"
    cmd /c "rmdir `"$ChildLink`"" 2>&1 | Out-Null
  }
  Remove-Item $SiteRoot -Recurse -Force
  Write-Ok 'Wiped.'

  Write-Info "  Dropping database $DbName (if exists)"
  & $mysqlBin -u root -e "DROP DATABASE IF EXISTS $DbName;" 2>&1 | Out-Null
  if ($LASTEXITCODE -ne 0) { Die "Failed to drop database $DbName." }
}

# ---------- site root + WP core ----------
Write-Step "Creating WordPress install at $SiteRoot"
if (-not (Test-Path $SiteRoot)) { New-Item -ItemType Directory -Path $SiteRoot | Out-Null }

if (-not (Test-Path (Join-Path $SiteRoot 'wp-load.php'))) {
  Push-Location $SiteRoot
  Invoke-Wp '--path=.' 'core' 'download' '--force' '--skip-content'
  Pop-Location
  Write-Ok 'WordPress core downloaded.'
} else {
  Write-Ok 'WordPress core already present.'
}

# ---------- vhost ----------
# Laragon auto-generates this when its GUI reloads Apache; write it ourselves
# so a manually-started Apache serves the site too. Same shape Laragon uses.
$vhostConf = Join-Path $LaragonRoot "etc\apache2\sites-enabled\auto.$SiteSlug.test.conf"
if (-not (Test-Path $vhostConf)) {
  Write-Step "Writing Apache vhost: $vhostConf"
  $docRoot = $SiteRoot -replace '\\','/'
  @"
<VirtualHost *:80>
    DocumentRoot "$docRoot"
    ServerName $SiteSlug.test
    ServerAlias *.$SiteSlug.test
    <Directory "$docRoot">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
"@ | Set-Content -Path $vhostConf -Encoding ASCII
  Write-Ok 'vhost written. Apache restart required (script does NOT restart Apache).'
} else {
  Write-Ok 'vhost already present.'
}

# hosts entry: needs elevation; check and instruct rather than fail.
$hostsFile = "$env:SystemRoot\System32\drivers\etc\hosts"
$hostsHit  = Select-String -Path $hostsFile -Pattern "\b$SiteSlug\.test\b" -ErrorAction SilentlyContinue
if ($hostsHit) {
  Write-Ok "hosts: $SiteSlug.test already mapped"
} else {
  Write-Warn "hosts: no entry for $SiteSlug.test. Run this once in an ELEVATED shell:"
  Write-Warn "  Add-Content -Path $hostsFile -Value '127.0.0.1      $SiteSlug.test            #laragon magic!'"
  Write-Warn '(Or open the Laragon GUI and Reload - it manages hosts automatically.)'
}

# ---------- database ----------
Write-Step "Creating database '$DbName' (if missing)"
& $mysqlBin -u root -e "CREATE DATABASE IF NOT EXISTS $DbName CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;" 2>&1 | Out-Null
if ($LASTEXITCODE -ne 0) { Die "Failed to create database $DbName. Is MySQL running?" }
Write-Ok 'Database ready.'

# ---------- wp-config.php ----------
$wpConfigPath = Join-Path $SiteRoot 'wp-config.php'
if (-not (Test-Path $wpConfigPath)) {
  Write-Step 'Generating wp-config.php'
  Push-Location $SiteRoot
  Invoke-Wp '--path=.' 'config' 'create' `
    "--dbname=$DbName" '--dbuser=root' '--dbpass=' '--dbhost=127.0.0.1' `
    '--skip-check'

  $devConsts = @{
    'WP_DEBUG'                   = 'true'
    'WP_DEBUG_LOG'               = 'true'
    'WP_DEBUG_DISPLAY'           = 'false'
    'SCRIPT_DEBUG'               = 'true'
    'WP_ENVIRONMENT_TYPE'        = "'development'"
    'WP_DEVELOPMENT_MODE'        = "'theme'"
    'DISALLOW_FILE_EDIT'         = 'true'
    'AUTOMATIC_UPDATER_DISABLED' = 'true'
  }
  foreach ($k in $devConsts.Keys) {
    Invoke-Wp '--path=.' 'config' 'set' $k $devConsts[$k] '--raw' '--type=constant'
  }
  Pop-Location
  Write-Ok 'wp-config.php created with dev constants.'
} else {
  Write-Ok 'wp-config.php already present.'
}

# ---------- WP install ----------
Push-Location $SiteRoot
$installed = & $script:WpBin '--path=.' 'core' 'is-installed' 2>&1
if ($LASTEXITCODE -ne 0) {
  Write-Step "Installing WordPress (admin: $AdminUser)"
  Invoke-Wp '--path=.' 'core' 'install' `
    "--url=$SiteUrl" `
    '--title=Voyager Demo - local dev' `
    "--admin_user=$AdminUser" `
    "--admin_password=$AdminPass" `
    "--admin_email=$AdminEmail" `
    '--skip-email'
  Write-Ok "Logged in at $SiteUrl/wp-admin  ($AdminUser / $AdminPass)"
} else {
  Write-Ok 'WordPress already installed.'
}
Pop-Location

# ---------- clone Voyager repos ----------
function Clone-Or-Pull {
  param($Org, $Repo, $TargetDir)
  if (Test-Path (Join-Path $TargetDir '.git')) {
    Write-Info "  $Repo already cloned - pulling latest"
    Push-Location $TargetDir
    git pull --ff-only 2>&1 | Out-Null
    Pop-Location
  } else {
    Write-Info "  Cloning $Org/$Repo -> $TargetDir"
    & $ghBin repo clone "$Org/$Repo" $TargetDir 2>&1 | Out-Null
    if ($LASTEXITCODE -ne 0) { Die "Failed to clone $Org/$Repo. Check 'gh auth status' and repo access." }
  }
}

Write-Step 'Cloning Voyager parent theme'
Clone-Or-Pull -Org 'voyager-marketing' -Repo 'voyager-block-theme' -TargetDir $ParentDir
Write-Ok 'voyager-block-theme ready.'

# Parent theme ships SCSS + webpack -> public/. Without a build, front-end
# CSS/JS won't load.
$pkgJson   = Join-Path $ParentDir 'package.json'
$publicDir = Join-Path $ParentDir 'public'
if (Test-Path $pkgJson) {
  $node = (Get-Command node -ErrorAction SilentlyContinue).Source
  if (-not $node) {
    $node = Get-ChildItem -Path "$LaragonRoot\bin\nodejs" -Recurse -Filter 'node.exe' -ErrorAction SilentlyContinue | Select-Object -First 1 -ExpandProperty FullName
  }
  if (-not $node) {
    Write-Warn 'Node.js not found (PATH or Laragon). Skipping parent theme build.'
    Write-Warn 'Front-end CSS/JS may be missing. Install Node 18+ and run `npm install && npm run build` in the parent theme dir.'
  } else {
    $nodeDir  = Split-Path $node
    $env:PATH = "$nodeDir;$env:PATH"
    $needBuild = -not (Test-Path $publicDir) -or `
                 ((Get-Item $pkgJson).LastWriteTime -gt (Get-Item $publicDir).LastWriteTime)
    if ($needBuild) {
      Write-Step 'Building parent theme (npm install + npm run build)'
      Push-Location $ParentDir
      if (-not (Test-Path (Join-Path $ParentDir 'node_modules'))) {
        Write-Info '  npm install (first run, ~1-2 min)...'
        npm install --no-audit --no-fund 2>&1 | Out-Null
        if ($LASTEXITCODE -ne 0) { Pop-Location; Die 'npm install failed in parent theme.' }
      }
      Write-Info '  npm run build...'
      npm run build 2>&1 | Out-Null
      if ($LASTEXITCODE -ne 0) { Pop-Location; Die 'npm run build failed in parent theme.' }
      Pop-Location
      Write-Ok 'Parent theme assets built.'
    } else {
      Write-Ok 'Parent theme already built (public/ up to date).'
    }
  }
}

if (-not $SkipPlugins) {
  Write-Step 'Cloning Voyager plugin trio (core, blocks, orbit)'
  Clone-Or-Pull -Org 'voyager-marketing' -Repo 'voyager-core'   -TargetDir (Join-Path $PluginsDir 'voyager-core')
  Clone-Or-Pull -Org 'voyager-marketing' -Repo 'voyager-blocks' -TargetDir (Join-Path $PluginsDir 'voyager-blocks')
  Clone-Or-Pull -Org 'voyager-marketing' -Repo 'voyager-orbit'  -TargetDir (Join-Path $PluginsDir 'voyager-orbit')
  Write-Ok 'Voyager plugins cloned.'

  # Extra GitHub plugins staging uses. Format:
  # @{ Org='org-name'; Repo='repo-name'; Slug='wp-folder-name' } (Slug defaults to Repo)
  $extraGithubPlugins = @(
    # The demo site's AI stack (WP AI Client, AI Provider for Anthropic,
    # Abilities API, MCP Adapter) — add entries here once the exact repos
    # staging uses are confirmed.
  )
  foreach ($p in $extraGithubPlugins) {
    $slug = if ($p.Slug) { $p.Slug } else { $p.Repo }
    Write-Step "Cloning extra GitHub plugin: $($p.Org)/$($p.Repo)"
    Clone-Or-Pull -Org $p.Org -Repo $p.Repo -TargetDir (Join-Path $PluginsDir $slug)
    Write-Ok "$slug ready."
  }

  # WP.org plugins staging uses. Installed, not activated (active state flows
  # in via DB sync from staging).
  $wpOrgPlugins = @(
    'seo-by-rank-math'
  )
  if ($wpOrgPlugins.Count -gt 0) {
    Push-Location $SiteRoot
    foreach ($slug in $wpOrgPlugins) {
      if (Test-Path (Join-Path $PluginsDir $slug)) {
        Write-Ok "WP.org plugin already installed: $slug"
      } else {
        Write-Step "Installing WP.org plugin: $slug"
        Invoke-Wp '--path=.' 'plugin' 'install' $slug
        Write-Ok "$slug installed."
      }
    }
    Pop-Location
  }
} else {
  Write-Warn 'Skipping plugin install (-SkipPlugins).'
}

# ---------- composer install for anything shipping composer.json ----------
# voyager-orbit commits composer.json but gitignores vendor/; activation
# fatals without composer install.
$composerCmd  = $null
$composerPhar = Get-ChildItem -Path "$LaragonRoot\bin\composer" -Recurse -Filter 'composer.phar' -ErrorAction SilentlyContinue | Select-Object -First 1 -ExpandProperty FullName
if ($composerPhar) {
  $composerCmd = @{ Type = 'phar'; Path = $composerPhar }
} elseif ($onPath = (Get-Command composer -ErrorAction SilentlyContinue).Source) {
  $composerCmd = @{ Type = 'bin'; Path = $onPath }
} else {
  $localPhar = Join-Path $RepoRoot 'scripts\composer.phar'
  if (-not (Test-Path $localPhar)) {
    Write-Info "  Downloading composer.phar -> $localPhar"
    Invoke-WebRequest 'https://getcomposer.org/download/latest-stable/composer.phar' -OutFile $localPhar
  }
  $composerCmd = @{ Type = 'phar'; Path = $localPhar }
}
Write-Info "  composer: $($composerCmd.Path)"

function Invoke-Composer {
  param([string]$Dir)
  Push-Location $Dir
  if ($script:composerCmd.Type -eq 'phar') {
    & $script:phpBin $script:composerCmd.Path 'install' '--no-interaction' '--prefer-dist' 2>&1 | ForEach-Object { Write-Host "    $_" }
  } else {
    & $script:composerCmd.Path 'install' '--no-interaction' '--prefer-dist' 2>&1 | ForEach-Object { Write-Host "    $_" }
  }
  $code = $LASTEXITCODE
  Pop-Location
  if ($code -ne 0) { Die "composer install failed in $Dir" }
}

$script:phpBin      = $phpBin
$script:composerCmd = $composerCmd

$composerTargets = @($ParentDir)
if (-not $SkipPlugins) {
  $composerTargets += @(
    (Join-Path $PluginsDir 'voyager-core')
    (Join-Path $PluginsDir 'voyager-blocks')
    (Join-Path $PluginsDir 'voyager-orbit')
  )
}
foreach ($t in $composerTargets) {
  $cj = Join-Path $t 'composer.json'
  if (Test-Path $cj) {
    $name = Split-Path -Leaf $t
    # composer install is the only reliable freshness check (vendor/ can be
    # partially present); it's fast when genuinely current.
    Write-Step "composer install in $name"
    Invoke-Composer $t
    Write-Ok "$name vendor/ ready"
  }
}

# ---------- junction child theme from repo ----------
# mklink /J (directory junction) instead of /D (symlink): junctions work
# without elevation and behave identically for local same-machine paths.
Write-Step "Linking child theme: $ChildLink -> $RepoRoot"
if (Test-Path $ChildLink) {
  $item = Get-Item $ChildLink -Force
  if ($item.LinkType -in @('Junction','SymbolicLink')) {
    Write-Ok 'Link already in place.'
  } else {
    Die "$ChildLink exists but is NOT a junction/symlink. Remove it manually or pass -Force."
  }
} else {
  cmd /c "mklink /J `"$ChildLink`" `"$RepoRoot`"" | Out-Null
  if ($LASTEXITCODE -ne 0) { Die 'mklink /J failed.' }
  Write-Ok 'Junction created.'
}

# ---------- activate theme + plugins ----------
Push-Location $SiteRoot

Write-Step 'Activating child theme'
Invoke-Wp '--path=.' 'theme' 'activate' $ThemeSlug
Write-Ok "$ThemeSlug active (voyager-block-theme as parent)."

if (-not $SkipPlugins) {
  Write-Step 'Activating Voyager plugins'
  Invoke-Wp '--path=.' 'plugin' 'activate' 'voyager-core' 'voyager-blocks' 'voyager-orbit'
  Write-Ok 'Plugins active.'
}

Write-Step 'Setting dev-friendly options'
Invoke-Wp '--path=.' 'option' 'update' 'blogname' 'Voyager Demo - local dev'
Invoke-Wp '--path=.' 'option' 'update' 'blogdescription' 'Public showcase site for the Voyager plugin suite. Mirror of demo.voyagermark.com.'
Invoke-Wp '--path=.' 'option' 'update' 'default_comment_status' 'closed'
Invoke-Wp '--path=.' 'option' 'update' 'default_ping_status' 'closed'
Invoke-Wp '--path=.' 'rewrite' 'structure' '/%postname%/' '--hard'
Write-Ok 'Options set.'

Pop-Location

# ---------- summary ----------
Write-Host @"

================================================================================
  Voyager Demo - local dev READY
================================================================================

  Site URL:     $SiteUrl
  Admin:        $SiteUrl/wp-admin  ($AdminUser / $AdminPass)
  Site root:    $SiteRoot
  Child theme:  $ChildLink  -> $RepoRoot
  Parent:       $ParentDir
  Plugins:      $(if ($SkipPlugins) { '(skipped)' } else { 'voyager-core, voyager-blocks, voyager-orbit (+ seo-by-rank-math installed)' })

  Next:
    1. Restart Apache (Laragon GUI or httpd -k restart) to pick up the vhost.
    2. Ensure hosts has: 127.0.0.1  $SiteSlug.test
    3. Visit $SiteUrl/wp-admin/site-editor.php
    4. Edit patterns in $RepoRoot\patterns\ - changes appear on next page load.

  Reset everything:
    .\bootstrap-laragon.ps1 -Force

================================================================================
"@ -ForegroundColor Green
