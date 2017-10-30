<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Eduardo Palma">
    <meta name="Title" content="template de prueba">
    <meta name="Description" content="esto es un template de prueba para conectar wordpress con gulp">
    <meta name="Robots" content="All">
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--    <title>aqui va el titulo</title>-->
    
    <?php 
    //carga el script para comentarios
    if ( is_singular() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' ); 
    }

    //carga todo lo relacionado con la cabecera
    wp_head();
    ?>

</head>

<body <?php body_class();?>>


   
        <nav class="center-grilla">
                <h1 class="logo-principal">
                    <figure class="logos-gob">
                        <a class="logs" href="<?php echo home_url(); ?>">
                            <img class="gob" src="<?php echo IMAGES; ?>/assets/img/transantiago-logo.svg" alt=""/>
                        </a>
                    </figure>
                </h1>
            </div>

            <?php 
            /* Primary navigation 
            wp_nav_menu( array(
                'location' => 'menu-principal',
                'menu' => 'top_menu',
                'depth' => 2,
                'container_id' => 'myNavbar',
                'container_class' => 'collapse navbar-collapse',
                'menu_class' => 'nav navbar-nav right-forced',

                //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker())
                       );
            */
            ?>

            </nav>