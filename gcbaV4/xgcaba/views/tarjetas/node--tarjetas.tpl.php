<?php
//drupal_add_css(path_to_theme().'/views/tarjetasargumentos/css/tarjetas.css');


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

// echo sizeof($fields);
//var_dump($fields);
//var_dump($row);


//<?php print $_SESSION['col_tarjetas']

// <?php print $_SESSION['tam_tarjetas'] 


$fields = $content['field_grupo_tarjeta'][0]['entity']['field_collection_item'][0];

foreach ($fields as $key => $value) {
	
	$titulo = $fields['field_title']['#object']->field_title['und'][0]['value'];
	echo $titulo;
}





foreach ($content as $key => $value) {
	var_dump($value['field_grupo_tarjeta'][0]['entity']['field_collection_item'][0]);
}

$url = "https://www.buenosaires.gob.ar/sites/gcaba/files/";
$img = $content['field_imagenes']['#items'][0]['filename'];
$imagen = $url.$content['field_imagenes']['#items'][0]['filename'];

$descripcion = $content['field_description']['#items'][0]['value'];
echo $descripcion;

$link = $content['field_link']['#items'][0]['url'];
echo $link;

$cantidad = sizeof($content['field_grupo_tarjeta']['#object']->field_grupo_tarjeta['und']);
echo $cantidad;

echo '<div class="'.$estilo.'">';


?>
	<div class="row">

			<a href="<?php echo $link?>" title="" alt="">
				<div class= "col-md-4 col-sm-6 col-xs-12">
					<div class="thumbnail card-chica">

						<?php if(isset($img)){ ?>
			
							<img class="img-card" src="<?php echo $imagen?>"
							title="<?php echo $content['field_imagenes']['#items'][0]['title']?>" 
							alt="<?php echo $content['field_imagenes']['#items'][0]['alt']?>">

						<?php } ?>

						<div class="caption">
							<h3><?php echo $titulo?></h3>
							<p><?php echo $descripcion?></p>
						</div>
					</div>
				</div>	
			</a>
	

	</div>

<?php echo'</div>';

*/




?>
	

