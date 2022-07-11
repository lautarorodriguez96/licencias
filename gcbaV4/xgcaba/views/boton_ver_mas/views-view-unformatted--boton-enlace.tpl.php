<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates

?>
*/  
?>
<div class="botonvermas" >
    <div class="row">
    <?php
    foreach ( $rows as $id => $row){ 
            print $row;
        } 
    ?>
    </div>
</div>  