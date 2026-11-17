<?php
/**
 * Voyager Demo theme functions.
 *
 * Sibling child theme to voyagermark. Where voyagermark is the agency
 * marketing site, voyager-demo is the public showcase that dogfoods the
 * Voyager plugin suite — every binding source, AI ability, and pattern
 * we ship is exercised here so prospects can see the platform live.
 *
 * @package VoyagerDemo
 * @since   0.1.0
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

define('VOYAGER_DEMO_VERSION', '0.1.0');
define('VOYAGER_DEMO_PATH', get_stylesheet_directory());
define('VOYAGER_DEMO_URI', get_stylesheet_directory_uri());
define('VOYAGER_DEMO_DS_PATH', VOYAGER_DEMO_PATH . '/design-system');

/*
 * Voyager Design System — single source of truth for brand tokens.
 * The design-system/ git submodule (pinned to a DS release) ships
 * tokens.css + theme.json + tokens.json; sync-tokens.php merges those
 * into this theme's theme.json. Mirrors voyagermark's consumption path.
 */
if (is_readable(VOYAGER_DEMO_DS_PATH . '/scripts/sync-tokens.php')) {
    require_once VOYAGER_DEMO_DS_PATH . '/scripts/sync-tokens.php';
}

/**
 * Design-system version for cache-busting; theme version when the
 * submodule is absent (clone without `git submodule update`).
 */
function voyager_demo_ds_version(): string {
    if (function_exists('voyager_ds_version')) {
        $version = voyager_ds_version();
        if ('0.0.0' !== $version) {
            return $version;
        }
    }
    return VOYAGER_DEMO_VERSION;
}

/**
 * Merge DS tokens into this theme's theme.json. Idempotent.
 */
function voyager_demo_sync_ds_tokens(): void {
    if (function_exists('voyager_sync_tokens')) {
        voyager_sync_tokens(VOYAGER_DEMO_PATH . '/theme.json');
    }
}
add_action('after_switch_theme', 'voyager_demo_sync_ds_tokens');

/**
 * Enqueue parent + child styles.
 */
function voyager_demo_enqueue_styles(): void {
    // DS tokens first, so every later stylesheet can reference the
    // brand custom properties (and @font-face lands once, from the DS).
    $ds_deps   = [];
    $ds_tokens = VOYAGER_DEMO_DS_PATH . '/tokens.css';
    if (file_exists($ds_tokens)) {
        wp_enqueue_style(
            'voyager-design-system-tokens',
            VOYAGER_DEMO_URI . '/design-system/tokens.css',
            [],
            voyager_demo_ds_version()
        );
        $ds_deps = ['voyager-design-system-tokens'];
    }

    wp_enqueue_style(
        'voyager-block-theme-style',
        get_template_directory_uri() . '/style.css',
        $ds_deps,
        wp_get_theme()->parent()?->get('Version') ?: '1.0.0'
    );

    wp_enqueue_style(
        'voyager-demo-style',
        get_stylesheet_uri(),
        ['voyager-block-theme-style'],
        VOYAGER_DEMO_VERSION
    );

    // Versioned by file time: VOYAGER_DEMO_VERSION does not move between
    // deploys, so a changed stylesheet would otherwise be served from cache.
    $custom_css = VOYAGER_DEMO_PATH . '/assets/css/custom.css';
    if (file_exists($custom_css)) {
        wp_enqueue_style(
            'voyager-demo-custom',
            VOYAGER_DEMO_URI . '/assets/css/custom.css',
            ['voyager-demo-style'],
            (string) filemtime($custom_css)
        );
    }
}
add_action('wp_enqueue_scripts', 'voyager_demo_enqueue_styles');

/**
 * Preload the display face. Headings above the fold set in Space Grotesk
 * (theme.json `display`), so its latin subset is the one worth fetching
 * early. The href has to match the URL core builds from the theme.json
 * `file:./` src, or the browser fetches the font twice; both go through
 * get_theme_file_uri().
 *
 * The woff2 files in assets/fonts/ are copies of design-system/assets/fonts/
 * at the pinned DS tag. The deploy does not ship the submodule.
 */
function voyager_demo_preload_display_font(array $resources): array {
    $resources[] = [
        'href'        => get_theme_file_uri('assets/fonts/space-grotesk/SpaceGrotesk-latin.woff2'),
        'as'          => 'font',
        'type'        => 'font/woff2',
        'crossorigin' => 'anonymous',
    ];
    return $resources;
}
add_filter('wp_preload_resources', 'voyager_demo_preload_display_font');

/**
 * Drop the parent's ClashDisplay preload. No style on this site uses Clash
 * Display, so the parent's hook only spends bandwidth ahead of the real faces.
 * Runs on after_setup_theme because the parent's functions.php loads after
 * this one.
 */
function voyager_demo_drop_parent_font_preload(): void {
    remove_action('wp_head', 'Voyager\Performance\preload_primary_font', 1);
}
add_action('after_setup_theme', 'voyager_demo_drop_parent_font_preload');

/**
 * Register block pattern category for showcase patterns.
 */
function voyager_demo_register_pattern_categories(): void {
    register_block_pattern_category('voyager-demo', [
        'label' => __('Voyager Showcase', 'voyager-demo'),
    ]);
}
add_action('init', 'voyager_demo_register_pattern_categories');

/**
 * Pulse binding callback — composite metrics from across the Voyager ecosystem.
 *
 * Aggregates real data from CPTs, content pipeline, and site health into
 * a single binding source. All values are transient-cached for 2 hours.
 *
 * Supported keys:
 *   service_area_count    — published service area pages
 *   industry_page_count   — published industry pages
 *   neighborhood_count    — published neighborhood pages
 *   total_pseo_pages      — sum of all pSEO CPTs
 *   cities_covered        — unique cities across service areas
 *   blog_post_count       — published blog posts
 *   total_content         — all published content pieces
 *   content_this_month    — posts published in the current month
 *   newest_post_date      — human-readable date of most recent publish
 *   avg_posts_per_week    — publishing velocity over last 90 days
 *   pattern_count         — registered block patterns (Voyager + theme)
 *   block_count           — registered Voyager blocks
 *   uptime_days           — days since site launch (2024-01-01)
 *   freshness_score       — percentage of content updated in last 90 days
 *   coverage_label        — human-readable coverage summary
 */
function voyager_demo_pulse_binding_callback(array $source_args): string {
    $key = $source_args['key'] ?? '';
    if (empty($key)) {
        return '';
    }

    $cache_key = 'voyager_demo_pulse_data';
    $data      = get_transient($cache_key);

    if ($data === false) {
        $data = voyager_demo_compute_pulse_data();
        set_transient($cache_key, $data, 2 * HOUR_IN_SECONDS);
    }

    return esc_html((string) ($data[$key] ?? ''));
}

/**
 * Register the voyager/pulse binding source.
 *
 * Theme owns this binding (showcase-specific computation). Defensive check
 * skips registration if another extension already did it — keeps the deploy
 * window between this theme and voyager-blocks <2.3 quiet.
 */
function voyager_demo_register_pulse_binding(): void {
    if (!function_exists('register_block_bindings_source')) {
        return;
    }
    if (class_exists('WP_Block_Bindings_Registry')
        && \WP_Block_Bindings_Registry::get_instance()->is_registered('voyager/pulse')) {
        return;
    }
    register_block_bindings_source('voyager/pulse', [
        'label'              => __('Voyager Pulse', 'voyager-demo'),
        'get_value_callback' => 'voyager_demo_pulse_binding_callback',
    ]);
}
add_action('init', 'voyager_demo_register_pulse_binding', 30);

/**
 * Compute all Pulse metrics.
 *
 * @return array<string, string|int>
 */
function voyager_demo_compute_pulse_data(): array {
    global $wpdb;

    $sa_count = (int) wp_count_posts('service_area')->publish;
    $ip_count = post_type_exists('industry_page')
        ? (int) wp_count_posts('industry_page')->publish
        : 0;
    $nb_count = post_type_exists('neighborhood')
        ? (int) wp_count_posts('neighborhood')->publish
        : 0;
    $blog_count = (int) wp_count_posts('post')->publish;
    $page_count = (int) wp_count_posts('page')->publish;
    $showcase_count = post_type_exists('vd_showcase')
        ? (int) wp_count_posts('vd_showcase')->publish
        : 0;

    $total_pseo    = $sa_count + $ip_count + $nb_count;
    $total_content = $total_pseo + $blog_count + $page_count + $showcase_count;

    $cities = 0;
    if ($sa_count > 0) {
        $cities = (int) $wpdb->get_var(
            $wpdb->prepare(
                "SELECT COUNT(DISTINCT pm.meta_value)
                 FROM {$wpdb->postmeta} pm
                 INNER JOIN {$wpdb->posts} p ON p.ID = pm.post_id
                 WHERE pm.meta_key = %s
                   AND p.post_type = %s
                   AND p.post_status = %s
                   AND pm.meta_value != ''",
                'sa_city',
                'service_area',
                'publish'
            )
        );
    }

    $month_start   = gmdate('Y-m-01 00:00:00');
    $ninety_ago    = gmdate('Y-m-d H:i:s', strtotime('-90 days'));
    $content_types = "'post','page','vd_showcase','service_area','industry_page','neighborhood'";

    // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared -- static string
    $this_month = (int) $wpdb->get_var(
        "SELECT COUNT(*) FROM {$wpdb->posts}
         WHERE post_type IN ({$content_types})
           AND post_status = 'publish'
           AND post_date >= '{$month_start}'"
    );

    // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
    $last_90_count = (int) $wpdb->get_var(
        "SELECT COUNT(*) FROM {$wpdb->posts}
         WHERE post_type IN ({$content_types})
           AND post_status = 'publish'
           AND post_date >= '{$ninety_ago}'"
    );

    $weeks_in_90  = 90 / 7;
    $avg_per_week = $weeks_in_90 > 0 ? round($last_90_count / $weeks_in_90, 1) : 0;

    // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
    $newest_date = $wpdb->get_var(
        "SELECT post_date FROM {$wpdb->posts}
         WHERE post_type IN ({$content_types})
           AND post_status = 'publish'
         ORDER BY post_date DESC LIMIT 1"
    );
    $newest_label = $newest_date
        ? human_time_diff(strtotime($newest_date), time()) . ' ago'
        : 'N/A';

    if ($total_content > 0) {
        // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
        $fresh_count = (int) $wpdb->get_var(
            "SELECT COUNT(*) FROM {$wpdb->posts}
             WHERE post_type IN ({$content_types})
               AND post_status = 'publish'
               AND post_modified >= '{$ninety_ago}'"
        );
        $freshness = round(($fresh_count / $total_content) * 100);
    } else {
        $freshness = 0;
    }

    $pattern_count = 0;
    if (class_exists('WP_Block_Patterns_Registry')) {
        $pattern_count = count(\WP_Block_Patterns_Registry::get_instance()->get_all_registered());
    }

    $block_count = 0;
    if (class_exists('WP_Block_Type_Registry')) {
        $all_blocks  = \WP_Block_Type_Registry::get_instance()->get_all_registered();
        $block_count = count(array_filter(
            $all_blocks,
            fn ($b) => str_starts_with($b->name, 'voyager/')
        ));
    }

    $ability_count = 0;
    if (function_exists('wp_get_abilities')) {
        $ability_count = count(wp_get_abilities());
    }

    $binding_source_count = 0;
    if (class_exists('WP_Block_Bindings_Registry')) {
        $binding_source_count = count(\WP_Block_Bindings_Registry::get_instance()->get_all_registered());
    }

    $launch = new \DateTime('2024-01-01', new \DateTimeZone('UTC'));
    $now    = new \DateTime('now', new \DateTimeZone('UTC'));
    $uptime = (int) $now->diff($launch)->days;

    $coverage = match (true) {
        $cities >= 15 => "{$cities} cities, {$total_pseo} landing pages",
        $cities >= 5  => "{$cities} cities and growing",
        $cities >= 1  => "Launching in {$cities} " . ($cities === 1 ? 'city' : 'cities'),
        default       => 'Coming soon',
    };

    return [
        'service_area_count'  => (string) $sa_count,
        'industry_page_count' => (string) $ip_count,
        'neighborhood_count'  => (string) $nb_count,
        'total_pseo_pages'    => (string) $total_pseo,
        'cities_covered'      => (string) $cities,
        'blog_post_count'     => (string) $blog_count,
        'total_content'       => (string) $total_content,
        'content_this_month'  => (string) $this_month,
        'newest_post_date'    => $newest_label,
        'avg_posts_per_week'  => (string) $avg_per_week,
        'pattern_count'       => (string) $pattern_count,
        'block_count'         => (string) $block_count,
        'ability_count'       => (string) $ability_count,
        'binding_source_count' => (string) $binding_source_count,
        'uptime_days'         => (string) $uptime,
        'freshness_score'     => $freshness . '%',
        'coverage_label'      => $coverage,
    ];
}

