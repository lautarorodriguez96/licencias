<?php
$node = menu_get_object();


if (!empty($node->field_audio['und'][0]['uri'])) { 
drupal_add_js(drupal_get_path('theme', 'gcba').'/audioplayer/audio.min.js', array('type' => 'file', 'scope' => 'header'));
drupal_add_css(drupal_get_path('theme', 'gcba').'/audioplayer/index.css');



$url_audio = file_create_url($node->field_audio['und'][0]['uri']); ?>
<script type="text/javascript">
jQuery(document).ready(function() {
	audiojs.events.ready(function() {
		var as = audiojs.createAll();
	});
});
</script>



<audio src="<?php print $url_audio; ?>"  preload="auto"></audio>
 <?php } ?>
