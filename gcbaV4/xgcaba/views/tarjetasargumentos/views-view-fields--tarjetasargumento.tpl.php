<?php
drupal_add_css(path_to_theme().'/views/tarjetasargumentos/css/tarjetas.css');


/**
 * @file
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
// echo sizeof($fields);
//var_dump($fields);
//var_dump($row);

$fondo = $row->_field_data['nid']['entity']->field_fondo_blanco['und'][0]['value'];

if($fondo == 'Blanco'){
	
	$estilo = 'tarjetasBlanco';

}else{
	
	$estilo = 'tarjetasGris';
}

$cantidad = sizeof($row->field_field_grupo_tarjeta);

$titulo = $row->_field_data['nid']['entity']->title;


echo "<div><h2>".$titulo."</h2></div>";

echo '<div class="'.$estilo.'">';

echo '<div class="row">';

foreach ($fields as $id => $field ){
	
	echo $field->content;
}

echo "</div></div>";
  
	 
?>
