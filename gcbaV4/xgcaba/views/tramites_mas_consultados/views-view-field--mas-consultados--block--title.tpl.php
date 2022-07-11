<?php
$title = '<h4>' . $row->node_title . '</h4>';
$trim = array(
		'max_length' => 75,
		'ellipsis' => TRUE,
		'word_boundary' => TRUE,
  		'html' => TRUE,
	);
$text = (!empty($row->field_body)) ? $row->field_body[0]['raw']['value'] : '';
$text = (!empty($text)) ? '<p>' . views_trim_text($trim, $text) . '</p>' : '';
$path = $row->field_field_link[0]['raw']['url'];
print l($title . $text, $path, array('attributes' => array('class' => array('list-group-item')), 'html' => true));