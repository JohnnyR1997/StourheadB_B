<?php

function get_styles(){
	wp_enqueue_style('style',get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'get_styles');
?>

<?php 
register_nav_menus(array(
	'primary' => __ ('Primary Menu'),));
?>