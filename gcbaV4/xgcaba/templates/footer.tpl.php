<footer>
	<div class="more-options-footer footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12 col-xs-12 titleMoreOptions">
					<p>MÁS BUSCADOS</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 ">
					<ul>
						<?php print render($page['footer_first']); ?>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 ">
					<ul>
						<?php print render($page['footer_second']); ?>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 ">
					<ul>
						<?php print render($page['footer_third']); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer footer-buenosaires">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12 col-xs-12 logoVBA">
						<a class="navbar-brand bavos-footer" href="http://www.buenosaires.gob.ar" target="_blank"></a>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 acercaSitio">
						<p>ACERCA DE ESTE SITIO</p>
						<ul>
							<?php print render($page['footer_four']); ?>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 telefonosUtiles">
						<p>TELÉFONOS DE EMERGENCIA</p>
						<ul>
							<li>
								<a class="hidden-xs hidden-sm">
									<span class="glyphicon glyphicon-earphone"></span>
									<div>103 | Emergencias</div>
								</a>
								<a class="hidden-md hidden-lg" href="tel:103">
									<span class="glyphicon glyphicon-earphone"></span>
									<div>103 | Emergencias</div>
								</a>
							</li>
							<li>
								<a class="hidden-xs hidden-sm">
									<span class="glyphicon glyphicon-earphone"></span>
									<div>107 | SAME</div>
								</a>
								<a class="hidden-md hidden-lg" href="tel:107">
									<span class="glyphicon glyphicon-earphone"></span>
									<div>107 | SAME</div>
								</a>
							</li>
							<li>
								<a class="hidden-xs hidden-sm">
									<span class="glyphicon glyphicon-earphone"></span>
									<div>108 | Línea Social</div>
								</a>
								<a class="hidden-md hidden-lg" href="tel:108">
									<span class="glyphicon glyphicon-earphone"></span>
									<div>108 | Línea Social</div>
								</a>
							</li>
							<li>
								<a class="hidden-xs hidden-sm">
									<span class="glyphicon glyphicon-earphone"></span>
									<div>147 | Atención Ciudadana</div>
								</a>
								<a class="hidden-md hidden-lg" href="tel:147">
									<span class="glyphicon glyphicon-earphone"></span>
									<div>147 | Atención Ciudadana</div>
								</a>
							</li>
							<li>
								<a class="hidden-xs hidden-sm">
									<span class="glyphicon glyphicon-earphone"></span>
									<div>144 | Violencia de Género</div>
								</a>
								<a class="hidden-md hidden-lg" href="tel:144">
									<span class="glyphicon glyphicon-earphone"></span>
									<div>144 | Violencia de Género</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-12 col-xs-12">
						<p class="hidden-xs hidden-sm">CONTACTO</p>
l
						<hr class="hidden-lg hidden-md" />

						<ul class="social">
							<li><a class="social-fb" href="http://www.facebook.com/gcba" target="_blank">Facebook</a></li>
							<li><a class="social-tw" href="http://www.twitter.com/gcba" target="_blank">Twitter</a></li>
							<li><a class="social-yt" href="http://www.youtube.com/user/GCBA" target="_blank">Youtube</a></li>
							<li><a class="social-in" href="https://www.instagram.com/buenosaires/" target="_blank">Instagram</a></li>
							<li><a class="social-rss" href="<?php echo module_invoke('gcaba_data_output', 'getRSS'); ?>" target="_blank">RSS</a></li>
						</ul>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 legal">
						<hr />
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12 legalText pull-right">
								<p>
									Los contenidos de Gobierno de la Ciudad Autónoma de Buenos Aires están licenciados bajo Creative Commons Reconocimiento 2.5 Argentina License
								</p>
							</div>
							<div class="logoOficialCiudad col-md-6 col-sm-6 col-xs-12 pull-left">
								<span>
									<a class="navbar-brand bac-footer" href="http://www.buenosaires.gob.ar" target="_blank">Buenos Aires Ciudad</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</footer>
