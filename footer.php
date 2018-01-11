<footer class="px-1 bg-white text-black">
	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-12 text-center hashtag">#wecareformodels</div>
		</div>
		<div class="row">
			<div class="col">
				<a href="<?php echo get_field('facebook_url', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.svg" alt="facebook">
				</a>
			</div>
			<div class="col">
				<div class="link-copy">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-link.svg" alt="link">
				</div>
			</div>
			<div class="col">
				<a href="<?php echo get_field('facebook_url', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram.svg" alt="instagram">
				</a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
