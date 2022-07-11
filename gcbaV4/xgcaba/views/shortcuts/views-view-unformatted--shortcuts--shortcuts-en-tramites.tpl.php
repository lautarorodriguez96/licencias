<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="shortcuts_top separador"></div>
<?php 
	$n=sizeof($rows);
	$a=0; 
	foreach ($rows as $id => $row){
	$grids_classes='';
	if($a==0 || $a==4){
		$grids_classes.=' alpha';
	}
	if($a==3 || $a==7){
		$grids_classes.=' omega';
	}
?>
<div class="<?php print $classes_array[$id]; print $grids_classes?> grid_3">
	<div class="canvas">
		<?php print $row; ?>
	</div>
</div>
<?php 
	$a++;
	if($a%4==0){
?>
	<div class="clear"></div>
<?php
		if($a==4 && $n>4){?>
	<div class="shortcuts_middle separador"></div>
	<?php }
	}
}
?>
<div class="clear"></div>
<div class="shortcuts_bottom separador"></div>
