<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Page Form'),
  'category' => t('Columns: 1'),
  'icon' => 'pageform.png',
  'theme' => 'panels_pageform',
  'css' => 'pageform.css',
  'regions' => array('middle' => t('Middle column')),
);
