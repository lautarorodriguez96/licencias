<?php
    if (arg(0) == "node" && arg(2) != "edit") {
      $nid = (int) arg(1);
      if ($nid) {
        $node = node_load($nid);
      }
    }
?>
<div class="catastrofe_informacion">
<?php
foreach ($node->field_catastrofe_informacion["und"] as $k => $sucur) {
  $informacion = field_collection_item_load($sucur["value"]);
  $html = '
  <p>'.$informacion->field_nombre['und'][0]['value'].'</p>
  <h2>
  <img src="/'.drupal_get_path('theme','gcba').'/images/tel.png" />
  <span>'.$informacion->field_telefono['und'][0]['value'].'</span>
  </h2>
  ';
  echo $html;
}
?>
</div>