<?php
/**
 * @file
 * Template for a 2 column panel layout.
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
<!-- Full width content -->
<div class="panel-panel panel-panel-full-width">
	<div><?php print $content['full']; ?></div>
</div>
<div class="container">
	<!--
	<header class="jumbotron jumbotron-main jumbotron-small area-header">
		<div>
			<?php print $content['header']; ?>
		</div>
	</header>
	-->
	<section>
		<div class="row row-grid">
			<div class="col-md-8">
				<?php print $content['top']; ?>
			</div>
		</div>
	</section>
	<section>
		<div class="row row-shortcut">
			<?php print $content['middle']; ?>
		</div>
	</section>

	<div class="row">
		<section class="col-md-4 col-sm-6 list-group list-group-content">
				<?php print $content['bottom-left']; ?>
		</section>

		<section class="col-md-4 col-sm-6 list-group list-group-content">
				<?php print $content['bottom-middle']; ?>
		</section>

		<section class="col-md-4 col-sm-6 list-group list-group-content">
				<?php print $content['bottom-right']; ?>
		</section>
	</div>
	<div class="row">
		<section class="big-heading">
			<?php print $content['footer']; ?>
		</section>
	</div>
	<div id="estiloParaAdmin"></div>
</div>