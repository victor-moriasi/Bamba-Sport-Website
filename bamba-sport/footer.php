<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bamba_Sport
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="footer_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="footer_contents">
						<div class="footer_content">
							<div class="bambasport_footer_logo">
								<a href="<?php bloginfo('wpurl'); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bambasport_footer_logo.png">
								</a>
							</div>
						</div>
						<div class="footer_content">
							<h4>Contact Us</h4>
							<p class="grey">2nd Floor Lion Place,</p>
							<p class="grey">Waiyaki Way, Westlands.</p>
							<p>Support@bambasport.co.ke</p>
							<p>(+254) 722 222 222</p>

							<div class="social_footer_links">
								<div class="social_footer_link">
									<a href="#" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png">
									</a>
								</div>

								<div class="social_footer_link">
									<a href="#" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png">
									</a>
								</div>

								<div class="social_footer_link">
									<a href="#" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png">
									</a>
								</div>

								<div class="social_footer_link">
									<a href="#" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gplus.png">
									</a>
								</div>
							</div><!-- social_footer_links -->
						</div>
						<div class="footer_content">
							<h4>Subscribe</h4>
							
						</div>
					</div>

				</div><!-- col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- footer_wrapper -->
		
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Apester JS -->
<script type="text/javascript" src="//static.apester.com/js/sdk/v1.1/apester-sdk.min.js"></script>

<!-- OPTA JS -->
<script type="text/javascript" src="http://widget.cloud.opta.net/2.0/js/widgets.opta.js"></script>
<script type="text/javascript">
	var _optaParams = { 
		custID: '90720f121b09983f1e4396a735d88151',
		language: 'en_GB',
		timezone: 3,
	};
</script>


<script type="text/javascript">
	jQuery(document).ready(function () {

		// Homepage league select
		jQuery('.league_group').hide();
		jQuery('#epl').show();
			jQuery('#selectLeague').change(function () {
				jQuery('.league_group').hide();
				jQuery('#'+jQuery(this).val()).show();
			})

		// Filter olympic news
	    jQuery('#select_kenya').change(function(){
		    if(this.checked) {
		        jQuery('#kenyan').show();
		        jQuery('#all').hide();
		    } else {
		    	jQuery('#all').show();
		        jQuery('#kenyan').hide();
		    }
		});

	    // Filter olympic medal table
	    jQuery('#select_kenya_medaltable').change(function(){
		    if(this.checked) {
		        jQuery('#kenyan_medal').show();
		        jQuery('#all_medal').hide();
		    } else {
		    	jQuery('#all_medal').show();
		        jQuery('#kenyan_medal').hide();
		    }
		});


	    // Medal slider
		jQuery('.flexslider').flexslider({
		    animation: "fade",
		    controlNav: false,
		    controlsContainer: jQuery(".custom-controls-container"),
		    customDirectionNav: jQuery(".custom-navigation a")
		});

	});
</script>


</body>
</html>
