<footer class="p-1 bg-white text-black">
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
						<div class="link-copy">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-link.svg" alt="link">
						</div>
					</div>
					<div class="col text-center">
						<a href="<?php echo get_field('facebook_url', 'option'); ?>" class="d-inline-block" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram.svg" alt="instagram">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
