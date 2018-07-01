(function($){

  var $window = $(window);
  var $htmlBody = $('html, body');
  var $fixedNavTop = $('#NavbarTopFixed');
  var $navLink = $('#NavbarTop, #NavbarTopFixed').find('#navbarNavAltMarkup .navbar-nav .nav-link');
  
  function SetFixNavbar() {
    var windowTop = $window.scrollTop();
    var offset = $window.height();
    if(windowTop > 200) {
      $fixedNavTop.addClass('show');
    } else {
      $fixedNavTop.removeClass('show');
    }
  }

  function ScrollToSection(section){
    var offset = 50;
    $htmlBody.animate({
      scrollTop: $(section).offset().top - offset
    }, 1000);
  }

  function JumpToSection(){
    var section = window.location.hash;
    // history.pushState("", document.title, location.href.replace( /#.*/, ""));
    if(section) {
      setTimeout (function () {
        ScrollToSection(section)
       }, 100);
    }
  }

  $htmlBody.bind('scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove', function() {
    $htmlBody.stop();
  })

  $window.scroll(function(){
    SetFixNavbar();
  })

  $navLink.on('click', function(e){
    var section = $(this).data('siteSection');
    ScrollToSection(section);
  })

  function init() {
    JumpToSection()
  }

  init();

})(jQuery)