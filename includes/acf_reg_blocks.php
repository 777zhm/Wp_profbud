<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		// register blocks
		acf_register_block(array(
			'name'              => 'calltoaction',
			'title'             => __('Call to action profbud'),
			'description'       => __('A custom call to action block.'),
			'render_callback'   => 'custom_block_render_callback',
			'category'          => 'formatting',
			'icon'              => 'editor-contract',
			'keywords'          => array( 'calltoaction' ),
		));

		acf_register_block(array(
			'name'              => 'contactus',
			'title'             => __('Contact us profbud'),
			'description'       => __('A custom contact us block.'),
			'render_callback'   => 'custom_block_render_callback',
			'category'          => 'formatting',
			'icon'              => 'admin-users',
			'keywords'          => array( 'contactus' ),
		));

		acf_register_block(array(
			'name'              => 'mainscreen',
			'title'             => __('Main screen profbud'),
			'description'       => __('A custom main screen block.'),
			'render_callback'   => 'custom_block_render_callback',
			'category'          => 'formatting',
			'icon'              => 'admin-home',
			'keywords'          => array( 'mainscreen' ),
		));

		acf_register_block(array(
			'name'              => 'numbers',
			'title'             => __('Numbers profbud'),
			'description'       => __('A custom numbers block.'),
			'render_callback'   => 'custom_block_render_callback',
			'category'          => 'formatting',
			'icon'              => 'format-status',
			'keywords'          => array( 'numbers' ),
		));

		acf_register_block(array(
			'name'              => 'packages',
			'title'             => __('Packages profbud'),
			'description'       => __('A custom packages block.'),
			'render_callback'   => 'custom_block_render_callback',
			'category'          => 'formatting',
			'icon'              => 'admin-page',
			'keywords'          => array( 'packages' ),
		));

		acf_register_block(array(
			'name'              => 'portfolio',
			'title'             => __('Portfolio profbud'),
			'description'       => __('A custom portfolio block.'),
			'render_callback'   => 'custom_block_render_callback',
			'category'          => 'formatting',
			'icon'              => 'images-alt',
			'keywords'          => array( 'portfolio' ),
		));

		acf_register_block(array(
			'name'              => 'services',
			'title'             => __('Services profbud'),
			'description'       => __('A custom services block.'),
			'render_callback'   => 'custom_block_render_callback',
			'category'          => 'formatting',
			'icon'              => 'editor-help',
			'keywords'          => array( 'services' ),
		));

		acf_register_block(array(
			'name'              => 'steps',
			'title'             => __('Steps profbud'),
			'description'       => __('A custom steps block.'),
			'render_callback'   => 'custom_block_render_callback',
			'category'          => 'formatting',
			'icon'              => 'admin-page',
			'keywords'          => array( 'steps' ),
		));     
		
	}
}

function custom_block_render_callback( $block ) {
	// Remove "acf/" from name so we can use a path-friendly slug
	$slug = str_replace( 'acf/', '', $block['name'] );
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( STYLESHEETPATH . "/templates/block-{$slug}.php" ) ) {
		include( STYLESHEETPATH . "/templates/block-{$slug}.php" );
	}
}