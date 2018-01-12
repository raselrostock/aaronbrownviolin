<?php 
	
	/*
		This is the template for the hedaer
		
		@package aaronbrownviolin

		The Header for our theme.
 		Displays all of the <head> section and everything up till <div id="content">
	*/
	
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo( 'name' ); wp_title(); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
		<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">

<?php //if ( is_page() || is_front_page()): ?>

<header id="home" class="header">

	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

		<div class="container">

			<div class="navbar-header responsive-logo">

				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only"><?php _e('Toggle navigation','aaronbrown-violin'); ?></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button>

					<div class="navbar-brand">

						<div class="site-title-tagline-wrapper">
								<h1 class="site-title">
									<a href=" <?php echo esc_url( home_url( '/' ) ) ?> ">
										<?php bloginfo( 'title' ) ?>
									</a>
								</h1>

								

						</div> <!-- /.site-title-tagline-wrapper -->


					</div> <!-- /.navbar-brand -->

				</div> <!-- /.navbar-header -->
			<?php aaronbrownviolin_primary_navigation_trigger(); ?>
			
		</div> <!-- /.container -->
		
	</div> <!-- /#main-nav -->
	<!-- / END TOP BAR -->

</header> <!-- / END HOME SECTION  -->
<?php //endif; ?>
	