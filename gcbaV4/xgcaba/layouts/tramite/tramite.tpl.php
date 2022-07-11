<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<!-- Full width content -->
<div class="panel-panel panel-panel-full-width">
	<div><?php print $content['full']; ?></div>
</div>
<main class="main-container" role="main">
<div class="container">
	<div class="row">
		<article class="col-md-8">
			<?php print $content['left']; ?>
			<header>
				<?php print $content['header']; ?>
			</header>
			<section>
				<?php print $content['body']; ?>
			</section>
		</article>
		<aside>
			<div class="col-md-4 col-sm-12">
				<?php print $content['right']; ?>
			</div>
		</aside>
	</div>
	<div id="estiloParaAdmin"></div>
</div>
</main>