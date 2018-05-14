<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800,900" rel="stylesheet">
        <?php wp_head(); ?>
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        
    </head>
    <body <?php body_class(); ?>>

        <header>
            <div class="container">
                <div class="row justify-content-between">
                    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo"/>
                    </a>
                    
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                       
                        <input type="checkbox" id="menu-button" class="menu-buton" >
                        <label class="menu-buton__img" for="menu-button"></label>
                        <nav id="site-navigation" class="menu-primary" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'strongerpicture' ); ?>">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'primary'
                                ) );
                            ?>
                        </nav><!-- .main-navigation -->
                    <?php endif; ?>
                </div>
            </div>
        </header>
    </div>
    <div>