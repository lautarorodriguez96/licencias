<?php

//    var_dump(drupal_realpath(path_to_theme()));
////    var_dump();
//    die;

?>


<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="es" class="lt-ie10 lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html lang="es" class="lt-ie10 lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html lang="es" class="lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>
<html lang="es" class="lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="es"> <!--<![endif]-->
<head>
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

    <link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/gcba" title="RSS feed Buenos Aires Ciudad">
    <?php
        $theme_path = base_path() . path_to_theme();
    ?>

    <!-- ESTILOS EXTRA -->

    <style>

        #ba-footer {
            padding: 60px 0;
            background: #111;
            margin-top: 20px;
        }

        #ba-footer .row-shortcut {
            margin: 0;
        }

        #ba-footerr .shortcut {
            padding-top: 0;
            padding-bottom: 0;
        }

        #ba-footer .shortcut h3 {
            color: #fff;
            font-size: 64px;
            margin-bottom: 24px;
        }

        #ba-footer .shortcut span {
            color: #aaa;
            text-align: left;
            margin: 0;
            width: inherit;
            height: inherit;
            border-radius: 0;
            display: inline;
            margin: 10px;
            font-size: 36px !important;
            position: relative;
            top: -4px;
            -ms-behavior: url(../bastrap3/pie.htc);
        }

        #ba-footer .shortcut:hover,
        #ba-footer .shortcut:focus,
        #ba-footer .shortcut:active {
            background-color: #222 !important;
        }

        .footer-shortcuts {

            padding-top: 48px;
            padding-bottom: 48px;
        }


    </style>


</head>
<body>
<!-- CONTENIDO -->
<main class="main-container" role="main" style="padding-top: 48px; padding-bottom: 96px;">
    <div class="container">


        <div class="row">


            <div class="col-md-4">
                <img src="<?php echo $theme_path; ?>/img/img-503.png"/>
            </div>
            <div class="col-md-8">

                <img src="<?php echo $theme_path; ?>/bastrap/bac-header.png" style="width:100px; height: 100px;" />

                <h1 style="font-family: " CHANEWEI", Helvetica, Arial,
                sans-serif; letter-spacing: -0.5px; text-align:left;" >Web fuera
                de servicio </h1>

                <h2 style="font-family: " CHANEWEI", Helvetica, Arial,
                sans-serif; letter-spacing: -0.5px; text-align:left;" >Código de
                error: 503</h2>

                <p style="font-family: " OpenSansBold", Helvetica, Arial,
                sans-serif; font-weight: normal; text-align:left;">En este
                momento, nuestra web está fuera de servicio por problemas
                técnicos. Estamos trabajando para solucionarlo.
                Llamanos al 147 si necesitás hacer algún trámite urgente, o
                intentalo de nuevo más tarde. <br/>
                ¡Gracias por tu paciencia!
                </p>
                <br/>
                <a href="http://www.facebook.com/gcba" target="_blank"><img
                            src="<?php echo $theme_path; ?>/bastrap/social-fb.png" width="50" height="50"/></a>
                <a href="http://www.twitter.com/gcba" target="_blank"><img
                            src="<?php echo $theme_path; ?>/bastrap/social-tw.png" width="50" height="50"/></a>


            </div>
        </div>
    </div>
    </div>
</main>
<!-- FIN DE CONTENIDO -->

<footer id="ba-footer">
    <div class="footer-shortcuts">
        <div class="container">
            <nav id="telefonos" class="row shortcut-row">
                <a class="col-md-3 col-sm-6 shortcut" href="tel:103">
                    <h3><span class="glyphicon glyphicon-earphone"></span>103
                    </h3>
                    <p>Emergencias</p>
                </a>
                <a class="col-md-3 col-sm-6 shortcut" href="tel:107">
                    <h3><span class="glyphicon glyphicon-earphone"></span>107
                    </h3>
                    <p>SAME</p>
                </a>
                <a class="col-md-3 col-sm-6 shortcut" href="tel:108">
                    <h3><span class="glyphicon glyphicon-earphone"></span>108
                    </h3>
                    <p>Línea social</p>
                </a>
                <a class="col-md-3 col-sm-6 shortcut" href="tel:147">
                    <h3><span class="glyphicon glyphicon-earphone"></span>147
                    </h3>
                    <p>Atención Ciudadana</p>
                </a>
            </nav>
        </div>
</footer>

<!-- JAVASCRIPT EXTRA -->
</body>
</html>