/**
 * Register the showcase CPT — navigable demo pages.
 *
 * Each "showcase" is a stand-alone page that exercises one slice of the
 * Voyager suite (e.g. Bindings, AI agents, Pattern library, Pulse). Stored
 * in their own CPT so the demo navigation can list them cleanly without
 * mingling with regular Pages.
 */
function voyager_demo_register_showcase_cpt(): void {
    register_post_type('vd_showcase', [
        'labels' => [
            'name'               => __('Showcases', 'voyager-demo'),
            'singular_name'      => __('Showcase', 'voyager-demo'),
            'menu_name'          => __('Showcases', 'voyager-demo'),
            'add_new_item'       => __('Add New Showcase', 'voyager-demo'),
            'edit_item'          => __('Edit Showcase', 'voyager-demo'),
            'view_item'          => __('View Showcase', 'voyager-demo'),
            'all_items'          => __('All Showcases', 'voyager-demo'),
        ],
        'public'        => true,
        'show_in_rest'  => true,
        'has_archive'   => 'showcases',
        'menu_icon'     => 'dashicons-screenoptions',
        'menu_position' => 22,
        'rewrite'       => ['slug' => 'showcase', 'with_front' => false],
        'supports'      => ['title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'],
        'template'      => [
            ['core/pattern', ['slug' => 'voyager-demo/showcase-default']],
        ],
    ]);
}
add_action('init', 'voyager_demo_register_showcase_cpt');

// The only archive this theme exposes is /showcases/ — "Archives:" is noise there.
add_filter('get_the_archive_title_prefix', '__return_empty_string');

// /ecosystem-value/ became /why-voyager/ (audit 2026-08-05). Core's old-slug
// redirect skips hierarchical post types, so the 301 lives here.
add_action('template_redirect', function () {
    if (is_404() && str_starts_with((string) ($_SERVER['REQUEST_URI'] ?? ''), '/ecosystem-value')) {
        wp_safe_redirect(home_url('/why-voyager/'), 301);
        exit;
    }
});

/*
 * Pages held out of search until launch. Taking a slug off this list is the
 * launch step that lets the page index. /open-blocks/ waits on copy review
 * (VOY-1766). The hold lives here because RankMath's per-post robots setting
 * cannot be written through the Voyager MCP tools, and demo has no WP-CLI.
 *
 * Each entry is a page path: the slug, with its parents' slugs in front for
 * a child page. The section gallery, /open-blocks/sections/, waits with its
 * parent. is_page() matches a path with a slash through get_page_by_path(),
 * and a slug alone through post_name (WP_Query::is_page() in
 * wp-includes/class-wp-query.php), so both forms work in the robots filters.
 */
const VOYAGER_DEMO_HELD_PAGES = ['open-blocks', 'open-blocks/sections'];

/**
 * Noindex a held page in RankMath's robots tag.
 *
 * @param array<string, string> $robots RankMath robots directives.
 * @return array<string, string>
 */
function voyager_demo_noindex_held_pages(array $robots): array {
    if (is_page(VOYAGER_DEMO_HELD_PAGES)) {
        $robots['index']  = 'noindex';
        $robots['follow'] = 'follow';
    }

    return $robots;
}
add_filter('rank_math/frontend/robots', 'voyager_demo_noindex_held_pages');

/**
 * The same hold in core's robots tag, for when RankMath is not printing one.
 *
 * @param array<string, bool|string> $robots Core robots directives.
 * @return array<string, bool|string>
 */
function voyager_demo_wp_robots_held_pages(array $robots): array {
    return is_page(VOYAGER_DEMO_HELD_PAGES) ? wp_robots_no_robots($robots) : $robots;
}
add_filter('wp_robots', 'voyager_demo_wp_robots_held_pages');

/**
 * Keep a held page out of the sitemap.
 *
 * RankMath builds the sitemap from its own per-post setting and never sees
 * the frontend filter, so a held page would be submitted while it refuses
 * indexing (voyagermark hit this on VOY-280).
 *
 * The list holds page paths, so a page is matched on its path. Only a page
 * whose own slug ends a held path pays for the lookup, which keeps a sitemap
 * of thousands of pages to the few rows that share a held slug.
 *
 * @param array<string, mixed>|false $url  The sitemap entry.
 * @param string                     $type 'post', 'term' or 'user'.
 * @param object                     $item The row the entry was built from.
 * @return array<string, mixed>|false
 */
function voyager_demo_sitemap_skip_held_pages($url, $type, $item) {
    if ('post' !== $type || ! is_object($item) || 'page' !== ($item->post_type ?? '')) {
        return $url;
    }

    $id   = (int) ($item->ID ?? 0);
    $slug = (string) ($item->post_name ?? get_post_field('post_name', $id));

    if ($id < 1 || ! in_array($slug, array_map('basename', VOYAGER_DEMO_HELD_PAGES), true)) {
        return $url;
    }

    return in_array(get_page_uri($id), VOYAGER_DEMO_HELD_PAGES, true) ? false : $url;
}
add_filter('rank_math/sitemap/entry', 'voyager_demo_sitemap_skip_held_pages', 10, 3);

/**
 * Load showcase seed definitions from seeds/showcases/.
 *
 * Each seed file returns an array with slug, title, excerpt, content,
 * and menu_order. Files sort alphabetically; display order comes from
 * menu_order, not filename.
 *
 * @return array<int, array<string, mixed>>
 */
function voyager_demo_get_showcase_seeds(): array {
    $files = array_merge(
        glob(VOYAGER_DEMO_PATH . '/seeds/showcases/*.php') ?: [],
        glob(VOYAGER_DEMO_PATH . '/seeds/pages/*.php') ?: []
    );
    sort($files);

    $seeds = [];
    foreach ($files as $file) {
        $seed = include $file;
        if (is_array($seed) && ! empty($seed['slug']) && ! empty($seed['title'])) {
            $seeds[] = $seed;
        }
    }

    return $seeds;
}

/**
 * Upsert one showcase entry from a seed definition.
 *
 * Keyed on post_name — re-running updates in place, never duplicates.
 *
 * @param array<string, mixed> $seed Seed definition.
 * @return string|\WP_Error 'created', 'updated', or the WP_Error from the write.
 */
function voyager_demo_seed_showcase(array $seed) {
    $post_type = (string) ($seed['post_type'] ?? 'vd_showcase');

    // A child page names its parent's path. Seeds load in file name order,
    // so a parent's seed file sorts first (open-blocks.php before
    // open-blocks-sections.php).
    $parent = 0;
    if (! empty($seed['parent'])) {
        $parent_post = get_page_by_path((string) $seed['parent'], OBJECT, $post_type);
        if (! $parent_post) {
            return new \WP_Error('voyager_demo_seed_parent', "Parent {$seed['parent']} does not exist yet.");
        }
        $parent = (int) $parent_post->ID;
    }

    $existing = get_posts([
        'post_type'      => $post_type,
        'name'           => (string) $seed['slug'],
        'post_parent'    => $parent,
        'post_status'    => 'any',
        'posts_per_page' => 1,
        'fields'         => 'ids',
    ]);

    $postarr = [
        'post_type'    => $post_type,
        'post_name'    => (string) $seed['slug'],
        'post_parent'  => $parent,
        'post_title'   => (string) $seed['title'],
        'post_excerpt' => (string) ($seed['excerpt'] ?? ''),
        'post_content' => (string) ($seed['content'] ?? ''),
        'post_status'  => 'publish',
        'menu_order'   => (int) ($seed['menu_order'] ?? 0),
    ];

    if ($existing) {
        $postarr['ID'] = (int) $existing[0];
        $result        = wp_update_post(wp_slash($postarr), true);

        return is_wp_error($result) ? $result : 'updated';
    }

    $result = wp_insert_post(wp_slash($postarr), true);

    return is_wp_error($result) ? $result : 'created';
}

/**
 * Whether a binding source is live in the registry at render time.
 *
 * Patterns branch on this to swap live bound markup for an honest
 * "not connected on this install" treatment instead of a silent static
 * fallback. The launch gate (wp voyager-demo check-bindings) treats
 * files calling this helper as degradation-aware.
 */
function voyager_demo_binding_live(string $source): bool {
    return class_exists('WP_Block_Bindings_Registry')
        && \WP_Block_Bindings_Registry::get_instance()->is_registered($source);
}

/**
 * Serialized block markup for the /abilities/ registry listing.
 *
 * Enumerates every ability registered through the core Abilities API
 * (WP 6.9+), grouped by category. The transient stores the rendered
 * markup keyed to a hash of the registered ability names, so any
 * registration change invalidates it on the next request without
 * waiting for the TTL; plugin (de)activation purges it outright.
 *
 * @return string Serialized block markup, or a notice if the API is absent.
 */
