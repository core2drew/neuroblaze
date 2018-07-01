<div id="MoreTestimonials" class="container">
  <h1 class="title">
    More Blazing Experience
    <span class="underline"></span>
  </h1>
  <div class="row no-gutters justify-content-center related-projects">
    <div class="col">
      <div class="row">
        <?php	
            while( $my_query->have_posts() ) {
              $my_query->the_post();
              get_template_part( 'template-parts/testimonial/article','link');
            };
        ?>	
      </div>
    </div>
  </div>
</div>