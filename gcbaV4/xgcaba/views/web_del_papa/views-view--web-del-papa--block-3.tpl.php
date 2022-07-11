<?php
/**
 * @file views-view.tpl.php
 * Main view template
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */

?>


<style type="text/css">

.links-normal-wrapper {
	margin: 0px;
}

.links-normal-wrapper .link-container {
	margin: 0px;
}

.links-special-wrapper {
	border:1px solid #CCC;
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
	width: 284px;
}

.links-special-wrapper .link-generic-container a {
	border-top: none;
	width: 272px;
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

.link-image-container .link-text {
	margin-left: 10px;
	float: left;
}

.links-special-wrapper .link-text {
	color: #000;
	font-size: 15px;
	font-weight: bold;
}

.link-text-container .link-text {
	/*auto*/
}

.links-special-wrapper .link-text-container .link-text {
	/*auto*/
}

.link-image-container .link-text {
	width: 220px;
}

.links-special-wrapper .link-image-container .link-text {
	width: 210px;
}

.links-special-wrapper .link-text-container a {
	background-position: 270px 14px;
}

.link-image-container a{
	width: 284px;
	display: table;
}

.link-image-container .link-image {
	float: left !important;
	height: 50px;
	width: 50px;
	overflow: hidden;
	text-align: center;
}

.link-generic-container img {
	max-width: none;
	max-height: none;
	height: inherit;
}

.no_background_block .views-row {
	margin-bottom: 0px;	
}
.link-text{
	font-family: 'Open Sans',Lucida Sans Unicode, Lucida Grande, sans-serif;
	font-size: 13px;
	font-weight: normal;

}

</style>

	
<?php 

$title = $variables["view"]->args[1];

$icon = $variables["view"]->args[2];

if(!file_exists('sites/gcaba/files/short-linkblanco2.png')) {
  $icon = "linkblanco2";
}


?>



<div class="circle dark clearfix">
  <span>
    <em style="background-image:url('/sites/gcaba/themes/gcba/images/short-linkblanco2.png')">
	    
    </em>
  </span>
  <h3>
    <a title="<?php echo $title ?>" href="">Links Institucionales</a>
  </h3>
</div>


<div class="links-normal-wrapper">
	<div class="link-container ">
	  <?php if ($rows): ?>
	    <div class="view-content">
	      <?php print $rows; ?>
	    </div>
	  <?php endif; ?>
	</div>
</div>


<?php /* class view */ ?>



