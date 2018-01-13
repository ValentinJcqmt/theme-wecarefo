<?php
get_header(); ?>

<div class="main">
	<?php if(get_field('image_hp_mobile')){ ?>
		<div class="container-fluid container-media-mobile hidden-lg-up">
			<div class="img-hp-mobile-container d-flex" id="hp-mobile-visuel">
				<img src="<?php echo get_field('image_hp_mobile')['url']; ?>" class="img-fluid visuel-mobile-hp mt-auto">
				<img src="<?php echo get_template_directory_uri()."/img/chevron-blanc.png"; ?>" id="chevron">
			</div>
		</div>
	<?php } ?>
	<div class="container-fluid hidden-lg-up">
		<div class="hp-mobile-quote font-didot text-black">
			<div class="text-container">
				<?php if(get_field('quote_hp_mobile')){ ?>
				<div class="hp-quote text-uppercase text-center font-didot">
					<?php echo get_field('quote_hp_mobile'); ?>
				</div>
				<?php } ?>
				<?php if(get_field('author_hp_mobile')){ ?>
				<div class="author-quote text-right font-didot">
					<?php echo get_field('author_hp_mobile'); ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php if(get_field('link_list_hp_mobile')){
		$n = 0; ?>
		<?php foreach(get_field('link_list_hp_mobile') as $link){ ?>
			<a href="<?php echo $link['link_type_hp_mobile'][0]['url_hp_mobile']; ?>" class="hidden-lg-up my-1 d-block <?php if($n%2 == 0){echo"bg-light-pink";}else{echo"bg-pink";}?> bandeau-hp-mobile text-black">
				<div class="row">
					<div class="col-12 pl-4 py-2">
						<div class="bandeau-title text-uppercase font-helvetica-lt font-weight-bold">
							<?php echo $link['link_title_hp_mobile'] ?>
						</div>
						<div class="bandeau-desc font-didot">
							<?php echo $link['link_description_hp_mobile'] ?>
						</div>
					</div>
				</div>
			</a>
		<?php $n++;
		} ?>
	<?php } ?>

	<div class="container-fluid container-crsl-hp py-4">
		<div class="row">
			<?php
			if(get_field('carousel_hp')){ ?>
				<div class="owl-carousel-hp owl-carousel text-white">
				<?php foreach(get_field('carousel_hp') as $item){ ?>
					<?php if($item['link_crsl'] && $item['link_crsl'][0] && $item['link_crsl'][0]['url'] &&$item['link_crsl'][0]['url'] != "" ){ ?>
						<a href="<?php echo $item['link_crsl'][0]['url']; ?>" class="d-inline-block crsl-img-container">
					<?php }
					else{ ?>
						<div class="d-inline-block crsl-img-container">
					<?php } ?>
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
						<?php }
					if($item['link_crsl'] && $item['link_crsl'][0] && $item['link_crsl'][0]['url'] &&$item['link_crsl'][0]['url'] != "" ){ ?>
						</a>
					<?php }
					else{ ?>
						</div>
					<?php }
				} ?>
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
								<div class="cat text-center text-uppercase font-helvetica-lt"><?php echo get_the_category($article['ID'])[0]->cat_name; ?></div>
								<div class="titre text-center font-didot font-style-italic text-uppercase font-weight-bold"><?php echo get_the_title($article['ID']); ?></div>
							<?php } ?>
						</div>
						<div class="col-12 col-md-6 rightblock p-1">
							<?php if(has_post_thumbnail($article['ID'])){ ?>
								<div class="cat text-center text-uppercase font-helvetica-lt"><?php echo get_the_category($article['ID'])[0]->cat_name; ?></div>
								<div class="py-1 titre text-center font-didot font-style-italic text-uppercase font-weight-bold"><?php echo get_the_title($article['ID']); ?></div>
							<?php } ?>
							<div class="py-1 excerpt font-eaves-rom">
								<?php echo get_field('home-text', $article['ID']);?>
							</div>
							<a class="d-block p-1 my-2 text-center font-weight-bold font-helvetica-lt text-black text-uppercase bg-light-pink" href="<?php echo get_permalink($article['ID']); ?>"><?php if(qtrans_getLanguage() == "fr") echo"Lire la suite"; elseif(qtrans_getLanguage() == "en") echo"Read more" ?></a>
						</div>
					</div>
				</div>
			</div>
		<?php $n++;
		} ?>
	</div>
</div><!--End .main-->

<?php get_footer();
