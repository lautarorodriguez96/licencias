<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$j = 0;
$length = count($rows);
?>
<div id="area-slider" class="carousel slide" style="height:385px;overflow:hidden;">
  <ol class="carousel-indicators">
    <?php for ($i=0;$i<$length;$i++): ?>
	    <li data-target="#area-slider" data-slide-to="<?php print $i ?>"></li>
  	<?php endfor; ?>
  </ol>
	<div class="carousel-inner">
		<?php foreach ($rows as $id => $row): ?>
			<?php $active = (!$j)? ' active' : ''; ?>
		  <div class="item<?php print $active ?>">
		    <?php print $row ?>
		    <?php $j++; ?>
		  </div>
		<?php endforeach; ?>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#area-slider" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#area-slider" data-slide="next">&rsaquo;</a>
</div>