function voyager_demo_abilities_markup(): string {
    if (! function_exists('wp_get_abilities')) {
        return '<!-- wp:paragraph --><p>' . esc_html__('The Abilities API is not available on this install (requires WordPress 6.9+).', 'voyager-demo') . '</p><!-- /wp:paragraph -->';
    }

    $abilities = wp_get_abilities();
    $hash      = md5(implode('|', array_keys($abilities)));
    $cached    = get_transient('voyager_demo_abilities_markup');

    if (is_array($cached) && ($cached['hash'] ?? '') === $hash) {
        return (string) $cached['html'];
    }

    $by_category = [];
    foreach ($abilities as $ability) {
        $by_category[$ability->get_category()][] = $ability;
    }
    ksort($by_category);

    $category_labels = [];
    if (function_exists('wp_get_ability_categories')) {
        foreach (wp_get_ability_categories() as $slug => $category) {
            if (is_object($category) && method_exists($category, 'get_label')) {
                $category_labels[is_string($slug) ? $slug : $category->get_slug()] = $category->get_label();
            }
        }
    }

    $html = '<!-- wp:heading {"level":1,"fontSize":"3xl","style":{"typography":{"letterSpacing":"-0.03em"}}} --><h1 class="wp-block-heading has-3-xl-font-size" style="letter-spacing:-0.03em">'
        . esc_html__('The ability registry, live', 'voyager-demo')
        . '</h1><!-- /wp:heading -->';

    $html .= '<!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} --><p class="has-fg-4-color has-text-color has-sm-font-size">'
        . sprintf(
            /* translators: 1: ability count, 2: category count */
            esc_html__('%1$d abilities in %2$d categories, enumerated live from this site\'s registry on every change. Nothing on this page is hand-maintained.', 'voyager-demo'),
            count($abilities),
            count($by_category)
        )
        . '</p><!-- /wp:paragraph -->';

    foreach ($by_category as $category => $items) {
        $label = $category_labels[$category] ?? ucwords(str_replace('-', ' ', $category));

        $html .= '<!-- wp:heading {"level":2,"fontSize":"2xl"} --><h2 class="wp-block-heading has-2-xl-font-size">'
            . esc_html($label)
            . ' <code>' . esc_html($category) . '</code></h2><!-- /wp:heading -->';

        foreach ($items as $ability) {
            $annotations = (array) ($ability->get_meta_item('annotations') ?? []);
            $badges      = [];
            if (! empty($annotations['readonly'])) {
                $badges[] = 'read-only';
            } elseif (array_key_exists('readonly', $annotations)) {
                $badges[] = 'writes';
            }
            if (! empty($annotations['destructive'])) {
                $badges[] = 'destructive';
            }
            if (! empty($annotations['idempotent'])) {
                $badges[] = 'idempotent';
            }
            $mcp = (array) ($ability->get_meta_item('mcp') ?? []);
            if (! empty($mcp['public'])) {
                $badges[] = 'MCP public';
            }
            if (! empty($ability->get_meta_item('experimental'))) {
                $badges[] = 'experimental';
            }

            $html .= '<!-- wp:heading {"level":3,"fontSize":"lg"} --><h3 class="wp-block-heading has-lg-font-size"><code>'
                . esc_html($ability->get_name()) . '</code> — ' . esc_html($ability->get_label())
                . '</h3><!-- /wp:heading -->';

            if ($badges) {
                $html .= '<!-- wp:paragraph {"textColor":"fg-5","fontSize":"label"} --><p class="has-fg-5-color has-text-color has-label-font-size">'
                    . esc_html(implode(' · ', $badges))
                    . '</p><!-- /wp:paragraph -->';
            }

            $html .= '<!-- wp:paragraph {"textColor":"fg-3"} --><p class="has-fg-3-color has-text-color">'
                . esc_html($ability->get_description())
                . '</p><!-- /wp:paragraph -->';

            foreach (['input' => $ability->get_input_schema(), 'output' => $ability->get_output_schema()] as $which => $schema) {
                if (empty($schema)) {
                    continue;
                }
                $json  = wp_json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
                $html .= '<!-- wp:details --><details class="wp-block-details"><summary>'
                    . esc_html(sprintf('%s schema', ucfirst($which)))
                    . '</summary><!-- wp:code --><pre class="wp-block-code"><code>'
                    . esc_html((string) $json)
                    . '</code></pre><!-- /wp:code --></details><!-- /wp:details -->';
            }
        }
    }

    set_transient('voyager_demo_abilities_markup', ['hash' => $hash, 'html' => $html], 15 * MINUTE_IN_SECONDS);

    return $html;
}

/**
 * Purge the abilities listing cache when the registry can change shape.
 */
function voyager_demo_purge_abilities_cache(): void {
    delete_transient('voyager_demo_abilities_markup');
}
add_action('activated_plugin', 'voyager_demo_purge_abilities_cache');
add_action('deactivated_plugin', 'voyager_demo_purge_abilities_cache');
add_action('switch_theme', 'voyager_demo_purge_abilities_cache');

/*
 * =========================================================================
 * MCP playground (TK-2162)
 *
 * A visitor picks a whitelisted read-only tool, fires it, and reads the JSON
 * that comes back. The browser only ever talks to this theme's own REST
 * route; the route decides whether to answer from a recorded fixture or to
 * proxy the demo-scoped public endpoint. That indirection is the point — the
 * endpoint URL and any token it needs stay server-side, so nothing sensitive
 * is ever in the page source, and the fixture-to-live switch is one config
 * value rather than a rewrite.
 * =========================================================================
 */

/**
 * The demo-scoped public MCP endpoint, or '' when it has not shipped yet.
 *
 * This single value decides the page's mode: empty means recorded fixtures,
 * set means live proxying. At launch, define VOYAGER_DEMO_MCP_ENDPOINT in
 * wp-config.php (and VOYAGER_DEMO_MCP_TOKEN if the endpoint wants a bearer
 * token) — no theme change required.
 *
 * Never point this at the private MCP surface. It must be the demo-scoped
 * public endpoint, which enforces its own read-only whitelist.
 */
function voyager_demo_mcp_endpoint(): string {
    $endpoint = defined('VOYAGER_DEMO_MCP_ENDPOINT') ? (string) VOYAGER_DEMO_MCP_ENDPOINT : '';

    /**
     * Filters the demo-scoped public MCP endpoint URL.
     *
     * @param string $endpoint Absolute URL, or '' to serve recorded fixtures.
     */
    $endpoint = (string) apply_filters('voyager_demo_mcp_endpoint', $endpoint);

    return esc_url_raw(trim($endpoint));
}

/**
 * 'live' when an endpoint is configured, 'recorded' otherwise.
 */
function voyager_demo_mcp_mode(): string {
    return '' === voyager_demo_mcp_endpoint() ? 'recorded' : 'live';
}

/**
 * The whitelisted tool catalog, with each recorded payload decoded.
 *
 * @return array<int, array<string, mixed>>
 */
function voyager_demo_mcp_tools(): array {
    static $tools = null;

    if (null !== $tools) {
        return $tools;
    }

    $file  = VOYAGER_DEMO_PATH . '/seeds/mcp-playground/tools.php';
    $tools = is_readable($file) ? (array) include $file : [];

    foreach ($tools as $i => $tool) {
        $decoded = json_decode((string) ($tool['recorded'] ?? ''), true);
        // Keep the entry either way: a malformed fixture must surface as a
        // visible error at call time, not vanish from the picker.
        $tools[$i]['recorded'] = is_array($decoded) ? $decoded : null;
    }

    return $tools;
}

/**
 * One tool by slug, or null when the slug is not whitelisted.
 *
 * @return array<string, mixed>|null
 */
function voyager_demo_mcp_tool(string $slug): ?array {
    foreach (voyager_demo_mcp_tools() as $tool) {
        if (($tool['slug'] ?? '') === $slug) {
            return $tool;
        }
    }

    return null;
}

/**
 * Per-address throttle for the public playground route.
 *
 * Fixed one-minute buckets keyed on a hash of the address — enough to stop a
 * public POST route from being used as a free proxy, cheap enough to run on
 * every call. Not a substitute for the endpoint's own rate limiting.
 */
function voyager_demo_mcp_rate_limit_exceeded(): bool {
    $address = isset($_SERVER['REMOTE_ADDR'])
        ? sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR']))
        : '';

    $bucket = 'voyager_demo_mcp_rl_' . md5($address . '|' . gmdate('Y-m-d H:i'));
    $hits   = (int) get_transient($bucket);

    if ($hits >= 12) {
        return true;
    }

    set_transient($bucket, $hits + 1, 2 * MINUTE_IN_SECONDS);

    return false;
}

/**
 * Register the playground's REST route.
 *
 * Public and unauthenticated by design — the page is for anonymous visitors.
 * What keeps it safe is that the tool slug is the only input, it must match
 * the whitelist exactly, and the arguments are read from the catalog on the
 * server rather than from the request.
 */
function voyager_demo_register_mcp_route(): void {
    register_rest_route('voyager-demo/v1', '/mcp-playground', [
        'methods'             => 'POST',
        'callback'            => 'voyager_demo_mcp_rest_call',
        'permission_callback' => '__return_true',
        'args'                => [
            'tool' => [
                'required'          => true,
                'type'              => 'string',
                'validate_callback' => static fn ($value): bool => is_string($value)
                    && null !== voyager_demo_mcp_tool($value),
            ],
        ],
    ]);
}
add_action('rest_api_init', 'voyager_demo_register_mcp_route');

/**
 * Answer a playground call from the fixture, or proxy it upstream.
 *
 * @return \WP_REST_Response|\WP_Error
 */
function voyager_demo_mcp_rest_call(\WP_REST_Request $request) {
    if (voyager_demo_mcp_rate_limit_exceeded()) {
        return new \WP_Error(
            'voyager_demo_mcp_rate_limited',
            __('Too many calls from this address. Wait a minute and try again.', 'voyager-demo'),
            ['status' => 429]
        );
    }

    $tool = voyager_demo_mcp_tool((string) $request->get_param('tool'));
    if (null === $tool) {
        return new \WP_Error(
            'voyager_demo_mcp_unknown_tool',
            __('That tool is not on the playground whitelist.', 'voyager-demo'),
            ['status' => 400]
        );
    }

    $endpoint = voyager_demo_mcp_endpoint();

    if ('' === $endpoint) {
        if (! is_array($tool['recorded'])) {
            return new \WP_Error(
                'voyager_demo_mcp_missing_fixture',
                __('This tool has no readable recorded response — its fixture JSON is malformed.', 'voyager-demo'),
                ['status' => 500]
            );
        }

        return rest_ensure_response([
            'mode'          => 'recorded',
            'tool'          => $tool['slug'],
            'result'        => $tool['recorded'],
            'upstream_ms'   => null,
            'recorded_from' => (string) ($tool['recorded_from'] ?? ''),
            'recorded_at'   => (string) ($tool['recorded_at'] ?? ''),
        ]);
    }

    $token   = defined('VOYAGER_DEMO_MCP_TOKEN') ? (string) VOYAGER_DEMO_MCP_TOKEN : '';
    $started = microtime(true);

    $response = wp_remote_post($endpoint, [
        'timeout' => 12,
        'headers' => array_filter([
            'Content-Type'  => 'application/json',
            'Accept'        => 'application/json',
            'Authorization' => '' !== $token ? 'Bearer ' . $token : null,
        ]),
        'body'    => wp_json_encode(
            // Omit `arguments` when the tool takes none, so what goes on the
            // wire is byte-identical to the request preview the page renders.
            // Sending an empty PHP array here would also serialise as `[]`
            // rather than `{}`, which is not what the contract describes.
            array_filter(
                [
                    'tool'      => $tool['slug'],
                    'arguments' => (array) ($tool['request']['arguments'] ?? []),
                ],
                static fn ($value): bool => [] !== $value
            )
        ),
    ]);

    $upstream_ms = (int) round((microtime(true) - $started) * 1000);

    if (is_wp_error($response)) {
        /*
         * Deliberately generic. cURL's own message embeds the host and port it
         * failed to reach ("Failed to connect to <host> port <n>"), so passing
         * it through would publish the endpoint to any visitor who can make it
         * fail — the one thing this proxy exists to prevent. The detail goes to
         * the error log instead, where an operator can still get at it.
         */
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('voyager-demo MCP playground upstream failure: ' . $response->get_error_message()); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_error_log
        }

        return new \WP_Error(
            'voyager_demo_mcp_upstream_unreachable',
            __('The demo endpoint did not answer. It may be down or still shipping.', 'voyager-demo'),
            ['status' => 502]
        );
    }

    $code = (int) wp_remote_retrieve_response_code($response);
    $body = json_decode((string) wp_remote_retrieve_body($response), true);

    if ($code < 200 || $code > 299 || ! is_array($body)) {
        return new \WP_Error(
            'voyager_demo_mcp_upstream_error',
            sprintf(
                /* translators: %d: HTTP status code. */
                __('The demo endpoint answered %d with a payload this page could not read.', 'voyager-demo'),
                $code
            ),
            ['status' => 502]
        );
    }

    return rest_ensure_response([
        'mode'          => 'live',
        'tool'          => $tool['slug'],
        'result'        => $body,
        'upstream_ms'   => $upstream_ms,
        'recorded_from' => '',
        'recorded_at'   => '',
    ]);
}

/**
 * Register the playground's Interactivity API view module.
 *
 * Plain ESM importing @wordpress/interactivity through the core import map —
 * no build step, which matters because this theme has no npm pipeline.
 */
