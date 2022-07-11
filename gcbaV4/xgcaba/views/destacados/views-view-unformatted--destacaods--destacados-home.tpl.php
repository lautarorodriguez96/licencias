<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="shortcuts_top separador"></div>
<div class="canvas grid_12 alpha omega">
<div class="wrapper">
  	<div class="view-content">
	<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php 
	$n=sizeof($rows);
	$a=0;
	$m=0;
?>
<?php 
	foreach ($rows as $id => $row){
		if($a%4==0){
			if($a!='0'){
				print '</div>';
			}
			print '<div class="subwrapper grid_12 alpha omega">';
			$m++;		
		} 
?>
<div class="<?php print $classes_array[$id];?> grid_3<?php if($a%4==0){print ' alpha';}else if(($a+1)%4==0){ print ' omega';} ?>">
	<?php print $row; ?>
	<?php $a++;?>
</div>
<?php 
	} 
	print '</div>';
?>
	</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="shortcuts_bottom separador"></div>

<div class="clear"></div>