<?php
/*
Template Name: New Homepage with nodes and stuff
*/
?>

<?php get_header(); ?>
			
			<div id="front-content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php

					// The Reviews Query + the hashtag - shows only the first two submitted
					$args = array( 
							'posts_per_page' => 5,
							'order' => 'DSC',
							'cat' => 36,
							);
						$the_query = new WP_Query( $args );
						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo '<div class="col-md-4 trio"><a href="' . get_the_permalink() . '"><div class="news">';
								echo  the_post_thumbnail('thumbnail' , array( 'class' => 'alignleft' )) . '<br/><h3 class="front-title">' . get_the_title() . '</h3></a><div class="news_excerpt">' . get_the_content() ;
								echo '</div></div></div>';
							}
						} else {
							// no posts found
							echo 'No posts found';
						}
						/* Restore original Post Data */
						wp_reset_postdata();

						?> 
						<div class="col-md-4 trio">
							<?php
							  $blog_count = get_blog_count();
							  echo 'Join <span class="blogcount">'.$blog_count.'</span> other blogs on rampages.';
							?>

						</div>

						<?php

					// The Reviews Query + the hashtag - shows only the first two submitted
					$args = array( 
							'posts_per_page' => 2,
							'order' => 'DSC',
							'cat' => 37,
							);
						$the_query = new WP_Query( $args );
						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo '<div class="col-sm-12 trio"><a href="' . get_the_permalink() . '"><div class="news">';
								echo  the_post_thumbnail('thumbnail' , array( 'class' => 'alignleft' )) . '<br/><h3 class="front-title">' . get_the_title() . '</h3></a><div class="news_excerpt">' . get_the_content() ;
								echo '</div></div></div>';
							}
						} else {
							// no posts found
							echo 'No posts found';
						}
						/* Restore original Post Data */
						wp_reset_postdata();

						?> 
						
						<?php get_sidebar('sidebar3'); // sidebar 2 ?>

						<footer>

							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
													
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>