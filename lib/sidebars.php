<?php

function magic_prod_sidebar_widgets(){
  register_sidebar(array(
    'id' => 'primary-sidebar',
    'name' => esc_html__( 'Primary Sidebar', 'magic_prod' ),
    'description' => esc_attr__( 'Main Sidebar for Blog posts page', 'magic_prod' ),
    'before_widget' => '<section id="%1$s" class="sidebar-module">',
    'after_widget'  => '</section>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>'
  ));
}
add_action( 'widgets_init', 'magic_prod_sidebar_widgets' );