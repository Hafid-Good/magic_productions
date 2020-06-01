<?php

function magic_prod_theme_support(){
  add_theme_support('title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', ['caption']);

  add_theme_support('post-formats', [
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'audio',
  ]);
}
add_action( 'after_setup_theme', 'magic_prod_theme_support' );