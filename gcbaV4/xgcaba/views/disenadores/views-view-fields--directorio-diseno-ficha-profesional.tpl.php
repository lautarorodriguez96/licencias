<?php
$a=1;
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

?>

<!--Aplicamos la clase container para que se empareje al margen la siguiente seccion-->
<div class="container">
    <div class="row"> <!--    Fila nombre, especialidad, descripcion y foto-->
        <div class="mb-2 mt-2"><a href="<?php echo $GLOBALS['base_url'].'/directorio-de-servicios-de-diseno'; ?>"><button class="btn btn-xl btn-primary btn btn-default form-submit nueva_busqueda" name="op" value="Realizar nueva búsqueda" type="button">Realizar nueva búsqueda <i class="glyphicon glyphicon-refresh glyphicon-spin" style="display: none;"></i></button></a></div>
        <!--Fila nivel 1 -->
        <div class="col-md-8" style="width: 60%;">
            <!--Fila nivel 2 -->
            <div class="row">  <?php print $fields['field_disenador_fis_nombre']->content ?>       </div>
            <div class="row" style="color: #aaaaaa; margin-top: -0.7em; font-weight: bold;"> <?php print $fields['field_disenador_fis_especialidad']->content ?> </div>
            <div class="row mt-2"> <?php print $fields['field_disenador_fis_descripcion']->content ?>  </div>
        </div>
        <div class="col-md-4" style="width: 35%; margin-left: 1em;">
            <div class="row" style="margin-top: 10%;">
                <img src="/sites/gcaba/files/<?php print $row->field_field_disenador_foto[0]['raw']['filename']; ?>">
            </div>
        </div>
    </div>
</div>


<hr class="mt-2">


<!--DATOS ADICIONALES-->
<div class="row mb-1">
    <div class="col-md-4"><?php print $fields['field_disenador_fis_web']->label_html.' '.$fields['field_disenador_fis_web']->content ?></div>
    <div class="col-md-4"><?php print $fields['field_disenador_fis_contacto']->label_html.' '.$fields['field_disenador_fis_contacto']->content ?></div>
    <div class="col-md-4"><?php print $fields['field_disenador_fis_experiencia']->label_html.' '.$fields['field_disenador_fis_experiencia']->content ?></div>
</div>
<div class="row">
    <div class="col-md-4"><?php print $fields['field_disenador_fis_email']->label_html.' '.$fields['field_disenador_fis_email']->content ?></div>
    <div class="col-md-4"><?php print $fields['field_disenador_fis_barrio']->label_html.' '.$fields['field_disenador_fis_barrio']->content ?></div>
    <div class="col-md-4"><?php print $fields['field_disenador_fis_clientes']->label_html.' '.$fields['field_disenador_fis_clientes']->content ?></div>
</div>

<hr class="mt-2 mb-2">


<!--Aplicamos maquetado para los field collections-->
<?php foreach ($fields as $id => $field): ?>
    <?php if (!empty($field->separator)): ?>
        <?php print $field->separator; ?>
    <?php endif; ?>

    <?php
        $suffix = '';
        $prefix = '';

        switch($id){
            case 'field_disenador_proyectos':
                if( !empty($row->field_field_disenador_proyectos) ) {
                    $prefix .= '<div class="container">';
                        $prefix .= '<div class="row mt-2">';
                            $prefix .= '<div id="carousel-example" class="carousel slide" data-ride="carousel">';
                            $prefix .= '<div class="carousel-inner">';
                            $suffix .= '</div>';
                            $suffix .= '<a class="left carousel-control" href="#carousel-example" data-slide="prev" data-original-title="" title="">
                                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                                      </a>
                                                      <a class="right carousel-control" href="#carousel-example" data-slide="next" data-original-title="" title="">
                                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                                      </a>';
                            $suffix .= '</div>';
                        $suffix .= '</div>';
                    $suffix .= '</div>';
                    $suffix .= '<hr>';
                    $fields[$id]->wrapper_prefix = $prefix;
                    $fields[$id]->wrapper_suffix = $suffix;
                }

                if( isset($GLOBALS['id_actual']) ){ unset($GLOBALS['id_actual']); }
            break;

            case 'field_disenador_fis_prof':
                if( !empty($row->field_field_disenador_fis_prof) ){
                    $prefix.= '<div class="row mt-2">';
                    $suffix.= '</div>';
                    $suffix.= '<hr>';
                    $fields[$id]->wrapper_prefix = $prefix;
                    $fields[$id]->wrapper_suffix = $suffix;
                }

                if( isset($GLOBALS['col_offset']) ){ unset($GLOBALS['col_offset']); }
            break;

//                Con el continue 2 salimos del switch y de la actual vuelta del foreach, para evitar el print por default de los wrapper
            default: continue 2;
        }
    ?>


    <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
    <?php print $field->wrapper_suffix; ?>
<?php endforeach; ?>

<?php
    drupal_add_js('Drupal.behaviors.add_listeners_nueva_busqueda = {
        attach: function(context, settings) {
        
            $("button").click(function(e){
                $(this).find(\'i\').show("fast");
            })
        
        }
    }', inline);
?>