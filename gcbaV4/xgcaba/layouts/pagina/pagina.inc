<?php

// Plugin definition
$plugin = array(
  'title' => t('Pagina'),
  'category' => t('GCABA V3'),
  'icon' => 'pagina.png',
  'theme' => 'panels_pagina',
  'css' => 'pagina.css',
  'admin css' => 'pagina-admin.css',
  'regions' => array(
    'left' => t('Left'),
    'right' => t('Right'),
    'header' => t('Header'),
    'body' => t('Body'),
    'full'  => t('Full Width'),
  ),
);
