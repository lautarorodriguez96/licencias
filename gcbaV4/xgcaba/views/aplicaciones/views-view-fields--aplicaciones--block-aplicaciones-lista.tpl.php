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
$path    = !empty($fields['nid']) ? 'node/' . $fields['nid']->raw : '#';
$title   = !empty($fields['title']) ? $fields['title']->raw : '';
$resumen = !empty($fields['field_aplicacion_resumen']) ? $fields['field_aplicacion_resumen']->content : '';
$image   = !empty($fields['field_aplicacion_img_destacada']) ? $fields['field_aplicacion_img_destacada']->content : '';
?>
<div class="col-md-3 text-center aplicaciones-moviles">
  	<a href="<?php echo $path; ?>">
		<!--<img src="<?php echo $image; ?>" class="apps">-->
        <?php echo $image; ?>
	</a>
    <h2><?php echo $title; ?></h2>
    <p><?php echo strip_tags($resumen); ?></p>
</div>

