<style type="text/css">

.links-normal-wrapper {
	margin: 0px;
}

.links-normal-wrapper .link-container {
	margin: 0px;
}

.links-special-wrapper {
	padding: 5px;
	margin-bottom: 5px;
	margin-top: 5px;
}

.links-special-wrapper .link-container {
	margin: 0px;
}

.link-generic-container a{
	padding: 8px;
	border-bottom: 1px solid #CCC;
	color: #666;
	width: 350px;
}

.links-special-wrapper .link-generic-container a {
	border-top: none;
	width: 350px;
}

.links-special-wrapper a{
	width: 272px;
}

.link-generic-container a:hover{
	background-color: #EEE;
}

.link-text-container a{
	background: transparent url('/sites/gcaba/themes/gcba/images/li-arrow.png') no-repeat 285px center;
	display:table;
}

.link-image-container .link-text-cont{
	margin-left: 10px;
	float: left;
	width: 160px;
}


.links-special-wrapper .link-text {
	color: #000;
	font-size: 15px;
	font-weight: bold;
	margin:0px -10px 0px 1px;
}

.link-text-container .link-text {
	/*auto*/
}

.links-special-wrapper .link-text-container .link-text {
	/*auto*/
}

.link-image-container .link-text {
	color: #000;
	font-size: 16px;
	font-weight: bold;
}

.links-special-wrapper .link-image-container .link-text {
	float: left;
	width: 190px;
	}

.links-special-wrapper .link-text-container a {
	background-position: 270px 14px;
}

.link-image-container a{
	width: 350px;
	display: table;
}

.link-image-container .link-image {
	float: left !important;
	height: 130px;
	width: 150px;
	overflow: hidden;
	text-align: center;
	border-radius:20px;
}

.link-generic-container img {
	max-width: none;
	max-height: none;
	height: inherit;
}
.link-text-description{
	font-size: 14px;
}


/*.link-white h3 a{
	margin-top: 27px;
}*/

</style>
<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
global $language;
$firstSpecial = false;
?>

<?php 

	if (!function_exists('isFieldSpecial')) {
		function isFieldSpecial($d) {
			$e = 0;
			$e = (isset($d->field_especial))?$d->field_especial:0;
			$e = (isset($d->field_especial["und"])&&isset($d->field_especial["und"][0])&&isset($d->field_especial["und"][0]["value"]))?$d->field_especial["und"][0]["value"]:0;
			$e = (int)$e;
			return ($e === 1)?true:false;
		}
	}

	if (!function_exists('hasFieldImage')) {
		function hasFieldImage($d) {
			return (isset($d->field_image_widget["und"]))?true:false;
		}
	}

?>

<div class="links-normal-wrapper">
	<?php 
	$pAcumulado = 0;
	$pLimit = 600;
	foreach ($rows as $id => $row) { 
	  	$data = $variables["view"]->result[$id]->_field_data["nid"]["entity"];
		$hasImg = hasFieldImage($data);
		$isSpecial = isFieldSpecial($data);

		$pAcumulado += ($hasImg)?67:37; 

		if($pAcumulado>=$pLimit){ 
			 break;
		} 

		?>

		<?php if(!$firstSpecial && $isSpecial) { 
			$firstSpecial = true;
			?>
			</div>
			<div class="links-special-wrapper">
		<?php } ?>

		<div class="link-container <?php print $classes_array[$id]; ?>">
			<?php print($row); ?>
		</div>
	<?php 
		} ?>
</div>

