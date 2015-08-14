<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Resound Radio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/manifest.json">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/favicon.ico">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/favicons/mstile-144x144.png">
<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri(); ?>/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'resound-radio' ); ?></a>
    <div id="masthead-wrapper">
        <header id="masthead" class="site-header contentwidth aligncenter" role="banner">
            <div id="site-branding">
                <a id="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img id="logo" src="<?php echo esc_url( get_theme_mod( 'resound_radio_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                <a id="title-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                </a>
            </div><!-- .site-branding -->
            <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'resound-radio' ); ?></button>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                <?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'social-menu', 'menu_class' => 'social-navigation', 'fallback_cb' => false ) ); ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
    </div>
    <div id="listen-now" class="contentwidth aligncenter">
        <a data-popup="true" data-popup-options="width=317,height=150" data-popup-title="Resound Radio Stream" target="_blank" href="http://www.cedarville.edu/Media/Resound.aspx">
            <svg width="320" height="80">
                <polygon id="listen-bg" points="0,0 320,0 240,80 0,80" />
                <polygon id="listen-arrow" points="200,24 240,40 200,56" />
                <text id="listen-text" x="20" y="50">Listen Now! </text>    
            </svg>
        </a>
    </div>

	<div id="content" class="site-content contentwidth aligncenter">
