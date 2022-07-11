<?php

// Plugin definition
$plugin = array(
  'title' => t('Tres columnas'),
  'category' => t('GCABA V3'),
  'icon' => 'tres-columnas.png',
  'theme' => 'tres-columnas',
  'css' => 'tres-columnas.css',
  'regions' => array(
  	'top' => t('Top'), 
  	'bottom' => t('Bottom'), 
  	'body-left' => t('Left'),
    'body-middle'  => t('Middle'),
    'body-right'  => t('Right'),
    'full'  => t('Full Width'),
  ),

);
