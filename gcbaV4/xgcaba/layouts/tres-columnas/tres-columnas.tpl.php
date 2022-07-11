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
<div class="panel-display clearfix panel-layout-tres-columnas" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
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
			<div class="">
				<!-- First column -->
				<div class="panel-panel panel-bastrap-4 col-md-4 col-sm-6 col-xs-12">
					<div class="list-group list-group-content">
						<?php print $content['body-left']; ?>
					</div>
				</div>
				<!-- Second column -->
				<div class="panel-panel panel-bastrap-4 col-md-4 col-sm-6 col-xs-12">
					<div class="list-group list-group-content">
						<?php print $content['body-middle']; ?>
					</div>
				</div>
				<!-- Third column -->
				<div class="panel-panel panel-bastrap-4 col-md-4 col-sm-6 col-xs-12 panel-bastrap-last">
					<div class="list-group list-group-content">
						<?php print $content['body-right']; ?>
					</div>
				</div>
			</div>
			<!-- Bottom content -->
			<div class="panel-panel panel-bastrap-12 col-md-12 col-sm-12 col-xs-12">
				<div><?php print $content['bottom']; ?></div>
			</div>
		</div>
	</div>
</div>