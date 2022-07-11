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


    $nombre         = $fields['field_disenador_fis_nombre']->content;
    $especialidad   = $fields['field_disenador_fis_especialidad']->content;
    $foto           = $fields['field_disenador_foto']->content;
    $contacto       = $fields['field_disenador_fis_contacto']->content;
    $web            = $fields['field_disenador_fis_web']->content;
    $descripcion    = $fields['field_disenador_fis_descripcion']->content;
//    list(,$alias) = explode('/',drupal_get_path_alias('node/'.$fields['view_node']->raw));
//    $alias = $fields['view_node']->raw;
    $link_perfil    = '/directorio-diseno-perfil/'.$fields['view_node']->raw;
?>

<div class="col-sm-6 col-md-4" style="">

    <div class="thumbnail">
        <div class="row dis_image_wrapper" style="margin: auto !important;">
            <?php echo $foto; ?>
        </div>

        <div class="caption">
<!--            Nombre-->
            <div class="row truncate" style="margin-left: auto; margin-right: auto;" data-toggle="tooltip"> <h3> <?php echo $nombre; ?> </h3> </div>

<!--            Especialidad-->
            <div class="row truncate" style="margin-left: auto; margin-right: auto; margin-top: -0.8em; margin-bottom: 2em; color: #aeaeae;" data-toggle="tooltip" title="<?php echo $especialidad; ?>">
                <strong"><?php echo $especialidad; ?></strong>
            </div>

<!--            Contacto -->
            <div class="row mt-05 truncate" style="margin-left: auto; margin-right: auto;" data-toggle="tooltip" title="<?php echo $contacto; ?>">
                <strong><?php echo $fields['field_disenador_fis_contacto']->label; ?></strong>: <?php echo $contacto; ?>
            </div>

<!--            Web -->
            <div class="row mt-05 truncate" style="margin-left: auto; margin-right: auto;" data-toggle="tooltip" title="<?php echo $web; ?>">
                <strong><?php echo $fields['field_disenador_fis_web']->label; ?></strong>: <?php echo $web; ?>
            </div>

<!--            Descripcion -->
            <div class="row mt-05 truncate" style="margin-left: auto; margin-right: auto;" data-toggle="tooltip" title="<?php echo $descripcion; ?>">
                <strong><?php echo $fields['field_disenador_fis_descripcion']->label; ?></strong>: <?php echo $descripcion; ?>
            </div>

<!--            Link al perfil -->
            <div class="row mt-2" style="margin-left: auto; margin-right: auto;">
<!--                <div>-->
                <div class="btn btn-lg btn-primary perfil">
                    <div style="color: inherit; padding: 0 1.5em;">Ver perfil <i class="glyphicon glyphicon-refresh glyphicon-spin" style="display: none;"></i>
                    </div>
                </div>
                <a href="<?php echo $link_perfil; ?>"></a>
            </div>

        </div>
    </div>
</div>

<?php
drupal_add_js('Drupal.behaviors.buttons_listeners = {
                        attach: function(context, settings) {
                        
                            $(".perfil").click(function(e){
                                $(this).parent().find(\'a\')[0].click();
                                $(this).find(\'i\').show("fast");
                            })
                        
                        }
                    }',inline);
?>