<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bamba_Sport
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="article_title">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="article_meta_data">
		<div class="article_meta">
			<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_date('F j, Y H:iA'); ?>
		</div>

		<div class="article_meta">
		</div>

		<div class="article_meta">
		</div>
	</div><!-- post_meta_data -->

	<div class="clear"></div>

	<div class="article_img">
		<figure>
			<?php the_post_thumbnail(); ?>
		</figure>
	</div>

	<div class="article_content">
		<?php the_content(); ?>
	</div>

	<div class="comment_wrapper">
		<?php echo do_shortcode('[fbcomments width="100%" count="off" num="5"]'); ?>
	</div>

</article><!-- #post -->

