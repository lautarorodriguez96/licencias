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
<div class="panel-display clearfix panel-layout-una-columna" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <!-- Full width content -->
  <div class="panel-panel panel-panel-full-width">
    <div><?php print $content['full']; ?></div>
  </div>
  <div class="container">
    <div class="row">
      <!-- Top content -->
      <div class="panel-panel col-md-8 col-md-offset-2">
        <?php print $content['top']; ?>
      </div>
      <!-- Middle column -->
      <div class="panel-panel col-md-8 col-md-offset-2">
        <div><?php print $content['body-middle']; ?></div>
      </div>
      <!-- Bottom content -->
      <div class="panel-panel col-md-8 col-md-offset-2">
        <div><?php print $content['bottom']; ?></div>
      </div>
    </div>
  </div>
</div>