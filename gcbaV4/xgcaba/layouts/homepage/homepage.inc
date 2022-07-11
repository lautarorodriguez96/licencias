<?php

// Plugin definition
$plugin = array(
  'title' => t('Home Page'),
  'category' => t('GCABA Homepage'),
  'icon' => 'homepage.png',
  'theme' => 'panels_homepage',
  'css' => 'homepage.css',
  'regions' => array(
  	'top' => t('Top'), 
  	'middle' => t('Middle'), 
  	'middle_bottom_left' => t('Middle bottom left'),
  	'middle_bottom_center' => t('Middle bottom center'),
  	'middle_bottom_right' => t('Middle bottom right'),
  	'bottom' => t('Bottom')
  ),

);
