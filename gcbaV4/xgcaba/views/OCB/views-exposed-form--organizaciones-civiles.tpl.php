<?php
/**
 * @file views-exposed-form.tpl.php
 *
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
<?php
    if (!empty($q)){
    echo $q;
    }
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
 ?>

<div class="views-exposed-form container buscador-OCB">
  
  <div class="row">
     
      <?php
       //var_dump($widgets);
        foreach ($widgets as $id => $widget){
          
          if( $id == "filter-field_nombre_ocb_value"){
            echo '<div class="views-exposed-widgets col-md-12 center">';
              echo '<div id="'.$widget->id.'-wrapper" class="estiloInput">';
                  if (!empty($widget->label)){
                    echo '<label for="'.$widget->id.'">'.$widget->label.'</label>';
                  }
                  if (!empty($widget->operator)){
                      echo '<div class="views-operator">'.$widget->operator.'</div>';
                  }
                  echo '<div class="views-widget">'.$widget->widget.'</div>';
              echo '</div>';
             echo '</div>';
          }
         if( $id != "filter-field_nombre_ocb_value"){
            //echo "OK";
            
              echo '<div id="'.$widget->id.'-wrapper" class="col-md-4 views-exposed-widgets views-widget-'.$id.' estiloSelect">';
                 if (!empty($widget->label)){
                    echo '<label for="'.$widget->id.'">'.$widget->label.'</label>';
                }
                if (!empty($widget->operator)){
                    echo '<div class="views-operator">'.$widget->operator.'</div>';
                }
                echo '<div class="views-widget">'.$widget->widget.'</div>';  
              echo '</div>';
            
          }
        //cierra foreach      
        }
      ?>
  </div>

  <div class="views-exposed-widget views-submit-button hide">
    <?php print $button; ?>
  </div>

</div>