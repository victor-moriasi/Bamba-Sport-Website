<?php
/**
 * Template Name: Template
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

		<div id="primary" class="content-area padding_top">
			<main id="main" class="site-main" role="main">

				<div class="row">
					<div class="col-md-12">
						
					</div><!-- col-md-12 -->
				</div><!-- row -->

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- container -->

<?php get_footer(); ?>
