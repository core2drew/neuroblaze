<nav id="NavbarTopSingle" class="navbar navbar-expand-lg navbar-light container-fluid single">
  <div class="row justify-content-center">
    <div class="col col-lg-11 align-items-center">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img alt="NeuroBlaze" src=<?php echo get_stylesheet_directory_uri() . "/assets/images/NeuroBlaze-site-logo.png" ?> />
      </a>
      <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
        <svg version="1.1" class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
          <g>
            <rect y="3" width="50" height="4"/>
            <rect y="17" width="50" height="4"/>
            <rect y="31" width="50" height="4"/>
            <rect y="45" width="50" height="4"/>
          </g>
        </svg>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <img class="logo" alt="NeuroBlaze" src=<?php echo get_stylesheet_directory_uri() . "/assets/images/NeuroBlaze-site-logo.png" ?> />
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?php echo get_home_url() . '/#Benefits' ?>">Benefits</a>
          <a class="nav-item nav-link" href="<?php echo get_home_url() . '/#Components' ?>">Components</a>
          <a class="nav-item nav-link" href="<?php echo get_home_url() . '/#Testimonials' ?>">Blazing Experience</a>
          <a class="nav-item nav-link" href="<?php echo get_home_url() . '/#AboutUs' ?>">About Us</a>
          <a class="nav-item nav-link" href="<?php echo get_home_url() . '/#ContactUsForm' ?>">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</nav>