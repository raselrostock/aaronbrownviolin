<?php

	$aaronbrownviolin_bottom_img = get_theme_mod('aaronbrownviolin_bottom_img',get_template_directory_uri() . '/images/AaronBrown-bottom.jpg');

	if( !empty($aaronbrownviolin_bottom_img) ) 
	{ 
		echo '<div class="footer-img-wrap">';
		echo '<div class="footer-img" style="background-image: url(' . esc_url( $aaronbrownviolin_bottom_img ) . ');background-position:50% 0%;background-size:cover;">';
		//echo '<div id="fullHeight"></div>';
		//echo '<img id="photo" src="' . esc_url( $aaronbrownviolin_bottom_img ) . '" style="width:100%;"/>';

		echo '</div><!-- /.footer-img -->';
		echo '</div><!-- /.footer-img-wrap -->';
	}

	
		echo '<div class="clear"></div>';

?>