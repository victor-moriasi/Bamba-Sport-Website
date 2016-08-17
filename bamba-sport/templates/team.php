<?php
/**
 * Template Name: Team
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Bamba_Sport
 */

$season_id = isset($_GET['season']) ? $_GET['season'] : null;
$competition_id = isset($_GET['competition']) ? $_GET['competition'] : null;
$team_id = isset($_GET['team']) ? $_GET['team'] : null;

get_header(); ?>

<!-- <?php echo $season_id ?>
<?php echo $competition_id ?>
<?php echo $team_id ?> -->

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

	<div class="team_background_color t<?php echo $team_id ?>"></div>

	<div class="container">
		<div id="primary" class="content-area no_sidebar">
			<main id="main" class="site-main" role="main">



				<div class="row">
					<div class="col-md-12">
					
						<div class="team_profile_wrapper">

							<div id="team_profile">
								<opta widget="teamprofile" sport="football" competition="<?php echo $competition_id ?>" season="<?php echo $season_id ?>" team="<?php echo $team_id ?>" show_image="true" opta_logo="false" narrow_limit="400"></opta>
							</div><!-- #team_profile -->



							<div class="team_content">
								<?php $args = array('post_type' => 'teamprofile', 'posts_per_page' => 1, 'meta_key' => 'team_uid', 'meta_value' => ''. $team_id .'' ); $the_query = new WP_Query( $args ); ?>
								<?php if( $the_query->have_posts() ): ?>
									<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<h2><?php the_field('team_name'); ?></h2>
										<h3><?php the_field('team_uid'); ?></h3>
										<?php the_field('team_description'); ?>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>
							</div><!-- team_content -->


							<div class="team_tabs_wrapper">
								<div class="team_tabs_menu">
									<ul class="nav nav-tabs">
										<li role="presentation" class="active">
											<a href="#latestnews" class="active" data-toggle="tab">
												Latest News
												<!-- <hr class="menu_border"></hr> -->
											</a>
										</li>

										<li role="presentation">
											<a href="#squads" data-toggle="tab">
												Squad
												<!-- <hr class="menu_border"></hr> -->
											</a>
										</li>

										<li role="presentation">
											<a href="#teamstats" data-toggle="tab">
												Team Stats
												<!-- <hr class="menu_border"></hr> -->
											</a>
										</li>
									</ul>
									<!-- <div class="line"></div> -->
									<div class="clear"></div>
								</div><!-- .team_tabs_menu -->

								<div class="tab-content pt_1em">
									<div id="latestnews" class="tab-pane fade in active">

										<div class="latestnews_content">
											<div class="latestnews_main">
												<?php $latestnews = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'category_name' => 'featured') ); ?>
												<?php while ( $latestnews->have_posts() ) : $latestnews->the_post(); ?>
													<figure>
														<a href="<?php the_permalink(); ?>">
															<?php the_post_thumbnail(); ?>
														</a>
													</figure>
													<h2>
														<a href="<?php the_permalink(); ?>">
															<?php the_title(); ?>
														</a>
													</h2>
												<?php endwhile; wp_reset_query(); ?>
											</div><!-- latestnews_main -->

											<div class="latestnews_minors grid_parent">
												<?php $latestnews = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 6, 'category_name' => 'featured', 'offset' => 1) ); ?>
												<?php while ( $latestnews->have_posts() ) : $latestnews->the_post(); ?>
													<div class="latestnews_minor grid_3">
														<figure>
															<a href="<?php the_permalink(); ?>">
																<?php the_post_thumbnail(); ?>
															</a>
														</figure>
														<div class="latestnews_minor_content">
															<a href="<?php the_permalink(); ?>">
																<?php echo wp_trim_words( get_the_title(), 9, '...' ); ?>
															</a>
														</div>
													</div><!-- latestnews_minor -->
												<?php endwhile; wp_reset_query(); ?>
											</div><!-- latestnews_minor -->
										</div><!-- latestnews_content -->

										<div class="team_sidebar">
											<div id="league_standings">
												<h3 class="section_heading">League Standings</h3>
												<opta widget="standings" sport="football" competition="<?php echo $competition_id ?>" season="<?php echo $season_id ?>" tabbed_groups="false" show_layout="short" sorting="false" show_image="true" opta_logo="false" team_name="normal" team_link="team" live="true" narrow_limit="240" show_relegation_avg="false"></opta>
											</div><!-- league_standings -->
										</div><!-- team_sidebar -->
									</div><!-- #latestnews -->

									<div id="squads" class="tab-pane fade">
										<div id="squad">
											<opta widget="squad" sport="football" competition="<?php echo $competition_id ?>" season="<?php echo $season_id ?>" team="<?php echo $team_id ?>" order_by="name" group_by_position="true" player_names="full" show_position="true" show_nationality="false" nationality="text" show_image="true" opta_logo="false" narrow_limit="400" player_link="player" image_size="large"></opta>
										</div>
									</div><!-- #squad -->

									<div id="teamstats" class="tab-pane fade">
										<div id="team_stats">
											<opta widget="teamstatsplus" sport="football" sub="team" competition="<?php echo $competition_id ?>" season="<?php echo $season_id ?>" team="<?php echo $team_id ?>" player="12297" change_player="true" start_expanded="true" navigation="tabs" opta_logo="false" width="700"></opta>
										</div>
									</div>
								</div><!-- .tab-content -->
							</div><!-- .team_tabs_wrapper -->

						</div><!-- .team_profile_wrapper -->

					</div><!-- col-md-12 -->
				</div><!-- row -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- container -->

<?php get_footer(); ?>
