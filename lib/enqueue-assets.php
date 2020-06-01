<?php

function magic_prod_assets(){
  wp_enqueue_style( 'magic_prod-stylesheet', get_template_directory_uri(). '/dist/assets/css/bundle.css', [], '1.0.0', 'all');
  wp_enqueue_script( 'magic_prod-scripts', get_template_directory_uri(). '/dist/assets/js/bundle.js', ['jquery'], '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'magic_prod_assets');

function magic_prod_admin_assets(){
  wp_enqueue_style( 'magic_prod-admin-stylesheet', get_template_directory_uri(). '/dist/assets/css/admin.css', [], '1.0.0', 'all');
  wp_enqueue_script( 'magic_prod-admin-scripts', get_template_directory_uri(). '/dist/assets/js/admin.js', [], '1.0.0', true);
}
add_action( 'admin_enqueue_scripts', 'magic_prod_admin_assets');