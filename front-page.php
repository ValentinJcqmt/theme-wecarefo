<?php
get_header(); ?>

<div class="main">
	<div class="container-fluid py-4">
		<div class="row">
			<?php
			if(get_field('carousel_hp')){ ?>
				<div class="owl-carousel-hp owl-carousel text-white">
				<?php foreach(get_field('carousel_hp') as $item){ ?>
					<a href="<?php echo $item['link_crsl'][0]['url']; ?>" class="d-inline-block crsl-img-container">
						<img src="<?php echo $item['image_crsl']['sizes']['hp-crsl']; ?>" class="img-fluid">
						<?php
						if(isset($item['quote_crsl']) && $item['quote_crsl'] != ""){ ?>
						<div class="crsl_quote font-didot text-white d-flex">
							<div class="text-container my-auto">
								<div class="quote text-uppercase text-center">
									<?php echo $item['quote_crsl']; ?>
								</div>
								<?php if(isset($item['author_crsl'])){ ?>
								<div class="author-quote text-right">
									<?php echo $item['author_crsl']; ?>
								</div>
								<?php } ?>
								<?php if(isset($item['company_crsl'])){ ?>
								<div class="company-quote text-right">
									<?php echo $item['company_crsl']; ?>
								</div>
							</div>
							<?php } ?>
						</div>
						<?php } ?>
					</a>
				<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div><!--End .main-->

<?php get_footer();
