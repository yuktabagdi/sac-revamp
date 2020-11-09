<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
   <style>
	/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/

#preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    overflow: hidden;
    background: #1a1814;
}

#preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #1a1814;
    border-top-color: #effad3;
    border-bottom-color: #effad3;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    -webkit-animation: animate-preloader 1s linear infinite;
    animation: animate-preloader 1s linear infinite;
}

@-webkit-keyframes animate-preloader {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate-preloader {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}	
	
	
/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/

.back-to-top {
    position: fixed;
    display: none;
    right: 15px;
    bottom: 10px;
    z-index: 995;
}

.back-to-top .fa-arrow-alt-circle-up{
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    width: 44px;
    height: 44px;
    border-radius: 50px;
    color: #00416d;
    transition: all 0.4s;
}
   </style>
</head>
<body>
	  <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="far fa-3x fa-arrow-alt-circle-up"></i></a>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
            </script>
<script>
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

</script>
</body>
</html>