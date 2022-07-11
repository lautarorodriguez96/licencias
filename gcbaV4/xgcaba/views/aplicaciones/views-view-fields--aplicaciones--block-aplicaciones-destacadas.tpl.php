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
$resumen = !empty($fields['field_aplicacion_resumen']) ? strip_tags($fields['field_aplicacion_resumen']->content) : '';
$image   = !empty($fields['field_aplicacion_img_destacada']) ? $fields['field_aplicacion_img_destacada']->content : '';
$link_android   = !empty($fields['field_aplicacion_link_android']) ? strip_tags($fields['field_aplicacion_link_android']->content) : '';
$link_iphone    = !empty($fields['field_aplicacion_link_iphone']) ? strip_tags($fields['field_aplicacion_link_iphone']->content) : '';

?>

<div class="row app_destacada" style="margin-bottom: 1em !important;">
    <div class="col-md-8">
        <a href="<?php echo $path; ?>">
            <!--<img src="<?php echo $image; ?>" width="100%">-->
            <?php echo $image; ?>
        </a>
    </div>
    <div class="col-md-4 aplicaciones-moviles">
        <a href="<?php echo $path; ?>"><h1 class="titulo"><?php echo $title; ?></h1></a><br>
        <p class="lead" ><?php echo $resumen; ?></p><br>
        <?php
        if(!empty($link_iphone)) {
            ?>
            <a href="<?php echo $link_iphone; ?>" target="_blank">
                <img src="sites/gcaba/themes/gcbaV4/xgcaba/img/appstore.png" width="40%">
            </a>
            <?php
        }
        if(!empty($link_android)){
            ?>
            <a href="<?php echo $link_android; ?>" target="_blank">
                <img src="sites/gcaba/themes/gcbaV4/xgcaba/img/playstore.png" width="40%">
            </a>
            <?php
        }
        ?>
    </div>
</div>