jQuery(document).ready(function ($) {
    
    //Agregar textos
    
//function changeDesc(){
//    //   Video 1
//    $('ul:nth-child(1) > li.totalpoll-choice-container:nth-child(1)')
//        .find('span')
//        .html('<p>Párrafo Video 1</p>');   
//    
//    //    Video 2
//    $('li.totalpoll-choice-container:nth-child(2)')
//        .find('span')
//        .html('<p>Párrafo Video 2</p>');  
//    
//    //    Video 3
//    $('li.totalpoll-choice-container:nth-child(3)')
//        .find('span')
//        .html('<p>Párrafo Video 3</p>');  
//    
//    
//    //    Video 4
//    $('ul:nth-child(2) > li.totalpoll-choice-container:nth-child(1)')
//        .find('span')
//        .html('<p>Párrafo Video 4</p>'); 
//    
//    //    Video 5
//    $('ul:nth-child(2) > li.totalpoll-choice-container:nth-child(2)')
//        .find('span')
//        .html('<p>Párrafo Video 5</p>'); 
//    
//    //    Video 6
//    $('ul:nth-child(2) > li.totalpoll-choice-container:nth-child(3)')
//        .find('span')
//        .html('<p>Párrafo Video 6</p>'); 
//    
//    //    Video 7
//    $('ul:nth-child(3) > li.totalpoll-choice-container:nth-child(1)')
//        .find('span')
//        .html('<p>Párrafo Video 7</p>'); 
//    
//    //    Video 8
//    $('ul:nth-child(3) > li.totalpoll-choice-container:nth-child(2)')
//        .find('.totalpoll-choice-label')
//        .html('<p>Párrafo Video 8</p>'); 
//    
//    //    Video 9
//    $('ul:nth-child(3) > li.totalpoll-choice-container:nth-child(3)')
//        .find('span')
//        .html('<p>Párrafo Video 9</p>'); 
//    
//    //    Video 10
//    $('ul:nth-child(4) > li.totalpoll-choice-container:nth-child(1)')
//        .find('span')
//        .html('<p>Párrafo Video 10</p>'); 
//}
    
//    changeDesc();
    
    
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
    $('div.owl-carousel').owlCarousel({
         items: 1
        ,nav: true
        ,autoplayTimeout: 5000
        ,loop: true
        ,center: true
    });

//    if (document.addEventListener){
//        window.addEventListener('load',changeDesc(),false);
//    } else {
//        window.attachEvent('onload',changeDesc());
//    }
       
    
        
//    $('button').hover(
//            function(e){
//                changeDesc();
//                console.log('estoy en el boton');
//            },
//            function(e){
//                //do the mouseleave things here...
//                changeDesc();
//                console.log('No estoy en el boton');
//            });
   
});


