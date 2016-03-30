<?php

// Plugin definition
$plugin = array(
  'title' => t('Global columns'),
  'category' => t('Bootstrap'),
  'icon' => 'global.png',
  'theme' => 'panels_global',
  'css' => 'global.css',
  'regions' => array(
    'header' => t('Header'),
    'content' => t('Content'),
    'footer' => t('Footer'),
  ),
);
