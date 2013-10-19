<?php
/**
 * @file
 * WebDevHub theme template.php
 */

/**
 * Implements hook_preprocess_page().
 */
function wdh_theme_preprocess_page(&$variables) {
  $variables['main_navigation'] = theme(
    'links__system_main_menu',
    array(
      'links' => $variables['main_menu'],
      'attributes' => array(
        'id' => 'main-menu',
        'class' => array('links', 'inline', 'clearfix'),
      ),
    )
  );
}
