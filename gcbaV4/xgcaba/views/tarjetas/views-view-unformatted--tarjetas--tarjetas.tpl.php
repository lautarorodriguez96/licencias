<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates

?>
*/

function countTarjetas($rows){
    switch(sizeof($rows)){
    	case 1:
    	
    	break;
        case 2:
            //echo "entro en 2";
            
        break;
        case 3:
            //echo "entro en 3";
            $rows[0]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[0]);
            $rows[0]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[0]);

            $rows[1]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[1]);
            $rows[1]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[1]);
            
            $rows[2]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[2]);
            $rows[2]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[2]);

        break;
        case 4:
            $rows[0]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[0]);
            $rows[0]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[0]);

            $rows[1]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[1]);
            $rows[1]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[1]);

            $rows[2]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[2]);
            $rows[2]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[2]);

            $rows[3]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[3]);
            $rows[3]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[3]);

        break;
        case 5:
            $rows[0]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[0]);
            $rows[0]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[0]);

            $rows[1]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[1]);
            $rows[1]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[1]);

            $rows[2]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[2]);
            $rows[2]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[2]);

            $rows[3]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[3]);
            $rows[3]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[3]);

            $rows[4]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[4]);
            $rows[4]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[4]);
        break;
        case 6:
            $rows[0]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[0]);
            $rows[0]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[0]);

            $rows[1]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[1]);
            $rows[1]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[1]);

            $rows[2]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[2]);
            $rows[2]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[2]);

            $rows[3]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[3]);
            $rows[3]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[3]);

            $rows[4]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[4]);
            $rows[4]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[4]);

            $rows[5]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[5]);
            $rows[5]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[5]);
        break;
        case 7:
            //echo "entro en 7";
            $rows[0]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[0]);
            $rows[0]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[0]);

            $rows[1]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[1]);
            $rows[1]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[1]);

            $rows[2]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[2]);
            $rows[2]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[2]);

            $rows[3]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[3]);
            $rows[3]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[3]);

            $rows[4]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[4]);
            $rows[4]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[4]);

            $rows[5]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[5]);
            $rows[5]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[5]);

            $rows[6]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[6]);
            $rows[6]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[6]);


        break;
        case 8:
            $rows[0]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[0]);
            $rows[0]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[0]);

            $rows[1]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[1]);
            $rows[1]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[1]);

            $rows[2]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[2]);
            $rows[2]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[2]);

            $rows[3]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[3]);
            $rows[3]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[3]);

            $rows[4]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[4]);
            $rows[4]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[4]);

            $rows[5]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[5]);
            $rows[5]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[5]);

            $rows[6]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[6]);
            $rows[6]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[6]);

            $rows[7]=str_replace('col-sm-6','col-md-4 col-sm-6 col-xs-12', $rows[7]);
            $rows[7]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[7]);
        break;

        case 9:
            $rows[0]=str_replace('col-sm-6','col-md-4 col-sm-6', $rows[0]);
            $rows[0]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[0]);

            $rows[1]=str_replace('col-sm-6','col-md-4 col-sm-6', $rows[1]);
            $rows[1]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[1]);

            $rows[2]=str_replace('col-sm-6','col-md-4 col-sm-6', $rows[2]);
            $rows[2]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[2]);

            $rows[3]=str_replace('col-sm-6','col-md-4 col-sm-6', $rows[3]);
            $rows[3]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[3]);

            $rows[4]=str_replace('col-sm-6','col-md-4 col-sm-6', $rows[4]);
            $rows[4]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[4]);

            $rows[5]=str_replace('col-sm-6','col-md-4 col-sm-6', $rows[5]);
            $rows[5]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[5]);

            $rows[6]=str_replace('col-sm-6','col-md-4 col-sm-6', $rows[6]);
            $rows[6]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[6]);

            $rows[7]=str_replace('col-sm-6','col-md-4 col-sm-6', $rows[7]);
            $rows[7]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[7]);

            $rows[8]=str_replace('col-sm-6','col-md-4 col-sm-6', $rows[8]);
            $rows[8]=str_replace('thumbnail card-grande','thumbnail card-chica', $rows[8]);
        break;

    }
	

	return $rows;
}

?>

<div class="tarjetas">
    <div class="row">
    <?php

        foreach (countTarjetas($rows) as $id => $row){ 
            print $row;
        } 
    ?>
    </div>
</div>

<?php


/*
Codigo"Previo al 14/03/2019 - Se remplazo por el actual. 

<?php
function countShortcuts($rows){

    switch(count($rows)){
        case 2:
            $rows[0]=str_replace('col-md-3','col-md-4 col-md-offset-2', $rows[0]);
            $rows[1]=str_replace('col-md-3','col-md-4', $rows[1]);
        break;
        case 3:
            $rows[0]=str_replace('col-md-3','col-md-4', $rows[0]);
            $rows[1]=str_replace('col-md-3','col-md-4', $rows[1]);
            $rows[2]=str_replace(array('col-md-3','col-sm-6',),array('col-md-4','col-sm-12'), $rows[2]);
        break;
    }
    return $rows;
}
?>

<?php 
foreach (countShortcuts($rows) as $id => $row){ ?>
    <?php print $row; ?>
<?php } ?>
*/
?>