function voyager_demo_register_mcp_script_module(): void {
    if (! function_exists('wp_register_script_module')) {
        return;
    }

    wp_register_script_module(
        'voyager-demo/mcp-playground',
        VOYAGER_DEMO_URI . '/assets/js/mcp-playground.js',
        ['@wordpress/interactivity'],
        VOYAGER_DEMO_VERSION
    );
}
add_action('init', 'voyager_demo_register_mcp_script_module');

/**
 * Hand the playground's initial store state to the client and enqueue the
 * view module. Called from the pattern, so a page without the pattern pays
 * for none of it.
 */
function voyager_demo_mcp_playground_boot(string $selected): void {
    if (! function_exists('wp_interactivity_state')) {
        return;
    }

    wp_interactivity_state('voyager-demo/mcp-playground', [
        'selected'    => $selected,
        'status'      => 'idle',
        'response'    => '',
        'error'       => '',
        'latency'     => '',
        'mode'        => voyager_demo_mcp_mode(),
        'endpoint'    => rest_url('voyager-demo/v1/mcp-playground'),
        'runLabel'    => __('Run this call', 'voyager-demo'),
        'callingLabel' => __('Calling…', 'voyager-demo'),
        /* translators: %1$s: round-trip milliseconds. */
        'recordedLatency' => __('%1$s ms round trip to this site — real transport, recorded payload. No tool ran.', 'voyager-demo'),
        /* translators: 1: upstream milliseconds, 2: round-trip milliseconds. */
        'liveLatency' => __('%1$s ms at the endpoint, %2$s ms round trip.', 'voyager-demo'),
        'failedLabel' => __('Call failed:', 'voyager-demo'),
    ]);

    if (function_exists('wp_enqueue_script_module')) {
        wp_enqueue_script_module('voyager-demo/mcp-playground');
    }
}

/**
 * Register the light section style for groups (VOY-1851).
 *
 * Its look lives in theme.json, under
 * styles.blocks.core/group.variations.section-light: fg-1 paper with
 * bg-canvas ink. Registering the name here is what lets that entry survive
 * theme.json sanitization. A theme.json partial in styles/ would register it
 * too, but the deploy does not ship a styles/ directory.
 */
function voyager_demo_register_block_styles(): void {
    register_block_style('core/group', [
        'name'  => 'section-light',
        'label' => __('Light section', 'voyager-demo'),
    ]);
}
add_action('init', 'voyager_demo_register_block_styles');

/**
 * Surfaces the button contrast gate measures beyond its defaults (VOY-1887).
 *
 * The gate's fixture (.github/actions/button-contrast, vendored) paints
 * bg-canvas, bg-panel and bg-raised. This theme also paints groups and
 * columns bg-inset and runs an accent band, so a button can land on either.
 * Nothing outside the fixture applies this filter, so it is inert on the site.
 *
 * fg-1 is left out on purpose. Demo paints it only through the section-light
 * style, which also sets bg-canvas ink, and the fixture paints a surface by
 * background slug alone. Registered here, fg-1 is measured under the site's
 * light text, a pairing no page renders: ghost at rest inherits fg-2 and
 * reads 1.14:1. The light section's outline pair is set in
 * assets/css/custom.css and was measured at 7.19:1 by rendering the fixture's
 * fg-1 surface with section-light applied (VOY-1887 PR).
 *
 * @param list<string> $surfaces Palette slugs.
 * @return list<string>
 */
function voyager_demo_button_contrast_surfaces(array $surfaces): array {
    return [...$surfaces, 'bg-inset', 'accent'];
}
add_filter('voyager_button_contrast_surfaces', 'voyager_demo_button_contrast_surfaces');

/*
 * /open-blocks/ pattern stage (VOY-1851): a switch that turns the light
 * section style on and off on the stage's canvases, so the pack's patterns
 * are seen following a light theme and this site's dark one.
 *
 * The page's markup is plain core blocks, so it can be published through
 * wp_upsert_content and validated like any other post. The directives are
 * added here at render time, keyed on class names the seed sets:
 *
 *   vd-stage              the section holding the switch and the canvases
 *   vd-stage-canvas       a group carrying is-style-section-light
 *   vd-stage-show-light   the button that turns the style on
 *   vd-stage-show-dark    the button that turns it off
 *
 * The page opens on light: the canvases are saved with the style and the
 * light button is rendered pressed, so first paint is right before the
 * module hydrates.
 */
const VOYAGER_DEMO_STAGE_STORE = 'voyager-demo/open-blocks-stage';

/**
 * Register the stage's Interactivity API view module. Unbundled ESM, as the
 * playground's is. Versioned by file time, like custom.css.
 */
function voyager_demo_register_stage_script_module(): void {
    if (! function_exists('wp_register_script_module')) {
        return;
    }

    $file = VOYAGER_DEMO_PATH . '/assets/js/open-blocks-stage.js';
    wp_register_script_module(
        VOYAGER_DEMO_STAGE_STORE,
        VOYAGER_DEMO_URI . '/assets/js/open-blocks-stage.js',
        ['@wordpress/interactivity'],
        file_exists($file) ? (string) filemtime($file) : VOYAGER_DEMO_VERSION
    );
}
add_action('init', 'voyager_demo_register_stage_script_module');

/**
 * Whether a block's className carries a given class.
 *
 * @param array<string, mixed> $block Parsed block.
 */
function voyager_demo_block_has_class(array $block, string $class): bool {
    $classes = preg_split('/\s+/', (string) ($block['attrs']['className'] ?? '')) ?: [];

    return in_array($class, $classes, true);
}

/**
 * Make the stage section the interactive region, and hand the client the
 * opening state.
 *
 * @param string               $block_content Rendered block.
 * @param array<string, mixed> $block         Parsed block.
 */
function voyager_demo_stage_group_directives(string $block_content, array $block): string {
    if (voyager_demo_block_has_class($block, 'vd-stage')) {
        $tags = new \WP_HTML_Tag_Processor($block_content);
        if ($tags->next_tag()) {
            $tags->set_attribute('data-wp-interactive', VOYAGER_DEMO_STAGE_STORE);
            $block_content = $tags->get_updated_html();

            if (function_exists('wp_interactivity_state')) {
                wp_interactivity_state(VOYAGER_DEMO_STAGE_STORE, [
                    'isLight' => true,
                    'isDark'  => false,
                ]);
            }
            if (function_exists('wp_enqueue_script_module')) {
                wp_enqueue_script_module(VOYAGER_DEMO_STAGE_STORE);
            }
        }

        return $block_content;
    }

    if (! voyager_demo_block_has_class($block, 'vd-stage-canvas')) {
        return $block_content;
    }

    /*
     * Core scopes a section style's CSS to a per-render instance class
     * (is-style-section-light--3), added beside is-style-section-light on the
     * generic render_block filter. Both have to come off for the dark state,
     * so each class gets its own directive. render_block_core/group runs after
     * render_block, so the instance class is already in the markup here.
     */
    $tags = new \WP_HTML_Tag_Processor($block_content);
    if ($tags->next_tag()) {
        foreach ($tags->class_list() as $class) {
            if (preg_match('/^is-style-section-light(--\d+)?$/', $class)) {
                $tags->set_attribute('data-wp-class--' . $class, 'state.isLight');
            }
        }
    }

    return $tags->get_updated_html();
}
add_filter('render_block_core/group', 'voyager_demo_stage_group_directives', 20, 2);

/**
 * Wire the stage's two switch buttons.
 *
 * @param string               $block_content Rendered block.
 * @param array<string, mixed> $block         Parsed block.
 */
function voyager_demo_stage_button_directives(string $block_content, array $block): string {
    $light = voyager_demo_block_has_class($block, 'vd-stage-show-light');
    if (! $light && ! voyager_demo_block_has_class($block, 'vd-stage-show-dark')) {
        return $block_content;
    }

    $tags = new \WP_HTML_Tag_Processor($block_content);
    if ($tags->next_tag(['class_name' => 'wp-block-button__link'])) {
        $tags->set_attribute('data-wp-on--click', $light ? 'actions.showLight' : 'actions.showDark');
        $tags->set_attribute('data-wp-bind--aria-pressed', $light ? 'state.isLight' : 'state.isDark');
        $tags->set_attribute('aria-pressed', $light ? 'true' : 'false');
    }

    return $tags->get_updated_html();
}
add_filter('render_block_core/button', 'voyager_demo_stage_button_directives', 20, 2);

/*
 * =========================================================================
 * /open-blocks/ copy buttons
 *
 * Every gallery card on /open-blocks/ carries two buttons. One copies the
 * pattern's serialized block markup, the other a prompt to give an agent.
 * Pasted into the block editor on a site running the pack, the markup becomes
 * the pattern's blocks, because it is the registered pattern's own content,
 * read from WP_Block_Patterns_Registry on each request. Nothing here keeps a
 * copy of it, so the buttons cannot drift from the pack.
 *
 * The seed holds plain core blocks, keyed on class names, and this section
 * wires them at render time, the way the stage switch above is wired:
 *
 *   vd-ob-copy              a core/buttons group holding one card's buttons
 *   vd-ob-copy-for-<item>   the entry the group copies: an item key below
 *   vd-ob-copy-markup       the core/button that copies the block markup
 *   vd-ob-copy-prompt       the core/button that copies the prompt
 *   vd-ob-copy-hint         a paragraph that explains the buttons
 *
 * Each is rendered with the hidden attribute and revealed by
 * assets/js/open-blocks-copy.js, so a visitor without JavaScript never meets
 * a button that does nothing. A group with nothing to copy on this install
 * (the pack is not active, or its pattern is not registered) is not rendered
 * at all. Item keys are single-hyphen slugs on purpose: the seed's
 * block-comment JSON must not hold "--".
 * =========================================================================
 */
const VOYAGER_DEMO_OB_COPY_PAGE   = 'open-blocks';
const VOYAGER_DEMO_OB_COPY_SCRIPT = 'voyager-demo-open-blocks-copy';

/**
 * The prompt each copy group hands to an agent, keyed on item.
 *
 * The keys are the pack's pattern names without the voyager-open/ prefix;
 * icon and facts for the blocks; cta-band-<style> for the CTA band in a
 * section style; general for the install section; and the agent run's step
 * cards, which copy only a prompt (voyager_demo_ob_prompt_only_items()). The
 * pattern and block prompts are each skill's "Tell your agent" prompt, as the
 * pack's prompt ability returns it. The prompts are data, copied verbatim,
 * so they are not translated.
 *
 * @return array<string, string>
 */
