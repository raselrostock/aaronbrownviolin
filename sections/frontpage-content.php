<div class="site-content-top">

	<?php 
	global $post_list;
	$testimonialitem = new WP_Query(array(
	        'post_type' => 'testomonials',
	        'posts_per_page' => 1
	      ));
	while( $testimonialitem -> have_posts()) : $testimonialitem ->the_post();
	 ?>
		<section class="testimonial" id="testimonial">
			<div class="container">

				<header class="section-header text-center">
					<h1 class="section-title"><?php the_title(); ?></h1>
				</header>				
				<div class="section-content">
					<?php if( has_post_thumbnail() ):?>
						 
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
						<a href="https://store.cdbaby.com/cd/aaronbrown3"><img alt="" class="testimonial-img" src="<?php echo $url?>"/></a>
					<?php endif; ?>	
					
					<?php the_content(); ?>
				</div><!-- /.section-content -->

			</div> <!-- / END CONTAINER -->
		</section> <!-- /.testimonial -->

	<?php endwhile; ?>
	<?php wp_reset_postdata();?>
	
	<?php 
	global $post;
	$args = array('post_type' => 'page', 'orderby' => 'menu_order','posts_per_page' => 1, 'order' =>'ASC');
	$myposts = get_posts ( $args );
	foreach( $myposts as $post ) : setup_postdata( $post );
	$post_list[] += $post->ID;
	?>
		<!--  START SECTION -->
		<section class="<?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>"> 
			<div class="container">
				<header class="section-header text-center">
					<h1 class="section-title"><?php the_title(); ?></h1>
				</header>		
				<div class="section-content">
					
					<?php if( has_post_thumbnail() ): 
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
						<img class="testimonial-img" src="<?php echo $url?>"/>
					<?php endif; ?>	
					<?php the_content(); ?>
				</div><!-- /.section-content -->	

			</div> <!-- / END CONTAINER -->	
		</section> <!-- END SECTION -->
	<?php endforeach; ?>
	<?php wp_reset_postdata();?>
	
	<!-- AUDIO VIDEO SECTION -->
	
	<?php 
	global $post;
	$args = array('post_type' => 'page', 'post__not_in' =>$post_list,'orderby' => 'menu_order','posts_per_page' => 1, 'order' =>'ASC');
	$myposts = get_posts ( $args );
	foreach( $myposts as $post ) : setup_postdata( $post );
	$post_list[] += $post->ID;
 	?>
	<!--  START SECTION -->
	<section class="<?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
		<div class="container">
				<header class="section-header text-center">
					<h1 class="section-title"><?php the_title(); ?> </h1>
				</header>		
				<div class="section-content">
					<div class="video-section">
					<div class="row">
					<?php $videoItem = new WP_Query(array(
						        'post_type' => 'aaronbrownVideos',
						        'posts_per_page' => -1
						      ));
						while( $videoItem -> have_posts()) : $videoItem ->the_post(); ?>
						
							<div class="col-md-6">
								<div class="video-wrapper">
									<?php 
								videoFrame(get_post_meta( $post->ID,'_video_url',true )); 
								the_excerpt();
								?>
								</div>	<!-- /video-wrapper -->
								
							</div>	<!-- /col-md-6 -->
						
						<?php endwhile; ?>
	<?php wp_reset_postdata();?>
	</div>	<!-- /row -->
					</div>	<!-- /video-section -->
					<div class="audio-album">
						<div class="row">
							
						<?php $count=2; ?>
						<?php $audioItem = new WP_Query(array(
									        'post_type' => 'aaronbrownAudioAlbum',
									        'posts_per_page' => $count
									      ));
									while( $audioItem -> have_posts()) : $audioItem ->the_post();
									$audio_list[] += $post->ID; 
									?>
						<div class="col-md-6 col-sm-6" <?php echo ($count % 2 ? 'style="border-right:none;"' : 'style="border-right:1px solid white;"'); ?>>
							<div class="music-album">
	       						<div class="music-album-wrapper">
	       							<div class="album-cover-wrapper">
	       								<div class="album-cover-content">
	       									<div class="album-cube">
	       										<div class="album-cover">
	       											<?php if( has_post_thumbnail() ):?>
							 
														<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
														<img style="font-size: 0px; left: 0px; top: 0px; width: 100%; height: 100%; position: relative;"src="<?php echo $url?>">
													<?php endif; ?>
	       											
	        									</div> 	<!-- /album-cover -->
	        									<div class="album-controls">
	                                        		<button data-post_id="<?php echo $post->ID?>" class="playBtn"><span class="play-icon"></span></button>
	                                         		<button data-post_id="<?php echo $post->ID?>" class="stopBtn"><span class="stop-icon"></span></button>
	                                    		</div>	<!-- /album-controls -->
	       									</div>	<!-- /album-cube -->
		        							<div class="album-description">
		        								<h3 class="album-title"><?php the_title(); ?></h3>
		       									<?php the_content(); ?>
		        							</div>	<!-- /album-description -->
	        							</div>	<!-- /album-cover-content -->
	        						</div>	<!-- /album-cover-wrapper -->
	        						<div class="album-track-wrapper">
	        							<div class="clearfix"></div>
	         							<div class="album-track-content">
										<!--
	         								<div class="track-progress-bar">
									          <div class="bg bar"></div>
									          <div class="load-bar bar"></div>
									          <div class="play-bar bar">
									             <a href="#" class="scrubber"></a> 
									          </div>
									        </div>
									        -->
	         								<div id="tracker">
												<div data-post_id="<?php echo $post->ID?>" id="progressBar" >
													<span data-post_id="<?php echo $post->ID?>" id="progress"></span>
												</div>
												<div id="divTime">
													<span id="duration" data-post_id="<?php echo $post->ID?>"></span>
												</div>
											 </div>
											 
											 <div class="clearfix"></div>
	         								<ul id="playlist" data-post_id="<?php echo $post->ID?>">
	         									<?php 
	         										$trackUrl1=get_post_meta( $post->ID,'_trackUrl1',true) ;
	         										$trackUrl2=get_post_meta( $post->ID,'_trackUrl2',true) ;
	         										$trackUrl3=get_post_meta( $post->ID,'_trackUrl3',true) ;
	         										
	         									 ?>
												<?php
												if(strlen($trackUrl1) !=0) 
												{
													?>
													<li id="<?php echo $post->ID?>" data-post_id="<?php echo $post->ID?>" song="<?php echo get_post_meta( $post->ID,'_trackUrl1',true); ?>"><?php  echo get_post_meta( $post->ID,'_trackTitle1',true);?></li>
												<?php
												}
												if(strlen($trackUrl2) !=0) 
												{
												 ?>
												
												<li id="<?php echo $post->ID?>" data-post_id="<?php echo $post->ID?>" song="<?php echo get_post_meta( $post->ID,'_trackUrl2',true); ?>" ><?php  echo get_post_meta( $post->ID,'_trackTitle2',true);?></li>
												<?php
												}
												if(strlen($trackUrl3) !=0) 
												{
												 ?>
												<li id="<?php echo $post->ID?>" data-post_id="<?php echo $post->ID?>" song="<?php echo get_post_meta( $post->ID,'_trackUrl3',true); ?>" ><?php  echo get_post_meta( $post->ID,'_trackTitle3',true);?></li>
												<?php } ?>
											</ul>
	         								
										</div>	<!-- /album-track-content -->
									</div>	<!-- /album-track-wrapper -->
											
											
														
								</div> 		<!-- /.music-album-wrapper -->			
							</div> 	<!-- /.music-album -->
							<?php $count--; ?>
						</div>	<!-- /.col -->
						<?php endwhile; ?>
						<?php wp_reset_postdata();?>
						</div>	<!-- /.row -->
						<div class="row">
							
						<?php $count=2; ?>
						<?php $audioItem = new WP_Query(array(
									        'post_type' => 'aaronbrownAudioAlbum',
									        'post__not_in' =>$audio_list,
									        'posts_per_page' => $count
									      ));
									while( $audioItem -> have_posts()) : $audioItem ->the_post(); 
									?>
						<div class="col-md-6 col-sm-6" <?php echo ($count % 2 ? 'style="border-right:none;"' : 'style="border-right:1px solid white;"'); ?>>
							<div class="music-album">
	       						<div class="music-album-wrapper">
	       							<div class="album-cover-wrapper">
	       								<div class="album-cover-content">
	       									<div class="album-cube">
	       										<div class="album-cover">
	       											<?php if( has_post_thumbnail() ):?>
							 
														<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
														<img style="font-size: 0px; left: 0px; top: 0px; width: 100%; height: 100%; position: relative;"src="<?php echo $url?>">
													<?php endif; ?>
	       											
	        									</div> 	<!-- /album-cover -->
	        									<div class="album-controls">
	                                        		<button data-post_id="<?php echo $post->ID?>" class="playBtn"><span class="play-icon"></span></button>
	                                         		<button data-post_id="<?php echo $post->ID?>" class="stopBtn"><span class="stop-icon"></span></button>
	                                    		</div>	<!-- /album-controls -->
	       									</div>	<!-- /album-cube -->
		        							<div class="album-description">
		        								<h3 class="album-title"><?php the_title(); ?></h3>
		       									<?php the_content(); ?>
		        							</div>	<!-- /album-description -->
	        							</div>	<!-- /album-cover-content -->
	        						</div>	<!-- /album-cover-wrapper -->
	        						<div class="album-track-wrapper">
	        							<div class="clearfix"></div>
	         							<div class="album-track-content">
	         								<div id="tracker">
												<div data-post_id="<?php echo $post->ID?>" id="progressBar" >
													<span data-post_id="<?php echo $post->ID?>" id="progress"></span>
												</div>
												<div id="divTime">

													<span id="duration" data-post_id="<?php echo $post->ID?>"></span>
												</div>
											 </div>
											 <div class="clearfix"></div>
	         								<ul id="playlist" data-post_id="<?php echo $post->ID?>">
	         									<?php 
	         										$trackUrl1=get_post_meta( $post->ID,'_trackUrl1',true) ;
	         										$trackUrl2=get_post_meta( $post->ID,'_trackUrl2',true) ;
	         										$trackUrl3=get_post_meta( $post->ID,'_trackUrl3',true) ;
	         										
	         									 ?>
												<?php
												if(strlen($trackUrl1) !=0) 
												{
													?>
													<li id="<?php echo $post->ID?>" data-post_id="<?php echo $post->ID?>" song="<?php echo get_post_meta( $post->ID,'_trackUrl1',true); ?>"><?php  echo get_post_meta( $post->ID,'_trackTitle1',true);?></li>
												<?php
												}
												if(strlen($trackUrl2) !=0) 
												{
												 ?>
												
												<li id="<?php echo $post->ID?>" data-post_id="<?php echo $post->ID?>" song="<?php echo get_post_meta( $post->ID,'_trackUrl2',true); ?>" ><?php  echo get_post_meta( $post->ID,'_trackTitle2',true);?></li>
												<?php
												}
												if(strlen($trackUrl3) !=0) 
												{
												 ?>
												<li id="<?php echo $post->ID?>" data-post_id="<?php echo $post->ID?>" song="<?php echo get_post_meta( $post->ID,'_trackUrl3',true); ?>" ><?php  echo get_post_meta( $post->ID,'_trackTitle3',true);?></li>
												<?php } ?>
											</ul>
	         								
										</div>	<!-- /album-track-content -->
									</div>	<!-- /album-track-wrapper -->
											
											
														
								</div> 		<!-- /.music-album-wrapper -->			
							</div> 	<!-- /.music-album -->
							<?php $count--; ?>
						</div>	<!-- /.col -->
						<?php endwhile; ?>
						<?php wp_reset_postdata();?>
						</div>	<!-- /.row -->
					</div>  <!-- /.audio-section -->
				</div><!-- /.section-content -->	

			</div> <!-- / END CONTAINER -->	
		</section> <!-- END SECTION -->
	<?php endforeach; ?>
	<?php wp_reset_postdata();?>
