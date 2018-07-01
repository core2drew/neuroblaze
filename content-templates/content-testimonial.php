<?php 

$post_id = $post->ID;
$nav = get_the_post_navigation( array(
	'prev_text' => '<svg version="1.1" class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
	<g>
		<g>
			<path d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124
				c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844
				L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412
				c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008
				c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788
				C492,219.198,479.172,207.418,464.344,207.418z"/>
		</g>
	</g></svg> Previous Experience',
			'next_text' => 'Next Experience <svg version="1.1" class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve">
	<g>
		<g>
			<path d="M484.14,226.886L306.46,49.202c-5.072-5.072-11.832-7.856-19.04-7.856c-7.216,0-13.972,2.788-19.044,7.856l-16.132,16.136
				c-5.068,5.064-7.86,11.828-7.86,19.04c0,7.208,2.792,14.2,7.86,19.264L355.9,207.526H26.58C11.732,207.526,0,219.15,0,234.002
				v22.812c0,14.852,11.732,27.648,26.58,27.648h330.496L252.248,388.926c-5.068,5.072-7.86,11.652-7.86,18.864
				c0,7.204,2.792,13.88,7.86,18.948l16.132,16.084c5.072,5.072,11.828,7.836,19.044,7.836c7.208,0,13.968-2.8,19.04-7.872
				l177.68-177.68c5.084-5.088,7.88-11.88,7.86-19.1C492.02,238.762,489.228,231.966,484.14,226.886z"/>
		</g>
	</g>
	</svg>',
	'screen_reader_text' => __( '' )
	));


?>

<article class="post-content container">
  <div class="client-info-container">
			<?php the_post_thumbnail('thumbnail' , array('class' => 'rounded-circle thumbnail')); ?>
			<h3 class="name"><?php the_title(); ?></h3>
			<small class="position"><?php echo get_post_meta($post_id, 'position', true) ?></small>
  </div>
	<div class="testimony-content">
		<?php 
			echo apply_filters( 'the_content', get_post_field('post_content', $post_id) );
		?>
	</div>
	<?php
			echo $nav;
	?>
</article>

<?php 
	$categories = get_the_category($post_id);
	if ($categories) {
		$category_ids = array();
		foreach($categories as $individual_category) {
			$category_ids[] = $individual_category->term_id;
		}
		
		$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post_id),
		'posts_per_page'=> 3, // Number of related posts that will be shown.
		'caller_get_posts'=>1
		);
		
		$my_query = new wp_query( $args );
		if( $my_query->have_posts() ) {
			include(locate_template( 'template-parts/testimonial/more-articles.php', false, false));
		}
	}
?>