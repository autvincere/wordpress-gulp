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
$lista_de_ganadores = get_field('lista_de_ganadores');
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
                
<!--
 <div class='one'><figure class='parche'><div class='left'><p class='video'>video01</p></div><div class='right'><img src='<?php echo IMAGES; ?>/assets/img/quesuene.svg'></div><div class='description'><p><strong>Artista:</strong> Eusebio Lillo.</p><p><strong>Canción:</strong> xxxxxxxxxx.</p></div><div class='select'></div></figure></div>
-->
                
<!--
                <div class="two">
                    <figure class="parche">
                        <div class="left">
                            <p class="video">video02</p>
                        </div>
                        <div class="right">
                            <img src="<?php echo IMAGES; ?>/assets/img/quesuene.svg" alt="">
                        </div>
                        <div class="description">
                            <p><strong>Artista:</strong> Eusebio Lillo.</p>
                            <p><strong>Canción:</strong> xxxxxxxxxx.</p>
                        </div>
                        <div class="select">
                        </div>

                    </figure>
                </div>
-->
                
<!--
                <div class="three">
                    <figure class="parche ajuste-parche">
                        <div class="left ajuste-left">
                            <p class="video">video03</p>
                        </div>
                        <div class="right">
                            <img class="ajuste-img-three" src="<?php echo IMAGES; ?>/assets/img/quesuene.svg" alt="">
                        </div>
                        <div class="description">
                            <p><strong>Artista:</strong> Eusebio Lillo.</p>
                            <p><strong>Canción:</strong> xxxxxxxxxx.</p>
                        </div>
                        <div class="select">
                            <p>seleccionar</p>
                        </div>

                    </figure>
                </div>
-->
                
<!--
                <div class="four ajuste-top">
                    <figure class="parche">
                        <div class="left">
                            <p class="video">video04</p>
                        </div>
                        <div class="right">
                            <img src="<?php echo IMAGES; ?>/assets/img/quesuene.svg" alt="">
                        </div>
                        <div class="description">
                            <p><strong>Artista:</strong> Eusebio Lillo.</p>
                            <p><strong>Canción:</strong> xxxxxxxxxx.</p>
                        </div>
                        <div class="select">
                                                       
                        </div>

                    </figure>
                </div>
-->
<!--
                <div class="five ajuste-top">
                    <figure class="parche">
                        <div class="left">
                            <p class="video">video05</p>
                        </div>
                        <div class="right">
                            <img src="<?php echo IMAGES; ?>/assets/img/quesuene.svg" alt="">
                        </div>
                        <div class="description">
                            <p><strong>Artista:</strong> Eusebio Lillo.</p>
                            <p><strong>Canción:</strong> xxxxxxxxxx.</p>
                        </div>
                        <div class="select">
                        </div>

                    </figure>
                </div>
-->
                
<!--
                <div class="six ajuste-top">
                    <figure class="parche ajuste-parche">
                        <div class="left ajuste-left">
                            <p class="video">video06</p>
                        </div>
                        <div class="right">
                            <img class="ajuste-img-three" src="<?php echo IMAGES; ?>/assets/img/quesuene.svg" alt="">
                        </div>
                        <div class="description">
                            <p><strong>Artista:</strong> Eusebio Lillo.</p>
                            <p><strong>Canción:</strong> xxxxxxxxxx.</p>
                        </div>
                        <div class="select">
                        </div>

                    </figure>
                </div>
-->
<!--
                <div class="seven ajuste-top">
                    <figure class="parche">
                        <div class="left">
                            <p class="video">video07</p>
                        </div>
                        <div class="right">
                            <img src="<?php echo IMAGES; ?>/assets/img/quesuene.svg" alt="">
                        </div>
                        <div class="description">
                            <p><strong>Artista:</strong> Eusebio Lillo.</p>
                            <p><strong>Canción:</strong> xxxxxxxxxx.</p>
                        </div>
                        <div class="select">
                        </div>

                    </figure>
                </div>
                <div class="eight ajuste-top">
                    <figure class="parche">
                        <div class="left">
                            <p class="video">video08</p>
                        </div>
                        <div class="right">
                            <img src="<?php echo IMAGES; ?>/assets/img/quesuene.svg" alt="">
                        </div>
                        <div class="description">
                            <p><strong>Artista:</strong> Eusebio Lillo.</p>
                            <p><strong>Canción:</strong> xxxxxxxxxx.</p>
                        </div>
                        <div class="select">
                        </div>

                    </figure>
                </div>
                <div class="nine ajuste-top">
                    <figure class="parche ajuste-parche">
                        <div class="left ajuste-left">
                            <p class="video">video09</p>
                        </div>
                        <div class="right">
                            <img class="ajuste-img-three" src="<?php echo IMAGES; ?>/assets/img/quesuene.svg" alt="">
                        </div>
                        <div class="description">
                            <p><strong>Artista:</strong> Eusebio Lillo.</p>
                            <p><strong>Canción:</strong> xxxxxxxxxx.</p>
                        </div>
                        <div class="select">
                        </div>

                    </figure>
                </div>
-->
<!--
                <div class="ten ajuste-top">
                    <figure class="parche">
                        <div class="left">
                            <p class="video">video10</p>
                        </div>
                        <div class="right">
                            <img src="<?php echo IMAGES; ?>/assets/img/quesuene.svg" alt="">
                        </div>
                        <div class="description">
                            <p><strong>Artista:</strong> Eusebio Lillo.</p>
                            <p><strong>Canción:</strong> xxxxxxxxxx.</p>
                        </div>
                        <div class="select">
                        </div>

                    </figure>
                </div>
-->
                
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
<!--
                   <li><a href="#" class="button">
                       mecánica concurso
                       </a></li>
-->
                       <li>
                           <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2017/08/bases.pdf" class="button" target="_blank">
                               bases legales!
                           </a> 
                       </li>
               </ul>
            </article>
            <section class="lista-ganadores">
                <?php echo $lista_de_ganadores; ?>
            </article>
        </section>
    </main>
<?php
get_footer();
?>

</body>

<!--</html>-->