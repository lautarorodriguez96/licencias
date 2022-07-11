(function ($) {
	Drupal.behaviors.buenosAires = {
		attach: function (context, settings) {

			/**
			 * Redimención de las imagenes de las noticias principales del home.
			 */
			$(function () {

				calculateDimentions(getActualWidth());

				$(window).on('resize', function () {
					calculateDimentions(getActualWidth());
				});

				function calculateDimentions(actualWidth) {
					if (actualWidth >= 992) {
						var largeNotice = $('.noticia-lg figure div'),
							smallNotices = $('.noticia-container:not(.noticia-lg) figure'),
							heightLgNotice = 16; // <-- Default h4 margin bottom

						heightLgNotice += $(smallNotices[0]).outerHeight();
						heightLgNotice += $(smallNotices[1]).find('div').outerHeight();

						largeNotice.css('height', heightLgNotice + 'px');
					}
				}

				function getActualWidth() {
					return document.body.offsetWidth;
				}

			});

			$('#galleryModal').carousel({ interval: false });
			$('#gallery').carousel({ interval: false });

			/* modal carousel gallery full screen v3 */
			$('#galleryModal').modal();
			$('#galleryModal').modal('hide');
			$('.row-gallery > a').each(function (i) {
				var $itemTemplate = $('<div class="item"> <img src="{img}" alt="{alt}"><div class="item-info"><h3></h3><p></p></div> </div>');
				$itemTemplate.find('img').attr('src', $(this).attr('href'));
				$itemTemplate.find('.item-info h3').html($(this).find('img').attr('title'));
				$itemTemplate.find('.item-info p').html($(this).find('img').attr('alt'));
				if ($(this).find('.info h3').length) {
					$itemTemplate.find('.item-info h3').html($(this).find('.info h3'));
				}
				if ($(this).find('.info p').length) {
					$itemTemplate.find('.item-info p').html($(this).find('.info p'));
				}
				if (i == 0) {
					$itemTemplate.addClass('active');
				}
				$('#gallery .carousel-inner').append($itemTemplate);
			});

			//Toma los ids de los elementos para indexarlos bonito
			$('.row-gallery > a').click(function (event) {
				var index = parseInt($(this).attr('id'));
				$('#galleryModal').modal('show');
				$('#galleryModal').carousel(index);
				event.preventDefault();
			});

			//Muestra en 2 columnas el formatter full carousel v3 si está al costado
			$('div.container > div.panel-panel.panel-bastrap-4.col-md-4.col-sm-4.col-xs-12 .row-gallery a').each(function () {
				$(this).removeClass('col-md-3');
				$(this).addClass('col-md-6');
			});

			//Este fix porque el comportamiento natural de carousel pelea con el anchor de drupal behaviours
			$('div[data-slide="prev"]').css('cursor', 'pointer');
			$('div[data-slide="next"]').css('cursor', 'pointer');

			$('div[data-slide="prev"]').click(function () {
				$('#galleryModal').carousel('prev');
			});
			$('div[data-slide="next"]').click(function () {
				$('#galleryModal').carousel('next');
			});

			/* Resize imagenes en menu y ocultarlo cuando hagas resize de la ventana */
			$('.nav .dropdown').on('show.bs.dropdown', function () {
				var height = $(this).find('.dropdown-menu').height();
				$(this).find('.col-menu-img').height(height);
			})
			$('.nav .dropdown').on('close.bs.dropdown', function () {
				$(this).find('.col-menu-img').height(0);
			})
			$(window).resize(function () {
				$('.nav .dropdown').removeClass('open');
				$('.nav .dropdown').find('.col-menu-img').height(0);
			})

			$(function () {
				$('.nav .dropdown .main-menu').hover(function () {
					$(this).parent().toggleClass('keepopen');
				});
			});

			$('.nav .dropdown').on('hide.bs.dropdown', function (e) {
				var target = $(e.target);
				if (target.hasClass("keepopen") || target.parents(".keepopen").length) {
					return false; // returning false should stop the dropdown from hiding.
				}
				else {
					return true;
				}
			});

			/* fin resize imagen menu*/

			/* widget-map scroll fix */
			$('.widget-embed').click(function () {
				$('.widget-map').css("pointer-events", "auto");
			});

			/* Tooltips */
			$('[data-toggle="tooltip"]').tooltip();

			$('.pager-previous a').addClass("glyphicon glyphicon-chevron-left");
			$('.pager-next a').addClass("glyphicon glyphicon-chevron-right");

			$('#recaptcha_options').find('li').addClass('btn btn-default');

			$('.col-md-12 #bweb-tramites-block-form').parent().removeClass('list-form');
			$('.col-md-12 #bweb-tramites-block-form').wrap('<section class="search-xl" id="atencion"></section>');
			$('.col-md-12 #bweb-tramites-block-form #edit-keys').addClass('input-xl');
			$iframes = $('iframe.embed-responsive-item');
			if ($iframes) {
				$iframes.each(function () {
					$(this).wrap('<div class="embed-responsive embed-responsive-16by9"></div>');
				});
			}

			/* Le agrega título a las imágenes inline del body */
			$('.pane-node-body img').each(function () {
				var img = $(this);
				var titulo = $('<figcaption>');
				var contenedor = $('<figure>');
				if (typeof img.attr('title') != 'undefined' && img.attr('title').length > 0) {
					img.wrap(contenedor);
					titulo.text(img.attr('title'));
					titulo.insertAfter(img);
				}
			});

			$('.dropdown-toggle').dropdown();

			//Arregla los collapse que no andan del sitio en telefonos
			$('.navbar-toggle').click(function (e) {
				$($(this).attr('data-target')).toggleClass('in');
				// $('#lupa-box').fadeToggle('fast');
				$('.chat-header').fadeToggle('fast');
				if ($('.img-reduce').css('float') == "left") {
					$('.img-reduce').css('float', 'none');
				}
				else {
					$('.img-reduce').css('float', 'left');
				}
				e.stopPropagation();
			});

			//menu home mobile
			$('.home-nav .container li a').each(function () {
				$(this).addClass('btn btn-default btn-lg btn-block');
				if ($(this).hasClass('active')) {
					$(this).removeClass('active');
				}
			});

			//Depende del id del form
			$("#gcaba_drupal_form_result_" + $(".gcaba-drupal-form-render-form").attr("data-id")).css("padding-top", "50px");

			$("#edit-openid-connect-client-login-container").removeClass("pull-right");

			if ($(window).width() < 767) {
				setTimeout("search_box()", 100);
			};

		}
	};

})(jQuery);

