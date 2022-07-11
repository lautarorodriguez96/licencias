<?php
 /**
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */
?>

<?php 

$especial = ($row->field_field_especial[0]["raw"]["value"])?($row->field_field_especial[0]["raw"]["value"]==1):false;

$link = $row->field_field_link[0]["rendered"];
$linkInfo = $row->field_field_link[0]["raw"];

$img = (isset($row->field_field_image_widget[0]))?$row->field_field_image_widget[0]:false;
if($img){
	$imgInfo = $img["raw"];
	$img = $img["rendered"];
	$imgSrc = file_create_url($imgInfo["uri"]);
}	$url = image_style_url('imagen_widgets', $imgInfo["uri"]);

?>

<div class="link-generic-container <?php echo ($img)?'link-image-container':'link-text-container'; ?>">
	<a href="<?php echo $linkInfo["url"]; ?>" target="_blank">
		<?php if ($img){ 
			if((int)$imgInfo["height"]>=(int)$imgInfo["width"]){
				$restriction = 'width="100"';
			}else{
				$restriction = 'height="100"';
			}

			?>
			<div class="link-image">
				<img src="<?php echo render($url);?>" />
			</div>
		<?php } ?>

		<?php 
			$marTop = 0;
			if($img){
				$maxLen = ($especial)?25:32;
				$marTop = (strlen($linkInfo["title"])>$maxLen)?5:10;
			}
	
			?>
		<div class="link-test-cont">
			<p class="link-text">
				<?php echo $linkInfo["title"]; ?>	
			</p>
			<span class="link-text-description">
				<?php echo $row->field_body[0]["rendered"]["#markup"]?>
			</span>
		</div>
	</a>

</div>