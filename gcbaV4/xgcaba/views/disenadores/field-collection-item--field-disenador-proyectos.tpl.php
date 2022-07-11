<?php
$a = 1;
/**
 * @file
 * Default theme implementation for field collection items.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) field collection item label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-field-collection-item
 *   - field-collection-item-{field_name}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */

$item_active = '';
if( !$GLOBALS['id_actual'] ){ $item_active = ' active'; $GLOBALS['id_actual'] = $id; }
?>

<div class="item <?php print $item_active; ?>" style="max-height: initial; ">
<!--<div class=" --><?php //print $item_active; ?><!--" style="max-height: initial; ">-->
        <div class="row" style="background-image: linear-gradient(to top, rgba(0, 0, 0, .6) 0, transparent 100%);">
            <div class="row pt-2 dis_image_wrapper" style="height: 25em; width: 45em; margin: auto; margin-top: 4em; margin-bottom: -1em;">
                <img src="/sites/gcaba/files/<?php print $field_proy_imagenes[0]['filename']; ?>" style="max-height: 370px;"  >
            </div>
            <div class="carousel-caption row" style="padding: 0px 50px 30px 50px; text-align: left; margin-left: 3em;">
                <h2><?php print $field_proy_clientes[0]['value']; ?></h2>
                <p><strong><?php print $field_proy_descripcion[0]['value']; ?></strong></p>
            </div>
        </div>
</div>

<?php  ?>