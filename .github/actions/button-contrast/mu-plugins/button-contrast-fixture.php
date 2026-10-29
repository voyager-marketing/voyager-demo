<?php
/**
 * Plugin Name: Voyager Button Contrast Fixture
 * Description: Test-environment fixture for the button-contrast action's spec (VOY-1874, VOY-1885). Never shipped with any theme.
 * Version: 1.1.0
 *
 * Mounted into wp-content/mu-plugins by .github/actions/button-contrast/run.mjs.
 * It is NOT part of any distributed theme: it lives under .github/, which
 * build-release.yml excludes, and a theme that calls the action from another
 * repo never holds a copy.
 *
 * Ported from voyager-block-theme's tests/visual/mu-plugins/vr-harness.php
 * (VOY-1854), with one deliberate difference. The parent's fixture binds the
 * design system's palette, because the parent ships none. This one binds
 * nothing: every button is painted by this child's theme.json and stylesheets
 * over the parent's rules, which is exactly what a child can get wrong. On
 * demo.voyagermark.com the filled hover drifted to 4.13:1 in the child alone
 * (VOY-1870), with the parent's own gate green.
 *
 * Query arguments, all read-only:
 *
 *   ?button_contrast=fixtures        JSON: the page, the styles, the surfaces, the palette.
 *   ?button_contrast=1               on the fixture page: every style on every surface.
 *   &button_contrast_known_bad=1     plants accent text on the outline hover's accent fill.
 *
 * @package VoyagerBlankChild
 */

declare(strict_types=1);

namespace VoyagerBlankChild\ButtonContrast;

if (! defined('ABSPATH')) {
    exit;
}

const PAGE_SLUG = 'button-contrast';

/**
 * The default surfaces a button is measured on, by palette slug.
 *
 * DESIGN.md: bg-canvas is the page ground, bg-panel alternates with it, and
 * bg-raised is for cards. voyager-blank-child paints a dark palette only, so
 * there is no light surface here. A theme that paints more (a light section, a
 * brand band) adds its background slugs through the
 * `voyager_button_contrast_surfaces` filter; see surfaces().
 */
const SURFACES = ['bg-canvas', 'bg-panel', 'bg-raised'];

/**
 * The surfaces this run measures: the defaults, as the theme under test filters them.
 *
 * The fixture is shared by every theme that calls the action, so a theme never
 * edits it. It hooks the filter instead, from its own functions.php or inc/:
 *
 *     add_filter('voyager_button_contrast_surfaces', static fn (array $surfaces): array => [...$surfaces, 'bg-light']);
 *
 * Nothing outside this fixture applies the filter, so the hook is inert on a
 * real site. Each slug must name a colour in the theme's palette; the spec
 * fails a surface the palette does not declare, and fails a run with no
 * surfaces at all.
 *
 * @return list<string> Palette slugs, deduplicated, in the filtered order.
 */
function surfaces(): array {
    /**
     * Filters the palette slugs the button contrast gate paints a surface for.
     *
     * @param list<string> $surfaces Palette slugs. Default bg-canvas, bg-panel, bg-raised.
     */
    $filtered = apply_filters('voyager_button_contrast_surfaces', SURFACES);
    $surfaces = [];
    foreach (is_array($filtered) ? $filtered : [] as $surface) {
        $slug = is_string($surface) ? sanitize_key($surface) : '';
        if ('' !== $slug) {
            $surfaces[] = $slug;
        }
    }
    return array_values(array_unique($surfaces));
}

/**
 * Read a fixture query argument.
 *
 * Test environment only, so there is no nonce: every argument selects a
 * read-only rendering path and none of them writes state.
 *
 * @param string $key Query argument name.
 * @return string Sanitized value, or '' when absent.
 */
function arg(string $key): string {
    // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- read-only test fixture switch.
    if (! isset($_GET[$key]) || ! is_string($_GET[$key])) {
        return '';
    }
    // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- read-only test fixture switch.
    return sanitize_key(wp_unslash($_GET[$key]));
}

/**
 * Whether this request renders the fixture page.
 */
function is_fixture_request(): bool {
    return '1' === arg('button_contrast');
}

/**
 * Create the fixture page once per install.
 */
function seed(): void {
    if (get_page_by_path(PAGE_SLUG) instanceof \WP_Post) {
        return;
    }

    wp_insert_post([
        'post_type'    => 'page',
        'post_status'  => 'publish',
        'post_title'   => 'Button contrast',
        'post_name'    => PAGE_SLUG,
        'post_content' => '<!-- wp:paragraph --><p>Replaced by the button contrast fixture.</p><!-- /wp:paragraph -->',
    ]);
}
add_action('init', __NAMESPACE__ . '\\seed', 20);

/**
 * Every style core/button offers on this site, the default first.
 *
 * Read from the registries rather than listed, so a style the child (or the
 * parent) registers is measured without a second edit here. The default style
 * carries no class.
 *
 * @return array{default: string, styles: list<string>}
 */
function button_styles(): array {
    $default = 'fill';
    $styles  = [];

    $type = \WP_Block_Type_Registry::get_instance()->get_registered('core/button');
    foreach ($type instanceof \WP_Block_Type ? $type->styles : [] as $style) {
        if (! is_array($style) || ! is_string($style['name'] ?? null)) {
            continue;
        }
        $styles[] = $style['name'];
        if (! empty($style['isDefault'])) {
            $default = $style['name'];
        }
    }

    foreach (array_keys(\WP_Block_Styles_Registry::get_instance()->get_registered_styles_for_block('core/button')) as $name) {
        $styles[] = (string) $name;
    }

    $styles = array_values(array_unique($styles));
    usort($styles, static fn (string $a, string $b): int => ($b === $default) <=> ($a === $default));

    return ['default' => $default, 'styles' => $styles];
}

