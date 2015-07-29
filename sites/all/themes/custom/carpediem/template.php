<?php

/**
 * Display submenu on menu items.
 */
function carpediem_process_page(&$variables) {
    // Array with the names of the menus
    $menu_names = array('menu-logopedie', 'menu-kinesitherapie');

    foreach ($menu_names as $menu_name) {
        $menu_tree = menu_tree_all_data($menu_name);
        $variables[$menu_name] = menu_tree_output($menu_tree);
    }

}

function mytheme_preprocess_html(&$variables) {
  drupal_add_css('http://fonts.googleapis.com/css?family=Roboto:100,300,100italic', array('type' => 'external'));
}

function carpediem_preprocess_html(&$variables) {
  $viewport = array(
   '#tag' => 'meta',
   '#attributes' => array(
     'name' => 'viewport',
     'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
   ),
  );
  drupal_add_html_head($viewport, 'viewport');
}
