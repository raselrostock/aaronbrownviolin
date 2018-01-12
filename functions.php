<?php
/**
 * aaronbrownviolin functions and definitions
 */

function aaronbrownviolin_setup() {    
    

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain('aaronbrown-violin', get_template_directory() . '/languages'); 

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support('post-thumbnails');

    

    /* Register primary menu */
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'aaronbrown-violin'),
    ));

    /* Enable support for Post Formats. */
    add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

    /* Setup the WordPress core custom background feature. */

    

    /* Enable support for HTML5 markup. */
    add_theme_support('html5', array(
        'comment-list',
        'search-form',
        'comment-form',
        'gallery',
    ));  

}
add_action('after_setup_theme', 'aaronbrownviolin_setup');
    require get_template_directory() . '/inc/aaronbrownviolin-scripts.php'; 
    require get_template_directory() . '/inc/hooks.php';
    require get_template_directory() . '/inc/extra-functions.php';
    add_action( 'aaronbrownviolin_primary_navigation', 'aaronbrownviolin_primary_navigation_function' );
    add_action( 'aaronbrownviolin_sidebar', 'aaronbrownviolin_sidebar_function' ); #Outputs the sidebar
    add_action( 'aaronbrownviolin_404_title', 'aaronbrownviolin_404_title_function' ); # Outputs the title on 404 pages
    add_action( 'aaronbrownviolin_404_content', 'aaronbrownviolin_404_content_function' ); # Outputs a helpful message on 404 pages
    require get_template_directory() . '/inc/aaronbrownviolin-widget.php';
    require get_template_directory() . '/inc/customizer.php';
    require get_template_directory() . '/inc/custom-posttype.php';
    require get_template_directory() . '/inc/video-posttype.php';
    require get_template_directory() . '/inc/video-meta.php';
    require get_template_directory() . '/inc/audio-posttype.php';
    require get_template_directory() . '/inc/audio-meta.php';
    require get_template_directory() . '/inc/aaronbrownviolin-shortcodes.php';
?>