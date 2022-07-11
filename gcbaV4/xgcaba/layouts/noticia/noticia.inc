<?php

// Plugin definition
$plugin = array(
  'title' => t('Noticia'),
  'category' => t('GCABA V3'),
  'icon' => 'noticia.png',
  'theme' => 'noticia',
  'css' => 'noticia.css',
  'admin css' => 'noticia-admin.css',
  'regions' => array(
    'right' => t('Right'),
    'left' => t('Left'),
    'header' => t('Header'),
    'body' => t('Body')
  ),
);
