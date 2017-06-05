<?php

function psi_setup_theme() {

register_nav_menus(
    array(
      'primary' => __( 'Primary Navigation'),
      'footer' => __( 'Footer Navigation' )
    )
  );
}
