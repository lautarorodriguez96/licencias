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
 *   $content['body-top-left']: The top left panel in the layout.
 *   $content['body-top-middle']: The top middle panel in the layout.
 *   $content['body-top-right']: The top right panel in the layout.
 *   $content['body-bottom-left']: The bottom right panel in the layout.
 *   $content['body-top-right']: The bottom right panel in the layout.
 *   $content['bottom']: The bottom panel in the layout.
 */
?>
<div class="panel-display clearfix panel-layout-tres-columnas-extends" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<!-- Full width content -->
	<div class="panel-panel panel-panel-full-width">
		<div><?php print $content['full']; ?></div>
	</div>
	<div class="container">
		<div class="row">
			<!-- Top content -->
			<div class="panel-panel panel-bastrap-12 col-md-12">
				<?php print $content['top']; ?>
			</div>
			<!-- Body top left -->
			<div class="panel-panel panel-bastrap-4 col-md-4 col-sm-6 col-xs-12">
				<div class="list-group list-group-content">
					<?php print $content['body-top-left']; ?>
				</div>
			</div>
			<!-- Body top middle -->
			<div class="panel-panel panel-bastrap-4 col-md-4 col-sm-6 col-xs-12">
				<div class="list-group list-group-content">
					<?php print $content['body-top-middle']; ?>
				</div>
			</div>
			<!-- Body top right -->
			<div class="panel-panel panel-bastrap-4 col-md-4 col-sm-6 col-xs-12 panel-bastrap-last">
				<div class="list-group list-group-content">
					<?php print $content['body-top-right']; ?>
				</div>
			</div>
			<!-- Body bottom left -->
			<div class="panel-panel panel-bastrap-8 col-md-8 col-sm-6 col-xs-12 panel-bastrap-last">
				<div class="list-group list-group-content">
					<?php print $content['body-bottom-left']; ?>
				</div>
			</div>
			<!-- Body bottom right -->
			<div class="panel-panel panel-bastrap-4 col-md-4 col-sm-6 col-xs-12 panel-bastrap-last">
				<div class="list-group list-group-content">
					<?php print $content['body-bottom-right']; ?>
				</div>
			</div>
			<!-- Bottom content -->
			<div class="panel-panel panel-bastrap-12 col-md-12 col-sm-12 col-xs-12">
				<div><?php print $content['bottom']; ?></div>
			</div>
		</div>
	</div>
</div>