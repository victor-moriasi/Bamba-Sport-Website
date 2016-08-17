
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


</aside><!-- #secondary -->