<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peerpositive
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'peerpositive' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'peerpositive' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				<?php dynamic_sidebar('polylang-translate-widget'); ?>

		</nav><!-- #site-navigation -->

		<div class="site-branding">

			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
					<!-- Disabled
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					-->
			<?php
			endif; ?>




			<?php
			if ( is_front_page() && is_home() ) : ?>
				<!-- Original -->
				<!--
				<h1 class="site-title"><a href="<?php // echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php // bloginfo( 'name' ); ?></a></h1>
				-->
				<!-- Image Replacement -->
					<div class="sitelogo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php dynamic_sidebar('sitelogo-widget'); ?>
							</a>
					</div>
			<?php else : ?>
				<!-- Original -->
				<!--
				<p class="site-title"><a href="<?php // echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php // bloginfo( 'name' ); ?></a></p>
				-->
				<!-- Image Replacement -->
					<div class="site-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php dynamic_sidebar('sitelogo-widget'); ?>
							</a>
					</div>
			<?php
			endif;
			?>

			</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