function voyager_demo_ob_copy_prompts(): array {
    return [
        'cta-band'          => 'Add the Voyager Open Blocks CTA band near the end of my Services page. Write the heading and the line of copy for that page, keep the click-to-call button bound to my Site Data phone number, and check the blocks before you save.',
        'proof-strip'       => 'Add the Voyager Open Blocks proof strip under the hero on my home page with these credentials: [three to six short facts]. Use only what I give you.',
        'logo-marquee'      => 'Add the Voyager Open Blocks logo marquee to my home page and replace the placeholder logos with these images from my media library: [image names].',
        'closing-cta'       => 'End my About page with the Voyager Open Blocks closing CTA. Rewrite the heading and the line for that page, and keep the email button bound to my Site Data email.',
        'contact-section'   => 'Add the Voyager Open Blocks contact section to my Contact page. Keep the phone, email, address and hours bound to Site Data, and tell me which Site Data fields are still empty.',
        'icon'              => 'Add a Voyager Open Blocks phone icon next to the call button in my header, linked to my Site Data phone number.',
        'general'           => 'Use the Voyager Open Blocks skills on my site. Read the site first, then [task]. Check every block before you save, and tell me which values come from Site Data and which are still empty.',
        'hero'              => 'Open my home page with the Voyager Open Blocks hero, image beside text. Write the heading and the line for my business, keep the call button bound to my Site Data phone number, and tell me which image to put in the slot.',
        'services'          => "Add the Voyager Open Blocks services section to my home page under the proof strip, as cards. Use these services: [three to six services, each with one line]. Pick an icon for each from the pack's set.",
        'reviews'           => "Add the Voyager Open Blocks reviews section to my home page, above the closing CTA. Use these reviews, exactly as written: [each review's quote, the customer's name as they agreed to show it, the service or the month and year, and the star rating they gave]. Use only what I give you.",
        'faq'               => 'Add the Voyager Open Blocks FAQ to my [service] page, before the closing CTA. Use these questions and answers: [three to eight, each a question as a customer asks it and my answer]. Use only the facts I give you.',
        'facts'             => 'Add a Voyager Open Blocks facts list of my services to my Services page, bound to my Site Data services. Tell me if the services are still empty.',
        'cta-band-panel'    => 'Add the Voyager Open Blocks CTA band near the end of my Services page, in the Panel section style. Write the heading and the line of copy for that page, keep the click-to-call button bound to my Site Data phone number, and check the blocks before you save.',
        'cta-band-inverted' => 'Add the Voyager Open Blocks CTA band near the end of my Services page, in the Inverted section style. Write the heading and the line of copy for that page, keep the click-to-call button bound to my Site Data phone number, and check the blocks before you save.',
        'cta-band-accent'   => 'Add the Voyager Open Blocks CTA band near the end of my Services page, in the Accent section style. Write the heading and the line of copy for that page, keep the click-to-call button bound to my Site Data phone number, and check the blocks before you save.',
        'safe-dry-run'      => 'Add the Voyager Open Blocks CTA band to the end of my [page], with a heading and a line for that page. Do a dry run first and show me what it would save before you save anything.',
        'safe-save'         => 'Add the Voyager Open Blocks CTA band to the end of my [page], with a heading and a line for that page. Save it, and tell me the revision_id the save returned so we can undo it.',
        'safe-undo'         => 'Undo your last Voyager Open Blocks save on my [page] with the revision_id it returned. If someone else has saved the page since, stop and tell me.',
        'safe-bound'        => 'Change the number on the call button in the Voyager Open Blocks CTA band on my [page] to (555) 010-0142.',
        'compose-home'      => 'Build a draft home page on my site from the Voyager Open Blocks home recipe. Keep it a draft, send me the preview link, and tell me which Site Data fields it shows that are still empty.',
        'claim-refused'     => "Add the Voyager Open Blocks reviews section to my home page. Use only reviews I give you in the customer's own words. If I have not given you any, keep the placeholders and tell me what you need.",
    ];
}

/**
 * Items that copy a prompt and no markup, with the name each button's
 * accessible name gives them: the install section's general prompt, and the
 * agent run's step cards, which show an ability call rather than blocks.
 *
 * @return array<string, string>
 */
function voyager_demo_ob_prompt_only_items(): array {
    return [
        'general'       => __('Any page', 'voyager-demo'),
        'safe-dry-run'  => __('Dry run', 'voyager-demo'),
        'safe-save'     => __('Save', 'voyager-demo'),
        'safe-undo'     => __('Undo', 'voyager-demo'),
        'safe-bound'    => __('Refused bound slot', 'voyager-demo'),
        'compose-home'  => __('Compose a home page', 'voyager-demo'),
        'claim-refused' => __('Refused claim', 'voyager-demo'),
    ];
}

/**
 * The pack's section styles a cta-band-<style> item can carry, with their
 * labels, as the pack registers them on core/group.
 *
 * @return array<string, string>
 */
function voyager_demo_ob_section_styles(): array {
    return [
        'panel'    => __('Panel', 'voyager-demo'),
        'inverted' => __('Inverted', 'voyager-demo'),
        'accent'   => __('Accent', 'voyager-demo'),
    ];
}

/**
 * Pattern markup with a section style on its first top-level group: the
 * class in the block's className and on its wrapper element, which is where
 * the pack's compose ability puts it. Markup with no top-level group comes
 * back as it was.
 *
 * @param string $markup Serialized blocks.
 * @param string $style  panel, inverted or accent.
 */
function voyager_demo_ob_with_section_style(string $markup, string $style): string {
    $class  = 'is-style-voyager-open-' . $style;
    $blocks = parse_blocks($markup);

    foreach ($blocks as $index => $block) {
        if ('core/group' !== ($block['blockName'] ?? null)) {
            continue;
        }

        $block['attrs']['className'] = trim(((string) ($block['attrs']['className'] ?? '')) . ' ' . $class);

        if (isset($block['innerContent'][0]) && is_string($block['innerContent'][0])) {
            $tags = new \WP_HTML_Tag_Processor($block['innerContent'][0]);
            if ($tags->next_tag()) {
                $tags->add_class($class);
                $block['innerContent'][0] = $tags->get_updated_html();
            }
        }

        $blocks[$index] = $block;

        return trim(serialize_blocks($blocks));
    }

    return $markup;
}

/**
 * Whether the Voyager Open Blocks pack is active on this install.
 *
 * Read from the block registry rather than from the plugin list: what the
 * buttons need is the pack's code running, not a row in the plugins table.
 */
function voyager_demo_ob_pack_active(): bool {
    return class_exists('WP_Block_Type_Registry')
        && \WP_Block_Type_Registry::get_instance()->is_registered('voyager-open/icon');
}

/**
 * What one item copies on this install, or null when it has nothing to copy.
 *
 * markup is '' for an item that copies only a prompt (general and the step
 * cards). For a pattern it is the registered content, which is what the
 * editor's inserter places, so a paste and an insert give the same blocks;
 * for cta-band-<style> it is the CTA band's with that section style on it.
 *
 * title names the item in each button's accessible name.
 *
 * @return array{title: string, markup: string}|null
 */
function voyager_demo_ob_copy_source(string $item): ?array {
    if (! voyager_demo_ob_pack_active()) {
        return null;
    }

    $prompt_only = voyager_demo_ob_prompt_only_items();
    if (isset($prompt_only[$item])) {
        return [
            'title'  => $prompt_only[$item],
            'markup' => '',
        ];
    }

    if (str_starts_with($item, 'cta-band-')) {
        $style  = substr($item, strlen('cta-band-'));
        $styles = voyager_demo_ob_section_styles();
        $band   = isset($styles[$style]) ? voyager_demo_ob_copy_source('cta-band') : null;

        return null === $band ? null : [
            /* translators: 1: pattern title, 2: section style label. */
            'title'  => sprintf(__('%1$s, %2$s style', 'voyager-demo'), $band['title'], $styles[$style]),
            'markup' => voyager_demo_ob_with_section_style($band['markup'], $style),
        ];
    }

    if ('facts' === $item) {
        $type = \WP_Block_Type_Registry::get_instance()->get_registered('voyager-open/facts');
        if (null === $type) {
            return null;
        }

        // The Facts block on the page: the Ticks style, its items bound to
        // Site Data's services.
        return [
            'title'  => (string) ($type->title ?? '') ?: __('Facts', 'voyager-demo'),
            'markup' => serialize_block([
                'blockName'    => 'voyager-open/facts',
                'attrs'        => [
                    'className' => 'is-style-voyager-open-ticks',
                    'metadata'  => [
                        'bindings' => [
                            'items' => [
                                'source' => 'voyager/site-data',
                                'args'   => ['key' => 'services'],
                            ],
                        ],
                    ],
                ],
                'innerBlocks'  => [],
                'innerHTML'    => '',
                'innerContent' => [],
            ]),
        ];
    }

    if ('icon' === $item) {
        $type = \WP_Block_Type_Registry::get_instance()->get_registered('voyager-open/icon');

        // The click-to-call icon from the icon's SKILL.md: a phone icon with
        // an accessible name, its link bound to Site Data's phone_link.
        return [
            'title'  => (string) ($type->title ?? '') ?: __('Icon', 'voyager-demo'),
            'markup' => serialize_block([
                'blockName'    => 'voyager-open/icon',
                'attrs'        => [
                    'icon'     => 'phone',
                    'size'     => 32,
                    'label'    => 'Call us',
                    'metadata' => [
                        'bindings' => [
                            'linkUrl' => [
                                'source' => 'voyager/site-data',
                                'args'   => ['key' => 'phone_link'],
                            ],
                        ],
                    ],
                ],
                'innerBlocks'  => [],
                'innerHTML'    => '',
                'innerContent' => [],
            ]),
        ];
    }

    if (! class_exists('WP_Block_Patterns_Registry')) {
        return null;
    }

    $name     = 'voyager-open/' . $item;
    $registry = \WP_Block_Patterns_Registry::get_instance();
    if (! $registry->is_registered($name)) {
        return null;
    }

    $pattern = (array) $registry->get_registered($name);
    $markup  = trim((string) ($pattern['content'] ?? ''));

    return '' === $markup ? null : [
        'title'  => (string) ($pattern['title'] ?? $name),
        'markup' => $markup,
    ];
}

/**
 * Everything the copy groups on this page can copy, keyed on item.
 *
 * Built once per request, and only on the open-blocks page and its section
 * gallery: anywhere else it is empty, so a stray vd-ob-copy class renders
 * nothing. The gallery's items are every pattern it shows, keyed on the
 * pattern's name without the voyager-open/ prefix
 * (voyager_demo_obs_copy_items()).
 *
 * @return array<string, array{title: string, markup: string, prompt: string}>
 */
function voyager_demo_ob_copy_items(): array {
    static $items = null;

    if (null !== $items) {
        return $items;
    }

    $items = [];
    if (is_page(VOYAGER_DEMO_OBS_PAGE)) {
        $items = voyager_demo_obs_copy_items();

        return $items;
    }

    if (! is_page(VOYAGER_DEMO_OB_COPY_PAGE)) {
        return $items;
    }

    foreach (voyager_demo_ob_copy_prompts() as $item => $prompt) {
        $source = voyager_demo_ob_copy_source($item);
        if (null !== $source) {
            $items[$item] = $source + ['prompt' => $prompt];
        }
    }

    return $items;
}

/**
 * Register the copy script. A classic deferred script, not a module: it
 * needs no store and no import map. Versioned by file time, like custom.css.
 * Registered on init because a block theme renders the page, and so runs the
 * filters below, before wp_enqueue_scripts fires.
 */
function voyager_demo_register_ob_copy_script(): void {
    $file = VOYAGER_DEMO_PATH . '/assets/js/open-blocks-copy.js';
    wp_register_script(
        VOYAGER_DEMO_OB_COPY_SCRIPT,
        VOYAGER_DEMO_URI . '/assets/js/open-blocks-copy.js',
        [],
        file_exists($file) ? (string) filemtime($file) : VOYAGER_DEMO_VERSION,
        ['strategy' => 'defer', 'in_footer' => true]
    );
}
add_action('init', 'voyager_demo_register_ob_copy_script');

/**
 * Hand the script its data and enqueue it, once, the first time a copy group
 * renders. A page without one pays for none of it.
 */
function voyager_demo_ob_copy_boot(): void {
    static $booted = false;

    if ($booted) {
        return;
    }
    $booted = true;

    $data = [
        'items'        => voyager_demo_ob_copy_items(),
        'copied'       => __('Copied', 'voyager-demo'),
        'failed'       => __('Not copied', 'voyager-demo'),
        'markupCopied' => __('Block markup copied. Paste it into the block editor.', 'voyager-demo'),
        'promptCopied' => __('Prompt copied. Paste it into your agent.', 'voyager-demo'),
        'copyFailed'   => __('Your browser did not allow copying. Try again.', 'voyager-demo'),
    ];

    // JSON_HEX_TAG keeps a "</script>" in pattern markup from closing the tag.
    wp_add_inline_script(
        VOYAGER_DEMO_OB_COPY_SCRIPT,
        'window.voyagerDemoObCopy = ' . wp_json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP) . ';',
        'before'
    );
    wp_enqueue_script(VOYAGER_DEMO_OB_COPY_SCRIPT);
}

