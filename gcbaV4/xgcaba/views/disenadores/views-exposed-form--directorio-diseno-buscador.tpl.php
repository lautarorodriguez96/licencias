<?php
/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */

    $a=1;

?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>

    <div class="views-exposed-form mt-2">
        <div class="views-exposed-widgets clearfix">
            <div class="row">

<!--                Servicios-->
                <div class="col-md-6">
                    <h3><?php print $widgets['filter-field_disenador_fis_servicios_value']->label; ?></h3>
                    <div id="<?php print $widgets['filter-field_disenador_fis_servicios_value']->id; ?>-wrapper">
                        <?php print $widgets['filter-field_disenador_fis_servicios_value']->widget; ?>
                    </div>
                </div>

<!--                Tipo Organización-->
                <div class="col-md-6">
                    <h3><?php print $widgets['filter-field_disenador_fis_tipoorg_value']->label; ?></h3>
                    <div id="<?php print $widgets['filter-field_disenador_fis_tipoorg_value']->id; ?>-wrapper">
                            <?php print $widgets['filter-field_disenador_fis_tipoorg_value']->widget; ?>
                    </div>
                </div>
            </div>

<!--            Especialidad-->
            <div class="row mt-2">
                <div class="col-md-6">
                    <h3><?php print $widgets['filter-field_disenador_fis_especialidad_value']->label; ?></h3>
                    <div id="<?php print $widgets['filter-field_disenador_fis_especialidad_value']->id; ?>-wrapper">
                        <?php print $widgets['filter-field_disenador_fis_especialidad_value']->widget; ?>
                    </div>
                </div>

<!--                Palabras clave-->
                <div class="col-md-6">
                    <h3><?php print $widgets['filter-combine']->label; ?></h3>
                    <div id="<?php print $widgets['filter-combine']->id; ?>-wrapper">
                            <?php print $widgets['filter-combine']->widget; ?>
                    </div>
                </div>
            </div>

        <!--    Buscar-->
            <div class="row mt-4">
                <div style="margin: auto; display: flex; width: fit-content; width: -moz-fit-content;">
                    <button class="btn btn-default form-submit btn-lg btn-primary" id="edit-submit-buscador-de-paseadores" name="" value="Buscar" type="submit" style="padding: 0.5em 3em;">Buscar</button>
                </div>
            </div>
        </div>
    </div>

<?php

// Javascript agregado para poder setear los valores default de los select y placeholders
drupal_add_js('Drupal.behaviors.update_placeholders = {
                        attach: function(context, settings) {

                            // SERVICIOS
                            var texto_default_servicios = \'Elegí tu servicio\';

                            $("#edit-field-disenador-fis-servicios-value option").eq(0).html(texto_default_servicios);
                            
                            if( $("#edit-field-disenador-fis-servicios-value").val() === \'All\' ){
                                $("#edit-field-disenador-fis-servicios-value-wrapper .chosen-single span").html(texto_default_servicios);
                            }

                            // TIPO ORGANIZACION
                            var texto_default_tipoorg = \'Tipo de organización\';
                            if( $("#edit_field_disenador_fis_tipoorg_value_chosen").length > 0 ){
                                $("#edit-field-disenador-fis-tipoorg-value-wrapper .chosen-single span").html(texto_default_tipoorg);
                            }
                            else{
                                $("#edit-field-disenador-fis-tipoorg-value option")[0].innerHTML=texto_default_tipoorg;
                            }

                            // ESPECIALIDAD
                            var texto_default_especialidad = \'Elegí la especialidad que quieras\';
                            $("#edit-field-disenador-fis-especialidad-value option").eq(0).html(texto_default_especialidad);
                            
                            if( $("#edit-field-disenador-fis-especialidad-value").val() === \'All\' ){
                                $("#edit-field-disenador-fis-especialidad-value-wrapper .chosen-single span").html(texto_default_especialidad);
                            }

                            // PALABRAS CLAVE
                            $("#edit-combine").attr(\'placeholder\', \'Buscá por nombre o palabras clave\');
                            $(document).ajaxComplete(function(){
                                $("#edit-field-disenador-fis-servicios-value option").eq(0).html(texto_default_servicios);
                                $("#edit-field-disenador-fis-especialidad-value option").eq(0).html(texto_default_especialidad);
                            });
                            
                            
                            // Corregimos la posición de la flecha del combo select, que en algunos entornos queda mal posicionada
                            setTimeout(function(){
                                $(".chosen-container .chosen-single div").css(\'left\', \'unset\');
                            }, 500)
                        }
                    }'
    , 'inline');
?>