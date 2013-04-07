<?php


add_theme_support('post-thumbnails');
//add_image_size('gallery-main', 351, 351, true);
//add_image_size('gallery-preview', 117, 117, true);


require_once(TEMPLATEPATH . '/functions/admin.php');
/*
require_once(TEMPLATEPATH . '/functions/shortcodes.php');
require_once(TEMPLATEPATH . '/functions/customtypes.php');
*/




register_nav_menu('primary', 'Primary');



/*
register_sidebar(array(
    'id' => 'sidebar_footer',
    'name' => __('Footer', 'MYTHEME'),
    'description' => __('Description Here', 'MYTHEME')
));
*/
