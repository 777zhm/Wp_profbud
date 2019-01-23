<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );


add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'main_menu' => 'Main menu'
	) );
});

function template_url( $pass ){
	echo get_template_directory_uri().'/'.$pass;
}

function assets_url( $pass ){
	echo get_template_directory_uri().'/assets/'.$pass;
}

remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );

/*
 * Enqueue theme scripts and styles.
 */
function profbud_scripts() {
	// Styles
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	// Scripts
	wp_dequeue_script('jquery');
	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
	wp_enqueue_script('main_js', get_template_directory_uri()."/assets/js/script.js", array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'profbud_scripts' );

/**
 * Add integrity/crossorigin for CDN theme scripts.
 */
function profbud_script_loader_tag( $tag, $handle ) {
	$scripts_to_load = array(
		array(
			( 'name' )      => 'jquery',
			( 'integrity' ) => 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=',
		)
	);
	$key = array_search( $handle, array_column( $scripts_to_load, 'name' ) );
	if ( $key !== false ) {
		$tag = str_replace( '></script>', ' integrity=\'' . $scripts_to_load[$key]['integrity'] . '\' crossorigin=\'anonymous\'></script>', $tag );
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'profbud_script_loader_tag', 10, 2 );

if( function_exists('acf_add_options_page') ){
	$parent = acf_add_options_page(array(
		'page_title'    => 'Настройки темы',
		'menu_title'    => 'Настройки темы',
		'redirect'      => false,
		'menu_slug'     => 'theme-settings',
		'post_id' => 'theme_settings',
		'capability' => 'edit_posts',
		'position' => 30,
	));
}

include_once 'includes/acf_reg_blocks.php';

?>