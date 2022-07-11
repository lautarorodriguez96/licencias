 <?php

function countShortcuts($rows){
    switch(sizeof($rows)){
        case 2:
            //echo "entro en 2";
            $rows[0]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-sm-6 col-xs-12 borde-azul', $rows[0]);
            $rows[1]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-sm-6 col-xs-12 borde-azul', $rows[1]);
        break;
        case 3:
            //echo "entro en 3";
            $rows[0]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[0]);
            $rows[1]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[1]);
            $rows[2]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[2]);
        break;
        case 4:
            //Queda como esta la clase por defecto. 
        break;
        case 5:
            $rows[0]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[0]);
            $rows[1]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[1]);
            $rows[2]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[2]);
            $rows[3]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-sm-6 col-xs-12 borde-azul', $rows[3]);
            $rows[4]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-sm-6 col-xs-12 borde-azul', $rows[4]);
        break;
        case 6:
            $rows[0]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[0]);
            $rows[1]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[1]);
            $rows[2]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[2]);
            $rows[3]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[3]);
            $rows[4]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[4]);
            $rows[5]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[5]);
        break;
        case 7:
            //echo "entro en 7";
            $rows[0]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-3 col-sm-6 col-xs-12 borde-azul', $rows[0]);
            $rows[1]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-3 col-sm-6 col-xs-12 borde-azul', $rows[1]);
            $rows[2]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-3 col-sm-6 col-xs-12 borde-azul', $rows[2]);
            $rows[3]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[3]);
            $rows[4]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[4]);
            $rows[5]=str_replace('col-md-3 col-sm-6 col-xs-12 borde-azul','col-md-4 col-sm-6 col-xs-12 borde-azul', $rows[5]);

        break;
        case 8:
            //queda como esta la clase por defecto.
        break;
    }
	

	return $rows;
}

?>
