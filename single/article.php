<?php
if( have_posts() ) : 
	while( have_posts() ) : the_post();
		?>
		<style>
			.relative{position: relative;}
			.absolute{position: absolute;}
			.content-1013{
				max-width: 1013px !important;
				margin: 0 auto;
				/*padding: 0 15px;*/
			}
			.content-1365{
				max-width: 1365px !important;
				margin: 0 auto;
			}
			.font-weight-400{
				font-weight: 400;
			}
			.size-30{
				font-size: 30px;
			}
			.size-36{
				font-size: 36px;
			}
			/*heading 1*/
			h1{
				color:  #1d1d1b;
				font-size: 30px;
				font-weight: 400;
				line-height: 43px;
				text-align: center;
				margin-bottom: 60px;
			}
			.category{
				color:  #1d1d1b;
				font-size: 27px;
				line-height: 36px;
				text-transform: uppercase !important;
				text-align: center;
			}
			/*heading 2*/
			.heading-2{				
				
				min-height: 70px;
				margin: 0 auto;
				margin-bottom: 50px;
			}
			h2{
				color:  #000000;
				font-size: 45px;
				font-weight: 400;
				line-height: 77px;
				text-align: left;
				text-transform: uppercase !important;
				background-color: #DFCBC0;				
				padding-left: 50px;
			}
			.number{
				top: 0;
				right: 0;
				color:  #000000;
				font-size: 149.85px;
				font-weight: 400;
				line-height: 77px;
				text-align: left;
				transform: scaleY(1.001);
				margin-right: 50px;
			}
			/*content*/
			.content-text{
				color:  #1d1d1b;
				font-size: 27px;
				line-height: 36px;
				text-align: left;
			}
			h3{
				font-weight: 300;
				text-transform: uppercase;
			}
			.citation{
				line-height: 60px;
				font-style: italic;
				color:  #1d1d1b;
				font-size: 30px;
				font-weight: 400;
				line-height: 60px;
				text-transform: uppercase;
				margin: 30px 0;
			}
			.citation:before{
				content: url(<?php echo get_template_directory_uri(); ?>/img/quote-2-pink.png);
			}
			.citation:after{
				content: url(<?php echo get_template_directory_uri(); ?>/img/quote-1-pink.png);
			}
			.name{
				font-size: 36px;
				line-height: 24px;
				color:  #1d1d1b;
				font-style: italic;
			}
			.company{
				font-size: 23px;
				line-height: 24px;
				color:  #898989;
				font-style: italic;
			}
		</style>
		<div class="heading-1 text-center content-1013">
			<?php if(has_category()){ ?>
				<div class="category"><?php echo get_the_category()[0]->name; ?></div>
			<?php } ?>
			<h1><?php the_title();?></h1>
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
?>
