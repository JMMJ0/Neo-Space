// NAVIGATION LOGO SCROLL TOP

/* This is a jQuery function that is triggered when the logo is clicked. It prevents the default action
of the logo, which is to link to the homepage. It then removes the class 'open' from the nav-toggle,
which is the hamburger icon. It also removes the class 'collapse' from the menu-left, which is the
navigation menu. Finally, it animates the scroll to the top of the page. */
$('.logo').on('click', function(e) {
    e.preventDefault();
    $('.nav-toggle').removeClass('open');
    $('.menu-left').removeClass('collapse');
    $('html, body').animate({
      scrollTop: 0
    }, 750, 'easeInOutQuad')
  });
  // LINKS TO ANCHORS
  $('a[href^="#"]').on('click', function(event) {
  
    var $target = $(this.getAttribute('href'));
  
    if($target.length) {
      event.preventDefault();
      $('html, body').stop().animate({
        scrollTop: $target.offset().top
      }, 750, 'easeInOutQuad');
    }
  });
  
  // TOGGLE HAMBURGER & COLLAPSE NAV

/* This is a jQuery function that is triggered when the hamburger icon is clicked. It toggles the class
'open' on the hamburger icon. It also toggles the class 'collapse' on the navigation menu. */
  $('.nav-toggle').on('click', function() {
    $(this).toggleClass('open');
    $('.menu-left').toggleClass('collapse');
  });
  // REMOVE X & COLLAPSE NAV ON ON CLICK
/* This is a jQuery function that is triggered when a link in the navigation menu is clicked. It
removes the class 'open' from the hamburger icon. It also removes the class 'collapse' from the
navigation menu. */
  $('.menu-left a').on('click', function() {
    $('.nav-toggle').removeClass('open');
    $('.menu-left').removeClass('collapse');
  });
  
  // SHOW/HIDE NAV
  
  // Hide Header on on scroll down
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('header').outerHeight();
  
  $(window).scroll(function(event){
      didScroll = true;
  });
  
  setInterval(function() {
      if (didScroll) {
          hasScrolled();
          didScroll = false;
      }
  }, 250);
  
  function hasScrolled() {
      var st = $(this).scrollTop();
  
      // Make sure they scroll more than delta
      if(Math.abs(lastScrollTop - st) <= delta)
          return;
  
      // If they scrolled down and are past the navbar, add class .nav-up.
      // This is necessary so you never see what is "behind" the navbar.
      if (st > lastScrollTop && st > navbarHeight){
          // Scroll Down
          $('header').removeClass('show-nav').addClass('hide-nav');
          $('.nav-toggle').removeClass('open');
          $('.menu-left').removeClass('collapse');
      } else {
          // Scroll Up
          if(st + $(window).height() < $(document).height()) {
              $('header').removeClass('hide-nav').addClass('show-nav');
          }
      }
  
      lastScrollTop = st;
  }