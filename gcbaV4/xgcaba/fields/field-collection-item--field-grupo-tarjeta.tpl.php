<?php


$url = "https://www.buenosaires.gob.ar/sites/gcaba/files/";
$img = $content['field_imagenes']['#items'][0]['filename'];
$imagen = $url.$content['field_imagenes']['#items'][0]['filename'];

$titulo = $content['field_title']['#items'][0]['value'];

$descripcion = $content['field_description']['#items'][0]['value'];

$link = $content['field_link']['#items'][0]['url'];

?>
<a href="<?php echo $link?>" title="" alt="">
	<div class= "<?php print $_SESSION['col_tarjetas'] ?> ">
		<div class="<?php print $_SESSION['tam_tarjetas'] ?> ">

			<?php if(isset($img)){ ?>
				
				<img class="img-card" src="<?php echo $imagen?>"
					title="<?php echo $content['field_imagenes']['#items'][0]['title']?>" 
					alt="<?php echo $content['field_imagenes']['#items'][0]['alt']?>">

			<?php } ?>

			<div class="caption">
				<h3><?php echo $titulo?></h3>
				<p><?php echo $descripcion?></p>
			</div>
		</div>
	</div>	
</a>
