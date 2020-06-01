<?php

function magic_prod_register_menus(){
  register_nav_menus(array(
    'main-menu'           => esc_html__('Magic Productions Main Menu', 'magic_prod'),
    'footer-menu'         => esc_html__('Footer Menu', 'magic_prod'),
  ));
}
add_action('init', 'magic_prod_register_menus');