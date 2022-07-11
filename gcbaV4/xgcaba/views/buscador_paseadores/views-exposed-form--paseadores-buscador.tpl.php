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

<!--        Numero matricula-->
            <div class="col-md-6">
                <h3>Número de matrícula</h3>
                <div id="<?php print $widgets['filter-field_paseador_nro_de_registro_value']->id; ?>-wrapper">
                    <?php print $widgets['filter-field_paseador_nro_de_registro_value']->widget; ?>
                </div>
            </div>

            <!--Barrio-->
            <div class="col-md-6">
                <h3>Barrio</h3>
                <div id="<?php print $widgets['filter-field_barrios_tid']->id; ?>-wrapper">
                        <?php print $widgets['filter-field_barrios_tid']->widget; ?>
                </div>
            </div>

        </div>

    <!--    Turno-->
        <div class="row mt-1"><div class="col-md-12"><h3>Turno</h3></div></div>
        <div class="row mb-2">
            <div id="edit-field-paseador-turno-value" class="form-checkboxes">
                <div class="col-sm-3 form-type-checkbox form-item-field-paseador-turno-value-1 form-item checkbox" style="margin-top: 0px;">
                    <input type="checkbox" id="edit-field-paseador-turno-value-1" value="1" class="form-checkbox" />  <label for="edit-field-paseador-turno-value-1">Todos los turnos </label>
                </div>
                <div class="col-sm-3 form-type-checkbox form-item-field-paseador-turno-value-2 form-item checkbox" style="margin-top: 0px;">
                    <input type="checkbox" id="edit-field-paseador-turno-value-2" name="field_paseador_turno_value[2]" value="2" class="form-checkbox" />  <label for="edit-field-paseador-turno-value-2">Turno mañana </label>
                </div>
                <div class="col-sm-3 form-type-checkbox form-item-field-paseador-turno-value-3 form-item checkbox" style="margin-top: 0px;">
                    <input type="checkbox" id="edit-field-paseador-turno-value-3" name="field_paseador_turno_value[3]" value="3" class="form-checkbox" />  <label for="edit-field-paseador-turno-value-3">Turno tarde </label>
                </div>
                <div class="col-sm-3 form-type-checkbox form-item-field-paseador-turno-value-4 form-item checkbox" style="margin-top: 0px;">
                    <input type="checkbox" id="edit-field-paseador-turno-value-4" name="field_paseador_turno_value[4]" value="4" class="form-checkbox" />  <label for="edit-field-paseador-turno-value-4">Turno noche </label>
                </div>
            </div>
        </div>

    <!--    Buscar-->
        <div class="row">
            <div id="boton_buscar" style="margin: auto; display: flex; width: -moz-fit-content; width: fit-content;">
                <button class="btn btn-default form-submit btn-lg btn-primary" id="edit-submit-buscador-de-paseadores" name="" value="Buscar" type="submit" style="padding-left: 2em; padding-right: 2em;">Buscar<i class="glyphicon glyphicon-refresh glyphicon-spin" style="display: none;"></i></button>
            </div>
        </div>
    </div>
</div>

<?php
// Javascript agregado para corregir funcionalidad de los checkbox
drupal_add_js('Drupal.behaviors.update_checkboxes = {
                        attach: function(context, settings) {
                        
                            $(\'[data-toggle="tooltip"]\').tooltip();
                        
                            var ids_checked  = null;
                            var check_all_id = "edit-field-paseador-turno-value-1";
                            
                            // Funcionalidad para activar/desactivar todos los turnos
                            $("#edit-field-paseador-turno-value input:checkbox").click(function(){
                              if( $(this).attr("id") === check_all_id ){
                                $("[id^=edit-field-paseador-turno-value-]:not(#"+check_all_id+")").prop("checked", $("#"+check_all_id).prop("checked"));
                              }
                              else{
                                if( $(this).prop("checked") ){
                                  var turno_checked = $(this);
                                  var all_checked = () => {
                                    var todos_los_turnos = true;
                                     
                                      $("[id^=edit-field-paseador-turno-value-]:not(#"+check_all_id+", #"+turno_checked.attr("id")+")").each(function(){
                                        if( !$(this).prop("checked") ){ turno_checked.prop("checked", true);   todos_los_turnos = false; return false; }
                                      });
                                      
                                      return todos_los_turnos;
                                  }
                                  
                                  $("#"+check_all_id).prop("checked", all_checked);
                                }
                                else{ $("#"+check_all_id).prop("checked", false); }
                              }
                            });
                            

                            // Agregamos la siguiente funcionalidad para evitar que al finalizar el ajax
                            // drupal reinicie el estado de los checkboxes

                                // Guardamos los checkboxes que se hayan activado antes del envío del ajax
                                Drupal.ajax.prototype.beforeSend = function(){
                                    ids_checked = [];
                                    $("#edit-field-paseador-turno-value input:checkbox").each(function(){
                                        if ( $(this).prop("checked") ){ ids_checked.push($(this).attr("id")); }
                                    });
                                }

                                // Reestablecemos el estado de los checkbox al finalizar el ajax
                                $(document).ajaxComplete(function() {
                                    if(ids_checked){ $(ids_checked).each(function(){ $("#"+this).prop("checked", true); } );}
                                    ids_checked = null;
                                });
                                
                                
                                $("#boton_buscar button").click(function(e){
                                    $(this).find(\'i\').show("fast");
                                })
                        }
                    }'
    , 'inline');
?>
