<?php
/*
 Template Name: Frontpage
*/
get_header();
?>
<div id="content" class="site-content">
	<?php
	get_template_part( 'sections/front-image' );
	?>
	<?php
	/* Frontpage Content */
		get_template_part( 'sections/frontpage-content' );
	/* End Frontpage Content */
	?>
	<?php
	get_template_part( 'sections/bottom-image' );
	?>
</div><!-- / .site-content -->
<?php
get_footer(); 
?>