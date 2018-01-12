<?php 
add_action( 'add_meta_boxes', 'aaronbrownviolin_AudioMeta');
function aaronbrownviolin_AudioMeta()
{
	add_meta_box( 'aaronbrown_track1', 'Track #1', 'track1CB', 'aaronbrownAudioAlbum','normal','high');
	add_meta_box( 'aaronbrown_track2', 'Track #2', 'track2CB', 'aaronbrownAudioAlbum','normal','high');
	add_meta_box( 'aaronbrown_track3', 'Track #3', 'track3CB', 'aaronbrownAudioAlbum','normal','high');
}
function track1CB( $post )
{
	wp_nonce_field( 'audio_meta_box_nonce', 'audio_meta_nonce' );
	$trackTitle1 = get_post_meta( $post->ID,'_trackTitle1',true);
	$trackUrl1 = get_post_meta( $post->ID,'_trackUrl1',true);
	$html='';
	$html .= '<p class="track-title">';
	$html .= '<label for="trackTitle1">Track-1 title : </label>';
	$html .= '<input type="text" name="trackTitle1" id="trackTitle1" value="'.$trackTitle1.'" size="50"/>';
 	$html .= '</p>';
 	$html .= '<p class="track-wrapper">';
	$html .= '<label for="trackUrl1">Track-1 URL : </label>';
	$html .= '<input type="text" name="trackUrl1" id="trackUrl1" value="'.esc_url_raw($trackUrl1).'" size="50"/>';
	$html .= '<input type="button" style="margin-left:10px; margin-right:10px;" id="btnUploadUrl1" class="button" value="Add Song"/>';
	$html .= '<input type="button" id="btnremoveUrl1" class="button" value="Remove Song"/>';
 	$html .= '</p>';
 	
	echo $html;
}
function track2CB( $post )
{
	wp_nonce_field( 'audio_meta_box_nonce', 'audio_meta_nonce' );
	$trackTitle2 = get_post_meta( $post->ID,'_trackTitle2',true);
	$trackUrl2 = get_post_meta( $post->ID,'_trackUrl2',true);
	$html='';
 	$html .= '<p class="track-title">';
	$html .= '<label for="trackTitle2">Track-2 title : </label>';
	$html .= '<input type="text" name="trackTitle2" id="trackTitle2" value="'.$trackTitle2.'" size="50"/>';
 	$html .= '</p>';
 	$html .= '<p class="track-wrapper">';
	$html .= '<label for="trackUrl1">Track-2 URL : </label>';
	$html .= '<input type="text" name="trackUrl2" id="trackUrl2" value="'.esc_url_raw($trackUrl2).'" size="50"/>';
	$html .= '<input type="button" style="margin-left:10px; margin-right:10px;" id="btnUploadUrl2" class="button" value="Add Song"/>';
	$html .= '<input type="button" id="btnremoveUrl2" class="button" value="Remove Song"/>';
 	$html .= '</p>';
	echo $html;
}
function track3CB( $post )
{
	wp_nonce_field( 'audio_meta_box_nonce', 'audio_meta_nonce' );
	$trackTitle3 = get_post_meta( $post->ID,'_trackTitle3',true);
	$trackUrl3 = get_post_meta( $post->ID,'_trackUrl3',true);

	$html='';
 	$html .= '<p class="track-title">';
	$html .= '<label for="trackTitle3">Track-3 title : </label>';
	$html .= '<input type="text" name="trackTitle3" id="trackTitle3" value="'.$trackTitle3.'" size="50"/>';
 	$html .= '</p>';
 	$html .= '<p class="track-wrapper">';
	$html .= '<label for="trackUrl3">Track-3 URL : </label>';
	$html .= '<input type="text" name="trackUrl3" id="trackUrl3" value="'.esc_url_raw($trackUrl3).'" size="50"/>';
	$html .= '<input type="button" id="btnUploadUrl3" style="margin-left:10px; margin-right:10px;" class="button" value="Add Song"/>';
	$html .= '<input type="button" id="btnremoveUrl3" class="button" value="Remove Song"/>';
 	$html .= '</p>';
	echo $html;
}

add_action('save_post','audio_MetaBoxSave');
function audio_MetaBoxSave($id)
{

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
	if( !isset($_POST['audio_meta_nonce']) || !wp_verify_nonce( $_POST['audio_meta_nonce'] , 'audio_meta_box_nonce' ))
		return;
	if( !current_user_can( 'edit_post' ))
		return;
	//if( !isset($_POST['video_url']))
	//{
	//	return;
	//}
	$trackTitle1 = $_POST['trackTitle1'];
	if( empty($trackTitle1))
	{
		delete_post_meta($id, '_trackTitle1');
	}
	else
	{
		update_post_meta( $id,'_trackTitle1', $trackTitle1 );
	}
	$trackUrl1 = esc_url_raw($_POST['trackUrl1']);
	if( empty($trackUrl1))
	{
		delete_post_meta($id, '_trackUrl1');
	}
	else
	{
		update_post_meta( $id,'_trackUrl1', $trackUrl1 );
	}
	$trackTitle2 = $_POST['trackTitle2'];
	if( empty($trackTitle2))
	{
		delete_post_meta($id, '_trackTitle2');
	}
	else
	{
		update_post_meta( $id,'_trackTitle2', $trackTitle2 );
	}
	$trackUrl2 = esc_url_raw($_POST['trackUrl2']);
	if( empty($trackUrl2))
	{
		delete_post_meta($id, '_trackUrl2');
	}
	else
	{
		update_post_meta( $id,'_trackUrl2', $trackUrl2 );
	}
	$trackTitle3 = $_POST['trackTitle3'];
	if( empty($trackTitle3))
	{
		delete_post_meta($id, '_trackTitle3');
	}
	else
	{
		update_post_meta( $id,'_trackTitle3', $trackTitle3 );
	}
	$trackUrl3 = esc_url_raw($_POST['trackUrl3']);
	if( empty($trackUrl3))
	{
		delete_post_meta($id, '_trackUrl3');
	}
	else
	{
		update_post_meta( $id,'_trackUrl3', $trackUrl3 );
	}
		
}
