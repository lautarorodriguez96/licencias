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


// Armamos un arreglo con las label como indices para posterior mostrado de html
$campo_label = array();
foreach( $fields as $campo => $atributo ){
    switch($campo){
        case 'title':               $campo_label['nombre'] = $atributo->raw;        break;
        case 'field_paseador_foto': $campo_label['foto']   = $atributo->content;    break;

        default:
        $campo_label[$atributo->label] = $atributo->content;
    }
}

$ids_barrios = array();
foreach($row->field_field_barrios as  $val){ $ids_barrios[] = $val['raw']['tid']; }

$barrios = implode('+', $ids_barrios);

$buscador_alias = drupal_get_path_alias('node/'.arg(1));

$path      = $GLOBALS['base_url'].url($buscador_alias.'/paseador-ficha-tecnica/'. $row->nid.'/'.$barrios);

?>
<div class="col-sm-6 col-md-4" style="">

    <div class="thumbnail">
        <div class="row dis_image_wrapper" style="margin: auto !important;">
            <?php echo $campo_label['foto']; ?>
        </div>

        <div class="caption">
<!--            Mostramos las etiquetas y el valor de los campos-->
            <?php
                foreach($campo_label as $label => $valor){
                    switch($label){
                        case 'nombre':
                            echo  '<div class="row truncate" style="margin-left: auto; margin-right: auto;" data-toggle="tooltip"> <h3> '.$valor.' </h3> </div>';
                            break;
                        case 'Matrícula':
                            echo  '<div class="row truncate" style="margin-left: auto; margin-right: auto; margin-top: -0.8em; margin-bottom: 2em; color: #aeaeae;" data-toggle="tooltip"> <strong">'.$label.'</strong>: '.$valor.'</div>';
                            break;
                        case 'foto':      break;

                        default:        echo  '<div class="row mt-05 truncate" style="margin-left: auto; margin-right: auto;" data-toggle="tooltip" title="'.$valor.'"> <strong>'.$label.'</strong>: '.$valor.'</div>';
                    }
                }
            ?>

            <div class="row mt-2 mb-1" style="margin-left: auto; margin-right: auto;">
                <div class="btn btn-lg btn-primary perfil">
                    <div style="color: inherit; padding: 0 1.5em;">Ver ficha técnica <i class="glyphicon glyphicon-refresh glyphicon-spin" style="display: none;"></i>
                    </div>
                </div>
                <a href="<?php echo $path; ?>"></a>
            </div>
        </div>
    </div>
</div>