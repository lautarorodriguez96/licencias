<?php
$a = 1;

$col_offset = '';
if( !isset($GLOBALS['col_offset']) ){ $col_offset = ' col-md-offset-1'; $GLOBALS['col_offset'] = ''; }
?>

<div class="col-md-2 ml-2 mb-2 <?php print $col_offset; ?>">
    <div class="row dis_image_wrapper"> <img class="img-circle" src="/sites/gcaba/files/<?php print $field_disenador_profs_foto[0]['filename']; ?>"> </div>
    <div class="text-wrapper">
        <div class="row text-center"> <strong><?php print $field_disenador_profs_nombre[0]['value'] ?></strong> </div>
        <div class="row text-center"> <p style="color: grey;"><?php print $field_disenador_profs_rol[0]['value'] ?></p> </div>
    </div>
</div>