<?php
if ( ! function_exists( 'strongerpicture_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * Create your own strongerpicture_setup() function to override in a child theme.
     *
     * @since Twenty Sixteen 1.0
     */
    function strongerpicture_setup() {   
    
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        // add_theme_support( 'title-tag' );
    
        /*
         * Enable support for custom logo.
         *
         *  @since Twenty Sixteen 1.2
         */
        // add_theme_support( 'custom-logo', array(
        //     'height'      => 240,
        //     'width'       => 240,
        //     'flex-height' => true,
        // ) );
    
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        // add_theme_support( 'post-thumbnails' );
        // set_post_thumbnail_size( 1200, 9999 );
    
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'twentysixteen' ),
        ) );
    
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 600, 900 );

    }
    endif; // strongerpicture_setup

    add_action( 'after_setup_theme', 'strongerpicture_setup' );



/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right Top Widget',
		'id'            => 'blog_right_top',
		'before_widget' => '<div class="sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<img src="'.get_template_directory_uri().'/assets/images/icon-clock.png" class="sidebar__icon"><h3 class="sidebar__title">',
		'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
		'name'          => 'Right Bottom Widget',
		'id'            => 'blog_right_bottom',
		'before_widget' => '<div class="sidebar sidebar--red">',
		'after_widget'  => '</div>',
		'before_title'  => '<img src="'.get_template_directory_uri().'/assets/images/icon-categories.png" class="sidebar__icon"><h3 class="sidebar__title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_action( 'after_setup_theme', 'wpse3882_after_setup_theme' );
function wpse3882_after_setup_theme()
{
    add_editor_style();
}

add_filter('mce_buttons_2', 'wpse3882_mce_buttons_2');
function wpse3882_mce_buttons_2($buttons)
{
    array_unshift($buttons, 'styleselect');
    return $buttons;
}

add_filter('tiny_mce_before_init', 'wpse3882_tiny_mce_before_init');
function wpse3882_tiny_mce_before_init($settings)
{
    $settings['theme_advanced_blockformats'] = 'p,h1,h2,h3,h4';

    // From http://tinymce.moxiecode.com/examples/example_24.php
    $style_formats = array(
        array('title' => 'Highlighted text', 'block' => 'p', 'classes' => 'blog_highlighted'),
        array('title' => 'Call to action', 'block' => 'div', 'classes' => 'blog_call'),
        array('title' => 'Button', 'inline' => 'a', 'classes' => 'button'),
    );
    // Before 3.1 you needed a special trick to send this array to the configuration.
    // See this post history for previous versions.
    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;
}
?>
