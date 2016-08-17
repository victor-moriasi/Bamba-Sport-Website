
<aside id="secondary" class="widget-area float_left" role="complementary">

	<!-- <?php dynamic_sidebar( 'homepage-sidebar' ); ?> -->

	<div class="post_author">
		<div class="post_author_img">
			<?php echo do_shortcode('[avatar]'); ?> 
		</div>

		<div class="post_author_meta">
			<!-- <p class="bold"><?php $author = get_the_author(); echo $author; ?></p> -->
			<p class="bold"><?php the_author_posts_link(); ?></p>
			<p><?php $author_description = get_the_author_meta('description'); echo $author_description?></p>
		</div><!-- post_author_meta -->

		<div class="post_author_socials">
			<div class="post_author_social">
				<a href="<?php echo get_the_author_meta('facebook'); ?>" target="_blank">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
			</div>

			<div class="post_author_social">
				<a href="https://twitter.com/<?php echo get_the_author_meta('twitter'); ?>" target="_blank">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
			</div>

			<div class="post_author_social">
				<a href="https://www.instagram.com/<?php echo get_the_author_meta('instagram'); ?>" target="_blank">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			</div>
		</div><!-- post_author_socials -->

		<div class="all_posts">
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
				All Posts
			</a>
		</div>
	</div><!-- .post_author -->

	<div class="related_posts_wrapper">
		<h2>Related Posts</h2>

		<?php
			//for use in the loop, list 5 post titles related to first tag on current post
			$tags = wp_get_post_tags($post->ID);
			if ($tags) {
			// echo '<h4>Related Posts</h4>';
			$first_tag = $tags[0]->term_id;
			$args=array(
			'tag__in' => array($first_tag),
			'post__not_in' => array($post->ID),
			'posts_per_page'=>8,
			'ignore_sticky_posts'=>1
			);
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post();
		?>

		<div class="related_posts">
			<div class="related_post">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('related-posts'); ?>
				</a>
			</div>
			<div class="related_post">
				<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '..' ); ?></a>
				<p class="related_post_time">
					<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
				</p>

				<div class="editor_meta_wrapper">
					<div class="editor_meta">
						<?php
							// $categories = get_the_category();
							// if ( ! empty( $categories ) ) {
							//     echo esc_html( $categories[0]->name );   
							// }
							$categories = get_the_category();
							if ( ! empty( $categories ) ) {
							    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
							}
						?>
					</div>
					<div class="editor_meta">
						<?php the_author_posts_link(); ?>
					</div>
				</div><!-- editor_meta_wrapper -->

			</div><!-- related_post -->
		</div><!-- related_posts -->

		<div class="clear"></div>

		<?php
			endwhile;
			}
			wp_reset_query();
			}
		?>
	</div><!-- .related_posts_wrapper -->

</aside><!-- #secondary -->