<?php //$post_list[] += '9';?>
<?php //$post_list[] += '80';?>
</div>	<!-- /.site-content-top -->


<div class="site-content-middle-top">
	<?php

	
		$aaronbrownviolin_middle_top_img = get_theme_mod('aaronbrownviolin_middle_top_img',get_template_directory_uri()  . '/images/AaronBrown-divider1.jpg');
		if( !empty($aaronbrownviolin_middle_top_img) ) 
		{ 

			echo '<div class="middle-top-img-wrap">';
			echo '<div class="middle-top-img" style="background-image: url(' . esc_url( $aaronbrownviolin_middle_top_img ) . ');background-position:50% 0%;background-size:cover;background-attachment: fixed;">';
			//echo '<div id="fullHeight"></div>';
			//echo '<img id="photo" src="' . esc_url( $aaronbrownviolin_middle_top_img ) . '" style="width:100%;"/>';

			echo '</div><!-- /.middle-top-img -->';
			echo '</div><!-- /.middle-top-img-wrap -->';
		}
		echo '<div class="clear"></div>';
	?>
</div>  <!-- /.site-content-middle-top -->

<div class="site-content-middle">

	<?php 
	global $post;
	$args = array('post_type' => 'page', 'post__not_in' =>$post_list,'orderby' => 'menu_order','posts_per_page' => 1, 'order' =>'ASC');
	$myposts = get_posts ( $args );
	foreach( $myposts as $post ) : setup_postdata( $post );
	$post_list[] += $post->ID;
 	?>
	<!--  START SECTION -->
	<section class="<?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
		<div class="container">
			
			<header class="section-header text-center">
					<h1 class="section-title"><?php the_title(); ?></h1>
				</header>
			<div class="section-content">	
				<?php if( has_post_thumbnail() ): 
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
					<img alt="" class="testimonial-img" src="<?php echo $url?>"/>	
					<?php endif; ?>
					<?php the_content(); ?>
			</div><!-- /.section-content -->

		</div> <!-- / END CONTAINER -->
	</section> <!--  END SECTION -->
	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>

