<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('pp-styles', get_theme_file_uri('/build/index.css'), [], '1.0');
    wp_enqueue_script('pp-scripts', get_theme_file_uri('/build/index.js'), [], '1.0', true);
});
