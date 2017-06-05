<?php 

  function wp_init_widgets($id) {

  	register_sidebar(array(
      'name' =>'Sidebar',
      'id' => 'sidebar',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget' =>  '</div>',
      'before_title'  => '<h4>',
      'after_title' => '</h4>'
      ));


    register_sidebar(array(
      'name' =>'Box1',
      'id' => 'box1',
      'before_widget' => '<div class="box">',
      'after_widget' =>  '</div>',
      'before_title'  => '<h3>',
      'after_title' => '</h3>'
      ));

  

    register_sidebar(array(
      'name' =>'Box2',
      'id' => 'box2',
      'before_widget' => '<div class="box">',
      'after_widget' =>  '</div>',
      'before_title'  => '<h3>',
      'after_title' => '</h3>'
      ));

  

    register_sidebar(array(
      'name' =>'Box3',
      'id' => 'box3',
      'before_widget' => '<div class="box">',
      'after_widget' =>  '</div>',
      'before_title'  => '<h3>',
      'after_title' => '</h3>'
      ));

  



  }