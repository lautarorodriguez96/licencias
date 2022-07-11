<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php $path = $_GET['q'];
		//cambiar por "noticias" al momento de implementarlo
		if ($path=="noticiasgenerales"): ?>
			<h1 style="padding-left:40px;">Noticias</h1>
<?php endif; ?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="<?php print $classes_array[$id]; ?>">
			<?php print $row; ?>
		</div>
	</div>
<?php endforeach; ?>