!(function($) {
  "use strict";

 // Preloader
  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('fast', function() {
        $(this).remove();
      });
    }
  });


$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('.back-to-top').fadeIn(); 
        } else { 
            $('.back-to-top').fadeOut(); 
        } 
    }); 
    $('.back-to-top').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
	    // Events carousel (uses the Owl Carousel library)
  $(".events-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    autoplayTimeout: 6000,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });
  // Initiate venobox lightbox
  $(document).ready(function() {
    $('.venobox').venobox();
  });
  

var arr = document.getElementsByClassName("x");
    for(var i=0; i<arr.length;i++)
    {
        gsap.from(arr[i], {
        scrollTrigger: {
        trigger: arr[i],
        toggleActions: "play none none none"
           },
        opacity:0,
        duration:1.0, 
		y:50 
         });  
}
    gsap.from('.y', {
      scrollTrigger: {
        trigger: '.y',
        toggleActions: "play none none none"
      },
      opacity: 0,
      duration: 1.0,
      y: -50

    });

})(jQuery);