/**
 * The item a copy group names in its vd-ob-copy-for-<item> class, or ''.
 *
 * @param array<string, mixed> $block Parsed block.
 */
function voyager_demo_ob_copy_item(array $block): string {
    $classes = preg_split('/\s+/', (string) ($block['attrs']['className'] ?? '')) ?: [];
    foreach ($classes as $class) {
        if (str_starts_with($class, 'vd-ob-copy-for-')) {
            return substr($class, strlen('vd-ob-copy-for-'));
        }
    }

    return '';
}

/**
 * Wire a copy group (core/buttons) or the hint (core/paragraph).
 *
 * Both render hidden for the script to reveal. A group also names its item
 * and marks what each of its buttons copies; it is dropped, buttons and all,
 * when its item has nothing to copy here. The buttons are read inside the
 * group because a core/button renders before its parent and cannot see the
 * item.
 *
 * @param string               $block_content Rendered block.
 * @param array<string, mixed> $block         Parsed block.
 */
function voyager_demo_ob_copy_directives(string $block_content, array $block): string {
    $is_hint = voyager_demo_block_has_class($block, 'vd-ob-copy-hint');
    if (! $is_hint && ! voyager_demo_block_has_class($block, 'vd-ob-copy')) {
        return $block_content;
    }

    $items = voyager_demo_ob_copy_items();
    $item  = $is_hint ? '' : voyager_demo_ob_copy_item($block);
    if ($is_hint ? [] === $items : ! isset($items[$item])) {
        return '';
    }

    $tags = new \WP_HTML_Tag_Processor($block_content);
    if (! $tags->next_tag()) {
        return '';
    }
    $tags->set_attribute('hidden', true);

    if (! $is_hint) {
        $tags->set_attribute('data-vd-ob-copy-item', $item);

        $kind = '';
        while ($tags->next_tag()) {
            if ($tags->has_class('vd-ob-copy-markup')) {
                $kind = 'markup';
            } elseif ($tags->has_class('vd-ob-copy-prompt')) {
                $kind = 'prompt';
            } elseif ('' !== $kind && 'BUTTON' === $tags->get_tag()) {
                $tags->set_attribute('data-vd-ob-copy', $kind);
                $kind = '';
            }
        }
    }

    voyager_demo_ob_copy_boot();

    return $tags->get_updated_html();
}
add_filter('render_block_core/buttons', 'voyager_demo_ob_copy_directives', 20, 2);
add_filter('render_block_core/paragraph', 'voyager_demo_ob_copy_directives', 20, 2);

/* End of /open-blocks/ copy buttons. */

/*
 * =========================================================================
 * /open-blocks/sections/ section gallery
 *
 * Every pattern the installed Voyager Open Blocks release registers, grouped
 * by section with its layouts side by side, under a switch that puts the
 * pack's section styles on every section at once. The page holds an intro
 * and the voyager-demo/open-blocks-sections pattern, which prints
 * voyager_demo_obs_markup(). That reads the pattern registry on each
 * request, so a layout a later release adds shows after the next deploy with
 * no seed edit, and no count on the page is typed.
 *
 * Pattern names come from the pack's patterns/intents/ directory, the files
 * the pack registers its patterns from (its inc/patterns.php register()), and
 * each pattern is read through WP_Block_Patterns_Registry::get_registered().
 * get_all_registered() is not used: it includes every theme pattern file, and
 * called from this gallery's own file it would include that file again, and
 * again, without end (get_content() in
 * wp-includes/class-wp-block-patterns-registry.php stores a file's content
 * only once the include returns).
 *
 * The style switch is built like the stage switch above: the Interactivity
 * API, wired at render time on class names this markup sets.
 *
 *   vd-obs               the gallery, the interactive region
 *   vd-obs-probe         an empty group in one section style, never shown
 *   vd-obs-frame         the group a pattern renders in; its first child is
 *                        the pattern's outer group, which the switch styles
 *   vd-obs-show-<style>  the switch button for a style, plain for none
 *
 * WordPress prints a section style's colours only for a group rendered with
 * that style, scoped to a class made for that one render, such as
 * is-style-voyager-open-panel--12 (wp_render_block_style_variation_support_styles()
 * in wp-includes/block-supports/block-style-variations.php). That CSS depends
 * on the style and the block type alone, so one group per style is enough:
 * each probe renders in its style, its class is recorded here, and every
 * section turns both classes on and off. The page opens on Plain, the pack's
 * name for no style, and the colours are the pack's: this theme adds none.
 *
 * Copy buttons reuse the /open-blocks/ wiring above: a vd-ob-copy group per
 * pattern, copying the registered markup and the section skill's prompt.
 * =========================================================================
 */
const VOYAGER_DEMO_OBS_PAGE   = 'open-blocks/sections';
const VOYAGER_DEMO_OBS_STORE  = 'voyager-demo/open-blocks-sections';
const VOYAGER_DEMO_OBS_SLUG   = '/^[a-z0-9]+(-[a-z0-9]+)*$/';
const VOYAGER_DEMO_OBS_SOURCE = 'https://github.com/voyager-marketing/voyager-open-blocks';

/**
 * Sections in the order a page holds them, top to bottom. A section the
 * pack adds later and this list does not name follows, in name order.
 */
const VOYAGER_DEMO_OBS_ORDER = [
    'hero',
    'proof-strip',
    'services',
    'process-steps',
    'stats',
    'reviews',
    'service-area',
    'logo-marquee',
    'faq',
    'cta-band',
    'contact-section',
    'closing-cta',
];

/**
 * The pack's section styles, style => label, in the pack's order: its own
 * list when it has one (SectionStyles\labels()), kept to the styles
 * registered on core/group, so the switch never offers one WordPress would
 * not paint.
 *
 * @return array<string, string>
 */
function voyager_demo_obs_styles(): array {
    $labels = function_exists('VoyagerOpenBlocks\SectionStyles\labels')
        ? (array) \VoyagerOpenBlocks\SectionStyles\labels()
        : voyager_demo_ob_section_styles();

    $registry = \WP_Block_Styles_Registry::get_instance();
    $styles   = [];

    foreach ($labels as $style => $label) {
        if (
            is_string($style)
            && 'plain' !== $style
            && 1 === preg_match(VOYAGER_DEMO_OBS_SLUG, $style)
            && $registry->is_registered('core/group', 'voyager-open-' . $style)
        ) {
            $styles[$style] = (string) $label;
        }
    }

    return $styles;
}

/**
 * The per-render class each probe was given, style => class, as recorded
 * while the probes render. Pass both arguments to record one.
 *
 * @return array<string, string>
 */
function voyager_demo_obs_instances(string $style = '', string $class = ''): array {
    static $instances = [];

    if ('' !== $style && '' !== $class) {
        $instances[$style] = $class;
    }

    return $instances;
}

/**
 * Every voyager-open/* pattern the pack registers, once per request.
 *
 * section and layout are the intent's (Patterns\intent_meta()); a pattern
 * whose section has one layout is its own section. first marks the layout
 * that keeps the section's slug. standins names what the pattern ships in
 * place of real content: placeholder text where a copy rule marks a slot as
 * a claim (a review, a rating, a credential, a figure), the pack's
 * placeholder images, and the contact section's form slot. bound is true
 * when the markup binds Site Data.
 *
 * @return list<array{name: string, item: string, title: string, description: string, content: string, section: string, layout: string, first: bool, standins: list<string>, bound: bool}>
 */
function voyager_demo_obs_patterns(): array {
    static $patterns = null;

    if (null !== $patterns) {
        return $patterns;
    }

    $patterns = [];
    if (! defined('VOYAGER_OPEN_BLOCKS_DIR') || ! voyager_demo_ob_pack_active() || ! class_exists('WP_Block_Patterns_Registry')) {
        return $patterns;
    }

    $registry = \WP_Block_Patterns_Registry::get_instance();

    foreach (glob(VOYAGER_OPEN_BLOCKS_DIR . '/patterns/intents/*.json') ?: [] as $file) {
        $item = basename($file, '.json');
        $name = 'voyager-open/' . $item;

        if (1 !== preg_match(VOYAGER_DEMO_OBS_SLUG, $item) || ! $registry->is_registered($name)) {
            continue;
        }

        $pattern = (array) $registry->get_registered($name);
        $content = (string) ($pattern['content'] ?? '');
        if ('' === trim($content)) {
            continue;
        }

        $meta    = function_exists('VoyagerOpenBlocks\Patterns\intent_meta') ? (array) \VoyagerOpenBlocks\Patterns\intent_meta($name) : [];
        $section = is_string($meta['section'] ?? null) && 1 === preg_match(VOYAGER_DEMO_OBS_SLUG, $meta['section']) ? $meta['section'] : $item;

        $claims = false;
        foreach ((array) ($meta['copy_rules'] ?? []) as $rule) {
            if (is_array($rule) && true === ($rule['claim'] ?? null)) {
                $claims = true;
                break;
            }
        }

        // What the pattern ships in place of real content, named on its card.
        $standins = [];
        if ($claims) {
            $standins[] = __('placeholder text where a review, a rating, a credential or a figure goes, never a real one', 'voyager-demo');
        }
        if (str_contains($content, '/assets/placeholders/')) {
            $standins[] = __('placeholder images, not photos or logos of a business', 'voyager-demo');
        }
        if (str_contains($content, '"name":"Form slot"')) {
            $standins[] = __('a form slot, which holds an email button until a form plugin\'s block takes its place', 'voyager-demo');
        }

        $patterns[] = [
            'name'        => $name,
            'item'        => $item,
            'title'       => (string) ($pattern['title'] ?? $name),
            'description' => (string) ($pattern['description'] ?? ''),
            'content'     => $content,
            'section'     => $section,
            'layout'      => is_string($meta['layout'] ?? null) ? $meta['layout'] : '',
            'first'       => $item === $section,
            'standins'    => $standins,
            'bound'       => str_contains($content, '"source":"voyager/site-data"'),
        ];
    }

    return $patterns;
}

/**
 * The gallery's sections in page order, each with its title and its
 * layouts, the first layout first. A section's title is its first layout's
 * pattern title, which names the section ("Hero", "FAQ").
 *
 * @return array<string, array{title: string, patterns: list<array<string, mixed>>}>
 */
function voyager_demo_obs_sections(): array {
    $grouped = [];
    foreach (voyager_demo_obs_patterns() as $pattern) {
        $grouped[$pattern['section']][] = $pattern;
    }

    $sections = [];
    foreach ($grouped as $section => $patterns) {
        usort(
            $patterns,
            static fn (array $a, array $b): int => [! $a['first'], $a['item']] <=> [! $b['first'], $b['item']]
        );

        $sections[(string) $section] = [
            'title'    => $patterns[0]['first'] ? $patterns[0]['title'] : ucfirst(str_replace('-', ' ', (string) $section)),
            'patterns' => $patterns,
        ];
    }

    $order = array_flip(VOYAGER_DEMO_OBS_ORDER);
    uksort(
        $sections,
        static fn (string $a, string $b): int => [$order[$a] ?? PHP_INT_MAX, $a] <=> [$order[$b] ?? PHP_INT_MAX, $b]
    );

    return $sections;
}

