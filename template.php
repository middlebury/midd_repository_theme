<?php

/**
 * Implements THEME_menu_tree__main_menu().
 */
function midd_repository_theme_menu_tree__main_menu($variables) {
  return '<ul class="nav nav-tabs nav-justified">' . $variables['tree'] . '</ul>';
}

/**
 * Prepares variables for html.tpl.php.
 *
 * @see html.tpl.php
 */
function midd_repository_theme_preprocess_html(&$variables) {
  $cdn = '//cdn.middlebury.edu';

  drupal_add_css($cdn . '/middlebury.edu/2015/css/responsive.css', array('type' => 'external'));
  drupal_add_js($cdn . '/middlebury.edu/2015/js/responsive.js', array('type' => 'external'));

  drupal_add_css('//cloud.typography.com/83898/706148/css/fonts.css', array('type' => 'external'));

  $meta_viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1',
    ),
  );

  drupal_add_html_head($meta_viewport, 'meta_viewport');
}

/**
 * Prepares variables for page.tpl.php.
 *
 * @see page.tpl.php
 */
function midd_repository_theme_preprocess_page(&$variables) {
  $left = !empty($variables['page']['sidebar_first']);
  $right = !empty($variables['page']['sidebar_second']);

  $variables['left_class'] = 'col-xs-12 col-lg-3 col-lg-pull-9';
  $variables['right_class'] = 'col-xs-12 col-md-4 col-lg-3 col-lg-push-3';
  $variables['center_class'] = 'col-xs-12 col-md-8 col-lg-6 col-lg-push-3';

  if ($left && !$right) {
    $variables['right_class'] = 'hidden';
    $variables['center_class'] = 'col-xs-12 col-lg-9 col-lg-push-3';
  }
  elseif (!$left && !$right) {
    $variables['right_class'] = 'hidden';
    $variables['left_class'] = 'hidden';
    $variables['center_class'] = 'col-xs-12';
  }

  $variables['left'] = $left;
  $variables['right'] = $right;
}
