<?php

function my_assessment_styles()
{
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/custom/custom.css', [], '3.1.1', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/custom/custom.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_assessment_styles');

//ADD HEADER AND FOOTER

add_theme_support('menus');
register_nav_menu('primary', 'Primary Header');
register_nav_menu('secondary', 'Footer Navigation');

// add shortcode
