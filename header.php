<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<title><?php bloginfo('name'); if(!is_front_page()){echo ' | '; wp_title('');} ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#e2cdc2">
	<meta name="theme-color" content="#e2cdc2">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script> -->
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/tether.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script> -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<?php wp_head(); ?>
	<?php if(qtrans_getLanguage() == "en"){ ?>
		<!-- Google analytics en -->
	<?php }
	elseif(qtrans_getLanguage() == "fr"){ ?>
		<!-- Google analytics fr -->
	<?php } ?>
</head>
<body <?php body_class(); ?>>
	<header class="text-black">
		<div class="bg-white desktop-header hidden-md-down text-center fixed-top">
			<div class="container-fluid">
				<div class="row header-nav text-center">
					<div class="header-title pt-2">
						<a href="<?php echo get_home_url(); ?>" class="d-block text-center">
							<?php if(is_front_page()){ ?>
								<h1 class="text-center h1">
									<img class="img-fluid" src="<?php echo get_template_directory_uri().'/img/LOGO-WECAREFORMODELS-V1.png' ?>">
								</h1>
							<?php }
							else{ ?>
								<div class="text-center h1">
									<img class="img-fluid" src="<?php echo get_template_directory_uri().'/img/LOGO-WECAREFORMODELS-V1.png' ?>">
								</div>
							<?php } ?>
						</a>
					</div>
					<div class="lang-switch current-<?php echo qtrans_getLanguage(); ?>">
						<?php
						$pos = strpos($_SERVER['REQUEST_URI'], '/fr/');
						$url = "#";
						if(qtrans_getLanguage() == "fr"){
							$url = substr(home_url(), 0, -3).substr_replace($_SERVER['REQUEST_URI'], "en", $pos+1, 2);
						}
						elseif(qtrans_getLanguage() == "en"){
							$url = home_url()."/fr".$_SERVER['REQUEST_URI'];
						}
						?>
						<a class="switch-to-fr" href="<?php if(qtrans_getLanguage() == "en"){echo $url;}else{echo"#";}?>">FR</a> / <a class="switch-to-en" href="<?php if(qtrans_getLanguage() == "fr"){echo $url;}else{echo"#";}?>">UK</a>
					</div>
				</div>
				<div class="row header-menu pt-1">
					<?php wp_nav_menu(array('menu' => 'Menu header')); ?>
				</div>
			</div>
		</div>

		<nav class="bg-white navbar navbar-toggleable-md hidden-lg-up py-1">
			<div class="row my-auto">
				<button id="openbtn" class="navbar-toggler" type="button">
			    	<div class="burger-icon"></div>
			    	<div class="burger-icon"></div>
			    	<div class="burger-icon"></div>
			  	</button>
			  	<div class="header-title text-center">
					<a href="<?php echo get_home_url(); ?>" class="d-block">
						<?php if(is_front_page()){ ?>
							<h1 class="text-uppercase h1 text-center font-arial">
								<img class="img-fluid" src="<?php echo get_template_directory_uri().'/img/LOGO-WECAREFORMODELS-V1.png' ?>">
							</h1>
						<?php }
						else{ ?>
							<div class="text-uppercase h1 text-center font-arial">
								<img class="img-fluid" src="<?php echo get_template_directory_uri().'/img/LOGO-WECAREFORMODELS-V1.png' ?>">
							</div>
						<?php } ?>
					</a>
				</div>
				<div class="lang-switch current-<?php echo qtrans_getLanguage(); ?>">
					<?php
					$pos = strpos($_SERVER['REQUEST_URI'], '/fr/');
					$url = "#";
					if(qtrans_getLanguage() == "fr"){
						$url = substr(home_url(), 0, -3).substr_replace($_SERVER['REQUEST_URI'], "en", $pos+1, 2);
					}
					elseif(qtrans_getLanguage() == "en"){
						$url = home_url()."/fr".$_SERVER['REQUEST_URI'];
					}
					?>
					<a class="switch-to-fr" href="<?php if(qtrans_getLanguage() == "en"){echo $url;}else{echo"#";}?>">FR</a> / <a class="switch-to-en" href="<?php if(qtrans_getLanguage() == "fr"){echo $url;}else{echo"#";}?>">UK</a>				
				</div>
			</div>
		</nav>
		<div id="mySidenav" class="sidenav bg-light-pink text-black">
			<div id="closebtn">&times;</div>
			<div class="header-menu text-left font-arial font-weight-bold py-1">
				<?php wp_nav_menu(array('menu' => 'Sidemenu mobile')); ?>
			</div>
		</div>
	</header>
