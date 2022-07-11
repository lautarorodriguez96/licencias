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
<main class="main-container" role="main">
    <div class="container">
      	<div class="row">
			<article class="col-md-8 col-md-push-4">
				<?php print $content['right']; ?>
				<header>
					<?php print $content['header']; ?>
				</header>
				<nav class="hidden-md hidden-lg">
					<?php print $content['left']; ?>
				</nav>
				<section>
					<?php print $content['body']; ?>
				</section>
			</article>
			<aside class="col-md-4 col-md-pull-8 hidden-xs hidden-sm">
				<?php print $content['left']; ?>
			</aside>
		</div>
	</div>
</main>
<div id="estiloParaAdmin"></div>
