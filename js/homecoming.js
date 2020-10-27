
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