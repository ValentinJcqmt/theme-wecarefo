<?php

get_header();

if(is_singular('post')){
	include('single/article.php');
}

get_footer();
