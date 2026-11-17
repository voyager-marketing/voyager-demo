<?php
/**
 * Title: Open Blocks section gallery (live)
 * Slug: voyager-demo/open-blocks-sections
 * Categories: voyager-demo
 * Keywords: open blocks, sections, section styles, patterns, gallery, live
 * Inserter: no
 *
 * Dynamic listing: every voyager-open/* pattern the installed pack registers,
 * grouped by section, under a Plain, Panel, Inverted and Accent switch. The
 * content comes from voyager_demo_obs_markup() in functions.php, which reads
 * the pattern registry per request. No hand-maintained content in this file.
 * Out of the inserter: it is a page's body, not a section to place.
 */

echo voyager_demo_obs_markup(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialized block markup, escaped as it is built.
