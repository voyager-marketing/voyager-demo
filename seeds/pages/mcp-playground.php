<?php
/**
 * Seed: /mcp-playground/ page — interactive tool-call console (TK-2162).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'post_type'  => 'page',
    'slug'       => 'mcp-playground',
    'title'      => 'MCP Playground',
    'excerpt'    => 'Fire a read-only Voyager tool call from your browser and read the raw JSON that comes back.',
    'menu_order' => 1,
    'content'    => <<<'HTML'
<!-- wp:heading {"level":1,"fontSize":"4xl","style":{"typography":{"letterSpacing":"-0.03em"}}} -->
<h1 class="wp-block-heading has-4-xl-font-size" style="letter-spacing:-0.03em">MCP Playground</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3","fontSize":"lg"} -->
<p class="has-fg-3-color has-text-color has-lg-font-size">This is what an AI agent sees when it talks to a Voyager site. Pick a tool, read the request we are about to send, fire it, and read the response — unedited, in whatever shape the tool actually returns.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"fg-4"} -->
<p class="has-fg-4-color has-text-color">Every tool here is read-only and whitelisted server-side. Your browser never talks to the Voyager MCP surface directly — it posts a tool name to this site, and this site does the rest. That is not a demo shortcut; it is how the boundary is supposed to work, and it is why there is no endpoint URL or token anywhere in this page's source for you to find.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/mcp-playground"} /-->

<!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
<p class="has-fg-4-color has-text-color has-sm-font-size">Four tools is a curated slice, not the surface area. The <a href="/abilities/">abilities page</a> enumerates every ability registered on this site — currently well over a hundred — with full input and output schemas, read live from the registry on each change.</p>
<!-- /wp:paragraph -->
HTML,
];