/**
 * The prompt a pattern's copy button gives an agent: its section skill's
 * "Tell your agent" prompt, as the pack's prompt ability reads it
 * (Abilities\skill_prompts()), so the skills stay the one place it is
 * written.
 *
 * A skill's prompt asks for its first layout. For another one, the skill's
 * own swap is applied when it says how, as `say "X" instead of "Y"`, and a
 * line names the layout's pattern, so the prompt never asks for the wrong
 * one. A section with no skill prompt gives '', and the copy script drops
 * that button.
 *
 * @param array{name: string, section: string, layout: string, first: bool} $pattern A gallery pattern.
 */
function voyager_demo_obs_prompt(array $pattern): string {
    static $prompts = null;

    if (null === $prompts) {
        $prompts = function_exists('VoyagerOpenBlocks\Abilities\skill_prompts') ? (array) \VoyagerOpenBlocks\Abilities\skill_prompts() : [];
    }

    $skill  = 'voyager-open-' . $pattern['section'];
    $prompt = (string) ($prompts[$skill] ?? '');

    if ('' === $prompt || $pattern['first']) {
        return $prompt;
    }

    $file     = VOYAGER_OPEN_BLOCKS_DIR . '/skills/' . $skill . '/SKILL.md';
    $markdown = is_readable($file) ? (string) file_get_contents($file) : '';

    if (
        1 === preg_match_all('/say "([^"]+)" instead of "([^"]+)"/', $markdown, $swap)
        && 1 === substr_count($prompt, $swap[2][0])
    ) {
        $prompt = str_replace($swap[2][0], $swap[1][0], $prompt);
    }

    $layout = '' !== $pattern['layout'] ? $pattern['layout'] . ' layout' : 'layout';

    return $prompt . "\n\nUse the " . $layout . ', ' . $pattern['name'] . '.';
}

/**
 * What the gallery's copy groups copy, keyed on item: each pattern's
 * registered content, byte for byte, and its prompt.
 *
 * @return array<string, array{title: string, markup: string, prompt: string}>
 */
function voyager_demo_obs_copy_items(): array {
    $items = [];

    foreach (voyager_demo_obs_patterns() as $pattern) {
        $items[$pattern['item']] = [
            'title'  => $pattern['title'],
            'markup' => $pattern['content'],
            'prompt' => voyager_demo_obs_prompt($pattern),
        ];
    }

    return $items;
}

/**
 * One block in serialized form. The attributes go through
 * serialize_block_attributes(), which encodes "--" and markup characters the
 * way the editor saves them.
 *
 * @param string               $name  Block name without the core/ prefix.
 * @param array<string, mixed> $attrs Block attributes.
 * @param string               $html  The block's HTML, inner blocks included.
 */
function voyager_demo_obs_block(string $name, array $attrs, string $html): string {
    $json = [] === $attrs ? '' : serialize_block_attributes($attrs) . ' ';

    return "<!-- wp:{$name} {$json}-->\n{$html}\n<!-- /wp:{$name} -->\n";
}

/**
 * A paragraph in fg-3, at the sm size or in the mono label style.
 *
 * @param string $html  Escaped inner HTML.
 * @param bool   $mono  Mono label style rather than sm.
 * @param string $class Extra classes.
 */
function voyager_demo_obs_note(string $html, bool $mono = false, string $class = ''): string {
    $attrs = ['textColor' => 'fg-3', 'fontSize' => $mono ? 'label' : 'sm'];
    $html_class = 'has-fg-3-color has-text-color has-' . ($mono ? 'mono-font-family has-label' : 'sm') . '-font-size';

    if ($mono) {
        $attrs['fontFamily'] = 'mono';
    }
    if ('' !== $class) {
        $attrs['className'] = $class;
        $html_class         = $class . ' ' . $html_class;
    }

    return voyager_demo_obs_block('paragraph', $attrs, '<p class="' . esc_attr($html_class) . '">' . $html . '</p>');
}

/**
 * One button of the switch or a copy group: an outline core/button that
 * renders a button element.
 */
function voyager_demo_obs_button(string $class, string $label): string {
    return voyager_demo_obs_block(
        'button',
        ['tagName' => 'button', 'className' => 'is-style-outline ' . $class],
        '<div class="wp-block-button is-style-outline ' . esc_attr($class) . '"><button type="button" class="wp-block-button__link wp-element-button">' . esc_html($label) . '</button></div>'
    );
}

/**
 * One layout's card: its name, any stand-in notes, the pattern rendered by
 * this site, its description, SKILL.md and copy buttons.
 *
 * @param array<string, mixed> $pattern A gallery pattern.
 */
function voyager_demo_obs_card(array $pattern): string {
    $item = (string) $pattern['item'];

    $meta = voyager_demo_obs_block(
        'paragraph',
        ['fontSize' => 'sm'],
        '<p class="has-sm-font-size"><strong>' . esc_html((string) $pattern['title']) . '</strong></p>'
    );
    $meta .= voyager_demo_obs_note(esc_html((string) $pattern['name']) . ('' !== $pattern['layout'] ? ' · ' . esc_html((string) $pattern['layout']) : ''), true);

    $notes = '';
    if ([] !== $pattern['standins']) {
        $notes .= voyager_demo_obs_note(
            '<strong>' . esc_html__('Stand-ins.', 'voyager-demo') . '</strong> '
                . esc_html(
                    sprintf(
                        /* translators: %s: what the section ships in place of real content, a list joined with semicolons. */
                        __('This section ships with %s. On a live site, each is replaced only with what the owner gives.', 'voyager-demo'),
                        implode('; ', $pattern['standins'])
                    )
                ),
            false,
            'vd-obs-note'
        );
    }
    if ($pattern['bound']) {
        $notes .= voyager_demo_obs_note(
            '<strong>' . esc_html__('Site Data.', 'voyager-demo') . '</strong> ' . esc_html__('Bound values come from this demo site\'s Site Data, which holds made-up details such as a 555 phone number and an example.com email. Nothing here describes a real business.', 'voyager-demo'),
            false,
            'vd-obs-note'
        );
    }

    $frame = voyager_demo_obs_block(
        'group',
        ['className' => 'vd-obs-frame', 'backgroundColor' => 'bg-canvas', 'layout' => ['type' => 'default']],
        '<div class="wp-block-group vd-obs-frame has-bg-canvas-background-color has-background">' . $pattern['content'] . '</div>'
    );

    $desc = '' !== $pattern['description']
        ? voyager_demo_obs_note(esc_html((string) $pattern['description']))
        : '';

    $skill = VOYAGER_OPEN_BLOCKS_DIR . '/skills/voyager-open-' . $pattern['section'] . '/SKILL.md';
    if (is_readable($skill)) {
        $ref   = defined('VOYAGER_OPEN_BLOCKS_VERSION') ? 'v' . VOYAGER_OPEN_BLOCKS_VERSION : 'main';
        $url   = VOYAGER_DEMO_OBS_SOURCE . '/blob/' . rawurlencode($ref) . '/skills/voyager-open-' . $pattern['section'] . '/SKILL.md';
        $desc .= voyager_demo_obs_block(
            'paragraph',
            ['fontSize' => 'sm'],
            '<p class="has-sm-font-size"><a href="' . esc_url($url) . '">SKILL.md</a></p>'
        );
    }

    $desc .= voyager_demo_obs_block(
        'buttons',
        ['className' => 'vd-ob-copy vd-ob-copy-for-' . $item],
        '<div class="wp-block-buttons vd-ob-copy vd-ob-copy-for-' . esc_attr($item) . '">'
            . voyager_demo_obs_button('vd-ob-copy-markup', __('Copy block markup', 'voyager-demo'))
            . voyager_demo_obs_button('vd-ob-copy-prompt', __('Copy prompt for your agent', 'voyager-demo'))
            . '</div>'
    );

    $desc = voyager_demo_obs_block(
        'group',
        [
            'className' => 'vd-ob-card__desc',
            'style'     => ['spacing' => ['blockGap' => 'var:preset|spacing|3']],
            'layout'    => ['type' => 'flex', 'flexWrap' => 'wrap', 'justifyContent' => 'space-between'],
        ],
        '<div class="wp-block-group vd-ob-card__desc">' . $desc . '</div>'
    );

    $meta = voyager_demo_obs_block(
        'group',
        [
            'className' => 'vd-ob-card__meta',
            'style'     => ['spacing' => ['blockGap' => 'var:preset|spacing|1']],
            'layout'    => ['type' => 'flex', 'orientation' => 'vertical'],
        ],
        '<div class="wp-block-group vd-ob-card__meta">' . $meta . '</div>'
    );

    $class = 'vd-ob-card vd-obs-card vd-obs-for-' . $item;

    return voyager_demo_obs_block(
        'group',
        [
            'className'       => $class,
            'style'           => ['spacing' => ['blockGap' => 'var:preset|spacing|0']],
            'backgroundColor' => 'bg-raised',
            'layout'          => ['type' => 'default'],
        ],
        '<div class="wp-block-group ' . esc_attr($class) . ' has-bg-raised-background-color has-background">' . $meta . $notes . $frame . $desc . '</div>'
    );
}

/**
 * The gallery, as block markup for the voyager-demo/open-blocks-sections
 * pattern to print.
 */
