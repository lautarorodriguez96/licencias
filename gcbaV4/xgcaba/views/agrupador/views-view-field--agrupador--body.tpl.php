<?php 
	if (isset($row->_field_data['nid']['entity']->field_image['es'][0]['uri'])) {
		$uri = file_create_url($row->_field_data['nid']['entity']->field_image['es'][0]['uri']);
	}
	else {
		$uri = null;
	}

	if (isset($row->_field_data['nid']['entity']->field_date['und'][0]['value'])) {
		$fecha = $row->_field_data['nid']['entity']->field_date['und'][0]['value'];
	}
	else {
		$fecha = null;
	}
	if (isset($row->field_body[0]['raw']['summary'])) {
		$summary = $row->field_body[0]['raw']['summary'];
		$summary = !empty($row->field_body[0]['raw']['summary'])?$row->field_body[0]['raw']['summary']:$row->field_body[0]['raw']['value'];
	}
	else {
		$summary = null;
	}

	$groups = $row->_field_data['nid']['entity']->group_audience['und'];

	// ITEM SETTINGS
	if ($uri != null) {

		$item_settings['classContainer'] = 'list-thumb';
		$item_settings['imageContent'] = '<div style="background-image:url('.$uri.'); background-color: #cfe9e6;"></div>';
		$item_settings['title'] = views_trim_text( array(
			'max_length' => 50,
			'ellipsis' => TRUE,
			'word_boundary' => TRUE,
			'html' => TRUE
			), $row->node_title);
		$item_settings['resume'] = views_trim_text( array(
			'max_length' => 50,
			'ellipsis' => TRUE,
			'word_boundary' => TRUE,
			'html' => TRUE,
			), $summary);
	}
	else {
		$item_settings['classContainer'] = 'item-no-image';
		$item_settings['imageContent'] = '';
		$item_settings['title'] = views_trim_text( array(
			'max_length' => 50,
			'ellipsis' => TRUE,
			'word_boundary' => TRUE,
			'html' => TRUE
			), $row->node_title);
		$item_settings['resume'] = views_trim_text( array(
			'max_length' => 150,
			'ellipsis' => TRUE,
			'word_boundary' => TRUE,
			'html' => TRUE,
			), $summary);
	}


	print '<a href="' . url('node/' . $row->nid) . '" class="list-group-item ' . $item_settings['classContainer'] . '" data-original-title="" title="">';

	print $item_settings['imageContent'];

	print '<h4>' . $item_settings['title'] . '</h4>';

	print '<p>' . $item_settings['resume'] . '</p>';

	if ($fecha != null) {
		print '<p class="list-small">' . format_date(strtotime($fecha), 'custom', 'l j \d\e F \d\e Y') . '</p>';
	}

	print '<p class="tags">';
	foreach($groups as $group){
		print '<span class="label label-default">'.og_get_group('group', $group['gid'])->label.'</span> ';
	}
	print '</p>';

	print '</a>';
?>