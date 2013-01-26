<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package fakedarren
 * @subpackage fakedarren
 * @since 1982
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic|Righteous' rel='stylesheet' type='text/css'/>
	<link href="<?php echo get_template_directory_uri()?>/style.css" rel="stylesheet" />
	<!--[if lt IE 9]>
	<link href="<?php echo get_template_directory_uri()?>/css/ie.css" rel="stylesheet" />
	<![endif]-->

<!-- WP Header -->
<?php wp_head(); ?>
<!-- EOF WP Header -->

</head>
<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
		
		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<hgroup>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</hgroup>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="container">
						<h3 class="menu-toggle"><?php _e( 'Menu', 'fakedarren' ); ?></h3>
						<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'fakedarren' ); ?>"><?php _e( 'Skip to content', 'fakedarren' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</div>
				</nav>
			</div>
		</header>

		<div id="main" class="wrapper">