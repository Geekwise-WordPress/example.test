<?php

function peskyrealm_files() {
    wp_enqueue_style('peskyrealm_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'peskyrealm_files');

// function peskyrealm_features() {
//     add_theme_suport('title-tag');
// }

add_action('after_setup_theme', 'peskyrealm_features');