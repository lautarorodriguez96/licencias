<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php 
	$n=sizeof($rows);
	$a=0;
?>
<?php foreach ($rows as $id => $row): ?>
<div class="<?php print $classes_array[$id];?> grid_3 alpha">
	<div class="canvas">
		<?php print $row; ?>
	</div>
	<?php $a++;?>
</div>
<?php endforeach; ?>
<div class="clear"></div>