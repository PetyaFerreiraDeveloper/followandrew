<?php
function followandrew_register_styles()
{
  wp_enqueue_style('followandrew-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
  wp_enqueue_style('followandrew-tailwind', get_template_directory_uri() . '/tailwind_output.css', array(), '1.0', 'all');
  wp_enqueue_style('followandrew-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '1.0', 'all');
  wp_enqueue_style('followandrew-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'followandrew_register_styles');