var timeOutHeader;

$(function () {
	// Buscador del header DESKTOP
	$('#search span').on('click', function (event) {
		event.stopPropagation();
		var status = $('.mainNavbar .inputSearch').css('display');
		if (status == 'none') {
			$('#container-search-navbar').stop();

			$('#container-search-navbar').fadeOut(250, function () {

				$('.mainNavbar .inputSearch').fadeIn(250, function () {

					timeOutHeader = setTimeout(function () {
						if ($('#edit-keys').val() == "") {
							$('.mainNavbar .inputSearch').fadeOut(250, function () {
								$('#container-search-navbar').fadeIn(250);
								$('#edit-keys').focus();
							});
						}
					}, 10000);

				});

			});

		}
	});

	// Buscador del header RESPONSIVE
	$('#searchMainNavbar button').on('click', function () {
		var status = $('.logoBABAC').css('display');
		if (status == 'block') {
			$('#searchMainNavbar, .logoBABAC').stop();

			$('#searchMainNavbar').fadeOut(250);
			$('.logoBABAC').fadeOut(250, function () {

				$('.mainNavbar .inputSearch').fadeIn(250, function () {

					timeOutHeader = setTimeout(function () {
						if ($('#edit-keys').val() == "") {
							$('.mainNavbar .inputSearch').fadeOut(250, function () {
								$('#container-search-navbar').fadeIn(250);
							});
						}
					}, 10000);

				});

			});

		}

	});

	// Teclas presionadas en el input del buscador
	$("#edit-keys").on("keyup", function (e) {
		if (e.keyCode == 27) {
			$('#div-search-box').fadeOut('fast');
			setTimeout("show_sub_menu()", 500);
			$('#div-lupa').removeClass('hidden');
		}
		if (e.keyCode == 13) {
			if ($("#edit-keys").val() == "") {
				close_bweb_header();
				return false;
			}
			window.location = '/bweb/search?keys=' + $('#edit-keys').val() + '&q=bweb';
			return false;
		}
	});

	$('.navbar-accesible button.navbar-toggle').on('click', function () {
		var status = $('.navbar-accesible button.navbar-toggle span').css('display');
		if (status == 'block') {
			$('.navbar-accesible button.navbar-toggle span').stop();
			$('.navbar-accesible button.navbar-toggle span.icon-menu').fadeOut(250, function () {
				$('.navbar-accesible button.navbar-toggle span.icon-close').fadeIn(250);
			});
		}
		else {
			$('#searchMainNavbar button.navbar-toggle span').stop();
			$('.navbar-accesible button.navbar-toggle span.icon-close').fadeOut(250, function () {
				$('.navbar-accesible button.navbar-toggle span.icon-menu').fadeIn(250);
			});
		}
	});
});

function close_bweb_header(e) {
	e.preventDefault();
	clearTimeout(timeOutHeader);
	// Responsive
	$('.mainNavbar .inputSearch').fadeOut(250, function () {
		if (window.innerWidth <= 992) {
			$('#searchMainNavbar').fadeIn(250);
			$('.logoBABAC').fadeIn(250);
		}
		else {
			$('#container-search-navbar').fadeIn(250);
		}

	});

}

function search_box() {
	console.log("search_box()");

	$('#edit-openid-connect-client-login-container').removeClass('pull-right');
	$('#div-search-box').fadeIn('slow');
	$('#div-lupa').addClass('hidden');
	$('#lupa-box').addClass('lup-box');

	$('#edit-keys').prop('placeholder', '¿Qué estás buscando?..');
	$('#edit-keys').removeClass('form-control');
	$('#edit-keys').addClass('key-not');
	$('#edit-keys').focus();

	$('#edit-submit--2').addClass('btn-lp');
	$('#edit-submit--3').addClass('btn-lp');

	setTimeout("show_search_box()", 10000);
}

function show_search_box() {
	console.log("show_search_box()");

	if ($(".key-not").val() == "") {
		if ($(window).width() > 767) {
			$('#div-search-box').fadeOut('fast');
			setTimeout("show_sub_menu()", 500);
		}
		return false;
	}
}

function show_sub_menu() {
	console.log("show_sub_menu()");

	$('.navbar-list-secondary').fadeIn('slow');
}

