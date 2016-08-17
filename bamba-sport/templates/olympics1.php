<?php
/**
 * Template Name: Olympics 1
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Bamba_Sport
 */
get_header(); ?>

	<div class="competition_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="rio_logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/rio.png" alt="Olympics 2016">
				</div>
			</div>
		</div>
		<img class="rio_banner" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="Olympics 2016">
	</div>

	<div class="container">

		<div id="primary" class="content-area no_sidebar pt_1em">
			<main id="main" class="site-main" role="main">

				<div class="row">
					<div class="col-md-12">
						
						<div id="olympics_wrapper">
							<div class="team_tabs_menu">
								<ul class="nav nav-tabs">
									<li role="presentation" class="active">
										<a href="#latestnews" class="active" data-toggle="tab">
											LATEST NEWS
											<!-- <hr class="menu_border"></hr> -->
										</a>
									</li>

									<li role="presentation">
										<a href="#schedule" data-toggle="tab">
											SCHEDULE
											<!-- <hr class="menu_border"></hr> -->
										</a>
									</li>

									<li role="presentation">
										<a href="#medaltable" data-toggle="tab">
											MEDAL TABLE
											<!-- <hr class="menu_border"></hr> -->
										</a>
									</li>

									<li role="presentation">
										<a href="#teamkenya" data-toggle="tab">
											#TEAMKENYA
											<!-- <hr class="menu_border"></hr> -->
										</a>
									</li>

									<li role="presentation">
										<a href="#videos" data-toggle="tab">
											VIDEOS
											<!-- <hr class="menu_border"></hr> -->
										</a>
									</li>
								</ul>
								<!-- <div class="line"></div> -->
								<div class="clear"></div>
							</div><!-- .team_tabs_menu -->

							<div class="tab-content pt_1em">
								<div id="latestnews" class="tab-pane fade in active">
									<div class="select_kenya_wrapper">
										<input type="checkbox" id="select_kenya"/> See Kenyan News Only
									</div>
									<div id="all">
										<div class="olympics_slider">
											<div class="olympic_slider">
												<?php $mainpost = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'category_name' => 'olympics-2016') ); ?>
												<?php while ( $mainpost->have_posts() ) : $mainpost->the_post(); ?>
													<div class="main_slider_img">
														<a href="<?php the_permalink(); ?>">
															<?php the_post_thumbnail('bamba-main-slider'); ?>
															<h2 class="main_slider_title"><?php the_title(); ?></h2>
														</a>
													</div>
												<?php endwhile; wp_reset_query(); ?>
											</div><!-- olympic_slider -->

											<div class="olympic_slider">
												<?php $mainpost = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'category_name' => 'olympics-2016', 'offset' => 1) ); ?>
												<?php while ( $mainpost->have_posts() ) : $mainpost->the_post(); ?>
													<div class="subposts olympic_subposts">
														<div class="subpost olympic_post">
															<figure>
																<a href="<?php the_permalink(); ?>">
																	<?php the_post_thumbnail(); ?>
																</a>
															</figure>
														</div>
														<div class="subpost olympic_post">
															<div class="subpost_title">
																<a href="<?php the_permalink(); ?>">
																<!-- <?php echo wp_trim_words( get_the_title(), 8, '..' ); ?> -->
																	<?php the_title(); ?>
																</a>
															</div>
															<div class="subpost_time subpost_time_olympic">
																<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
															</div>
														</div>
													</div>
												<?php endwhile; wp_reset_query(); ?>
											</div><!-- olympic_slider -->
										</div><!-- olympics_slider -->

										<div class="olympics_featured">
											<h3 class="section_heading">Featured Posts</h3>
											<div class="olympic_featured_wrapper grid_parent">
												<?php $latestnews = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'olympics-2016') ); ?>
												<?php while ( $latestnews->have_posts() ) : $latestnews->the_post(); ?>
													<div class="olympic_featured grid_4">
														<figure>
															<a href="<?php the_permalink(); ?>">
																<?php the_post_thumbnail(); ?>
															</a>
														</figure>
														<div class="olympic_content">
															<a href="<?php the_permalink(); ?>">
																<?php the_title(); ?>
															</a>
														</div>
													</div><!-- olympic_featured -->
												<?php endwhile; wp_reset_query(); ?>
											</div><!-- olympic_featured_wrapper -->
										</div><!-- olympics_featured -->

										<div class="olympic_videos">
											<h3 class="section_heading">Videos</h3>
											<div class="row gutters_5">
												<div class="col-md-6">
													<div class="main_video">
														<?php $videos = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 1) ); ?>
														<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
															<figure>
																<?php the_content(); ?>
															</figure>
															<p class="main_video_title pt_10">
																<?php the_title(); ?>
															</p>
															<div class="main_video_content">
																<?php echo wp_trim_words( get_the_excerpt(), 30, '..' ); ?>
															</div>
														<?php endwhile; wp_reset_query(); ?>
													</div><!-- main_video -->
												</div>

												<div class="col-md-6">
													<div class="minor_videos grid_parent">
														<?php $videos = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 4, 'offset' => 1) ); ?>
														<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
															<div class="minor_video grid_2">
																<figure>
																	<?php the_content(); ?>
																</figure>
																<p class="minor_video_title">
																	<?php the_title(); ?>
																</p>
																</div><!-- minor_video -->
														<?php endwhile; wp_reset_query(); ?>
													</div><!-- minor_videos -->
												</div>
											</div>
										</div><!-- olympic_videos -->
									</div><!-- #all -->

									<div id="kenyan">
										<div class="olympics_slider">
											<div class="olympic_slider">
												<?php $mainpost = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'category_name' => 'kenyan-olympics-2016') ); ?>
												<?php while ( $mainpost->have_posts() ) : $mainpost->the_post(); ?>
													<div class="main_slider_img">
														<a href="<?php the_permalink(); ?>">
															<?php the_post_thumbnail('bamba-main-slider'); ?>
															<h2 class="main_slider_title"><?php the_title(); ?></h2>
														</a>
													</div>
												<?php endwhile; wp_reset_query(); ?>
											</div><!-- olympic_slider -->

											<div class="olympic_slider">
												<?php $mainpost = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'category_name' => 'kenyan-olympics-2016', 'offset' => 1) ); ?>
												<?php while ( $mainpost->have_posts() ) : $mainpost->the_post(); ?>
													<div class="subposts olympic_subposts">
														<div class="subpost olympic_post">
															<figure>
																<a href="<?php the_permalink(); ?>">
																	<?php the_post_thumbnail(); ?>
																</a>
															</figure>
														</div>
														<div class="subpost olympic_post">
															<div class="subpost_title">
																<a href="<?php the_permalink(); ?>">
																<!-- <?php echo wp_trim_words( get_the_title(), 8, '..' ); ?> -->
																	<?php the_title(); ?>
																</a>
															</div>
															<div class="subpost_time subpost_time_olympic">
																<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
															</div>
														</div>
													</div>
												<?php endwhile; wp_reset_query(); ?>
											</div><!-- olympic_slider -->
										</div><!-- olympics_slider -->

										<div class="olympics_featured">
											<h3 class="section_heading">Featured Posts</h3>
											<div class="olympic_featured_wrapper grid_parent">
												<?php $latestnews = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'kenyan-olympics-2016') ); ?>
												<?php while ( $latestnews->have_posts() ) : $latestnews->the_post(); ?>
													<div class="olympic_featured grid_4">
														<figure>
															<a href="<?php the_permalink(); ?>">
																<?php the_post_thumbnail(); ?>
															</a>
														</figure>
														<div class="olympic_content">
															<a href="<?php the_permalink(); ?>">
																<?php the_title(); ?>
															</a>
														</div>
													</div><!-- olympic_featured -->
												<?php endwhile; wp_reset_query(); ?>
											</div><!-- olympic_featured_wrapper -->
										</div><!-- olympics_featured -->

										<div class="olympic_videos">
											<h3 class="section_heading">Videos</h3>
											<div class="row gutters_5">
												<div class="col-md-6">
													<div class="main_video">
														<?php $videos = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 1) ); ?>
														<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
															<figure>
																<?php the_content(); ?>
															</figure>
															<p class="main_video_title pt_10">
																<?php the_title(); ?>
															</p>
															<div class="main_video_content">
																<?php echo wp_trim_words( get_the_excerpt(), 30, '..' ); ?>
															</div>
														<?php endwhile; wp_reset_query(); ?>
													</div><!-- main_video -->
												</div>

												<div class="col-md-6">
													<div class="minor_videos grid_parent">
														<?php $videos = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 4, 'offset' => 1) ); ?>
														<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
															<div class="minor_video grid_2">
																<figure>
																	<?php the_content(); ?>
																</figure>
																<p class="minor_video_title">
																	<?php the_title(); ?>
																</p>
																</div><!-- minor_video -->
														<?php endwhile; wp_reset_query(); ?>
													</div><!-- minor_videos -->
												</div>
											</div>
										</div><!-- olympic_videos -->
									</div><!-- #kenyan -->
								</div><!-- #latestnews -->

								<div id="schedule" class="tab-pane fade">
									<div id="schedule_widget">
										<!-- <opta widget="schedule" sport="olympics" competition="1" season="2016" grouping="sport" show_grouping="false" disciplines="" days_before="2" date_from="2016-08-05" date_to="2016-08-21" start_current_day="false" time_format="HH:mm" date_picker_format="dS MMMM" show_venue="true" live="true" opta_logo="false">
											<opta sport="olympics" widget="results" competition="" season="" match="" show_flags="true"></opta>
										</opta> -->

										<opta widget="schedule" sport="olympics" competition="1" season="2016" grouping="sport" show_grouping="true" disciplines="" date_from="2016-08-03" date_to="2016-08-21" start_current_day="false" time_format="HH:mm" date_picker_format="dS MMMM" show_venue="true" live="true" narrow_limit="250" opta_logo="false">
											<opta sport="olympics" widget="results" competition="" season="" match="" show_flags="true"></opta>
										</opta>

									</div>
								</div><!-- #schedule -->

								<div id="medaltable" class="tab-pane fade">

									<div class="select_kenya_wrapper">
										<input type="checkbox" id="select_kenya_medaltable"/> See Kenyan Medals Only
									</div>
									<div id="all_medal">
										<div id="medaltable_widget">
											<div class="medal_slider">
												<div class="custom-navigation">
													<a href="#" class="flex-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
												<div class="custom-controls-container"></div>
													<a href="#" class="flex-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
												</div>

												<div class="clear"></div>

												<div class="flexslider">
													<ul class="slides">
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="AFG,ALB,ALG,ASA,AND,ANG,ANT,ARG,ARM,ARU,AUS,AUT,AZE,BAH,BRN,BAN,BAR,BLR,BEL,BIZ" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="BEN,BER,BHU,BOL,BIH,BOT,BRA,BRU,BUL,BUR,BDI,CAM,CMR,CAN,CPV,CAY,CAF,CHA,CHI,CHN" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="TPE,COL,COM,CGO,COK,CRC,CIV,CRO,CUB,CYP,CZE,DEN,DJI,DMA,DOM,PRK,COD,ECU,EGY,ESA" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="GEQ,ERI,EST,ETH,FIJ,FIN,FRA,MKD,GAB,GAM,GEO,GER,GHA,GBR,GRE,GRN,GUM,GUA,GUI,GBS" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="GUY,HAI,HON,HKG,HUN,ISL,IND,IOA,INA,IRI,IRQ,IRL,ISR,ITA,JAM,JPN,JOR,KAZ,KEN,KIR" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="KOR,KUW,KGZ,LAO,LAT,LIB,LES,LBR,LBA,LIE,LTU,LUX,MAD,MAW,MAS,MDV,MLI,MLT,MHL,MTN" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="MRI,MEX,FSM,MON,MGL,MNE,MAR,MOZ,MYA,NAM,NRU,NEP,NED,NZL,NCA,NIG,NGR,NOR,OMA,PAK,PLW" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show	_total="true" medal_breakdown="true" country="PLW,PLE,PAN,PNG,PAR,PER,PHI,POL,POR,PUR,QAT,MDA,ROU,RUS,RWA,STP,LCA,SAM,SMR,KSA" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="SEN,SRB,SEY,SLE,SIN,SVK,SLO,SOL,SOM,RSA,ESP,SRI,VIN,SKN,SUD,SUR,SWZ,SWE,SUI,SYR" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="TJK,TAN,THA,TLS,TOG,TGA,TTO,TUN,TUR,TKM,TUV,UAE,UGA,UKR,USA,URU,UZB,VAN,VEN,VIE" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
														<li>
															<div class="medaltable_widget">
																<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="IVB,ISV,YEM,ZAM,ZIM" expand_default="false" hide_zeroes="false" live="true" opta_logo="false"></opta>
															</div>
														</li>
													</ul><!-- slides -->
												</div><!-- flexslider -->
											</div><!-- .medal_slider -->
										</div><!-- #all_medal -->
									</div>

									<div id="kenyan_medal">
										<div class="medaltable_widget">
											<opta widget="medal_table" sport="olympics" competition="1" season="2016" show_flag="true" show_total="true" medal_breakdown="true" country="KEN" expand_default="true" hide_zeroes="false" live="true" opta_logo="false"></opta>
										</div>
									</div><!-- #kenyan_medal -->
								</div>

								<div id="teamkenya" class="tab-pane fade">
									<div class="teamkenya">
										<div class="sport_olympics_wrapper">
											<!-- <div class="sport_heading">Athletics</div> -->
											<div class="sport_olympics grid_parent">
												<div class="sport_olympic grid_3">
													<h4>Men’s 3000m Steeplechase</h4>
													<ol>
														<li>Brimin Kipruto</li>
														<li>Ezekiel Kemboi</li>
														<li>Conseslus Kipruto</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Men’s 800m</h4>
													<ol>
														<li>David Rudisha</li>
														<li>Ferguson Rotich</li>
														<li>Alfred Kipketer</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Men’s 1500m</h4>
													<ol>
														<li>Asbel Kiprop</li>
														<li>Elijah Manangoi</li>
														<li>Ronald Kwemoi</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Men’s 5000m</h4>
													<ol>
														<li>Caeb Mwangangi</li>
														<li>Isaiah Kiplagat</li>
														<li>Charles Yosei</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Men’s 10000m</h4>
													<ol>
														<li>Paul Tanui</li>
														<li>Bedan Karoki</li>
														<li>Geoffrey Kamworor</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Men’s 200m</h4>
													<ol>
														<li>Calvin Nakata</li>
														<li>Mike Mukamba</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Men’s 400m Hurdles</h4>
													<ol>
														<li>Nicholas Bett</li>
														<li>Boniface Mucheru</li>
														<li>Aron Koech</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Men’s Marathon</h4>
													<ol>
														<li>Eliud Kipchoge</li>
														<li>Wesley Korir</li>
														<li>Stanley Biwott</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Men’s 20km walk</h4>
													<ol>
														<li>Samuel Gathimba</li>
														<li>Simon Wachira</li>													
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Men’s Javelin</h4>
													<ol>
														<li>Julius Yego</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Women’s 400m hurdles</h4>
													<ol>
														<li>Maureen Jelagat</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Women’s 400m</h4>
													<ol>
														<li>Maureen Jelagat</li>
														<li>Margret Nyairera</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Women’s 800m</h4>
													<ol>
														<li>Margret Nyairera</li>
														<li>Eunice Sum</li>
														<li>Winnie Chebet</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Women’s 1500m</h4>
													<ol>
														<li>Faith Chepngetich</li>
														<li>Nancy Chepkwemoi</li>
														<li>Viola Lagat</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Women’s 3000m steeplechase</h4>
													<ol>
														<li>Hyvin Kiyeng</li>
														<li>Lydia Rotich</li>
														<li>Beatrice Chepkoech</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Women’s 5000m</h4>
													<ol>
														<li>Vivian Cheruiyot</li>
														<li>Hellen Obiri</li>
														<li>Mercy Cherono</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Women’s 10000m</h4>
													<ol>
														<li>Vivian Cheruiyot</li>
														<li>Betsy Saina</li>
														<li>Agnes Aprot</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Women’s Marathon</h4>
													<ol>
														<li>Helah Kiprop</li>
														<li>Visline Jepkesho</li>
														<li>Jemimah Sumgog</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Women’s 20km Walk</h4>
													<ol>
														<li>Grace Wanjiku</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Archery </h4>
													<ol>
														<li>Shehzana Kuki</li>
													</ol>
													<div class="tech_bench">Technical Bench</div>
													<ol>
														<li>Tabasamu Anwar - Team Manager/ Coach</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Boxing</h4>
													<ol>
														<li>Rayton Okwiri – Welterweight</li>
														<li>Benson Gicharu – Bantamweight</li>
														<li>Pieter Mungai – Light flyweight</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Weight Lifting</h4>
													<ol>
														<li>James Adede – Men’s 94kgs</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Swimming</h4>
													<ol>
														<li>Hamdan Bayusuf- Men’s 100m backstroke</li>
														<li>Talisa Lanoe – Women’s 100m backstroke</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Judo</h4>
													<ol>
														<li>Kiplangat Sang – men’s 90kgs</li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Men’s Rugby</h4>
													<ol>
														<li>Andrew Amonde</li>
														<li>Collins Injera</li>
														<li>Oscar Ouma</li>
														<li>Augustine Lugonzo</li>
														<li>Billy Odhiambo </li>
														<li> Humphrey Kayange</li>
														<li>Biko Adema</li>
														<li>Oscar Ayodi</li>
														<li>Dennis Ombachi</li>
														<li> Sammy Oliech</li>
														<li>Bush Mwale </li>
														<li>Willy Ambaka </li>
													</ol>
													<div class="tech_bench">Technical Bench</div>
													<ol>
														<li>Head coach – Benjamin Ayimba</li>
														<li>Assistant coach – Paul Murunga</li>
														<li>Physiotherapist – Lameck Bogonko</li>
														<li>Strength and Conditioning - Geoffrey Kimani </li>
														<li>Newton Olango – Team manager </li>
													</ol>
												</div><!-- sport_olympic -->

												<div class="sport_olympic grid_3">
													<h4>Kenya Lionesses</h4>
													<ol>
														<li>Janet Owino</li>
														<li>Catherine Abila</li>
														<li>Philadelphia Olando</li>
														<li>Linet Moraa</li>
														<li>Janet Okello</li>
														<li>Sheila Chanjira</li>
														<li>Camilyne Oyuayo</li>
														<li>Celestine Masinde</li>
														<li>Doreen Remour</li>
														<li> Stacey Awour</li>
														<li>Irene Otieno</li>
														<li>Rachel Mbogo</li>
													</ol>
													<div class="tech_bench">Technical Bench</div>
													<ol>
														<li>Mike Shamiah - Head coach</li>
														<li>Sara Otieno – Team Manager</li>
														<li>Ben Mahinda - Physiotherapist</li>
													</ol>
												</div><!-- sport_olympic -->

											</div><!-- sport_olympics -->
										</div><!-- sport_olympics_wrapper -->
									</div><!-- .teamkenya -->
								</div><!-- #teamkenya -->

								<div id="videos" class="tab-pane fade">
									<div class="videos_wrapper">
										<div class="videos_grid_wrapper">
											<?php $sportvideos = new WP_Query( array( 'post_type' => 'videos', 'category_name' => 'olympics-2016') ); ?>
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
								</div><!-- #videos -->
							</div><!-- .tab-content -->
						</div><!-- #olympics_wrapper -->


					</div><!-- col-md-12 -->
				</div><!-- row -->

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- container -->

<?php get_footer(); ?>
