<?php

// Plugin definition
$plugin = array(
  'title' => t('Bootstrap custom columns'),
  'category' => t('Bootstrap'),
  'icon' => 'bootstrap.png',
  'theme' => 'panels_bootstrap',
  'css' => 'bootstrap.css',
  'regions' => array(
    'first' => t('First side'),
    'second' => t('Second side'),
    'third' => t('Third side'),
    'fourth' => t('Fourth side'),
    'fifth' => t('Fifth side'),
  ),
);
