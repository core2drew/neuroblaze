<?php
  $story_query = new WP_Query(
    array(
        'posts_per_page' => 3,
        'suppress_filters' => 0,
    )
  );
?>

<div id="Testimonials" class="mainpage-section container-fluid">
  <h1 class="title">
    Blazing Experience
    <span class="underline"></span>
  </h1>
  <div class="row justify-content-center">
    <div class="col col-md-11 col-lg-11 col-xl-9">
      <div class="row">
        <?php while ( $story_query->have_posts() ) : $story_query->the_post(); ?>
          <?php
              /*
                * Include the Post-Format-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                */
              get_template_part( 'template-parts/testimonial/article', 'link' );
          ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>