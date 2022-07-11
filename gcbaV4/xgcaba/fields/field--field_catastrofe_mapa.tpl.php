<?php
if (arg(0) == 'node' && is_numeric(arg(1))) $nodeid = arg(1);
$current_node=node_load($nodeid);
$mapa=$current_node->field_catastrofe_mapa['und'][0]['value'];
?>

<div class="catastrofe_map img-polaroid">
	<div class="map"><?php echo $mapa; ?></div>
</div>