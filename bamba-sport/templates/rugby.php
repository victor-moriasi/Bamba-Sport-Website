<?php
/**
 * Template Name: Rugby
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Bamba_Sport
 */
get_header(); ?>

	<div class="sub_menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="secondary_menu">
						<?php wp_nav_menu( array( 'theme_location' => 'football_menu') ); ?>
					</div>

					<div class="menu_search">
						<?php get_search_form(); ?>
					</div>
				</div><!-- col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- sub_menu -->

	<div class="container pt_10">
		<div class="row gutters_5">

			<div class="col-md-7">
				<div class="sports_slider_main">
					<?php $sports = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'category_name' => 'featured') ); ?>
					<?php while ( $sports->have_posts() ) : $sports->the_post(); ?>
						<div class="sports_slider_main_img">
							<figure>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('bamba-sport-slider'); ?>
								</a>
							</figure>
							<h2 class="sports_slider_main_title">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>
						</div>
					<?php endwhile; wp_reset_query(); ?>					
				</div><!-- sports_slider_main -->
			</div>

			<div class="col-md-5">

			<div class="row no_gutters">
				<div class="col-md-12">
					<?php $sports = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'category_name' => 'featured', 'offset' => 1) ); ?>
					<?php while ( $sports->have_posts() ) : $sports->the_post(); ?>
						<div class="sports_slider_subs_main">
							<figure>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
							</figure>
							<p class="sports_slider_subs_main_title">
								<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 12, '..' ); ?></a>
								<p class="sports_time">
									<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
								</p>
							</p>
						</div><!-- sports_slider_subs_main -->
					<?php endwhile; wp_reset_query(); ?>

					<?php $sports = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 2, 'category_name' => 'featured', 'offset' => 2) ); ?>
					<?php while ( $sports->have_posts() ) : $sports->the_post(); ?>
						<div class="sports_slider_subs_minor child_2">
							<figure>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
							</figure>
							<p class="sports_slider_subs_minor_title">
								<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 7, '..' ); ?></a>
								<p class="sports_time">
									<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
								</p>
							</p>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
				
			</div><!-- col-md-5 -->

		</div><!-- row -->
	</div><!-- container -->

	<div class="container">

		<div id="primary" class="content-area pt_10">
			<main id="main" class="site-main" role="main">

				<div class="row">
					<div class="col-md-12">

						<div class="sport_featured_posts child_parent">
							<?php $sportfeatured = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'category_name' => 'featured', 'offset' => 2) ); ?>
							<?php while ( $sportfeatured->have_posts() ) : $sportfeatured->the_post(); ?>
								<div class="sport_featured_post child_3">
									<figure>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail(); ?>
										</a>
									</figure>
									
									<div class="sport_featured_post_title">
										<h4>
											<a href="<?php the_permalink(); ?>">
												<?php echo wp_trim_words( get_the_title(), 7, '..' ); ?>
											</a>
										</h4>
									</div>
									<div class="sport_featured_post_excerpt">
										<?php echo wp_trim_words( get_the_excerpt(), 19, '..' ); ?>
									</div>

									<div class="sport_featured_post_time pt_10">
										<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
									</div>
								</div><!-- sport_featured_post -->
							<?php endwhile; wp_reset_query(); ?>
						</div><!-- sport_featured_posts -->


						<div class="sports_videos_wrapper child_parent">
							<h3 class="section_heading">Videos</h3>
							<div class="sports_videos child_2">
								<?php $sportvideos = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 1) ); ?>
								<?php while ( $sportvideos->have_posts() ) : $sportvideos->the_post(); ?>
									<div class="sports_videos_main">
										<figure>
											<?php the_content(); ?>
										</figure>
										<div class="sports_videos_main_meta">
											<div class="sports_videos_main_title">
												<a href="<?php the_permalink(); ?>"></a>
											</div>
											<div class="sports_videos_main_content">
												<h3 class="no_pm"><?php the_title(); ?></h3>
												<div class="sports_videos_main_content_excerpt pt_10">
													<?php echo wp_trim_words( get_the_excerpt(), 30, '..' ); ?>
												</div>
											</div>
										</div>
									</div><!-- sports_videos_main -->
								<?php endwhile; wp_reset_query(); ?>
							</div><!-- sports_videos -->

							<div class="sports_videos child_2 grid_parent">
								<?php $sportvideos = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 6) ); ?>
								<?php while ( $sportvideos->have_posts() ) : $sportvideos->the_post(); ?>
									<div class="sports_videos_minor grid_2">
										<figure>
											<?php the_content(); ?>
										</figure>
									</div><!-- sports_videos_minor -->
								<?php endwhile; wp_reset_query(); ?>

								<div class="clear"></div>
									
								<div class="sports_see_all_videos">
									<a href="<?php echo bloginfo('wpurl'); ?>/rugby-videos">
										See All Videos
									</a>
								</div>
							</div><!-- sports_videos -->
							
						</div><!-- sports_videos_wrapper -->

					</div><!-- col-md-12 -->
				</div><!-- row -->

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar('sport'); ?>

	</div><!-- container -->

<?php get_footer(); ?>

