<?php 
function aaronbrownviolin_primary_navigation_function() {
	?>
	<nav class="navbar-collapse bs-navbar-collapse collapse" id="site-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'zerif-lite' ); ?></a>
		<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb' => 'aaronbrownviolin_wp_page_menu')); ?>
	</nav>
	<?php
}

function aaronbrownviolin_wp_page_menu() {    

	echo '<ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">';

		wp_list_pages(array('title_li' => '','link_before'  => '#' , 'depth' => 1));

    echo '</ul>';

}
function aaronbrownviolin_sidebar_function() {
	?>
	<div class="sidebar-wrap col-md-3 content-left-wrap">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar-wrap -->
	<?php
}
/********************************/
/*********** HOOKS **************/
/********************************/

function aaronbrownviolin_404_title_function() {

	?><h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'aaronbrown-violin' ); ?></h1><?php

}

function aaronbrownviolin_404_content_function() {

	?><p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'aaronbrown-violin' ); ?></p><?php

}
function getYoutubeEmbedUrl($url)
{
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id ;
}
/*
function videoEmbed($videoURL)
{
	$search = '/youtube\.com\/watch\?v=([a-zA-Z0-9]+)/smi';
	$replace = "youtube.com/embed/$1";
	$embed_url = preg_replace($search,$replace,$videoURL);
	return $embed_url;
}*/
function videoFrame($video_url)
{
	echo '<iframe class="music-iframe" src="'.getYoutubeEmbedUrl($video_url).'" width="100%" height="350" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
}
?>