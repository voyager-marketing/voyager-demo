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

/**
 * Enqueue parent + child styles.
 */
function voyager_demo_enqueue_styles(): void {
    wp_enqueue_style(
        'voyager-block-theme-style',
        get_template_directory_uri() . '/style.css',
        [],
        wp_get_theme()->parent()?->get('Version') ?: '1.0.0'
    );

    wp_enqueue_style(
        'voyager-demo-style',
        get_stylesheet_uri(),
        ['voyager-block-theme-style'],
        VOYAGER_DEMO_VERSION
    );

    $custom_css = VOYAGER_DEMO_PATH . '/assets/css/custom.css';
    if (file_exists($custom_css)) {
        wp_enqueue_style(
            'voyager-demo-custom',
            VOYAGER_DEMO_URI . '/assets/css/custom.css',
            ['voyager-demo-style'],
            VOYAGER_DEMO_VERSION
        );
    }
}
add_action('wp_enqueue_scripts', 'voyager_demo_enqueue_styles');

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

    $total_pseo    = $sa_count + $ip_count + $nb_count;
    $total_content = $total_pseo + $blog_count;

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
    $content_types = "'post','service_area','industry_page','neighborhood'";

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

    $existing = get_posts([
        'post_type'      => $post_type,
        'name'           => (string) $seed['slug'],
        'post_status'    => 'any',
        'posts_per_page' => 1,
        'fields'         => 'ids',
    ]);

    $postarr = [
        'post_type'    => $post_type,
        'post_name'    => (string) $seed['slug'],
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

    $html = '<!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} --><p class="has-fg-4-color has-text-color has-sm-font-size">'
        . sprintf(
            /* translators: 1: ability count, 2: category count */
            esc_html__('%1$d abilities in %2$d categories, enumerated live from this site\'s registry on every change. Nothing on this page is hand-maintained.', 'voyager-demo'),
            count($abilities),
            count($by_category)
        )
        . '</p><!-- /wp:paragraph -->';

    foreach ($by_category as $category => $items) {
        $label = $category_labels[$category] ?? ucwords(str_replace('-', ' ', $category));

        $html .= '<!-- wp:heading {"level":2,"fontSize":"2xl"} --><h2 class="wp-block-heading has-2xl-font-size">'
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
                $html .= '<!-- wp:paragraph {"textColor":"fg-5","fontSize":"xs"} --><p class="has-fg-5-color has-text-color has-xs-font-size">'
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
}
