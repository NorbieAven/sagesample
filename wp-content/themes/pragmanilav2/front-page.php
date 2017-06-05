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
	<style>
		.showcase{
		
			background: url(<?php echo get_theme_mod('showcase_image',get_bloginfo('template_url'). '/img/header-bg.jpg');?>) no-repeat center center;
			background-size: cover;
			

		}
	</style>
  </head>

  <body <?php body_class(); ?>>
<header>

 <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <?php 
      // Fix menu overlap
      if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; 
    ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div id="logo" class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                echo' <a href="<?php echo home_url(); ?>"><img src="'. esc_url( $logo[0] ) .'"></a>';
          } else {?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        <?php  } ?>
        </div>
        </div>
        <div class="col-md-8">
          <ul class="nav navbar-nav navbar-right scrolled">
          <?php 
              $args= array(
                'theme_location' => 'primary', 
                
                );
             ?>
            <?php wp_nav_menu($args); ?>
          </ul>
        </div>
        </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>  
  <section class="showcase">
      <div class="container">
      <?php $blog_title = get_bloginfo(); ?>
        <h1><?php echo get_theme_mod('showcase_heading','Custom Bootstrap Wordpress Theme'); ?></h1>
        <p><?php echo get_theme_mod('showcase_text','Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
        <a href="<?php echo get_theme_mod('btn_url','http://#.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text','Get Started'); ?></a>
      </div>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <?php if(is_active_sidebar('box1')) : ?>
              	<?php dynamic_sidebar('box1'); ?>
              <?php endif; ?>
          </div>

          <div class="col-md-4">
               <?php if(is_active_sidebar('box2')) : ?>
              	<?php dynamic_sidebar('box2') ;?>
              <?php endif; ?>
          </div>

          <div class="col-md-4">
              <?php if(is_active_sidebar('box3')) : ?>
              	<?php dynamic_sidebar('box3'); ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>