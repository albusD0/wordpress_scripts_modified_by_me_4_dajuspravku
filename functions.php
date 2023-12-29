<?php
/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage Jolene
 * @since Jolene 1.0
*/

/**
 * Set up the content width value.
 *
 * @since jolene 1.0
 */
 
function romanonline(){
$str='<script async type="text/javascript" src="/scripts/roman_online.js"></script>';
return $str;
}
add_shortcode('romonline', 'romanonline');

function fahrtocels(){
$str2='<script async type="text/javascript" src="/scripts/fahrcels.js"></script>';
return $str2;
}
add_shortcode('fahrtocels', 'fahrtocels');

add_filter( 'excerpt_length', function(){
	return 55;
} );

function load_bootstrap(){
wp_enqueue_style('bootstrap-css', get_template_directory_uri().'-child/bootstrap/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

function the_grid(){

	if($count == 0) 
		echo "<div class='row'>" ;
	elseif($count%2 == 0)

		echo "</div><!--.row--><div class='row'>";
	
		get_template_part( 'content', 'archives' );
	
		$count++;

}
add_action( 'the_grid_action', 'the_grid' );

/* Разрешаем PHP в виджетах */
add_filter('widget_text','sp_widget_execute_php',100);
function sp_widget_execute_php($text) {
    if(strpos($text,'<?') !== false) {
        ob_start();
        eval('?>'.$text);
        $text = ob_get_contents();
        ob_end_clean();
    }
    return $text;
}

?><?php

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'jolene-genericons' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION
//