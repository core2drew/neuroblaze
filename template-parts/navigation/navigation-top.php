<nav id="NavbarTop" class="navbar navbar-expand-lg navbar-light container-fluid <?php echo is_single() ? 'single' : '' ?>">
  <div class="row justify-content-center">
    <div class="col col-md-11">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img alt="NeuroBlaze" src=<?php echo get_stylesheet_directory_uri() . "/assets/images/NeuroBlaze-site-logo.png" ?> />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="#">Benefits</a>
          <a class="nav-item nav-link" href="#">Components</a>
          <a class="nav-item nav-link" href="#">Blazing Experience</a>
          <a class="nav-item nav-link" href="#">About Us</a>
          <a class="nav-item nav-link" href="#">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</nav>