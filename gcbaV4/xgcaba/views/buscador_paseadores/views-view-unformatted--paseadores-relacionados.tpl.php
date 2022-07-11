<?php
drupal_add_css(path_to_theme().'/views/buscador_paseadores/css/paseadores.css');

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$paseadores_x_fila = 3;

?>
<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>

<div class="mt-4 mb-4">
    <h3 style="margin-top: -2em !important;" class="mb-2">Otros paseadores</h3>

    <?php
        $html_paseadores = '<div class="row mb-1">';
        $cantidad_paseadores = count($rows);
        foreach ($rows as $i => $row){

            if($paseadores_x_fila === $cant_fila_actual){
                $html_paseadores .= '</div><div class="row mb-1">'.$row;
                $cant_fila_actual = 0;
            }
            else{ $html_paseadores .= $row; }
            $cant_fila_actual++;
        }
        $html_paseadores .= '</div>';

        echo $html_paseadores;


        drupal_add_js('Drupal.behaviors.buttons_listeners = {
                        attach: function(context, settings) {
                        
                            $(".perfil").click(function(e){
                                $(this).parent().find(\'a\')[0].click();
                                $(this).find(\'i\').show("fast");
                            })
                        
                        }
                    }',inline);

        drupal_add_css('.thumbnail .row img{
                                max-height: 278px;
                            }
        ', inline)
    ?>

    <!--Boton nueva busqueda-->
    <div style="width: 37%; margin-left: auto; margin-right: auto;"><a href="<?php echo $GLOBALS['base_url'].'/buscador-de-paseadores-de-perros'; ?>"><button class="mt-1 btn btn-xl btn-primary btn btn-default form-submit nueva_busqueda" name="op" value="Realizar nueva búsqueda" type="button" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> Processing Order">Realizar nueva búsqueda <i class="glyphicon glyphicon-refresh glyphicon-spin" style="display: none;"></i></button></a></div>
</div>