<?php
/**
 * Bamba Sport functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bamba_Sport
 */

if ( ! function_exists( 'bamba_sport_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bamba_sport_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Bamba Sport, use a find and replace
	 * to change 'bamba-sport' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bamba-sport', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'bamba-main-slider', 670, 381, true);
	add_image_size( 'bamba-sport-slider',"", 440, true);
	add_image_size( 'related-posts', 90, 90, true);
	add_image_size( 'quick-look', 115, 100, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'bamba-sport' ),
		'secondary_menu' => esc_html__( 'Secondary Menu', 'bamba-sport' ),
		'football_menu' => esc_html__( 'Football Menu', 'bamba-sport' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bamba_sport_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'bamba_sport_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bamba_sport_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bamba_sport_content_width', 640 );
}
add_action( 'after_setup_theme', 'bamba_sport_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bamba_sport_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bamba-sport' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bamba-sport' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Homepage', 'bamba-sport' ),
		'id'            => 'homepage',
		'description'   => esc_html__( 'Homepage Sidebar', 'bamba-sport' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Blog', 'bamba-sport' ),
		'id'            => 'blog',
		'description'   => esc_html__( 'Blog Sidebar', 'bamba-sport' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bamba_sport_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bamba_sport_scripts() {
	wp_enqueue_style( 'bamba-sport-style', get_stylesheet_uri() );

	// My CSS
	wp_enqueue_style( 'onchari-css', get_template_directory_uri() . '/onchari.css' );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '2016', true);

	// Flexslider CSS
	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/css/flexslider.css' );


	// Youtube and Vimeo Responsive script
	wp_enqueue_script( 'responsive_videos', get_template_directory_uri() . '/js/responsive_videos.js', array(), '20150822', true );

	// Flexslider JS
	wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '20150822', true );


	wp_enqueue_script( 'bamba-sport-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bamba-sport-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bamba_sport_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


















//CUSROM CODE STARTS HERE

// Disables admin bar for users
	show_admin_bar(false);

// Videos CPT
	function bambasport_videos() {

		$labels = array(
			'name'                  => _x( 'Videos', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Videos', 'text_domain' ),
			'name_admin_bar'        => __( 'Videos', 'text_domain' ),
			'archives'              => __( 'Video Archives', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Video:', 'text_domain' ),
			'all_items'             => __( 'All Videos', 'text_domain' ),
			'add_new_item'          => __( 'Add New Video', 'text_domain' ),
			'add_new'               => __( 'Add Video', 'text_domain' ),
			'new_item'              => __( 'New Video', 'text_domain' ),
			'edit_item'             => __( 'Edit Video', 'text_domain' ),
			'update_item'           => __( 'Update Video', 'text_domain' ),
			'view_item'             => __( 'View Video', 'text_domain' ),
			'search_items'          => __( 'Search Video', 'text_domain' ),
			'not_found'             => __( 'Video not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Video not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into Video', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Video', 'text_domain' ),
			'items_list'            => __( 'Videos list', 'text_domain' ),
			'items_list_navigation' => __( 'Videos list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter Videos list', 'text_domain' ),
		);
		$rewrite = array(
			'slug'                  => 'videos',
			'with_front'            => true,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Video', 'text_domain' ),
			'description'           => __( 'Videos on Bamba Sport', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt'),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 10,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'rewrite'               => $rewrite,
			'capability_type'       => 'page',
		);
		register_post_type( 'videos', $args );

	}
	add_action( 'init', 'bambasport_videos', 0 );


// Team Profile CPT
	function team_profile_data() {

		$labels = array(
			'name'                  => _x( 'Team Profiles', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Team Profile', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Team Profile', 'text_domain' ),
			'name_admin_bar'        => __( 'Team Profile', 'text_domain' ),
			'archives'              => __( 'Team Profile Archives', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Team Profile:', 'text_domain' ),
			'all_items'             => __( 'All Team Profiles', 'text_domain' ),
			'add_new_item'          => __( 'Add New Team', 'text_domain' ),
			'add_new'               => __( 'Add New Team', 'text_domain' ),
			'new_item'              => __( 'New Team Profile', 'text_domain' ),
			'edit_item'             => __( 'Edit Team Profile', 'text_domain' ),
			'update_item'           => __( 'Update Team Profile', 'text_domain' ),
			'view_item'             => __( 'View Team Profile', 'text_domain' ),
			'search_items'          => __( 'Search Team Profile', 'text_domain' ),
			'not_found'             => __( 'Team Profile Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Team Profile Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into Team Profile', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Team Profile', 'text_domain' ),
			'items_list'            => __( 'Team Profile list', 'text_domain' ),
			'items_list_navigation' => __( 'Team Profile list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter Team Profile list', 'text_domain' ),
		);
		$rewrite = array(
			'slug'                  => 'teamprofile',
			'with_front'            => true,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Team Profile', 'text_domain' ),
			'description'           => __( 'Name and brief discription of a team', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 10,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'rewrite'               => $rewrite,
			'capability_type'       => 'page',
		);
		register_post_type( 'teamprofile', $args );

	}
	add_action( 'init', 'team_profile_data', 0 );

// TeamKenya CPT
	function teamkenya() {

		$labels = array(
			'name'                  => _x( 'People', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Person', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( '#TeamKenya', 'text_domain' ),
			'name_admin_bar'        => __( '#TeamKenya', 'text_domain' ),
			'archives'              => __( 'Item Archives', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'All Items', 'text_domain' ),
			'add_new_item'          => __( 'Add New Item', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$rewrite = array(
			'slug'                  => 'teamkenya',
			'with_front'            => true,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Person', 'text_domain' ),
			'description'           => __( 'Kenyans representing us at the Olympics 2016', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail', ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 10,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'rewrite'               => $rewrite,
			'capability_type'       => 'page',
		);
		register_post_type( 'teamkenya', $args );

	}
	add_action( 'init', 'teamkenya', 0 );

// Adds social field section on your profile page
	add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

	function my_show_extra_profile_fields( $user ) { ?>
		<h3>Social</h3>
		<table class="form-table">
			<tr>
				<th><label for="facebook">Facebook</label></th>
				<td>
					<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
					<span class="description">Please enter your Facebook profile URL E.g. https://www.facebook.com/onchari</span>
				</td>
			</tr>
			<tr>
				<th><label for="twitter">Twitter</label></th>
				<td>
					<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
					<span class="description">Please enter your Twitter handle E.g. OfficialOnchari</span>
				</td>
			</tr>
			<tr>
				<th><label for="instagram">Instagram</label></th>
				<td>
					<input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
					<span class="description">Please enter your Instagram username E.g. victor_onchari</span>
				</td>
			</tr>
		</table>
	<?php }
	// Saves Data
	add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
	add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

	function my_save_extra_profile_fields( $user_id ) {
		if ( !current_user_can( 'edit_user', $user_id ) )
			return false;

		/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
		update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
		update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
		update_usermeta( $user_id, 'instagram', $_POST['instagram'] );
	}


// Disqus without a plugin
	// function disqus_embed($disqus_shortname) {
	//     global $post;
	//     wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
	//     echo '<div id="disqus_thread"></div>
	//     <script type="text/javascript">
	//         var disqus_shortname = "'.$disqus_shortname.'";
	//         var disqus_title = "'.$post->post_title.'";
	//         var disqus_url = "'.get_permalink($post->ID).'";
	//         var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
	//     </script>';
		//  disqus_embed('bambasport')
	// }

// Comment count for Disqus
	// function disqus_count($disqus_shortname) {
	//     wp_enqueue_script('disqus_count','http://'.$disqus_shortname.'.disqus.com/count.js');
	//     echo '<a href="'. get_permalink() .'#disqus_thread"></a>';
			// disqus_count('bambasport');
	// }


// Paginayion
	function pagination_nav() {
	    global $wp_query;
	 
	    if ( $wp_query->max_num_pages > 1 ) { ?>
	        <nav class="pagination" role="navigation">
	            <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
	            <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
	        </nav>
	<?php }
	}
