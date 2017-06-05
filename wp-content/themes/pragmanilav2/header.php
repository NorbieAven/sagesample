<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <title>
    <?php bloginfo('name'); ?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

	<?php wp_head (); ?>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <?php 
  // Fix menu overlap
  if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; 
?>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
             <?php
           wp_nav_menu( array(
               'theme_location'    => 'primary',
               'container'         => false,
               'menu_class'        => 'nav navbar-nav',

               )
           );
       ?>

          </ul>
          <ul class="nav navbar-nav navbar-right">
             <?php
           wp_nav_menu( array(
               'theme_location'    => 'primary',
               'container'         => false,
               'menu_class'        => 'nav navbar-nav',

               )
           );
       ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <!--  <div class="container">
      <div class="blog-header">
        <h1 class="blog-title"><?php //bloginfo('name'); ?></h1>
        <p class="lead blog-description"><?php //bloginfo('description'); ?></p>
      </div>-->

