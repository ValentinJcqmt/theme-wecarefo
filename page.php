<?php

get_header();

if(is_page(7)){
	include TEMPLATEPATH . '/page/faq.php';
}
else{
	if( have_posts() ) : 
		while( have_posts() ) : the_post();
			?>
			<div class="heading-1 text-center content-1013">
				<h1><?php the_title();?></h1>
				<?php if(get_field('chapo-page')){ ?>
					<div class="chapo"><?php echo get_field('chapo-page'); ?></div>
				<?php } ?>
			</div>
			<?php
			$feature_contents = get_field( 'content_type' );
			if( isset($feature_contents) && !empty($feature_contents) ){
				foreach( $feature_contents as $content ){
					if( $content['acf_fc_layout'] ){
						 /**
			             *  Get PHP file with the index ACF layout
			             */
			            $bloc_path = get_template_directory().'/contenus/bloc-'.str_replace( '_', '-', $content['acf_fc_layout'] ).'.php' ;
			            if( file_exists( $bloc_path ) ) include( $bloc_path );
			            else var_dump($bloc_path);
					}
				}
			}
		endwhile;
	endif;
}

get_footer();
