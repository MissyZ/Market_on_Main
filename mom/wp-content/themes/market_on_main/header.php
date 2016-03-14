<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Market_on_Main
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'market_on_main' ); ?></a>

<header>

<!-- Header Image and logo -->
  <div class="container">
    <img src="#" alt="Market on Main logo">

  </div><!-- container -->

<!-- Navigation -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span>Menu</span>
        </button>
      </div><!-- navbar-header -->

      <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container".  In other words, it overwrites the "container_class".  -->

		<?php

			wp_nav_menu( array(

				'theme_location' 	=> 'primary',
				'container'			=> 'nav',
				'container_class'	=> 'nav navbar-nav navbar-right',
				'menu_class'		=> 'nav navbar-nav navbar-right'	
				));
		?>

    </div><!-- /.container-fluid -->
  </nav>
</header>