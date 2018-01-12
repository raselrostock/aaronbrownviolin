<?php
/**
 * The template for displaying Search Results pages.
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

							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'aaronbrown-violin' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

						</header><!-- .page-header -->

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', get_post_format() ); ?>

						<?php endwhile; ?>

						<?php echo get_the_posts_navigation( array( 'next_text' => sprintf( __( 'Newer posts %s','aaronbrown-violin' ), '<span class="meta-nav">&rarr;</span>' ), 'prev_text' => sprintf( __( '%s Older posts', 'aaronbrown-violin' ) , '<span class="meta-nav">&larr;</span>' ) ) ); ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

	</div><!-- .container -->
</div><!-- / .site-content -->
<?php get_footer(); ?>