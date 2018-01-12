<?php 
function aaronbrownviolin_videoPost()
{
    register_post_type('aaronbrownVideos', array(
                       'labels' => array(
                             'name' => 'Videos',
                             'singular_name' =>'Video',
                             'menu_name'     =>'Videos',
                             'all_items'     =>'All Videos',
                             'view_item'     =>'View Video',
                             'add_new_item' => __('Add New Video', 'aaronbrown-violin'),
                             'add_new'       =>'Add New',
                             'edit_item'     =>'Edit Video',
                             'update_item'   =>'Update Video'
                            ),
                        'public' => true,
                        'supports' => array( 'title','excerpt'),
                        'show_ui'       =>true,
                        'show_in_admin_bar' =>true,
                        'menu_icon' => 'dashicons-video-alt2',
                        'menu_position' => 6

        ) );
}

add_action( 'init','aaronbrownviolin_videoPost' );

 ?>