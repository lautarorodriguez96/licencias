<?php
/**
 * @file
 * Template for a 1 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['top']: The top panel in the layout.
 *   $content['middle_top']: The top panel in the layout.
 *   $content['middle']: The middle panel in the layout.
 *   $content['middle_bottom_left']: The middle bottom left panel in the layout.
 *   $content['middle_bottom_center']: The middle bottom center panel in the layout.
 *   $content['middle_bottom_right']: The middle bottom right panel in the layout.
 *   $content['bottom']: The bottom panel in the layout.
 */
?>
<div class="panel-display clearfix panel-layout-columna-main row" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<!-- Top content -->
	<div class="panel-panel clearfix">
		<div><?php print $content['top']; ?></div>
	</div>
	<!-- Sidebar content -->
	<div class="panel-panel panel-bastrap-4 col-md-4">
		<!-- <nav> ? -->
		<div><?php print $content['sidebar']; ?></div>
	</div>
	<!-- Main content -->
	<div class="panel-panel panel-bastrap-8 col-md-8">
		<!-- <article> ? -->
		<div><?php print $content['body']; ?></div>
	</div>
	<!-- Bottom content -->
	<div class="panel-panel panel-bastrap-12 col-md-12">
		<div><?php print $content['bottom']; ?></div>
	</div>
</div>