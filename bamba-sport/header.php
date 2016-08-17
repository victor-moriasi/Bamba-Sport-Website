<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bamba_Sport
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- Opta CSS -->
<link rel="stylesheet" href="http://widget.cloud.opta.net/2.0/css/widgets.opta.css" type="text/css">
<!--[if IE 9]>
	<link rel="stylesheet" type="text/css" href="http://widget.cloud.opta.net/2.0/css/ie9.widgets.opta.css" media="screen" />
<![endif]-->
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="http://widget.cloud.opta.net/2.0/css/ie8.widgets.opta.css" media="screen" />
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="http://widget.cloud.opta.net/2.0/css/ie7.widgets.opta.css" media="screen" />
<![endif]-->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'bamba-sport' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		<div class="billboard_slot">
			<img src="https://placehold.it/970x100">
		</div><!-- billboard_slot -->

		<div class="main_menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="bambasport_logo">
							<a href="<?php bloginfo('wpurl'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bambasport_logo.png">
							</a>
						</div>

						<div class="primary_menu">
							<?php wp_nav_menu( array( 'theme_location' => 'primary_menu') ); ?>
						</div>
					</div><!-- col-md-12 -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- main_menu -->

		<div class="clear"></div>

		<div class="sub_menu" style="display: none;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="secondary_menu">
							<?php wp_nav_menu( array( 'theme_location' => 'secondary_menu') ); ?>
						</div>

						<div class="menu_search">
							<?php get_search_form(); ?>
						</div>
					</div><!-- col-md-12 -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- sub_menu -->

		<div class="clear"></div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bamba-sport' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> -->
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
