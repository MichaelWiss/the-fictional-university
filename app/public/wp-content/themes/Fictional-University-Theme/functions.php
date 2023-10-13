<?php

function university_files() {
    echo "Does this output to the actual page?";
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');
