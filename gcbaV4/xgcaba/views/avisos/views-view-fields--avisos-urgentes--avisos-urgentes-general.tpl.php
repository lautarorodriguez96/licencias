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
global $language;

$nid = $row->nid;
$node = node_load($nid);
$avisoTitle = $node->title;
$avisoTipo = (!empty($node->field_tipo_aviso)) ? $node->field_tipo_aviso['und'][0]['value'] : 'general';
$avisoNivel = (!empty($node->field_nivel)) ? $node->field_nivel['und'][0]['value'] : 'danger';
$avisoTexto = (!empty($node->field_texto)) ? $node->field_texto['und'][0]['safe_value'] : '';
/* 
  Asigno a $link_redir el valor NO VACIO de URL dependiendo el idioma .
  Si no viene en ningun idioma, queda la por defecto
*/

if(!empty($node->field_link["es"][0]['url'])) {
	$link_redir = $node->field_link["es"][0]['url'];
} elseif(!empty($node->field_link["und"][0]['url'])) {
	$link_redir = $node->field_link["und"][0]['url'];
} else {
	$link_redir = 'http://www.buenosaires.gob.ar/alerta-meteorologica';
}

?>

<a href="<?php print $link_redir ?>" class="aviso_urgente clearfix alert-spot alert-spot-<?php print $avisoNivel . ' ' . $avisoTipo; ?>">
	<span class="glyphicon glyphicon-alert-<?php print $avisoTipo; ?>"></span>
	<div class="alert-link-text">
		<h4><?php print $avisoTitle; ?></h4>
		<?php if(isset($avisoTexto)) { ?>
			<p><?php print $avisoTexto; ?></p>
		<?php } ?>
	</div>
	<span class="glyphicon glyphicon-chevron-right"></span>
</a>






