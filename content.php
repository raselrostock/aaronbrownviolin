<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
<div class="listpost-content-wrap">

	<div class="list-post-top">

		<header class="entry-header">

			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		</header><!-- .entry-header -->

		<div class="entry-content">

			<?php
			  the_content();
			 ?>

		

		</div><!-- .entry-content --><!-- .entry-summary -->

	</div><!-- .list-post-top -->

</div><!-- .listpost-content-wrap -->

</article><!-- #post-## -->