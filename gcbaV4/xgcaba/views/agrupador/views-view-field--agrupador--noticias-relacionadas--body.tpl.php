<?php
 /**
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */
?>
<?php //print $output; 
  //print_r($row->field_body[0]);
  //$uri= file_create_url($row->field_field_image[0]['raw']['uri']);
  if (isset($row->_field_data['nid']['entity']->field_image['es'][0]['uri'])) {
    $uri=file_create_url($row->_field_data['nid']['entity']->field_image['es'][0]['uri']);
  }else{
    $uri=null;
  }
  ////////////si está vacío devuelve "http://gcaba/"\\\\\\\\\\\\\\\\\

  echo "<pre>";
  //var_dump($row->_field_data['nid']['entity']->field_image['es'][0]['uri']);
  echo "</pre>";

  //$uri= image_style_url('lista_noticias', $row->field_field_image[0]['raw']['uri']);
  //$uri2= image_style_url('noticias_sidebar', $row->field_field_image[0]['raw']['uri']);

  if (isset($row->_field_data['nid']['entity']->field_date['und'][0]['value'])){
    $fecha= $row->_field_data['nid']['entity']->field_date['und'][0]['value'];
  }else{
    $fecha=null;
  }
  if (isset($row->field_body[0]['raw']['summary'])){
    $summary= $row->field_body[0]['raw']['summary'];
    $summary= !empty($row->field_body[0]['raw']['summary'])?$row->field_body[0]['raw']['summary']:$row->field_body[0]['raw']['value'];
  }else{
    $summary=null;
  }
  $groups= $row->_field_data['nid']['entity']->group_audience['und'];
  
?>
<?php
  print '<a href="'.url('node/'.$row->nid).'" class="list-group-item list-thumb" data-original-title="" title="">';
  if ($uri!=null){
    print '<div style="background-image:url('.$uri.'); background-color: #cfe9e6;"></div>';
  }else{
    print '<div style="background-color: #cfe9e6;"></div>';
  }
  //print '<div style="background-image:url('.$uri2.');"></div>';

  //función para acortar el título
  $alter = array(
  'max_length' => 50, //Integer
  'ellipsis' => TRUE, //Boolean
  'word_boundary' => TRUE, //Boolean
  'html' => TRUE, //Boolean
  );
  $value = $row->node_title;
  $trimmed_text = views_trim_text($alter, $value);

  print '<h4>'.$trimmed_text.'</h4>';

  //función para acortar el resumen
  $alter = array(
  'max_length' => 50, //Integer
  'ellipsis' => TRUE, //Boolean
  'word_boundary' => TRUE, //Boolean
  'html' => TRUE, //Boolean
  );
  $value = $summary;
  $resumen = views_trim_text($alter, $value);

  print '<p>'.$resumen.'</p>';
  print '<p>';
    /*foreach($groups as $group){
      print '<span class="label label-default">'.og_get_group('group', $group['gid'])->label.'</span> ';
    }*/
  print '</p>';
  print '</a>';
?>