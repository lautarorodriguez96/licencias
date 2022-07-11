<?php

// Plugin definition
$plugin = array(
  'title' => t('Area'),
  'category' => t('GCABA Area'),
  'icon' => 'area.png',
  'theme' => 'panels_area',
  'css' => 'area.css',
  'admin css' => 'area-admin.css',
  'regions' => array(
    'header' => t('Header'),
    'top' => t('Top'),
    'middle' => t('Middle'),
    'bottom-left' => t('Bottom-left'),
    'bottom-middle' => t('Bottom-middle'),
    'bottom-right' => t('Bottom-right'),
    'footer' => t('Footer'),
    'full'  => t('Full Width'),
  ),
);
