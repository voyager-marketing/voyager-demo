<?php
/**
 * Title: MCP Playground (live tool calls)
 * Slug: voyager-demo/mcp-playground
 * Categories: voyager-demo
 * Keywords: mcp, playground, tools, api, agents, json, interactive, live
 * Block Types: core/group
 *
 * Interactive tool-call console. The picker, request previews and explainers
 * are server-rendered HTML; the Interactivity API view module registered in
 * functions.php takes over selection and the call itself.
 *
 * First-paint attributes (hidden / aria-selected / is-selected) are written
 * here in PHP on purpose — see the note at the top of assets/js/mcp-playground.js
 * for why deriving them from the store instead would flash every panel open.
 *
 * Copy is deliberately blunt about which mode the page is in. In recorded
 * mode this page is showing real captured responses, and saying so is the
 * whole reason a developer trusts the rest of the site.
 */

declare(strict_types=1);

$vd_tools = voyager_demo_mcp_tools();

if (! $vd_tools) {
    return;
}

$vd_mode     = voyager_demo_mcp_mode();
$vd_selected = (string) $vd_tools[0]['slug'];

voyager_demo_mcp_playground_boot($vd_selected);
?>
<!-- wp:group {"align":"full","backgroundColor":"bg-canvas","textColor":"fg-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull has-bg-canvas-background-color has-fg-1-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)">

<div class="vd-mcp" data-wp-interactive="voyager-demo/mcp-playground">

    <?php if ('recorded' === $vd_mode) : ?>
        <p class="vd-mcp__mode vd-mcp__mode--recorded">
            <span class="vd-mcp__badge">Recorded</span>
            <?php esc_html_e('The demo-scoped public endpoint has not shipped yet, so every response below is a real one captured earlier — not a call happening now. Pressing Run makes a genuine request to this site and returns the recording. Nothing is simulated and no latency is invented; when the endpoint goes live, one config value flips this page to real calls and the copy here changes with it.', 'voyager-demo'); ?>
        </p>
    <?php else : ?>
        <p class="vd-mcp__mode vd-mcp__mode--live">
            <span class="vd-mcp__badge">Live</span>
            <?php esc_html_e('These are real calls, made when you press Run, against the demo-scoped public endpoint. Read-only tools only. The response below is whatever came back.', 'voyager-demo'); ?>
        </p>
    <?php endif; ?>

    <div class="vd-mcp__layout">

        <div class="vd-mcp__tools" role="tablist" aria-label="<?php esc_attr_e('Whitelisted tools', 'voyager-demo'); ?>">
            <?php foreach ($vd_tools as $vd_tool) :
                $vd_slug        = (string) $vd_tool['slug'];
                $vd_is_selected = $vd_slug === $vd_selected;
                ?>
                <button
                    type="button"
                    role="tab"
                    id="vd-mcp-tab-<?php echo esc_attr($vd_slug); ?>"
                    class="vd-mcp__tool<?php echo $vd_is_selected ? ' is-selected' : ''; ?>"
                    aria-controls="vd-mcp-panel-<?php echo esc_attr($vd_slug); ?>"
                    aria-selected="<?php echo $vd_is_selected ? 'true' : 'false'; ?>"
                    data-wp-context='<?php echo esc_attr((string) wp_json_encode(['tool' => $vd_slug])); ?>'
                    data-wp-on--click="actions.select"
                    data-wp-bind--aria-selected="state.isSelected"
                    data-wp-class--is-selected="state.isSelected"
                >
                    <span class="vd-mcp__tool-slug"><?php echo esc_html($vd_slug); ?></span>
                    <span class="vd-mcp__tool-family"><?php echo esc_html((string) ($vd_tool['family'] ?? '')); ?></span>
                </button>
            <?php endforeach; ?>
        </div>

        <div class="vd-mcp__detail">

            <?php foreach ($vd_tools as $vd_tool) :
                $vd_slug        = (string) $vd_tool['slug'];
                $vd_is_selected = $vd_slug === $vd_selected;
                $vd_request     = (string) wp_json_encode(
                    $vd_tool['request'] ?? [],
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                );
                ?>
                <div
                    class="vd-mcp__panel"
                    role="tabpanel"
                    id="vd-mcp-panel-<?php echo esc_attr($vd_slug); ?>"
                    aria-labelledby="vd-mcp-tab-<?php echo esc_attr($vd_slug); ?>"
                    data-wp-context='<?php echo esc_attr((string) wp_json_encode(['tool' => $vd_slug])); ?>'
                    data-wp-bind--hidden="state.isNotSelected"
                    <?php echo $vd_is_selected ? '' : 'hidden'; ?>
                >
                    <p class="vd-mcp__summary"><?php echo esc_html((string) ($vd_tool['summary'] ?? '')); ?></p>

                    <h3 class="vd-mcp__label"><?php esc_html_e('The request', 'voyager-demo'); ?></h3>
                    <pre class="vd-mcp__code"><code>POST /demo/tools/call
<?php echo esc_html($vd_request); ?></code></pre>

                    <h3 class="vd-mcp__label"><?php esc_html_e('What it reads', 'voyager-demo'); ?></h3>
                    <p class="vd-mcp__prose"><?php echo esc_html((string) ($vd_tool['reads'] ?? '')); ?></p>

                    <h3 class="vd-mcp__label"><?php esc_html_e('Why this one is here', 'voyager-demo'); ?></h3>
                    <p class="vd-mcp__prose"><?php echo esc_html((string) ($vd_tool['why'] ?? '')); ?></p>

                    <?php if ('recorded' === $vd_mode && ! empty($vd_tool['recorded_from'])) : ?>
                        <p class="vd-mcp__provenance">
                            <?php
                            echo esc_html(sprintf(
                                /* translators: 1: site the response was captured from, 2: capture date. */
                                __('Recorded against %1$s on %2$s.', 'voyager-demo'),
                                (string) $vd_tool['recorded_from'],
                                (string) ($vd_tool['recorded_at'] ?? '')
                            ));
                            ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>

            <div class="vd-mcp__runner">
                <button
                    type="button"
                    class="vd-mcp__run"
                    data-wp-on--click="actions.run"
                    data-wp-bind--disabled="state.isCalling"
                    data-wp-text="state.buttonLabel"
                ><?php esc_html_e('Run this call', 'voyager-demo'); ?></button>

                <p class="vd-mcp__latency" data-wp-text="state.latency" data-wp-bind--hidden="state.hasNoLatency" hidden></p>
            </div>

            <p class="vd-mcp__idle" data-wp-bind--hidden="state.hasResponseOrError">
                <?php esc_html_e('The response appears here, unedited and unformatted beyond indentation.', 'voyager-demo'); ?>
            </p>

            <p class="vd-mcp__error" data-wp-text="state.error" data-wp-bind--hidden="state.hasNoError" hidden></p>

            <pre class="vd-mcp__code vd-mcp__response" data-wp-bind--hidden="state.hasNoResponse" hidden><code data-wp-text="state.response"></code></pre>

        </div>
    </div>

    <noscript>
        <p class="vd-mcp__mode">
            <?php esc_html_e('This console needs JavaScript to switch tools and make calls — it is a client talking to an API, so there is no meaningful no-JS version. The request shapes above are accurate and callable yourself; the /abilities/ page lists every ability on this site with its full input and output schema, and needs no JavaScript at all.', 'voyager-demo'); ?>
        </p>
    </noscript>

</div>

</div>
<!-- /wp:group -->
