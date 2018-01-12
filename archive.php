<?php
/**
 * The template for displaying Archive pages.
 */
get_header(); ?>

<div class="clear"></div>
<div id="content" class="site-content">

<div class="container">

	<div class="content-left-wrap col-md-9">

		<div id="primary" class="content-area">

			<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .page-header -->

				<?php while ( have_posts() ) : the_post();

						/* Include the Post-Format-specific template for the content.

						 * If you want to override this in a child theme, then include a file

						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

						 */

						get_template_part( 'content', 'content' );

					endwhile;

					echo get_the_posts_navigation( array( 'next_text' => sprintf( __( 'Newer posts %s','zerif-lite' ), '<span class="meta-nav">&rarr;</span>' ), 'prev_text' => sprintf( __( '%s Older posts', 'zerif-lite' ) , '<span class="meta-nav">&larr;</span>' ) ) );

				else:

					get_template_part( 'content', 'none' );

				endif; ?>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- .content-left-wrap -->

</div><!-- .container -->
<?php get_footer(); ?>