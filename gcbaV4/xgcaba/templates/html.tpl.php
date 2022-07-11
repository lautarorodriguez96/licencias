<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<!--[if lt IE 7]><html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces;?> class="lt-ie10 lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces;?> class="lt-ie10 lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces;?> class="lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces;?> class="lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces;?>> <!--<![endif]-->

  <head profile="<?php print $grddl_profile; ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#999999" />
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <!-- HTML5 element support for IE6-8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php print $scripts; ?>

    <!-- Codigo RSS -->
    <link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/gcba" title="RSS feed Buenos Aires Ciudad">
    <!-- end Codigo RSS -->
      <?php
      $block = module_invoke('gcaba_ba147', 'block_view', 'chat147');
      print render($block['content']);
      ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?> >

    <!-- Google Tag Manager -->
      <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WRB24B"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WRB24B');</script>
    <!-- End Google Tag Manager -->

    <noscript class="how-to">
      <a class="js-alert alert-spot alert-spot-danger text-center" href="http://www.enable-javascript.com/es/" target="_blank">
        Para utilizar las funcionalidades completas de este sitio es necesario tener
        JavaScript habilitado. Aquí están las instrucciones para habilitar JavaScript en tu navegador web.
      </a>
    </noscript>
    <a class="lt-ie9-alert alert-spot alert-spot-danger text-center" href="http://browsehappy.com/?locale=es" target="_blank">
      Tu navegador no está actualizado. Tiene conocidas fallos de seguridad y podría no mostrar todas las características de este y otros sitios web.
      Aprendé cómo podes actualizarlo.
    </a>



    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>

  </body>
</html>
