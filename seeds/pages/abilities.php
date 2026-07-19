<?php
/**
 * Seed: /abilities/ page — live ability registry (TK-2164).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'post_type'  => 'page',
    'slug'       => 'abilities',
    'title'      => 'Abilities',
    'excerpt'    => 'Every ability registered on this site — core and Voyager — enumerated live with schemas.',
    'menu_order' => 0,
    'content'    => <<<'HTML'
<!-- wp:paragraph -->
<p>This is the registry, not a brochure. Every entry below is read from the WordPress Abilities API on this site — the same registry AI agents hit over MCP — with its permission annotations and JSON schemas. Register a new ability and it appears here; deactivate its plugin and it disappears. Nobody edits this page.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/abilities-registry"} /-->
HTML,
];
