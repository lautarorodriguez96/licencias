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

$path      = $GLOBALS['base_url'].url('node/'. $row->nid);


// Armamos un arreglo con las label como indices para posterior mostrado de html
$campo_label = array();
foreach( $fields as $campo => $atributo ){
    switch($campo){
        case 'title':               $campo_label['nombre'] = $atributo->raw;    break;
        case 'field_paseador_foto': $campo_label['foto']   = $atributo->content;    break;
        case 'field_paseador_mail': $campo_label['mail']   = $atributo->content;    break;

        default:
        $campo_label[$atributo->label] = $atributo->content;
    }
}

?>
    <!--Boton nueva busqueda-->
    <div class="mb-2 mt-2"><a href="<?php echo $GLOBALS['base_url'].'/buscador-de-paseadores-de-perros'; ?>"><button class="btn btn-xl btn-primary btn btn-default form-submit nueva_busqueda" name="op" value="Realizar nueva búsqueda" type="button">Realizar nueva búsqueda <i class="glyphicon glyphicon-refresh glyphicon-spin" style="display: none;"></i></button></a></div>

    <!--    Fila datos paseador-->
    <div class="row mt-2">
        <!--            Foto-->
        <div class="col-sm-4">
<!--            <div style="height: 200px; background-color: lightgrey;"></div>-->
            <?php echo $campo_label['foto']; ?>
        </div>
        <div class="col-sm-8">
            <!--            Nombre-->
            <div class="row">
                <div class="col-sm-12"><h2><?php echo $campo_label['nombre']; ?></h2></div>
            </div>
            <!--            Matricula-->
            <div class="row mb-2" style="color: #8b8b8b;">
                <div class="col-sm-12" style="margin-top: -0.7em;"><?php echo '<strong>Matrícula:</strong> '.$campo_label['Matrícula']; ?></div>
            </div>

            <!--            Datos-->
            <div class="row mb-1">
                <div class="col-sm-6">
                    <!--                        Barrio-->
                    <?php echo '<strong>Barrio:</strong> '.$campo_label['Barrio']; ?>
                </div>
                <div class="col-sm-6">
                    <!--                        Horario-->
                    <?php echo '<strong>Horario:</strong> '.$campo_label['Horario']; ?>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-sm-6">
                    <!--                        Teléfono-->
                    <?php echo '<strong>Teléfono:</strong> '.$campo_label['Teléfono']; ?>
                </div>
                <div class="col-sm-6">
                    <!--                        Mail-->
                    <?php echo '<strong>Email:</strong> '.$campo_label['mail']; ?>
                </div>
            </div>
        </div>
    </div>

    <!--    Fila info turno aproximado-->
    <div class="col-sm-12 alert alert-danger mt-3 mb-4"> <strong>Los turnos son aproximados.</strong> Para coordinar horarios exactos envía una consulta a <?php echo $campo_label['nombre']; ?>. </div>

<?php
drupal_add_js('Drupal.behaviors.add_listeners_nueva_busqueda = {
        attach: function(context, settings) {
        
            $("button").click(function(e){
                $(this).find(\'i\').show("fast");
            })
        
        }
    }', inline);
?>