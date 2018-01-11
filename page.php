<?php

get_header();

if(is_page('faq')){
	include TEMPLATEPATH . '/page/faq.php';
}
else{
the_post(); ?>
<div class="main page">

</div>
<?php }

get_footer();
