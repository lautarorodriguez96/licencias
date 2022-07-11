<?php
    if (arg(0) == "node" && arg(2) != "edit") {
      $nid = (int) arg(1);
      if ($nid) {
        $node = node_load($nid);
      }
    }
?>


<div class="catastrofe_heridos">
	<h2>Hospitales</h2>
	<table class="table table-striped dataTable" id="example" aria-describedby="example_info">
    	<thead>
        	<tr>
            	<th width="300">Nombre</th>
            	<th width="320">Dirección</th>
            	<th width="120">Teléfono</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($node->field_catastrofe_hospitales["und"] as $k => $sucur) {
                $hospitales = field_collection_item_load($sucur["value"]);
                $html = '<tr>
                    <td>'.$hospitales->field_nombre['und'][0]['value'].'</td>
                    <td>'.$hospitales->field_direccion['und'][0]['value'].'</td>
                    <td>'.$hospitales->field_telefono['und'][0]['value'].'</td>
                </tr>';
                echo $html;
            }
        ?>
        </tbody>
    </table>
</div>
