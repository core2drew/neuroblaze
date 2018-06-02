<div class="header-menu-top">	  	
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
    <img alt="NeuroBlaze" src=<?php echo get_stylesheet_directory_uri() . "/assets/img/NeuroBlaze-site-logo.png" ?> />
  </a>	
  <nav class="site-links">
    <a class="link" href="#">About</a>
    <a class="link" href="#">Benefits</a>
    <a class="link" href="#">Blazing Stories</a>
    <a class="link" href="#">Contact Us</a>
  </nav>
  <?php get_template_part( 'template-parts/navigation/navigation', 'mobile' ); ?>
</div>