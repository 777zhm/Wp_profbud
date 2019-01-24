<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header">
<div class="box">
	<div class="logo">
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		?> 
		<img class="img img-fluid" src="<?php echo $image[0]; ?>" alt="logotype">
	</div><!--logo-->
	<div class="header_middle">
		<div class="site_description"><?php bloginfo('description'); ?></div>
		<div class="site_description_hint"><?php the_field('site_description_hint', 'theme_settings'); ?></div>
	</div>
	<div class="header_right">
		<div class="telephone"><?php the_field('telephone', 'theme_settings'); ?></div>
	</div>

	<div class="adaptive_menu" id="adaptive_menu"></div>
</div>
</header>

<main id="main" class="site-main" role="main">