

// Go to top
$(document).ready(function(){
  $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('#back-to-top').fadeIn();
          } else {
              $('#back-to-top').fadeOut();
          }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function () {
          $('body,html').animate({
              scrollTop: 0
          }, 400);
          return false;
      });
});

//Clients
$('.clients_slider').owlCarousel({
    autoplay: true,
    rewind: true,
    margin: 30,
    loop: true,
    dots: false,
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 5000,
    smartSpeed: 800,
    nav: false,
    navText: [
        "<i class='fa fa-chevron-circle-left'></i>",
        "<i class='fa fa-chevron-circle-right '></i>"
    ],
    responsive: {
      0: {
        items: 2
      },
      415: {
        items: 3
      },
      
      600: {
        items: 4
      },
  
      1024: {
        items: 5
      },
  
      1366: {
        items: 8
      }
    }
  });
//testimonial
$('.testimonial_slide').owlCarousel({
    autoplay: false,
    rewind: true,
    margin: 0,
    loop: true,
    dots: true,
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: false,
    navText: [
        "<i class='fa fa-chevron-circle-left'></i>",
        "<i class='fa fa-chevron-circle-right '></i>"
    ],
    responsive: {
      0: {
        items: 1
      },
      1366: {
        items: 1
      }
    }
  });
 //Home Banner Slider
 $('#home_slide').owlCarousel({
  autoplay: false,
  rewind: true,
  margin: 0,
  loop: true,
  dots: false,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 5000,
  smartSpeed: 800,
  nav: true,
  navText: [
      "<img src='images/left.svg'/>",
      "<img src='images/right.svg'/>"
  ],
  responsive: {
    0: {
      items: 1
    },
    1366: {
      items: 1
    }
  }
});