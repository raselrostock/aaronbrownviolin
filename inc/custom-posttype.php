<?php 
register_post_type('testomonials', array(
                       'labels' => array(
                        	 'name' => 'Testomonials',
                        	 'singular_name' =>'Testomonial',
                        	 'add_new_item' => __('New Tesomonial', 'aaronbrown-violin')
                        	),
                        'public' => true,
                        'supports' => array( 'title', 'editor', 'thumbnail' ),
                        'menu_icon' => 'dashicons-welcome-widgets-menus',
                        'menu_position' => 5

		) );

 ?>