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

IMPORTANTE PARA CARGAR UN CSS PERTENECIENTE A LA VISTA. 

TENES QUE AGREGAR EN /themes/gcbaV4/xgcaba/template.php en la funcion xgcaba_preprocess_views_view(&$vars) ; la vista 

Y el css que creas lo cargas en: /var/www/buenosaires/sites/gcaba/themes/gcbaV4/xgcaba/css/views

Haces el llamado a la vista para que llame al css correspondiente. 

function xgcaba_preprocess_views_view(&$vars) {
    $view = $vars['view'];

    // preguntas si estas llamanado a tu vista
    if ($view->name == 'nombre de tu vista') {
    
       drupal_add_css(drupal_get_path('theme','xgcaba') .'/css/views/nombre de tu css.css');
   }
	
	//llamado al css para la vista tarjetas
	if ($view->name == 'tarjetas') {
    
       drupal_add_css(drupal_get_path('theme','xgcaba') .'/css/views/tarjetas.css');
   }
}
 */		
		$link = $row->field_field_link[0]['raw']['url'];
		$titulo = $row->node_title;

?>	
<div class="btnEnlace">
	<a href="<?php echo $link ?>" target="_blank">
		<button type="button" class="btn btn-lg btn-primary mb-1 trans hidden-xs"><?php print $titulo ?></button>
		<button type="button" class="btn btn-md btn-primary visible-xs mb-1 trans"><?php print $titulo ?></button>
	</a>
</div>