/**
 * The theme palette as WordPress merged it, slug => colour.
 *
 * The spec checks each surface's computed background against this, which is
 * what proves the child's theme.json is the paint being measured.
 *
 * @return array<string, string>
 */
function palette(): array {
    $palette = [];
    $entries = wp_get_global_settings(['color', 'palette', 'theme']);
    foreach (is_array($entries) ? $entries : [] as $entry) {
        if (is_array($entry) && is_string($entry['slug'] ?? null) && is_string($entry['color'] ?? null)) {
            $palette[$entry['slug']] = $entry['color'];
        }
    }
    return $palette;
}

/**
 * Report the fixture so the spec builds URLs and assertions from it.
 */
function fixtures_endpoint(): void {
    if ('fixtures' !== arg('button_contrast')) {
        return;
    }

    $page = get_page_by_path(PAGE_SLUG);

    wp_send_json([
        'page'       => $page instanceof \WP_Post ? $page->ID : 0,
        'home'       => home_url('/'),
        'stylesheet' => get_stylesheet(),
        'template'   => get_template(),
        'buttons'    => button_styles(),
        'surfaces'   => surfaces(),
        'palette'    => palette(),
    ]);
}
add_action('template_redirect', __NAMESPACE__ . '\\fixtures_endpoint', 1);

/**
 * One surface: every style as a link, then every style as a disabled <button>.
 *
 * @param string $surface Palette slug of the surface's background.
 * @return string Block markup.
 */
function surface_section(string $surface): string {
    $buttons = button_styles();
    $rows    = '';

    foreach ([false, true] as $disabled) {
        $inner = '';
        foreach ($buttons['styles'] as $style) {
            $is_default = $style === $buttons['default'];
            $attrs      = $is_default ? [] : ['className' => 'is-style-' . $style];
            $data       = sprintf('data-contrast-surface="%s" data-contrast-style="%s"', esc_attr($surface), esc_attr($style));

            if ($disabled) {
                $attrs['tagName'] = 'button';
                $element          = sprintf('<button type="button" class="wp-block-button__link wp-element-button" %s disabled>%s, disabled</button>', $data, esc_html($style));
            } else {
                $element = sprintf('<a class="wp-block-button__link wp-element-button" href="#%s-%s" %s>%s</a>', esc_attr($surface), esc_attr($style), $data, esc_html($style));
            }

            $inner .= sprintf(
                '<!-- wp:button %s --><div class="wp-block-button%s">%s</div><!-- /wp:button -->',
                (string) wp_json_encode((object) $attrs),
                $is_default ? '' : ' is-style-' . esc_attr($style),
                $element
            );
        }
        $rows .= '<!-- wp:buttons --><div class="wp-block-buttons">' . $inner . '</div><!-- /wp:buttons -->';
    }

    // No textColor: the section takes the site's own text colour, as a real
    // section does, so a style that inherits it (ghost) is measured honestly.
    return sprintf(
        '<!-- wp:group {"className":"button-contrast-surface button-contrast-surface--%1$s","backgroundColor":"%1$s","layout":{"type":"constrained"}} -->'
            . '<div class="wp-block-group button-contrast-surface button-contrast-surface--%1$s has-%1$s-background-color has-background">'
            . '<!-- wp:paragraph --><p>%1$s</p><!-- /wp:paragraph -->%2$s</div><!-- /wp:group -->',
        esc_attr($surface),
        $rows
    );
}

/**
 * Swap the fixture page's content for the button fixture.
 *
 * Ahead of do_blocks (priority 9), so the buttons render through the child's
 * real page template and core/post-content, and the block-library, parent,
 * child and global stylesheets load in their production order. That order is
 * what is under test: the 1.02:1 hover VOY-1854 fixed was a cascade defect.
 *
 * @param string $content Post content.
 * @return string Post content.
 */
function button_fixture(string $content): string {
    if (! is_fixture_request()) {
        return $content;
    }

    $page = get_page_by_path(PAGE_SLUG);
    if (! $page instanceof \WP_Post || get_the_ID() !== $page->ID) {
        return $content;
    }

    return implode("\n\n", array_map(__NAMESPACE__ . '\\surface_section', surfaces()));
}
add_filter('the_content', __NAMESPACE__ . '\\button_fixture', 1);

/**
 * Freeze motion, and plant the known-bad control when asked.
 *
 * A transition samples a colour mid-interpolation, which is a flake with no
 * upper bound, so every transition is switched off for the fixture.
 *
 * `button_contrast_known_bad=1` adds the rule VOY-1854 deleted from the
 * parent's core-button.css, verbatim: accent text, !important, on an outline
 * button whose hover fills with accent. The spec must see it fail.
 */
function fixture_styles(): void {
    if (! is_fixture_request()) {
        return;
    }

    $css = '*,*::before,*::after{transition:none!important;animation:none!important;}';

    if ('1' === arg('button_contrast_known_bad')) {
        $css .= '.wp-block-button.is-style-outline .wp-block-button__link:hover{color:var(--wp--preset--color--accent, currentColor) !important;}';
    }

    printf("<style id='voyager-button-contrast'>%s</style>\n", $css); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static CSS literal, no request data.
}
add_action('wp_head', __NAMESPACE__ . '\\fixture_styles', 1000);

add_filter('show_admin_bar', '__return_false');
