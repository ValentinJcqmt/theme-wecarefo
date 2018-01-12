<footer class="pb-1 pt-3 bg-white text-black">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-3 push-md-9 hashtag text-center text-md-right py-1">
				#wecareformodels
			</div>
			<div class="col-12 offset-0 col-md-6 py-1">
				<div class="row">
					<div class="col text-center">
						<a href="<?php echo get_field('facebook_url', 'option'); ?>" class="d-inline-block" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.svg" alt="facebook">
						</a>
					</div>
					<div class="col text-center">
						<a href="<?php echo get_field('twitter_url', 'option'); ?>" class="d-inline-block" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.svg" alt="twitter">
						</a>
					</div>
					<div class="col text-center hidden-md-down">
						<a href="<?php echo get_field('linkedin_url', 'option'); ?>" class="d-inline-block" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-linkedin.svg" alt="linkedin">
						</a>
					</div>
					<div class="col text-center hidden-md-down">
						<a href="<?php echo get_field('youtube_url', 'option'); ?>" class="d-inline-block" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-youtube.svg" alt="youtube">
						</a>
					</div>
					<div class="col text-center hidden-md-down">
						<a href="<?php echo get_field('pinterest_url', 'option'); ?>" class="d-inline-block" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-pinterest.svg" alt="pinteres">
						</a>
					</div>
					<div class="col text-center">
						<a href="<?php echo get_field('instagram_url', 'option'); ?>" class="d-inline-block" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram.svg" alt="instagram">
						</a>
					</div>
					<div class="col text-center hidden-md-down">
						<a href="<?php echo get_field('google_url', 'option'); ?>" class="d-inline-block" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-google.svg" alt="google">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row hidden-md-down">
			<div class="footer-menu text-center font-arial text-uppercase text-light-gray py-2">
				<?php wp_nav_menu(array('menu' => 'Footer mobile')); ?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
