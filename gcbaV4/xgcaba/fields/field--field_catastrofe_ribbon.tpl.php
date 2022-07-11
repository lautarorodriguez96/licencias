<?php
	if (arg(0) == 'node' && is_numeric(arg(1))) $nodeid = arg(1);
	$current_node=node_load($nodeid);
	$ribbon=$current_node->field_catastrofe_ribbon['und'][0]['value'];

	if($ribbon==1){


?>

<div class="catastrofe_ribbon">
	<img src="/<?php echo drupal_get_path('theme','gcba') ?>/images/ribbon.png" />
</div>

<?php

}
?>