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
?>

<section class="slider center-grilla">

    <!-- slider custom postype -->

    <?php
    $args = array( 
        'post_type' => 'slider',
        'orderby' => 'menu_order',
        "order" => 'ASC',
        'posts_per_page'=> -1
    );

    $slider = new WP_Query( $args );

    if ($slider->have_posts() ) : ?>

    <div class="flexslider-container">
        <div id="catalogo-home" class="flexslider">
            <ul class="slides">
                <?php while ($slider->have_posts() ) : $slider->the_post(); 

                // campos slider post-type
                $titulo_slider = get_field('titulo_slider');
                $desc_slider = get_field('desc_slider');
                $texto_btn_slider = get_field('texto_btn_slider');
                $link_btn_slider = get_field('link_btn_slider');
                $imagen_slider = get_field('imagen_slider');
                ?>
                
                <li>
                   <article class="text_slider">
                      
                       <h2><?php echo $titulo_slider; ?></h2>   
                      
                      
                       <?php if (get_field('desc_slider') != ''): ?>
                       <p><?php the_field('desc_slider'); ?></p>  
                       <?php endif; ?>
                       
                       <?php if (get_field('texto_btn_slider') != '' || get_field('link_btn_slider') != ''): ?>
                       <a href="<?php the_field('link_btn_slider'); ?>"><?php the_field('texto_btn_slider'); ?></a> 
                       <?php endif; ?>
                   </article>
                   
                    <?php if (get_field('imagen_slider') != ''): ?>
                    <img src="<?php the_field('imagen_slider'); ?>" /> 
                    <?php endif; ?>
                    
         
                </li>
                   
                    <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>

    <!-- Cierre slider custom postype -->
</section>

<main class="center-grilla">
        
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
        
       
        
    </main>
<?php
get_footer();
?>

</body>

<!--</html>-->