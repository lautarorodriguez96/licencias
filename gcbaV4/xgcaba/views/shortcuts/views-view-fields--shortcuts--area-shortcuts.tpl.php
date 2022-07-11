<?php
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php
$clasefondo= !empty($row->field_field_color[0]['raw']['value']) ? $row->field_field_color[0]['raw']['value'] : 'bg-gray-3';
$colorfondo= !empty($row->_field_data['nid']['entity']->field_colorbox['und'][0]['rgb']) ? $row->_field_data['nid']['entity']->field_colorbox['und'][0]['rgb'] : '';
if(function_exists('gcaba_shortcuts_imagen_existe')){
	$icono = gcaba_shortcuts_imagen_existe($row->field_field_imagen_list[0]['raw']['value']);
}
?>
<?php /* echo (user_access('create shortcut content') ? '<a class="inline-edit borde-azul" href="node/'.$row->nid.'/edit?destination='.current_path().'">' : ''); //harsh! */ ?>

<div class="col-md-3 col-sm-6 col-xs-12 borde-azul">
	<a class="shortcut" href="<?php echo $row->field_field_link[0]['raw']['url'] ?>" title="" alt="">

        <span class="bg-warning-lt <?php echo $clasefondo; ?>" style="background-color: <?php echo $colorfondo; ?>">
          	<span <?php if(isset($icono)) { echo $icono; } ?> ></span>
        </span>
        
        <h3> <?php echo $row->node_title ?> </h3>
        <p> <?php echo $row->field_field_description[0]['raw']['value']?> </p>

      </a>
</div>





<?php /*  

<a class="shortcut" href="<?php echo $row->field_field_link[0]['raw']['url'] ?>">
				<span class="<?php echo $clasefondo; ?>" style="background-color: <?php echo $colorfondo; ?>">
			     	<span <?php if(isset($icono)) { echo $icono; } ?> ></span>
			 	</span>
			   	<h3><?php echo $row->node_title ?></h3>
			   	<p><?php echo $row->field_field_description[0]['raw']['value']; ?></p>
</a>

*/?>


