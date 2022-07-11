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
 *   $content['middle']: The only panel in the layout.
 */
?>
<div class="container_12">
  <div class="grid_12">
  	<?php if(isset($content['middle'])): ?>
    	<div><?php print $content['middle']; ?></div>
  	<?php endif; ?>
  </div>
</div>