</div>	<!-- /.site-content-middle -->

<div class="site-content-middle-bottom">
	<?php

	$aaronbrownviolin_middle_bottom_img = get_theme_mod('aaronbrownviolin_middle_bottom_img',get_template_directory_uri()  . '/images/AaronBrown-divider2.jpg');
		if( !empty($aaronbrownviolin_middle_bottom_img) ) 
		{ 
			echo '<div class="middle-bottom-img-wrap">';
			echo '<div class="middle-bottom-img" style="background-image: url(' . esc_url( $aaronbrownviolin_middle_bottom_img ) . ');background-position:50% 0%;background-size:cover;background-attachment: fixed;">';
			//echo '<div id="fullHeight"></div>';
			//echo '<img id="photo" src="' . esc_url( $aaronbrownviolin_middle_top_img ) . '" style="width:100%;"/>';

			echo '</div><!-- /.middle-bottom-img -->';
			echo '</div><!-- .middle-bottom-img-wrap -->';
		}
		echo '<div class="clear"></div>';	
	?>
</div>	<!-- /.site-content-middle-bottom -->

<div class="site-content-middle">
	
	<?php 
	global $post;
	global $post_list;
	$args = array('post_type' => 'page', 'post__not_in' => $post_list,'orderby' => 'menu_order','posts_per_page' => 2, 'order' =>'ASC');
	$myposts = get_posts ( $args );
	foreach( $myposts as $post ) : setup_postdata( $post );
 	?>

	<section class="<?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
		<div class="container">

			<header class="section-header text-center">
					<h1 class="section-title"><?php the_title(); ?></h1>
			</header>
			<div class="section-content">
				<?php if( has_post_thumbnail() ): 
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
				<img alt="" class="testimonial-img" src="<?php echo $url?>"/>	
				<?php endif; ?>
				<?php the_content(); ?>
				</div><!-- .section-content -->

		</div> <!-- / END CONTAINER -->
	</section> <!-- END SECTION -->
	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>

</div>	<!-- /.site-content-middle -->
