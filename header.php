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
		<div class="site_description">строительные и другие работы</div>
		<div class="site_description_hint">в Киеве и Киевской области</div>
	</div>
	<div class="header_right">
		<div class="telephone"> +38 (095) 350 92 46</div>
	</div>

	<div class="adaptive_menu" id="adaptive_menu"></div>
</div>
</header>

<main>