<?php
function load_CSS()
{
    wp_enqueue_style('output', get_template_directory_uri() . '/dist/output.css', array());
}
add_action('wp_enqueue_scripts', 'load_CSS');