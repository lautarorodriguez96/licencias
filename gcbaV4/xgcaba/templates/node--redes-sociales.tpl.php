<?php
	function buenosaires_get_image_url_from_field($node, $field, $defaultOnFail = TRUE) {

		$node_image = field_get_items('node', $node, $field)[0];

		$img_url = ($node_image['uri'])? file_create_url($node_image['uri']) : turismo_get_clean_path('/images/default_picture.jpeg', 'turismo');

		return ($defaultOnFail)? $img_url : NULL;

	}

	// Oculto lo que no se tiene que mostrar en el render :3
	hide($content['links']);
	hide($content['language']);
	hide($content['field_tags']);

	$node_body		= field_get_items('node', $node, 'body')[0];
	$node_summary 	= $node_body['summary'];

	$content_link 	= field_get_items('node', $node, 'field_link_redes_sociales')[0];
	$content_link 	= $content_link['url'];

	$node_image = field_get_items('node', $node, 'field_imagen_redes_social')[0];

	$content_image_link = ($node_image['uri'])? file_create_url($node_image['uri']) : turismo_get_clean_path('/images/default_picture.jpeg', 'turismo');

?>

<li>
	<!-- <a href="<?php print $content_link ?>" target="_blank" style="background-image:url(<?php print $content_image_link; ?>);"></a>	 -->
	<a href="<?php print $content_link ?>" target="_blank"><?php print render($content['field_imagen_redes_social']); ?></a>	
</li>