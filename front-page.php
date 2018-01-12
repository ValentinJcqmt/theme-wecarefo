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
	<div class="container-fluid py-4">
		<?php
		$args = array(
			'offset' => 0,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'post_type' => 'post',
			'post_status' => 'publish',
		);
		$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
		$n = 0;
		foreach ($recent_posts as $article) { ?>
			<div class="row text-black">
				<div class="col-12 col-md-10 offset-md-1">
					<div class="row <?php if($n == 0) echo"post-hp-first"; ?> post-hp py-2">
						<div class="col-12 col-md-6 text-center leftblock p-1">
							<?php if(has_post_thumbnail($article['ID'])){ ?>
								<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($article['ID'], 'hp-post-thumb'); ?>">
							<?php } else{ ?>
								<div class="cat text-center text-uppercase font-arial"><?php echo get_the_category($article['ID'])[0]->cat_name; ?></div>
								<div class="titre text-center font-didot font-style-italic text-uppercase font-weight-bold"><?php echo get_the_title($article['ID']); ?></div>
							<?php } ?>
						</div>
						<div class="col-12 col-md-6 rightblock p-1">
							<?php if(has_post_thumbnail($article['ID'])){ ?>
								<div class="cat text-center text-uppercase font-arial"><?php echo get_the_category($article['ID'])[0]->cat_name; ?></div>
								<div class="py-1 titre text-center font-didot font-style-italic text-uppercase font-weight-bold"><?php echo get_the_title($article['ID']); ?></div>
							<?php } ?>
							<div class="py-1 excerpt font-didot">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices justo quis odio iaculis tempus. Nullam non sodales erat. Nullam eget dui orci. In at placerat tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ac lorem sagittis, sollicitudin lacus et, efficitur dui [...]
							</div>
							<a class="d-block p-1 my-2 text-center font-weight-bold font-arial text-black text-uppercase bg-light-pink" href="<?php echo get_permalink($article['ID']); ?>"><?php if(qtrans_getLanguage() == "fr") echo"Lire la suite"; elseif(qtrans_getLanguage() == "en") echo"Read more" ?></a>
						</div>
					</div>
				</div>
			</div>
		<?php $n++;
		} ?>
	</div>
</div><!--End .main-->

<?php get_footer();
