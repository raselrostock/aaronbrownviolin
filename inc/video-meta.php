<?php 
add_action( 'add_meta_boxes', 'aaronbrownviolin_VideoMeta');
function aaronbrownviolin_VideoMeta()
{
	add_meta_box( 'aaronbrown_videoMetaID', 'Enter Your Video', 'aaronbrown_videoMetaCB', 'aaronbrownVideos','normal','high');
}
function aaronbrown_videoMetaCB( $post )
{
	wp_nonce_field( 'video_meta_box_nonce', 'video_meta_nonce' );
	$video_url = get_post_meta( $post->ID,'_video_url',true);
	$html='';
	$html .= '<p class="youtube-video">';
	$html .= '<label for="video_url">Your video url: </label>';
	$html .= '<input type="text" name="video_url" id="video_url" value="'.$video_url.'" size="100"/>';
 	$html .= '</p>';
 	echo $html;
}
add_action('save_post','video_MetaBoxSave');
function video_MetaBoxSave($id)
{

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
	if( !isset($_POST['video_meta_nonce']) || !wp_verify_nonce( $_POST['video_meta_nonce'] , 'video_meta_box_nonce' ))
		return;
	if( !current_user_can( 'edit_post' ))
		return;
	if( !isset($_POST['video_url']))
	{
		return;
	}

	$video_url = esc_url_raw($_POST['video_url']);
	if( empty($video_url))
	{
		delete_post_meta($id, '_video_url');
	}
	else
	{
		update_post_meta( $id,'_video_url', $video_url );
	}
		
}