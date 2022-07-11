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

IMPORTANTE PARA CARGAR UN CSS PERTENECIENTE A LA VISTA. 

TENES QUE AGREGAR EN /themes/gcbaV4/xgcaba/template.php en la funcion xgcaba_preprocess_views_view(&$vars) ; la vista 

Y el css que creas lo cargas en: /var/www/buenosaires/sites/gcaba/themes/gcbaV4/xgcaba/css/views

Haces el llamado a la vista para que llame al css correspondiente. 

function xgcaba_preprocess_views_view(&$vars) {
    $view = $vars['view'];

    // preguntas si estas llamanado a tu vista
    if ($view->name == 'nombre de tu vista') {
    
       drupal_add_css(drupal_get_path('theme','xgcaba') .'/css/views/nombre de tu css.css');
   }
	
	//llamado al css para la vista tarjetas
	if ($view->name == 'tarjetas') {
    
       drupal_add_css(drupal_get_path('theme','xgcaba') .'/css/views/tarjetas.css');
   }
}
 */
?>
<?php


if( !empty( $imagen = $url.$row->field_field_imagenes[0]['raw']) ){


		$url = "https://www.buenosaires.gob.ar/sites/gcaba/files/";
		$imagen = $url.$row->field_field_imagenes[0]['raw']['filename'];
		$titulo = $row->node_title;
		$descripcion = $row->field_field_description[0]['raw']['value'];
		$link = $row->field_field_link[0]['raw']['url'];

	}
?>
<?php /* echo (user_access('create shortcut content') ? '<a class="inline-edit borde-azul" href="node/'.$row->nid.'/edit?destination='.current_path().'">' : ''); //harsh! */ ?>



	<a href="<?php echo $link ?>" title="" alt="">
		<div class="col-sm-6">
			<div class="thumbnail card-grande">
				<img class="img-card" src="<?php echo $imagen ?>" 
						title="<?php echo $row->field_field_imagenes[0]['raw']['title'] ?>" 
						alt="<?php echo $row->field_field_imagenes[0]['raw']['alt'] ?> " >
				
				<div class="caption">
					<h3><?php echo $titulo;?></h3>
					<p><?php echo $descripcion; ?></p>
				</div>
			</div>
		</div>	
	</a>





<?php /*  

<div class="col-md-3 col-sm-6 col-xs-12 borde">
	<a href="<?php echo $link ?>" title="" alt="">
		
		<img src="<?php echo $imagen; ?>" title=" <?php echo $row->field_field_imagenes[0]['raw']['title'];?>" alt=" <?php echo $row->field_field_imagenes[0]['raw']['alt'];?> ">

        <h3> <?php echo $titulo;?> </h3>
        <p> <?php echo $descripcion; ?> </p>

      </a>
</div>




<a class="shortcut" href="<?php echo $row->field_field_link[0]['raw']['url'] ?>">
				<span class="<?php echo $clasefondo; ?>" style="background-color: <?php echo $colorfondo; ?>">
			     	<span <?php if(isset($icono)) { echo $icono; } ?> ></span>
			 	</span>
			   	<h3><?php echo $row->node_title ?></h3>
			   	<p><?php echo $row->field_field_description[0]['raw']['value']; ?></p>
</a>



$clasefondo= !empty($row->field_field_imagenes[0]['raw']['value']) ? $row->field_field_imagenes[0]['raw']['value'] : 'bg-gray-3';

$colorfondo= !empty($row->_field_data['nid']['entity']->field_colorbox['und'][0]['rgb']) ? $row->_field_data['nid']['entity']->field_colorbox['und'][0]['rgb'] : '';

if(function_exists('gcaba_shortcuts_imagen_existe')){

	$imagen = gcaba_shortcuts_imagen_existe($row->field_field_imagen_list[0]['raw']['value']);
}









*/?>


