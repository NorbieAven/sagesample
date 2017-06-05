
<!-- FOOTER -->
<hr class="featurette-divider">
<footer class="blog-footer">
 <nav class="site-nav">
    <?php 
      $args= array(
        'theme_location' => 'footer', 
        
        );
     ?>
    <?php wp_nav_menu($args); ?>
    </nav>
	<p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>

	<?php wp_footer(); ?>
  </body>
</html>