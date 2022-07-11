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

<?php $titulo= $row->_field_data['nid']['entity']->title; ?>

<?php if ($row->field_field_aplicacion_link_iphone): ?>
    <li>
        <a href="<?php print $row->field_field_aplicacion_link_iphone[0]['rendered']['#markup']; ?>" 
        onClick="_gaq.push(['_trackEvent', 'Aplicaciones', 'Vista en store', '<?php echo $titulo; ?>- iPhone']);" 
        class="btn btn-inverse store-ap" target="_blank">iPhone</a>
    </li>
<?php endif; ?>
<?php if ($row->field_field_aplicacion_link_android): ?>   
    <li>
        <a href="<?php print $row->field_field_aplicacion_link_android[0]['rendered']['#markup']; ?>" 
        onClick="_gaq.push(['_trackEvent', 'Aplicaciones', 'Vista en store', '<?php echo $titulo; ?>- Android']);"
        class="btn btn-inverse store-an" target="_blank">Android</a>
    </li>
<?php endif; ?>
<?php if ($row->field_field_aplicacion_link_blackberry): ?>
    <li>
        <a href="<?php print $row->field_field_aplicacion_link_blackberry[0]['rendered']['#markup']; ?>" 
        onClick="_gaq.push(['_trackEvent', 'Aplicaciones', 'Vista en store', '<?php echo $titulo; ?>- BlackBerry']);"
        class="btn btn-inverse store-bb" target="_blank">BlackBerry</a>
    </li>
<?php endif; ?>
<?php if ($row->field_field_aplicacion_link_wphone): ?>     
    <li>
        <a href="<?php print $row->field_field_aplicacion_link_wphone[0]['rendered']['#markup']; ?>" 
        onClick="_gaq.push(['_trackEvent', 'Aplicaciones', 'Vista en store', '<?php echo $titulo; ?>- Windows Phone']);" 
        class="btn btn-inverse store-wi" target="_blank">Windows Phone</a>
    </li>
<?php endif; ?>
<?php

if ($row->field_field_url): ?>     
    <li>
        <a href="<?php print $row->field_field_url[0]['rendered']['#markup']; ?>" 
        onClick="_gaq.push(['_trackEvent', 'Aplicaciones', 'Vista en store', '<?php echo $titulo; ?>- Web']);" 
        class="btn btn-inverse store-web" target="_blank">Usala desde la web</a>
    </li>
<?php endif; ?>