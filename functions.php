<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_theme_support( 'post-thumbnails' );

register_nav_menus(array('primary' => 'Menu'));

/***********************************************************/

show_admin_bar( false );

function wpdocs_set_html_mail_content_type() {
    return 'text/html';
}
add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );


/**********************************************************************************************************************/

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

/**********************************************************************************************************************/

function my_enqueue() {
    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/functions.js' );

    wp_localize_script( 'ajax-script', 'ajax_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );


/*****************************************************************************************************************/
add_action( 'init', 'generate_disable_wp_emojicons' );
function generate_disable_wp_emojicons() 
{
 // all actions related to emojis
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}

/***************************************************************************************************************************/
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page('Social Networks');

}
/***************************************************************************************************************************/
function ryanbenhase_unregister_tags() {
    unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
add_action( 'init', 'ryanbenhase_unregister_tags' );