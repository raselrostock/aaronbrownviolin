<?php 
function aaronbrownviolin_AudioAlbum()
{
    register_post_type('aaronbrownAudioAlbum', array(
                       'labels' => array(
                             'name' => 'Albums',
                             'singular_name' =>'Album',
                             'menu_name'     =>'Albums',
                             'all_items'     =>'All Albums',
                             'view_item'     =>'View Album',
                             'add_new_item' => __('Add New Album', 'aaronbrown-violin'),
                             'add_new'       =>'Add New',
                             'edit_item'     =>'Edit Album',
                             'update_item'   =>'Update Album'
                            ),
                        'public' => true,
                        'supports' => array( 'title','editor','thumbnail'),
                        'show_ui'       =>true,
                        'show_in_admin_bar' =>true,
                        'menu_icon' => 'dashicons-admin-collapse',
                        'menu_position' => 6

        ) );
}

add_action( 'init','aaronbrownviolin_AudioAlbum' );

 ?>