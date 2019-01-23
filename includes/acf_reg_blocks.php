<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        // register blocks
        acf_register_block(array(
            'name'              => 'blog',
            'title'             => __('Blog unitrack'),
            'description'       => __('A custom blog block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'welcome-write-blog',
            'keywords'          => array( 'blog' ),
        ));

        acf_register_block(array(
            'name'              => 'calltoaction',
            'title'             => __('Calltoaction unitrack'),
            'description'       => __('A custom calltoaction block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'editor-contract',
            'keywords'          => array( 'calltoaction' ),
        ));

        acf_register_block(array(
            'name'              => 'gps',
            'title'             => __('Gps unitrack'),
            'description'       => __('A custom satelite block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-page',
            'keywords'          => array( 'gps, satelite' ),
        ));

        acf_register_block(array(
            'name'              => 'mainscreen',
            'title'             => __('Mainscreen unitrack'),
            'description'       => __('A custom mainscreen block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-home',
            'keywords'          => array( 'mainscreen' ),
        ));

        acf_register_block(array(
            'name'              => 'mobile',
            'title'             => __('Mobile unitrack'),
            'description'       => __('A custom mobile block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-status',
            'keywords'          => array( 'mobile' ),
        ));

        acf_register_block(array(
            'name'              => 'partners',
            'title'             => __('Partners unitrack'),
            'description'       => __('A custom technologies block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-site',
            'keywords'          => array( 'partners', 'logo' ),
        ));

        acf_register_block(array(
            'name'              => 'posibility',
            'title'             => __('Posibility unitrack'),
            'description'       => __('A custom posibility block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'editor-help',
            'keywords'          => array( 'posibility' ),
        ));        

        acf_register_block(array(
            'name'              => 'stages',
            'title'             => __('Stages unitrack'),
            'description'       => __('A custom stage block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'slides',
            'keywords'          => array( 'stage' ),
        ));

        acf_register_block(array(
            'name'              => 'statistics',
            'title'             => __('Statistics unitrack'),
            'description'       => __('A custom statistics block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'slides',
            'keywords'          => array( 'statistics' ),
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