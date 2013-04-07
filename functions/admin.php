<?php

function ueberdesign_theme_customizer($wp_customize) {

    $wp_customize->add_section( 'ueberdesign_section_logo', array(
        'title' => 'Logo',
        'priority' => 180
    ));

    $wp_customize->add_setting('ueberdesign[logo]', array(
        'type' => 'option'
    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ueberdesign[logo]', array(
        'label'   => 'Upload',
        'section' => 'ueberdesign_section_logo',
    )));

}
add_action( 'customize_register', 'ueberdesign_theme_customizer');
