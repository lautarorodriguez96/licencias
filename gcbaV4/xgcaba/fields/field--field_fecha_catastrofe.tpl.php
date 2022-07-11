<?php
if (arg(0) == 'node' && is_numeric(arg(1))) $nodeid = arg(1);
$current_node=node_load($nodeid);
$fecha=$current_node->field_fecha_catastrofe['und'][0]['value'];
?>


<hr />
<div class="catastrofe_date">
	<span>Última actualización</span>
	<h2><?php echo $fecha ?></h2>
</div>