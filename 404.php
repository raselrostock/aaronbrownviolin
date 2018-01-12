<?php
/**
 * The template for displaying 404 pages (Not Found).
 */
get_header(); ?>

<div class="clear"></div>

<div id="content" class="site-content">

	<div class="container">

		<div class="content-left-wrap col-md-9">

			<div id="primary" class="content-area">

				<main id="main" class="site-main">

					<article>

						<header class="entry-header">

							<?php aaronbrownviolin_404_title_trigger(); ?>

						</header><!-- .entry-header -->

						<div class="entry-content">

							<?php aaronbrownviolin_404_content_trigger(); ?>

						</div><!-- .entry-content -->

					</article><!-- #post-## -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div>

	</div><!-- .container -->
</div><!-- .site-content -->
<?php get_footer(); ?>