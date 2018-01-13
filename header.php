<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<title><?php bloginfo('name'); if(!is_front_page()){echo ' | '; wp_title('');} ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon_wcfm.png">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/tether.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script> -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="text-black">
		<div class="desktop-header hidden-md-down text-center fixed-top">
			<div class="container-fluid">
				<div class="row header-nav text-center">
					<div class="col-12">
						<div class="header-title">
							<a href="<?php echo get_home_url(); ?>" class="d-block text-center">
								<?php if(is_front_page()){ ?>
									<h1 class="text-center h1">
										<img class="img-fluid" src="<?php echo get_template_directory_uri().'/img/LOGO-WECAREFORMODELS-V1.svg' ?>">
									</h1>
								<?php }
								else{ ?>
									<div class="text-center h1">
										<img class="img-fluid" src="<?php echo get_template_directory_uri().'/img/LOGO-WECAREFORMODELS-V1.svg' ?>">
									</div>
								<?php } ?>
							</a>
						</div>
						<div class="lang-switch font-didot current-<?php echo qtrans_getLanguage(); ?>">
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
							<a class="switch-to-fr" href="<?php if(qtrans_getLanguage() == "en"){echo $url;}else{echo"#";}?>">FR</a> / <a class="switch-to-en" href="<?php if(qtrans_getLanguage() == "fr"){echo $url;}else{echo"#";}?>">EN</a>
						</div>
					</div>
				</div>
				<div class="row header-menu">
					<div class="col-3 py-1">
						<div class="text-center" style="display:none;" id="logo-sticky-desktop">
							<img class="img-fluid" src="<?php echo get_template_directory_uri().'/img/LOGO-WECAREFORMODELS-V1.svg' ?>">
						</div>
					</div>
					<div class="col-6 py-2">
						<?php wp_nav_menu(array('menu' => 'Menu header')); ?>
					</div>
					<div class="col-3 py-2">
						<div id="lang-switch-sticky" style="display:none;" class="lang-switch font-didot current-<?php echo qtrans_getLanguage(); ?>">
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
							<a class="switch-to-fr" href="<?php if(qtrans_getLanguage() == "en"){echo $url;}else{echo"#";}?>">FR</a> / <a class="switch-to-en" href="<?php if(qtrans_getLanguage() == "fr"){echo $url;}else{echo"#";}?>">EN</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<nav class="bg-white navbar navbar-toggleable-md hidden-lg-up">
			<div class="row my-auto navbar-top">
				<button id="openbtn" class="navbar-toggler mr-auto" type="button">
			    	<div class="burger-icon"></div>
			    	<div class="burger-icon"></div>
			    	<div class="burger-icon"></div>
			  	</button>
				<div class="lang-switch font-didot current-<?php echo qtrans_getLanguage(); ?>">
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
					<a class="switch-to-fr" href="<?php if(qtrans_getLanguage() == "en"){echo $url;}else{echo"#";}?>">FR</a> / <a class="switch-to-en" href="<?php if(qtrans_getLanguage() == "fr"){echo $url;}else{echo"#";}?>">EN</a>				
				</div>
			</div>
			<div class="row navbar-logo mt-2">
				<div class="header-title text-center">
					<a href="<?php echo get_home_url(); ?>" class="d-block">
						<?php if(is_front_page()){ ?>
							<h1 class="h1 text-center">
								<img class="img-fluid" src="<?php echo get_template_directory_uri().'/img/LOGO-WECAREFORMODELS-V1.svg' ?>">
							</h1>
						<?php }
						else{ ?>
							<div class="h1 text-center">
								<img class="img-fluid" src="<?php echo get_template_directory_uri().'/img/LOGO-WECAREFORMODELS-V1.svg' ?>">
							</div>
						<?php } ?>
					</a>
				</div>
			</div>
		</nav>
		<div id="mySidenav" class="sidenav bg-light-pink text-black">
			<div class="100vh sidenav-container">
				<div id="closebtn">&times;</div>
				<div class="header-menu text-left font-weight-bold py-1">
					<?php wp_nav_menu(array('menu' => 'Sidemenu mobile')); ?>
				</div>
				<div class="footer-sidenav">
					<div class="hashtag text-orange font-didot text-center">#wecareformodels</div>
					<div class="sidenav-footer-menu text-center font-helvetica-lt font-weight-bold text-uppercase text-black py-1">
						<?php wp_nav_menu(array('menu' => 'Footer mobile')); ?>
					</div>
				</div>
			</div>
		</div>
	</header>
