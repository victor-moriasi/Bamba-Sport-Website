
<aside id="secondary" class="widget-area" role="complementary">

	<!-- <?php dynamic_sidebar( 'homepage-sidebar' ); ?> -->

	<div class="homepage_league">
		<select id="selectLeague">
			<option value="epl">English Premier League</option>
			<option value="laliga">Spanish La Liga</option>
			<option value="bundesliga">German Bundesliga</option>
			<option value="serie">Italian Serie A</option>
			<option value="ligue">French Ligue 1</option>
		</select>

		<div id="epl" class="league_group">
			<div id="league_standings">
				<opta widget="standings" sport="football" competition="8" season="2016" tabbed_groups="false" show_layout="short" sorting="false" show_image="true" opta_logo="false" team_name="normal" team_link="team" live="true" narrow_limit="240" show_relegation_avg="false"></opta>
			</div><!-- league_standings -->
		</div>

		<div id="laliga" class="league_group">
			<div id="league_standings">
				<opta widget="standings" sport="football" competition="23" season="2016" tabbed_groups="false" show_layout="short" sorting="false" show_image="true" opta_logo="false" team_name="normal" team_link="team" live="true" narrow_limit="240" show_relegation_avg="false"></opta>
			</div><!-- league_standings -->
		</div>

		<div id="bundesliga" class="league_group">
			<div id="league_standings">
				<opta widget="standings" sport="football" competition="22" season="2016" tabbed_groups="false" show_layout="short" sorting="false" show_image="true" opta_logo="false" team_name="normal" team_link="team" live="true" narrow_limit="240" show_relegation_avg="false"></opta>
			</div><!-- league_standings -->
		</div>

		<div id="serie" class="league_group">
			<div id="league_standings">
				<opta widget="standings" sport="football" competition="21" season="2016" tabbed_groups="false" show_layout="short" sorting="false" show_image="true" opta_logo="false" team_name="normal" team_link="team" live="true" narrow_limit="240" show_relegation_avg="false"></opta>
			</div><!-- league_standings -->
		</div>

		<div id="ligue" class="league_group">
			<div id="league_standings">
				<opta widget="standings" sport="football" competition="24" season="2016" tabbed_groups="false" show_layout="short" sorting="false" show_image="true" opta_logo="false" team_name="normal" team_link="team" live="true" narrow_limit="240" show_relegation_avg="false"></opta>
			</div><!-- league_standings -->
		</div>
	</div><!-- homepage_league -->

	<div class="sidebar_videos">
		<h3 class="section_heading">Videos</h3>
		<div class="sidebar_video_main">
			<?php $videos = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 1) ); ?>
			<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
				<figure>
					<?php the_content(); ?>
				</figure>
				<p class="video_title"><?php the_title(); ?></p>
			<?php endwhile; wp_reset_query(); ?>
		</div><!-- sidebar_video_main -->

		<div class="sidebar_video_subs">
			<?php $videos = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 2, 'offset' => 1) ); ?>
			<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
				<div class="sidebar_video_sub">
				<figure>
					<?php the_content(); ?>
				</figure>
				<p class="video_title"><?php the_title(); ?></p>
				</div><!-- sidebar_video_sub -->
			<?php endwhile; wp_reset_query(); ?>
		</div><!-- sidebar_video_subs -->

		<div class="clear"></div>

		<div class="see_all_videos">
			<a href="<?php bloginfo('wpurl'); ?>/videos">
				See All Videos
			</a>
		</div>

		<div class="clear"></div>
	</div><!-- sidebar_videos -->

	<div class="social_feed">
		<h3 class="section_heading">Social Feed</h3>

		<div class="social_feed_twitter">
			<a class="twitter-timeline" data-width="300" data-height="400" data-theme="dark" data-link-color="#f15a2b" href="https://twitter.com/BambaSports">Tweets by BambaSports</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>        

	</div><!-- social_feed -->



</aside><!-- #secondary -->