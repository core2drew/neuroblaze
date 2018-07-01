<?php
/*
Template Name: Testimonial
Template Post Type: post
*/
get_header(); 
?>

<div id="TestimonialContainer">
	<?php
		get_template_part( 'content-templates/content','testimonial');
	?>
</div>

<?php get_footer();