<div class="col col-12 col-md-4">
  <div class="card align-items-center">
    <div class="card-body p-0">
      <div class="card-img-container">
        <?php the_post_thumbnail('thumbnail', array('class' => 'card-img')) ?>
      </div>
      <div class="card-title text-center">
        <h5 class="name"><?php the_title() ?></h5>
        <p class="position"><?php echo get_post_meta($post->ID, 'position', true) ?></p>
      </div>
      <div class="card-text lead">
        <svg version="1.1" class="quote" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="512.5px" height="512.5px" viewBox="0 0 512.5 512.5" style="enable-background:new 0 0 512.5 512.5;" xml:space="preserve"
            >
          <g>
            <path d="M112.5,208.25c61.856,0,112,50.145,112,112s-50.144,112-112,112s-112-50.145-112-112l-0.5-16
              c0-123.712,100.288-224,224-224v64c-42.737,0-82.917,16.643-113.137,46.863c-5.817,5.818-11.126,12.008-15.915,18.51
              C100.667,208.723,106.528,208.25,112.5,208.25z M400.5,208.25c61.855,0,112,50.145,112,112s-50.145,112-112,112
              s-112-50.145-112-112l-0.5-16c0-123.712,100.287-224,224-224v64c-42.736,0-82.918,16.643-113.137,46.863
              c-5.818,5.818-11.127,12.008-15.916,18.51C388.666,208.723,394.527,208.25,400.5,208.25z"/>
          </g>
        </svg>
        <p class="text">
          <?php echo wp_trim_words(get_the_content(), 20) ?>
        </p>
      </div>
      <a href="<?php the_permalink() ?>" class="btn nb-button nb-primary-button readmore">Read More</a>
    </div>
  </div>
</div>