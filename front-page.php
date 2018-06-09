<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Draco
 */

get_header(); ?>

<div class="warpper">
	<main id="main" class="site-main" role="main">  
		<?php
			get_template_part( 'template-parts/about-us');
			get_template_part( 'template-parts/benefits'); 
		?>
	</main><!-- #main -->
</div>

<?php get_footer();