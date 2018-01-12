<?php 
function aaronbrownviolin_scripts() {    

    wp_enqueue_style( 'aaronbrownviolin-main_style', get_stylesheet_uri() );
    wp_enqueue_style( 'aaronbrownviolin_font_all', add_query_arg( array( 'family' => urlencode( 'Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' ), 'subset' => urlencode( 'latin' ) ), "//fonts.googleapis.com/css" ) );
    
    wp_enqueue_style( 'aaronbrownviolin_bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css' );
    
    wp_style_add_data( 'aaronbrownviolin_bootstrap_style', 'rtl', 'replace' );

    wp_enqueue_style( 'aaronbrownviolin_fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), 'v1' );

    //wp_enqueue_style( 'aaronbrownviolin_style', get_stylesheet_uri(), array( 'aaronbrownviolin_fontawesome' ), 'v1' );

    wp_register_style( 'aaronbrownviolin_innerstyle', get_template_directory_uri() .'/css/aaronbrownviolin-style.css',array(), '1.0.0', 'all' );
    wp_enqueue_style('aaronbrownviolin_innerstyle');

    wp_register_style( 'aaronbrownviolin_responsive_style', get_template_directory_uri() . '/css/responsive.css', array(), 'v1' ,'all');
     wp_enqueue_style('aaronbrownviolin_responsive_style');

    /* Bootstrap script */
    wp_enqueue_script( 'aaronbrownviolin_bootstrap_script', get_template_directory_uri() . '/js/bootstrap.min.js', array("jquery"), '20120206', true );

    /* Knob script */
    wp_enqueue_script( 'aaronbrownviolin_knob_nav_script', get_template_directory_uri() . '/js/jquery.knob.js', array("jquery"), '20120206', true );
    
      /* Smootscroll script */
   
    wp_enqueue_script( 'aaronbrownviolin_smoothscroll_script', get_template_directory_uri() . '/js/smoothscroll.js', array("jquery"), '20120206', true );
    
    /* scrollReveal script */
    if ( !wp_is_mobile() ){
        wp_enqueue_script( 'aaronbrownviolin_scrollReveal_script', get_template_directory_uri() . '/js/scrollReveal.js', array("jquery"), '20120206', true  );
    }

    /* aaronbrownviolin script */
    wp_enqueue_script( 'aaronbrownviolin_script', get_template_directory_uri() . '/js/aaronbrownviolin.js', array("jquery", "aaronbrownviolin_knob_nav_script"), '20120206', true );
    /* Knob script */
    wp_enqueue_script( 'aaronbrownviolin_music_script', get_template_directory_uri() . '/js/musicjs.js', array("jquery"), '1.0.0', true );
   

    /* HTML5Shiv*/
    wp_enqueue_script( 'aaronbrownviolin_html5', get_template_directory_uri() . '/js/html5.js');
   // wp_script_add_data( 'aaronbrownviolin_html5', 'conditional', 'lt IE 9' );

   
    //add_editor_style('/css/custom-editor-style.css');
    
}
add_action('wp_enqueue_scripts', 'aaronbrownviolin_scripts');

 function register_admin_script(){
         wp_enqueue_media();
    wp_register_script( 'admin_audio_script', get_template_directory_uri().'/js/audioUploader.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('admin_audio_script');
    }
add_action('admin_enqueue_scripts','register_admin_script');

 ?>