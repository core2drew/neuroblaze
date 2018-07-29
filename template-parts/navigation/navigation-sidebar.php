<div class="sidebar justify-content-end" id="SideNavBar">
  <img class="logo" alt="NeuroBlaze" src=<?php echo get_stylesheet_directory_uri() . "/assets/images/NeuroBlaze-site-logo.png" ?> />
  <?php 
    if(is_single()):
  ?>
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="<?php echo get_home_url() . '/#Benefits' ?>">Benefits</a>
      <a class="nav-item nav-link" href="<?php echo get_home_url() . '/#Components' ?>">Components</a>
      <a class="nav-item nav-link" href="<?php echo get_home_url() . '/#Testimonials' ?>">Blazing Experience</a>
      <a class="nav-item nav-link" href="<?php echo get_home_url() . '/#AboutUs' ?>">About Us</a>
      <a class="nav-item nav-link" href="<?php echo get_home_url() . '/#ContactUsForm' ?>">Contact Us</a>
    </div>
  <?php
    else:
  ?>
    <div class="navbar-nav">
      <li class="nav-item nav-link" data-site-section='#Benefits'>Benefits</li>
      <li class="nav-item nav-link" data-site-section='#Components'>Components</li>
      <li class="nav-item nav-link" data-site-section='#Testimonials'>Blazing Experience</li>
      <li class="nav-item nav-link" data-site-section='#AboutUs'>About Us</li>
      <li class="nav-item nav-link" data-site-section='#ContactUsForm'>Contact Us</li>
    </div>
  <?php 
    endif;
  ?>
</div>