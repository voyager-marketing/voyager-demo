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
