
<aside id="secondary" class="widget-area pt_10" role="complementary">

	<!-- <?php dynamic_sidebar( 'homepage-sidebar' ); ?> -->

	<div class="scores_results_wrapper">
		<h3 class="section_heading">Scores & Results</h3>
		<div class="scores_results p_10">
			<!-- <h4>Scores & Results</h4> -->
			<div class="competition_scores_results p_10">
				<h4 class="competition_heading">ATP Tour</h4>
				<div class="competition_links">
					<a href="#">
						Scores
					</a>
					<a href="#">
						Results
					</a>
					<a href="#">
						Calendar
					</a>
					<a href="#" target="_blank">
						Official Site
					</a>
				</div>
			</div><!-- competition_scores_results -->

			<div class="competition_scores_results p_10">
				<h4 class="competition_heading">WTA Tour</h4>
				<div class="competition_links">
					<a href="#">
						Scores
					</a>
					<a href="#">
						Results
					</a>
					<a href="#">
						Calendar
					</a>
					<a href="#" target="_blank">
						Official Site
					</a>
				</div>
			</div><!-- competition_scores_results -->
		</div><!-- scores_results -->
	</div><!-- scores_results_wrapper -->

	<div class="quick_looks">
		<h3 class="section_heading">Quick Look Into Tennis</h3>
		<div class="quick_looks_main">
			<?php $quicklook = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'category_name' => 'quick-look') ); ?>
			<?php while ( $quicklook->have_posts() ) : $quicklook->the_post(); ?>
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
				<h4>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h4>
			<?php endwhile; wp_reset_query(); ?>
		</div><!-- quick_looks_main -->

		<div class="quick_looks_minor">
			<?php $quicklook = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'quick-look', 'offset' => 1) ); ?>
			<?php while ( $quicklook->have_posts() ) : $quicklook->the_post(); ?>
				<div class="quick_look_wrapper parent_ot mb_10">
					<div class="quick_look box_46">
						<figure>
							<?php the_post_thumbnail('quick-look'); ?>
						</figure>
					</div>
					<div class="quick_look box_46">
						<p class="no_pm">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						<p>
					</div>
				</div><!-- quick_look_wrapper -->
				<div class="clear"></div>
			<?php endwhile; wp_reset_query(); ?>

		</div><!-- quick_looks_minor -->
	</div><!-- quick_look -->
	
</aside><!-- #secondary -->
