<div class="home-header-wrap">
<?php
	function get_bio_image_url() {
    if ( get_theme_mod( 'aaronbrownviolin_front_imgMobile' ) > 0 ) {
        return wp_get_attachment_url( get_theme_mod( 'aaronbrownviolin_front_imgMobile' ) );
    } else {
        return get_template_directory_uri() . '/images/mobilefront.jpg';
    }
}



	$aaronbrownviolin_front_img = get_theme_mod('aaronbrownviolin_front_img',get_template_directory_uri() . '/images/AaronBrown-header.jpg');
	$aaronbrownviolin_front_imgMobile =esc_url( get_bio_image_url() );
	//$aaronbrownviolin_front_imgMobile = get_theme_mod('aaronbrownviolin_front_imgMobile',get_template_directory_uri() . '/images/mobilefront.jpg');

	if( !empty($aaronbrownviolin_front_img) ) 
	{ 
		echo '<div class="header-img-wrap">';
		echo '<div class="header-img" style="background-image: url(' . esc_url( $aaronbrownviolin_front_img ) . ');background-position:100% 20%;background-size:cover;">';
		//echo '<img id="photo" alt="" src="' . esc_url( $aaronbrownviolin_front_img ) . '" style="width:100%;"/>';
		//echo '<span id="photo"></span>';

		echo '</div><!-- /.header-img -->';
		echo '<div class="header-imgMob" style="background-image: url(' . esc_url( $aaronbrownviolin_front_imgMobile ) . ');">';
		//echo '<img id="photo" alt="" src="' . esc_url( $aaronbrownviolin_front_img ) . '" style="width:100%;"/>';background-position:100% 20%;background-size:cover;
		//echo '<span id="photo"></span>';

		echo '</div><!-- /.header-imgMob -->';
		echo '</div><!-- .header-img-wrap -->';
	}

	
		echo '<div class="clear"></div>';

?>

</div>