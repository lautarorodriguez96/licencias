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
<?php foreach ($rows as $id => $row){?>
  <?php
    $custom_classes='';
    if(preg_match("/portada/",$row)){
        $custom_classes.=' grid_8 destacada';   
    }else{
        $custom_classes.=' grid_4';
        if(!preg_match("/imagen/",$row)){
         $custom_classes.=' no-image';   
        }
        if(preg_match("/asi/",$row)){
          $custom_classes.=' asi';
        }
    }
    ?>  
  <div class="<?php print $classes_array[$id]; print $custom_classes; ?>">
    <?php print $row; ?>
  </div>
<?php }
drupal_add_js(drupal_get_path('theme', 'gcba').'/js/jquery.masonry.min.js');
drupal_add_js('
jQuery(document).ready(function () { 
	jQuery("#container-noticias").masonry({
		itemSelector: ".views-row",
		columnWidth: 320,
		isAnimated: true
	});    
 });', 'inline');
?>