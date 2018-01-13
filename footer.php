<footer class="pb-1 pt-3 bg-white text-black">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-3 d-flex hidden-lg-up text-center text-md-left">
				<div id="back-to-top" class="my-auto text-uppercase font-helvetica-lt font-weight-bold text-black cursor-pointer">
					Back to top
				</div>
			</div>
			<div class="col-12 offset-0 col-md-6 offset-md-3 py-1">
				<div class="row">
					<div class="col-12 hashtag text-center py-1 text-orange">
						#wecareformodels
					</div>
				</div>
				<div class="row">
					<?php if(get_field('facebook_url')){ ?>
						<div class="col text-center">
							<a href="<?php echo get_field('facebook_url', 'option'); ?>" class="d-inline-block" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.svg" alt="facebook">
							</a>
						</div>
					<?php } ?>
					<?php if(get_field('twitter_url')){ ?>
						<div class="col text-center">
							<a href="<?php echo get_field('twitter_url', 'option'); ?>" class="d-inline-block" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.svg" alt="twitter">
							</a>
						</div>
					<?php } ?>
					<?php if(get_field('linkedin_url')){ ?>
						<div class="col text-center hidden-md-down">
							<a href="<?php echo get_field('linkedin_url', 'option'); ?>" class="d-inline-block" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-linkedin.svg" alt="linkedin">
							</a>
						</div>
					<?php } ?>
					<?php if(get_field('youtube_url')){ ?>
						<div class="col text-center hidden-md-down">
							<a href="<?php echo get_field('youtube_url', 'option'); ?>" class="d-inline-block" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-youtube.svg" alt="youtube">
							</a>
						</div>
					<?php } ?>
					<?php if(get_field('pinterest_url')){ ?>
						<div class="col text-center hidden-md-down">
							<a href="<?php echo get_field('pinterest_url', 'option'); ?>" class="d-inline-block" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-pinterest.svg" alt="pinteres">
							</a>
						</div>
					<?php } ?>
					<?php if(get_field('instagram_url')){ ?>
						<div class="col text-center">
							<a href="<?php echo get_field('instagram_url', 'option'); ?>" class="d-inline-block" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram.svg" alt="instagram">
							</a>
						</div>
					<?php } ?>
					<?php if(get_field('google_url')){ ?>
						<div class="col text-center hidden-md-down">
							<a href="<?php echo get_field('google_url', 'option'); ?>" class="d-inline-block" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-google.svg" alt="google">
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row hidden-md-down">
			<div class="footer-menu text-center font-helvetica-lt text-uppercase text-light-gray py-2">
				<?php wp_nav_menu(array('menu' => 'Footer mobile')); ?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
