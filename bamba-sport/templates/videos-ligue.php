<?php
/**
 * Template Name: Videos - Ligue 1
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

	<div class="container">

		<div id="primary" class="content-area no_sidebar padding_top">
			<main id="main" class="site-main" role="main">

				<div class="row gutters_5">
					<div class="col-md-8">
						<div class="videos_main_wrapper">
							<?php $sportvideos = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 1, 'category_name' => 'bundesliga') ); ?>
							<?php while ( $sportvideos->have_posts() ) : $sportvideos->the_post(); ?>
								<figure>
									<?php the_content(); ?>
								</figure>
								<div class="videos_main_content">
									<h2><?php the_title(); ?></h2>
								</div>
							<?php endwhile; wp_reset_query(); ?>
						</div><!-- videos_main_wrapper -->
					</div><!-- col-md-8 -->

					<div class="col-md-4">
						<img src="https://placehold.it/371x490" style="float: right;">
					</div><!-- col-md-4 -->
				</div><!-- row -->

				<div class="row">
					<div class="col-md-12">
						<div class="videos_wrapper">
							<div class="videos_grid_wrapper">
								<?php $sportvideos = new WP_Query( array( 'post_type' => 'videos', 'offset' => 1, 'posts_per_page' => 12, 'category_name' => 'bundesliga') ); ?>
								<?php while ( $sportvideos->have_posts() ) : $sportvideos->the_post(); ?>
									<div class="video_grid">
										<figure>
											<?php the_content(); ?>
										</figure>
										<div class="video_grid_content p_10">
											<h4 class="video_grid_category">
												<?php
													$categories = get_the_category();
													if ( ! empty( $categories ) ) {
													    echo esc_html( $categories[0]->name );   
													}
												?>
											</h4>
											<h3 class="video_grid_title"><?php the_title(); ?></h3>
											<p class="video_grid_time">
												<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
											</p>
										</div>
									</div><!-- video_grid -->
								<?php endwhile; wp_reset_query(); ?>
							</div><!-- videos_grid_wrapper -->
						</div><!-- videos_wrapper -->
					</div><!-- col-md-12 -->
				</div><!-- row -->

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- container -->

<?php get_footer(); ?>
