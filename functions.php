<?php


add_theme_support('post-thumbnails');
//add_image_size('gallery-main', 351, 351, true);
//add_image_size('gallery-preview', 117, 117, true);


require_once(TEMPLATEPATH . '/functions/admin.php');
require_once(TEMPLATEPATH . '/functions/shortcodes.php');





register_nav_menu('primary', 'Primary');



function ueberdesign_widgets_init() {

    register_sidebar(array(
        'name' => 'Footer Left',
        'id' => 'sidebar_footer_left'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id' => 'sidebar_footer_right'
    ));
}
add_action('widgets_init', 'ueberdesign_widgets_init');
