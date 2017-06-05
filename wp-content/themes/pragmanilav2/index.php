 <?php get_header(); ?>

 
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->
 <div class="row">
   <div class="col-sm-8 blog-main">
		<?php 
			if(have_posts()):
		 ?>
		 <?php while(have_posts()) : the_post();?>
          <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>

     		<?php else: ?>
      		<p><?php __('NO POSTS FOUND'); ?></p>
			<?php endif; ?>
		</div> <!--blogpostmain-->	

<?php get_sidebar(); ?>

<?php get_footer(); ?>