<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transantiago-theme
 */
get_header();
//$lista_de_ganadores = get_field('lista_de_ganadores');
?>
<main class="center-grilla">
        <div class="owl-carousel owl-theme">
            
            <div class="item color-one">             
                    <div class="one-slider">
                        <img class="artista" src="<?php echo IMAGES; ?>/assets/img/pslider01.png" alt=""/>
                    </div>
                    <div class="two-slider">
                        <img class="transantiagopresenta" src="<?php echo IMAGES; ?>/assets/img/transantiagopresenta.svg" alt=""/>
                    </div>
                <a class="down" href="#bajando">
                    <span class="icon-icons-04 icon-down"></span>
                </a>
                </div>
           
            
            <div class="item color-two">
                <div class="one-slider">
                    <img class="artista" src="<?php echo IMAGES; ?>/assets/img/pslider02.png" alt=""/>
                </div>
                <div class="two-slider">
                    <img class="quesuenetu" src="<?php echo IMAGES; ?>/assets/img/quesuenetubip.png" alt=""/>
                </div>
                <a class="down" href="#bajando">
                    <span class="icon-icons-04 icon-down"></span>
                </a>
            </div>
            
            <div class="item color-three">
                <div class="one-slider">
                    <img class="artista" src="<?php echo IMAGES; ?>/assets/img/pslider03.png" alt=""/>
                </div>
                <div class="two-slider">
                    <img class="hand" src="<?php echo IMAGES; ?>/assets/img/manobip.png" alt=""/>
                    <img class="leyenda" src="<?php echo IMAGES; ?>/assets/img/votaporel.svg" alt=""/>
                    <h3 class="slider">

                        Le pedimos ayuda a los cantantes urbanos para concientizar sobre los beneficios de que todos paguemos nuestro pasaje. Gana una bip de $ 10.000 votando por tu artista favorito y ayúdalo a ganar $1.000.000.

                    </h3>
                </div>
                <a class="down" href="#bajando">
                    <span class="icon-icons-04 icon-down"></span>
                </a>
            </div>
            
            <div class="item color-four">
                <div class="one-slider">
                    <img class="artista" src="<?php echo IMAGES; ?>/assets/img/pslider04.png" alt=""/>
                </div>
                <div class="two-slider">
                    <img class="hand" src="<?php echo IMAGES; ?>/assets/img/manobip.png" alt=""/>
                    <img class="leyenda" src="<?php echo IMAGES; ?>/assets/img/votaporelmejor.svg" alt=""/>
                    <h3 class="slider">

                        Porque los cantantes urbanos nos alegran nuestros días, 
                        le pedimos ayuda para generar conciencia sobre los beneficios de que todos paguemos nuestro pasaje. Gana una bip de $ 10.000 votando por tu artista favorito 
                        y ayúdalo a ganar $1.000.000.

                    </h3>
                </div>
                <a class="down" href="#bajando">
                    <span class="icon-icons-04 icon-down"></span>
                </a>
            </div>
            
            <div class="item color-five">
                <div class="one-slider">
                    <img class="artista" src="<?php echo IMAGES; ?>/assets/img/pslider05.png" alt=""/>
                </div>
                <div class="two-slider">
                    <img class="hand" src="<?php echo IMAGES; ?>/assets/img/manobip.png" alt=""/>
                    <img class="leyenda" src="<?php echo IMAGES; ?>/assets/img/tuytu.png" alt=""/>
                    <h3 class="slider">
                        Le pedimos ayuda a los cantantes urbanos para concientizar sobre los beneficios de que todos paguemos nuestro pasaje. Gana una bip de $ 10.000 votando por tu artista favorito y ayúdalo a ganar $1.000.000.
                    </h3>
                </div>
                <a class="down" href="#bajando">
                    <span class="icon-icons-04 icon-down"></span>
                </a>
            </div>
            
        </div>
    
       
        <section class="plugin">        
           
            <div>
                <div id="bajando"></div>
                
                <?php 
                while(have_posts() ) : the_post();

                the_content();
                endwhile;
                ?>

            </div>
        </section>
        <section class="ganadores">
            <article class="title">
                <figure>
                    <img src="<?php echo IMAGES; ?>/assets/img/ganadores-vip.svg" alt="">
                </figure>
            </article>
            <article>
               <ul class="btn">
                       <li>
                           <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2017/08/bases.pdf" class="button" target="_blank">
                               bases legales!
                           </a> 
                       </li>
               </ul>
            </article>
            <section class="lista-ganadores">
<!--                <?php echo $lista_de_ganadores; ?>-->
            </article>
        </section>
    </main>
<?php
get_footer();
?>

</body>

<!--</html>-->