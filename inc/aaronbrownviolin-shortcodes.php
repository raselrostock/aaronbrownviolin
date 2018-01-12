<?php 
/*================================= 
 ShortCode for Testimonial Quote
 ===================================*/
function aaronbrownviolin_testimonial_quote( $atts, $content = null)
{
	extract( shortcode_atts( array(
		'align'	=>'center'
		), $atts));
	
		return '<h2 class="testimonial-quote-'.$align.'">'.'“'.$content.'”'.'</h2>';
	
}
add_shortcode( 'testomonial-quote', 'aaronbrownviolin_testimonial_quote' );

/*================================= 
 ShortCode for Testimonial Author
 ===================================*/
function aaronbrownviolin_testimonial_author( $atts, $content = null)
{
	extract( shortcode_atts( array(
		'align'	=>'center'
		), $atts));
		return '<h2  class="testimonial-author-'.$align.'">'.$content.'</h2>';
}
add_shortcode( 'testomonial-author', 'aaronbrownviolin_testimonial_author' );

/*================================= 
 ShortCode for Discography Section Title
 ===================================*/
function aaronbrownviolin_discography_title( $atts, $content = null)
{
    
    return '<span class="secTitle">'.$content.'</span>';
    
}
add_shortcode( 'Title', 'aaronbrownviolin_discography_title' );
/*================================= 
 ShortCode for Discography Section Title
 ===================================*/
function aaronbrownviolin_discography_subtitle( $atts, $content = null)
{
    
    return '<span class="secSubTitle">'.$content.'</span>';
    
}
add_shortcode( 'SubTitle', 'aaronbrownviolin_discography_subtitle' );
/*================================= 
 ShortCode for Image
 ===================================*/
function aaronbrownviolin_image_shortcode( $atts, $content = null)
{
    extract( shortcode_atts( array(
        'link' =>''
        ), $atts));
    preg_match( '@src="([^"]+)"@' , $content, $match );
    $secImg = array_pop($match);
    if( !empty($link))
    {
        return '<a href="'.$link.'"/><img class="sec-img" src="'.$secImg.'"/></a>';
    }
    else
    {
        return '<img class="sec-img" src="'.$secImg.'"/>';

    }
    
}
add_shortcode( 'section-image', 'aaronbrownviolin_image_shortcode' );
/*function aaronbrownviolin_image_shortcode( $atts, $content = null)
{
	return '<img class="sec-img" src="'.$content.'"/>';
}
add_shortcode( 'section-image', 'aaronbrownviolin_image_shortcode' );
*/

/*================================= 
 ShortCode for Iframe
 ===================================*/
function aaronbrownviolin_music( $atts, $content = null)
{
	return '<iframe class="music-iframe" src="'.$content.'" width="100%" height="350" frameborder="0" allowfullscreen="allowfullscreen" a></iframe>';
}
add_shortcode( 'music-frame', 'aaronbrownviolin_music' );

/*================================= 
 ShortCode for Column
 ===================================*/
 function responsive_shortcodes_init() {
    remove_filter( 'the_content', 'wpautop' );
    add_filter( 'the_content', 'wpautop' , 99);
    // Register shortcodes.
    foreach( responsive_shortcodes_get_shortcodes() as $shortcode_name => $shortcode_function ) {
        add_shortcode( $shortcode_name, $shortcode_function );
        $content = do_shortcode( $content );
    }
}
add_action( 'init', 'responsive_shortcodes_init' );

 function responsive_shortcodes_get_shortcodes() {

    $shortcodes = array(
        'columns'        => 'responsive_shortcodes_columns_shortcode',
        'column'         => 'responsive_shortcodes_column_shortcode'
    );

    return apply_filters( 'responsive_shortcodes_get_shortcodes', $shortcodes );
}
/**
 * [columns] shortcode function
 */
function responsive_shortcodes_columns_shortcode( $atts, $content = '' ) {

    extract( shortcode_atts( array(
        'class' => '',
    ), $atts, 'columns' ) );

    if ( ! $content ) {
        return;
    }

    if ( $class ) {
        $class = ' ' . $class;
    }

    $output = sprintf( '<div class="wpcmsdev-columns%s">%s</div>',
        $class,
        do_shortcode( $content )
    );

    return apply_filters( 'responsive_shortcodes_columns_shortcode', $output, $atts, $content );
}


/**
 * [column] shortcode function
 */
function responsive_shortcodes_column_shortcode( $atts, $content = '' ) {
    $output = '';

    extract( shortcode_atts( array(
        'class' => '',
        'width' => 'one-fourth',
    ), $atts, 'column' ) );

    if ( ! $content ) {
        return;
    }

    if ( $class ) {
        $class = ' ' . $class;
    }

    $output .= sprintf( '<div class="column column-width-%s%s">',
        $width,
        $class
    );
        $output .= wpautop( do_shortcode( $content ) );

    $output .= '</div>';

    return apply_filters( 'responsive_shortcodes_column_shortcode', $output, $atts, $content );
}

?>