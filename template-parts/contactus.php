<div id="ContactUsForm" class="container-fluid" style="background-image:url(<?php echo get_stylesheet_directory_uri() . "/assets/images/contact.jpg" ?>">
  <div class="row justify-content-center no-gutters mb-5">
    <h3 class="h4 text-center message col-10 col-md-8 col-lg-6 col-xl-4">
      We are so looking forward to hearing from you, 
      if you have some questions, or testimonials.
    </h3>
  </div>
  <div class="row justify-content-center">
    <div class="col col-11 col-lg-8 col-xl-5">
      <form autocomplete="off" method="POST">
        <div class="form-group">
          <input type="text" name="fullname" class="form-control name" placeholder="Enter your fullname" autocomplete="off">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
          <input type="text" name="email" class="form-control email" placeholder="Enter your e-mail"  autocomplete="faofflse">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
          <input type="text" name="mobile" class="form-control mobile" placeholder="Enter your mobile number"  autocomplete="off">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
          <textarea class="form-control message" name="message" rows="7" placeholder="Enter your message"  autocomplete="off"></textarea>
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <button type="submit" class="btn btn-primary nb-button nb-primary-button submit">Submit</button>
      </form>
    </div>
  </div>
  <?php get_footer() ?>
</div>
