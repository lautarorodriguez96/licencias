<?php

// Plugin definition
$plugin = array(
  'title' => t('Tres columnas - extends'),
  'category' => t('GCABA V4'),
  'icon' => 'tres-columnas-extends.jpg',
  'theme' => 'tres-columnas-extends',
  'css' => 'tres-columnas-extends.css',
  'regions' => array(
  	'top' => t('Top'), 
  	'bottom' => t('Bottom'), 
  	'body-top-left' => t('Body top left'),
    'body-top-middle'  => t('Body top middle'),
    'body-top-right'  => t('Body top right'),
    'body-bottom-left'  => t('Body bottom left'),
    'body-bottom-right'  => t('Body bottom right'),
    'full'  => t('Full Width'),
  ),

);
