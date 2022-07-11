<?php
$secondary_nav_menu = render($secondary_nav);

global $base_url;

$theme_path = $base_url . "/" . path_to_theme() . "/";

?>
<header class="navbar navbar-primary navbar-top">
		<!-- Top header -->
		<div class="navbar-accesible bg-navbar-accesible">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-xs-12 navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-accesible-id">
							<span class="icon-menu"></span>
							<span class="icon-close" style="display: none;"></span>
						</button>
					</div>
					<nav id="navbar-accesible-id" class="collapse navbar-collapse" role="navigation">
						<div class="container">
							<!-- NAVBAR DE BUENOSAIRES -->
								<?php print $secondary_nav_menu; ?>
							<!-- NAVBAR DE ACCESIBILIDAD -->
								<?php print render($primary_nav); ?>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- Bottom header -->
		<div class="container">
			<div class="row">

				<!-- Navegación principal -->
				<div class="col-md-12 col-sm-12 col-xs-12 text-right mainNavbar noPadding">
					<nav id="navbar-principal-id" class="navbar">
						<div class="row">

							<div id="container-search-navbar-global" class="clearfix col-md-12">

									<?php if(xgcaba_module_exists('bweb')): ?>
										<!--  Lupa resposive -->
										<div id="searchMainNavbar" class="hidden-lg hidden-md col-sm-2 col-xs-2 pull-right noPadding">
											<button href="#" class="btn btn-primary noPaddingRight">
												<span class="glyphicon glyphicon-search"></span>
											</button>
										</div>
									<?php endif; ?>

									<!-- Logo de Buenos Aires y de Buenos Aires Ciudad -->
									<div class="col-md-3 <?php echo (xgcaba_module_exists('bweb')) ? 'col-sm-5 col-xs-6' : 'col-sm-12 col-xs-12 text-center'; ?> logoBABAC pull-left">
										<a href="<?php echo $base_url; ?>" <?php echo (!xgcaba_module_exists('bweb')) ? 'class="inline-block"' : ''; ?>>
											<img src="<?php echo $theme_path; ?>css/BA2016.png">
										</a>
									</div>
								<!-- </div> -->

								<div id="container-search-navbar" class="clearfix hidden-sm hidden-xs">

									<?php if(xgcaba_module_exists('bweb')): ?>
										<div id="search" class="col-md-1 pull-right">
											<span class="glyphicon glyphicon-search search-buenosaires-trigger"></span>
										</div>
									<?php endif; ?>

									<!-- Navbar con items principales -->
									<div id="navbar-principal" class="col-md-8 pull-right">
										<?php print $secondary_nav_menu; ?>
									</div>

								</div>

								<!-- Buscador -->
								<div class="col-md-9 col-sm-12 col-xs-12 inputSearch" role="search" style="display: none;">
									<div class="row">
										<?php
											$block = module_invoke('bweb', 'block_view', 'bweb');
											if(!empty($block['content'])) {
												print render($block['content']);
											}
										?>
									</div>
								</div>

							</div>

						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
