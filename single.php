<?php
/**
 * The Template for displaying all single posts.
 */
get_header(); ?>
<div class="clear"></div>
<div id="content" class="site-content">

	<div class="container">
		
		<div class="content-left-wrap col-md-9">
			
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
			
				<?php while ( have_posts() ) : the_post(); 

						get_template_part( 'content', 'single' );

						the_post_navigation( array( 'next_text' => _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'zerif-lite' ), 'prev_text' => _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'zerif-lite' ) ) );

						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template('');
						endif;
					endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		
		</div><!-- .content-left-wrap -->
	
	</div><!-- .container -->
</div><!-- / .site-content -->
<?php get_footer(); ?>