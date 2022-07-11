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
<div class="<?php print $classes_array[$id]; if ($a/2==1){ print ' rounded-14-top-right';} if(($a+1)%3==0&&$a!=0){print ' omega';}?> grid_3 alpha">
	<div class="canvas">
		<?php print $row; ?>
	</div>
	<?php $a++;?>
	<?php if(!$a%2){print '<div clas="clear"></div>';}?>
</div>
<?php endforeach; ?>
<div class="clear"></div>