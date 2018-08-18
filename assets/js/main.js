jQuery(document).ready(function($){
  var $window = $(window);
  var $htmlBody = $('html, body');
  var $fixedNavTop = $('#NavbarTopFixed');
  var $navbars = $('#NavbarTop, #NavbarTopFixed, #SideNavBar, #NavbarTopSingle');
  var $navLink = $navbars.find('.navbar-nav .nav-link');
  var $sideNavToggler = $navbars.find('.navbar-toggler');
  var $sideNav = $('#SideNavBar');

  var initContactUsForm = function(){
    var $contactUsForm = $('#ContactUsForm').find('form')
    var $contactUsSubmit = $contactUsForm.find('button')

    var submitForm = function(){
      $contactUsForm.validate({
        rules:{
          fullname: {
            required: true,
          },
          email: {
            required: true,
            email: true
          },
          mobile: {
            required: true,
          },
          message: {
            required: true,
          }
        }
      })
    }
    $contactUsSubmit.on('click', function(){
      submitForm()
    })
  }

  var setFixNavbar = function() {
    var windowTop = $window.scrollTop();
    var offset = $window.height();
    if(windowTop > 200) {
      $fixedNavTop.addClass('show');
    } else {
      $fixedNavTop.removeClass('show');
    }
  }

  var scrollToSection = function (section){
    var offset = 50;
    $htmlBody.animate({
      scrollTop: $(section).offset().top - offset
    }, 1000);
  }

  var hideSideBar = function() {
    $sideNav.removeClass('active');
  }

  var jumpToSection = function (){
    var section = window.location.hash;
    // history.pushState("", document.title, location.href.replace( /#.*/, ""));
    if(section) {
      setTimeout (function () {
        scrollToSection(section)
       }, 100);
    }
  }

  var initCarousel = function () {
    var carousel = $('.carousel')
    carousel.carousel()
  }

  function init() {
    
    $window.scroll(function(){
      setFixNavbar();
      hideSideBar();
    })
  
    $window.resize(function(){
      hideSideBar();
    })

    $htmlBody.bind('scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove', function() {
      $htmlBody.stop();
    })

    $navLink.on('click', function(e){
      var section = $(this).data('siteSection');
      scrollToSection(section);
      hideSideBar();
    })

    $sideNavToggler.on('click', function(){
      $sideNav.toggleClass('active');
    })

    jumpToSection()
    initCarousel()
    initContactUsForm();
  }

  init();
})