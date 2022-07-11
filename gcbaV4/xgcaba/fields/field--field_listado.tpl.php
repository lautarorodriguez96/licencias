<?php
  if (arg(0) == "node" && arg(2) != "edit") {
    $nid = (int) arg(1);
    if ($nid) {
      $node = node_load($nid);
    }
  }
?>


<div class="catastrofe_heridos">
    <h2>Heridos confirmados</h2>
    <div class="well dataTables_filter" id="example_filter">
        <input type="text" placeholder="Buscar ..." aria-controls="example" />
    </div>
    <table class="table table-striped dataTable" id="example" aria-describedby="example_info">
        <thead>
            <tr>
                <th width="300">Nombre</th>
                <th width="120">DNI</th>
                <th width="320">Trasladado a</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($node->field_listado["und"] as $k => $sucur) {
                $listado = field_collection_item_load($sucur["value"]);
                $html = '<tr>
                    <td>'.$listado->field_apellido['und'][0]['value'].'</td>
                    <td>'. l($listado->field_link['und'][0]['title'], $listado->field_link['und'][0]['url'], $options = array($attributes = array('target' => '_blank'))) .'</td>
                    <td>'.$listado->field_telefono['und'][0]['value'].'</td>
                </tr>';
                echo $html;
            }
        ?>
        </tbody>
    </table>
</div>
