<?php wp_footer(); ?>
<footer class="center-grilla">
   <center>
<!--
    <figure class="logos-gob">      
        <a class="logs" href="http://www.mtt.gob.cl/" target="_blank">
        <img class="gob" src="<?php echo IMAGES; ?>/assets/img/transantiago-logo.svg" alt=""/>
    </a>
    </figure>
    
-->
  
        <?php 
            if(is_active_sidebar('widget-somos')){
                dynamic_sidebar('widget-somos');
        }
        ?>
       
       
        <?php 
           if(is_active_sidebar('widget-menu')){
                dynamic_sidebar('widget-menu');
        }
        ?> 
          
        <?php 
            if(is_active_sidebar('widget-ubicacion')){
               dynamic_sidebar('widget-ubicacion');
        }
        ?>
        
        <?php 
    if(is_active_sidebar('widget-contacto')){
               dynamic_sidebar('widget-contacto');
        }
        ?>
    </center>
</footer>