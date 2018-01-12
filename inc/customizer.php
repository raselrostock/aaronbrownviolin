<?php
/**
 * aaronbrownviolin Theme Customizer
 *
 * 
 */
function aaronbrownviolin_customize_register( $wp_customize ) {

	/****************************************************/
	/************  BACKGROUND IMAGE *********************/
	/****************************************************/

	$wp_customize->add_section( 'aaronbrownviolin_background_image_section', array(
		'title'    => __( 'Background Image', 'aaronbrown-violin' ),
		'priority'    => '30'
	) );


	/* FRONT IMAGE*/
	$wp_customize->add_setting( 'aaronbrownviolin_front_img', array(
		'default'           => get_template_directory_uri() . '/images/AaronBrown-header.jpg'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themes_front_img', array(
		'label'    => __( 'Front Image', 'aaronbrown-violin' ),
		'section'  => 'aaronbrownviolin_background_image_section',
		'settings' => 'aaronbrownviolin_front_img',
	) ) );

	/* FRONT IMAGE FOR MOBILE*/
	$wp_customize->add_setting( 'aaronbrownviolin_front_imgMobile', array(
		'default'           => get_template_directory_uri() . '/images/mobilefront.jpg'
	) );

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'themes_front_img_mobile', array(
		'label'    => __( 'Front Image For Mobile', 'aaronbrown-violin' ),
		'section'  => 'aaronbrownviolin_background_image_section',
		'width'		=>480,
		'height'	=> 500,
		//'flex_width'	=>false,
		//'flex_height'	=>false,
		'settings' => 'aaronbrownviolin_front_imgMobile',
	) ) );



	/* MIDDLE SECTION TOP IMAGE*/
	$wp_customize->add_setting( 'aaronbrownviolin_middle_top_img', array(
		'default'           => get_template_directory_uri() . '/images/AaronBrown-divider1.jpg'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themes_middle_top_img', array(
		'label'    => __( 'Middle Section Top Image', 'aaronbrown-violin' ),
		'section'  => 'aaronbrownviolin_background_image_section',
		'settings' => 'aaronbrownviolin_middle_top_img',
	) ) );

	/* MIDDLE SECTION BOTTOM IMAGE*/
	$wp_customize->add_setting( 'aaronbrownviolin_middle_bottom_img', array(
		'default'           => get_template_directory_uri() . '/images/AaronBrown-divider2.jpg'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themes_middle_bottom_img', array(
		'label'    => __( 'Middle Section Bottom Image ', 'aaronbrown-violin' ),
		'section'  => 'aaronbrownviolin_background_image_section',
		'settings' => 'aaronbrownviolin_middle_bottom_img',
	) ) );


	/* BOTTOM IMAGE*/
	$wp_customize->add_setting( 'aaronbrownviolin_bottom_img', array(
		'default'           => get_template_directory_uri() . '/images/AaronBrown-bottom.jpg'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themes_bottom_img', array(
		'label'    => __( 'Bottom Image', 'aaronbrown-violin' ),
		'section'  => 'aaronbrownviolin_background_image_section',
		'settings' => 'aaronbrownviolin_bottom_img',
	) ) );


	
}
add_action( 'customize_register', 'aaronbrownviolin_customize_register' );








