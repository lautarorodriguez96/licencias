<?php
drupal_add_css(path_to_theme().'/views/disenadores/css/disenadores.css');

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
//unset($GLOBALS['GLOBALS']);
$disenadores_x_fila = 3;

?>
<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>

<div class="mt-4 mb-4 container">
    <?php
        $html_disenadores = '<div class="row mb-1">';
        $cantidad_disenadores = count($rows);
        foreach ($rows as $i => $row){

            if($disenadores_x_fila === $cant_fila_actual){
                $html_disenadores .= '</div><div class="row mb-1">'.$row;
                $cant_fila_actual = 0;
            }
            else{ $html_disenadores .= $row; }
            $cant_fila_actual++;
        }
        $html_disenadores .= '</div>';

        echo $html_disenadores;
    ?>
</div>