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

if (arg(0) == 'node' && is_numeric(arg(1))) {
  $nid = arg(1);
  $node = node_load($row->nid);
  //
  $node_from_url = node_load(arg(1));
  $parent = node_load($node_from_url->book['bid']);
} 
//print drupal_get_path_alias(request_uri(), 1);
?>
<?php if ($node->book['bid'] == $parent->nid):?>
  <?php if ($nid == $row->nid):?>
      <strong class="book-menu-selected"><?php print $output; ?></strong>
  <?php else: ?>
      <!-- SI ES UN LINK LO IMPRIMO HACIENDO REFERENCIA AL EXTERNO-->
      <?php if (isset($node->field_link)):
      $external_links = $node->field_link['es'];
      for ($i=0; $i <count($external_links) ; $i++) {
        echo "<a href='".$external_links[$i]['url']."'>".$external_links[$i]['title']."</a>";
      }
      //echo "<pre>";
      //print_r($node);
      //die();
     
      ?>
      <?php else: ?>
        <?php print $output; ?>
      <?php endif; ?>      
  <?php endif; ?>
<?php endif; ?>
