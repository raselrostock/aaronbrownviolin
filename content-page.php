<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<h1 class="entry-title text-center"><?php  echo $post->post_title;?></h1>
	</header><!-- .entry-header -->
	<div class="backLinks"><a href="<?php echo esc_url( home_url( '/' ) ) ?>">Back to home</a></div>
	<div class="entry-content">

		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'aaronbrown-violin' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
		
			wp_link_pages( array(

				'before' => '<div class="page-links">' . __( 'Pages:', 'aaronbrown-violin' ),

				'after'  => '</div>',

			) );

		?>

	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'aaronbrown-violin' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>

</article><!-- #post-## -->