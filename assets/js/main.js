(function($){

  var $window = $(window);
  var $htmlBody = $('html, body');
  var $fixedNavTop = $('#NavbarTopFixed');
  var $navbars = $('#NavbarTop, #NavbarTopFixed, #SideNavBar, #NavbarTopSingle');
  var $navLink = $navbars.find('.navbar-nav .nav-link');
  var sideNavToggler = $navbars.find('.navbar-toggler');
  var sideNav = $('#SideNavBar');
  
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

  function hideSideBar() {
    sideNav.removeClass('active');
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
    hideSideBar();
  })

  $window.resize(function(){
    hideSideBar();
  })

  $navLink.on('click', function(e){
    var section = $(this).data('siteSection');
    ScrollToSection(section);
    hideSideBar();
  })

  sideNavToggler.on('click', function(){
    console.log("test")
    sideNav.toggleClass('active');
  })

  function init() {
    JumpToSection()
  }

  init();

})(jQuery)