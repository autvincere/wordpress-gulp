jQuery(document).ready(function ($) {
 
  
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });


    
    
//    Scroll
    $('a[href*="#"]:not([href="#"])').click( function(event) {
        event.preventDefault();
        var anchor = 0;
        if($(this.hash).offset().top > $(document).height()-$(window).height()){
            anchor=$(document).height()-$(window).height();
        }else{
            anchor = $(this.hash).offset().top - 24 ;
        }
        $('html,body').stop().animate({scrollTop:anchor}, 700,'swing');
    });
   
    //cierre scroll
    
    //SLIDER
   
      
   
});


