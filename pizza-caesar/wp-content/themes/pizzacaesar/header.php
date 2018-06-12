<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pizza_Caesar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pizzacaesar' ); ?></a>

<header class="header" role="banner">
	<div class="burgerContainer">
		<div class="bars"></div>
		<div class="bars"></div>
		<div class="bars"></div>
	</div>

	<div class="logo">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo">
	</div>
</header>


<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->

					

<nav class="nav">
	<div class="nav-fixed-logo">
		
	</div>
	<?php
		wp_nav_menu( array(
				'menu_location' 	=> 'primary',
				'container'      	=> 'div',
				'container-class'	=> 'nav-content',
				'menu_class'     	=> 'navbar-nav'
			) );
	?>
</nav> 