<?php
/**
 * Template Name: Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Bamba_Sport
 */
get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="bambasport_slider">
				<div class="col-md-12">
					<div class="main_slider">
						<?php $mainpost = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'category_name' => 'featured') ); ?>
						<?php while ( $mainpost->have_posts() ) : $mainpost->the_post(); ?>
							<div class="main_slider_img">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('bamba-main-slider'); ?>
									<h2 class="main_slider_title"><?php the_title(); ?></h2>
								</a>
							</div>
						<?php endwhile; wp_reset_query(); ?>
					</div><!-- main_slider -->

					<div class="sub_slider">
						<?php $mainpost = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'featured', 'offset' => 1) ); ?>
						<?php while ( $mainpost->have_posts() ) : $mainpost->the_post(); ?>
							<div class="subposts">
								<div class="subpost">
									<figure>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail(); ?>
										</a>
									</figure>
								</div>
								<div class="subpost">
									<div class="subpost_title">
										<a href="<?php the_permalink(); ?>">
											<!-- <?php the_title(); ?> -->
											<?php echo wp_trim_words( get_the_title(), 8, '..' ); ?>
										</a>
									</div>
									<div class="subpost_time">
										<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
									</div>
								</div>
							</div>
						<?php endwhile; wp_reset_query(); ?>
						<!-- <div class="clear"></div> -->
					</div><!-- sub_slider -->

					<div class="clear"></div>

					<div class="highlights">
						Highlights: 
					</div><!-- highlights -->
				</div><!-- col-md-12 -->
			</div><!-- bambasport_slider -->
		</div><!-- row -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<div class="row">
					<div class="col-md-12">
						<div class="featured_posts">
							<h3 class="section_heading">Featured Posts</h3>
							<?php $featuredpost = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'featured-post') ); ?>
							<?php while ( $featuredpost->have_posts() ) : $featuredpost->the_post(); ?>
								<div class="featured_post">
									<figure>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail(); ?>
										</a>
									</figure>
									<h5>
										<a href="<?php the_permalink(); ?>">
											<?php echo wp_trim_words( get_the_title(), 10, '...' ); ?>
										</a>
									</h5>
									<p class="featured_post_time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
								</div><!-- featured_post -->
							<?php endwhile; wp_reset_query(); ?>
						</div><!-- featured_posts -->
					</div><!-- col-md-12 -->
				</div><!-- row -->

				<div class="row">
					<div class="col-md-6">
						<h3 class="section_heading">Local News</h3>
						<div class="local_news_wrapper">
							<div class="local_news_main">
								<?php $localnews = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'category_name' => 'local-news') ); ?>
								<?php while ( $localnews->have_posts() ) : $localnews->the_post(); ?>
									<figure>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail(); ?>
										</a>
									</figure>
									<div class="local_news_main_title">
										<a href="<?php the_permalink();; ?>">
											<?php the_title(); ?>
										</a>
									</div>
									<p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
								<?php endwhile; wp_reset_query(); ?>
							</div><!-- local_news_main -->

							<div class="local_news_subs">
								<?php $localnews = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'local-news', 'offset' => 1) ); ?>
								<?php while ( $localnews->have_posts() ) : $localnews->the_post(); ?>
									<div class="local_news_sub">
										<figure>
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail(); ?>
											</a>
										</figure>
										<p class="local_news_sub_title">
											<a href="<?php the_permalink(); ?>">
												<?php echo wp_trim_words( get_the_title(), 11, '...' ); ?>
											</a>
										</p>
									</div><!-- local_news_sub -->
								<?php endwhile; wp_reset_query(); ?>
							</div><!-- local_news_subs -->

						</div><!-- local_news_wrapper -->
					</div>
					<div class="col-md-6">
						<div class="opinions_wrapper">
							<h3 class="section_heading">Opinion</h3>
							<?php $opinions = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'category_name' => 'opinion') ); ?>
							<?php while ( $opinions->have_posts() ) : $opinions->the_post(); ?>

								<div class="opinions">
									<div class="opinion">
										<figure>
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail(); ?>
											</a>
										</figure>
									</div>
									<div class="opinion">
										<div class="opinion_title">
											<a href="<?php the_permalink(); ?>">
												<?php echo wp_trim_words( get_the_title(), 11, '...' ); ?>
											</a>
										</div>
										<p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
									</div>
								</div><!-- opinions -->
								<div class="clear"></div>
							<?php endwhile; wp_reset_query(); ?>
						</div><!-- opinions_wrapper -->
							
						<div class="poll_wrapper">
							<h3 class="section_heading">Poll Of The Week</h3>
							<div class="poll">
								<interaction id="57985cd933e3688a293f1cf8"></interaction>
							</div>
						</div><!-- poll_wrapper -->
					</div><!-- col-md-6 -->
				</div><!-- row -->

				<div class="row">
					<div class="col-md-12">
						
						<div class="homepage_mid_slot">
							<img src="https://placehold.it/728x90">
						</div><!-- homepage_mid_slot -->

						<div class="other_stories_wrapper">
							<h3 class="section_heading">Other Stories</h3>

							<?php $opinions = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'other-stories') ); ?>
							<?php while ( $opinions->have_posts() ) : $opinions->the_post(); ?>

								<div class="other_stories">
									<div class="other_story">
										<figure>
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail(); ?>
											</a>
										</figure>
									</div><!-- other_story -->

									<div class="other_story">
										<p>
											<a href="<?php the_permalink(); ?>">
												<?php echo wp_trim_words( get_the_title(), 12, '...' ); ?>
											</a>
										</p>
									</div><!-- other_story -->
									<div class="clear"></div>
								</div><!-- other_stories -->

							<?php endwhile; wp_reset_query(); ?>
						</div><!-- other_stories_wrapper -->

					</div><!-- col-md-12 -->
				</div><!-- row -->

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar('homepage'); ?>

	</div><!-- container -->

<?php get_footer(); ?>