function voyager_demo_obs_markup(): string {
    $sections = voyager_demo_obs_sections();

    $wrap = static fn (string $html): string => voyager_demo_obs_block(
        'group',
        [
            'tagName'         => 'section',
            'align'           => 'full',
            'className'       => 'vd-obs',
            'style'           => [
                'spacing' => [
                    'padding'  => [
                        'top'    => 'var:preset|spacing|6',
                        'bottom' => 'var:preset|spacing|9',
                        'left'   => 'var:preset|spacing|5',
                        'right'  => 'var:preset|spacing|5',
                    ],
                    'blockGap' => 'var:preset|spacing|8',
                ],
            ],
            'backgroundColor' => 'bg-canvas',
            'textColor'       => 'fg-2',
            'layout'          => ['type' => 'constrained'],
        ],
        '<section class="wp-block-group alignfull vd-obs has-fg-2-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)">' . $html . '</section>'
    );

    if ([] === $sections) {
        return $wrap(voyager_demo_obs_note(esc_html__('Voyager Open Blocks is not active on this site, so there are no sections to show.', 'voyager-demo')));
    }

    $styles = voyager_demo_obs_styles();

    // One empty group per style, rendered first, so each style's class is
    // recorded before the switch and the sections render.
    $probes = '';
    foreach (array_keys($styles) as $style) {
        $class   = 'is-style-voyager-open-' . $style . ' vd-obs-probe';
        $probes .= voyager_demo_obs_block(
            'group',
            ['className' => $class, 'layout' => ['type' => 'default']],
            '<div class="wp-block-group ' . esc_attr($class) . '" hidden></div>'
        );
    }

    $count   = array_sum(array_map(static fn (array $section): int => count($section['patterns']), $sections));
    $summary = sprintf(
        /* translators: 1: number of patterns, 2: number of sections. */
        __('%1$s in %2$s, read from this site\'s pattern registry as the page renders.', 'voyager-demo'),
        /* translators: %d: number of patterns. */
        sprintf(_n('%d pattern', '%d patterns', $count, 'voyager-demo'), $count),
        /* translators: %d: number of sections. */
        sprintf(_n('%d section', '%d sections', count($sections), 'voyager-demo'), count($sections))
    );
    if (defined('VOYAGER_OPEN_BLOCKS_VERSION')) {
        /* translators: 1: pack version, 2: what the page shows. */
        $summary = sprintf(__('Voyager Open Blocks %1$s: %2$s', 'voyager-demo'), (string) VOYAGER_OPEN_BLOCKS_VERSION, $summary);
    }

    $switch = voyager_demo_obs_button('vd-obs-show-plain', __('Plain', 'voyager-demo'));
    foreach ($styles as $style => $label) {
        $switch .= voyager_demo_obs_button('vd-obs-show-' . $style, $label);
    }
    $switch = voyager_demo_obs_block(
        'buttons',
        ['className' => 'vd-obs-switch', 'style' => ['spacing' => ['blockGap' => 'var:preset|spacing|2']]],
        '<div class="wp-block-buttons vd-obs-switch" role="group" aria-label="' . esc_attr__('Section style', 'voyager-demo') . '">' . $switch . '</div>'
    );

    $bar = voyager_demo_obs_block(
        'group',
        [
            'align'     => 'wide',
            'className' => 'vd-obs-bar',
            'style'     => ['spacing' => ['blockGap' => 'var:preset|spacing|3']],
            'layout'    => ['type' => 'flex', 'flexWrap' => 'wrap', 'justifyContent' => 'space-between', 'verticalAlignment' => 'center'],
        ],
        '<div class="wp-block-group alignwide vd-obs-bar">'
            . voyager_demo_obs_note(esc_html($summary), true)
            . $switch
            . '</div>'
    );

    $hint = voyager_demo_obs_note(
        esc_html__('Each layout has two copy buttons. The block markup is the pattern exactly as the pack registers it, with no section style: paste it into the block editor on a site with the pack installed, then pick a style in the block\'s Styles panel. The prompt is the section skill\'s own, for an agent that has the pack\'s skills.', 'voyager-demo'),
        false,
        'vd-ob-copy-hint'
    );

    $links = [];
    foreach ($sections as $key => $section) {
        $links[] = '<a href="#' . esc_attr((string) $key) . '">' . esc_html($section['title']) . '</a>';
    }
    $nav = voyager_demo_obs_note(implode(' · ', $links), false, 'vd-obs-nav');

    $body = '';
    foreach ($sections as $key => $section) {
        $layouts = count($section['patterns']);
        $heading = voyager_demo_obs_block(
            'heading',
            [],
            '<h2 class="wp-block-heading">' . esc_html($section['title']) . '</h2>'
        );
        if ($layouts > 1) {
            /* translators: %d: number of layouts. */
            $heading .= voyager_demo_obs_note(esc_html(sprintf(_n('%d layout', '%d layouts', $layouts, 'voyager-demo'), $layouts)), true);
        }

        if (1 === $layouts) {
            $cards = voyager_demo_obs_card($section['patterns'][0]);
        } else {
            $columns = '';
            foreach ($section['patterns'] as $pattern) {
                $columns .= voyager_demo_obs_block('column', [], '<div class="wp-block-column">' . voyager_demo_obs_card($pattern) . '</div>');
            }
            $cards = voyager_demo_obs_block(
                'columns',
                ['style' => ['spacing' => ['blockGap' => ['top' => 'var:preset|spacing|5', 'left' => 'var:preset|spacing|5']]]],
                '<div class="wp-block-columns">' . $columns . '</div>'
            );
        }

        $body .= voyager_demo_obs_block(
            'group',
            [
                'tagName'   => 'section',
                'align'     => 'wide',
                'anchor'    => (string) $key,
                'className' => 'vd-obs-group',
                'style'     => ['spacing' => ['blockGap' => 'var:preset|spacing|4']],
                'layout'    => ['type' => 'default'],
            ],
            '<section class="wp-block-group alignwide vd-obs-group" id="' . esc_attr((string) $key) . '">' . $heading . $cards . '</section>'
        );
    }

    return $wrap($probes . $bar . $hint . $nav . $body);
}

/**
 * Register the switch's Interactivity API view module, as the stage's is.
 */
function voyager_demo_register_obs_script_module(): void {
    if (! function_exists('wp_register_script_module')) {
        return;
    }

    $file = VOYAGER_DEMO_PATH . '/assets/js/open-blocks-sections.js';
    wp_register_script_module(
        VOYAGER_DEMO_OBS_STORE,
        VOYAGER_DEMO_URI . '/assets/js/open-blocks-sections.js',
        ['@wordpress/interactivity'],
        file_exists($file) ? (string) filemtime($file) : VOYAGER_DEMO_VERSION
    );
}
add_action('init', 'voyager_demo_register_obs_script_module');

/**
 * Record each probe's class, style each pattern's outer group, and make the
 * gallery the interactive region.
 *
 * Inner blocks render first, so by the time a frame renders, the probes
 * above it have recorded their classes, and by the time the gallery renders,
 * every section is wired.
 *
 * @param string               $block_content Rendered block.
 * @param array<string, mixed> $block         Parsed block.
 */
function voyager_demo_obs_group_directives(string $block_content, array $block): string {
    if (voyager_demo_block_has_class($block, 'vd-obs-probe')) {
        $tags = new \WP_HTML_Tag_Processor($block_content);
        if ($tags->next_tag()) {
            foreach ($tags->class_list() as $class) {
                if (1 === preg_match('/^is-style-voyager-open-([a-z0-9]+(?:-[a-z0-9]+)*)--\d+$/', $class, $match)) {
                    voyager_demo_obs_instances($match[1], $class);
                }
            }
        }

        return $block_content;
    }

    if (voyager_demo_block_has_class($block, 'vd-obs-frame')) {
        $tags = new \WP_HTML_Tag_Processor($block_content);
        if ($tags->next_tag() && $tags->next_tag() && $tags->has_class('wp-block-group')) {
            $tags->add_class('vd-obs-section');
            foreach (voyager_demo_obs_instances() as $style => $class) {
                $tags->set_attribute('data-wp-class--is-style-voyager-open-' . $style, 'state.on.' . $style);
                $tags->set_attribute('data-wp-class--' . $class, 'state.on.' . $style);
            }
        }

        return $tags->get_updated_html();
    }

    if (! voyager_demo_block_has_class($block, 'vd-obs')) {
        return $block_content;
    }

    $tags = new \WP_HTML_Tag_Processor($block_content);
    if (! $tags->next_tag()) {
        return $block_content;
    }
    $tags->set_attribute('data-wp-interactive', VOYAGER_DEMO_OBS_STORE);

    if (function_exists('wp_interactivity_state')) {
        wp_interactivity_state(VOYAGER_DEMO_OBS_STORE, [
            'on' => ['plain' => true] + array_fill_keys(array_keys(voyager_demo_obs_instances()), false),
        ]);
    }
    if (function_exists('wp_enqueue_script_module')) {
        wp_enqueue_script_module(VOYAGER_DEMO_OBS_STORE);
    }

    return $tags->get_updated_html();
}
add_filter('render_block_core/group', 'voyager_demo_obs_group_directives', 20, 2);

/**
 * Wire a switch button. One for a style that recorded no class is dropped:
 * WordPress printed no colours for it, so it would change nothing.
 *
 * @param string               $block_content Rendered block.
 * @param array<string, mixed> $block         Parsed block.
 */
function voyager_demo_obs_button_directives(string $block_content, array $block): string {
    $style   = '';
    $classes = preg_split('/\s+/', (string) ($block['attrs']['className'] ?? '')) ?: [];
    foreach ($classes as $class) {
        if (str_starts_with($class, 'vd-obs-show-')) {
            $style = substr($class, strlen('vd-obs-show-'));
        }
    }

    if ('' === $style) {
        return $block_content;
    }
    if ('plain' !== $style && ! isset(voyager_demo_obs_instances()[$style])) {
        return '';
    }

    $tags = new \WP_HTML_Tag_Processor($block_content);
    if ($tags->next_tag(['class_name' => 'wp-block-button__link'])) {
        $tags->set_attribute('data-wp-on--click', 'actions.select');
        $tags->set_attribute('data-wp-context', (string) wp_json_encode(['style' => $style]));
        $tags->set_attribute('data-wp-bind--aria-pressed', 'state.on.' . $style);
        $tags->set_attribute('aria-pressed', 'plain' === $style ? 'true' : 'false');
    }

    return $tags->get_updated_html();
}
add_filter('render_block_core/button', 'voyager_demo_obs_button_directives', 20, 2);

/* End of /open-blocks/sections/ section gallery. */

if (defined('WP_CLI') && WP_CLI) {
    /**
     * Seed the vd_showcase entries from seeds/showcases/.
     *
     * Content ships with the theme because the demo site has no separate
     * content pipeline — first deploy runs this once, later deploys re-run
     * it to pick up copy changes. Idempotent.
     *
     * Usage: wp voyager-demo seed-showcases
     */
    \WP_CLI::add_command('voyager-demo seed-showcases', function (): void {
        $seeds = voyager_demo_get_showcase_seeds();
        if (! $seeds) {
            \WP_CLI::error('No seed files found in seeds/showcases/.');
        }

        $created = 0;
        $updated = 0;
        foreach ($seeds as $seed) {
            $result = voyager_demo_seed_showcase($seed);
            if (is_wp_error($result)) {
                \WP_CLI::warning("{$seed['slug']}: " . $result->get_error_message());
                continue;
            }
            'created' === $result ? $created++ : $updated++;
            \WP_CLI::log("  {$result}: {$seed['slug']}");
        }

        \WP_CLI::success("Showcases seeded: {$created} created, {$updated} updated.");
    });

    /**
     * Merge design-system tokens into theme.json (deploy-time path;
     * activation re-runs it via after_switch_theme). Idempotent.
     *
     * Usage: wp voyager-demo sync-tokens
     */
    \WP_CLI::add_command('voyager-demo sync-tokens', function (): void {
        if (! function_exists('voyager_sync_tokens')) {
            \WP_CLI::error('design-system submodule missing — run `git submodule update --init` first.');
        }
        $summary = voyager_sync_tokens(VOYAGER_DEMO_PATH . '/theme.json');
        \WP_CLI::success('Tokens synced: ' . wp_json_encode($summary));
    });

    /**
     * Launch gate: every binding source consumed in theme markup must be
     * live in the registry, or its consumer must be degradation-aware
     * (calls voyager_demo_binding_live() to render an honest notice).
     *
     * Exit 0 = launch-safe. Exit 1 = at least one silent static fallback.
     *
     * Usage: wp voyager-demo check-bindings
     */
    \WP_CLI::add_command('voyager-demo check-bindings', function (): void {
        $files = array_merge(
            glob(VOYAGER_DEMO_PATH . '/patterns/*.php') ?: [],
            glob(VOYAGER_DEMO_PATH . '/parts/*.html') ?: [],
            glob(VOYAGER_DEMO_PATH . '/templates/*.html') ?: [],
            glob(VOYAGER_DEMO_PATH . '/seeds/*/*.php') ?: []
        );

        $registry = \WP_Block_Bindings_Registry::get_instance();
        $failures = 0;
        $sources  = [];

        foreach ($files as $file) {
            $content = (string) file_get_contents($file);
            if (! preg_match_all('/"source":"(voyager\/[a-z0-9-]+)"/', $content, $m)) {
                continue;
            }
            $aware = str_contains($content, 'voyager_demo_binding_live');
            foreach (array_unique($m[1]) as $source) {
                $sources[$source]['files'][] = basename($file);
                $sources[$source]['aware']   = ($sources[$source]['aware'] ?? true) && $aware;
            }
        }

        ksort($sources);
        foreach ($sources as $source => $info) {
            $files_list = implode(', ', array_unique($info['files']));
            if ($registry->is_registered($source)) {
                \WP_CLI::log("  ACTIVE            {$source}  ({$files_list})");
            } elseif ($info['aware']) {
                \WP_CLI::log("  DEGRADED-AWARE    {$source}  ({$files_list})");
            } else {
                \WP_CLI::warning("SILENT FALLBACK   {$source}  ({$files_list})");
                $failures++;
            }
        }

        if ($failures > 0) {
            \WP_CLI::error("{$failures} consumed source(s) would silently fall back. Fix before launch.");
        }
        \WP_CLI::success('Launch gate: every consumed binding source is active or visibly degraded.');
    });
}
