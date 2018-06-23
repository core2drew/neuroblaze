(function($){
  
var $window = $(window);

function SetFixNavbar() {
    var $navbarTop = $('#NavbarTop');
    var windowTop = $window.scrollTop();
    var offset = 500;

    if(windowTop > offset) {
      $navbarTop.addClass('fixed');
    } else {
      $navbarTop.removeClass('fixed');
    }
  }

  $window.scroll(function(){
    SetFixNavbar()
  })
})(jQuery)