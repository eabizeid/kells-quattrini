<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="encabezado">
			<div class="encabezado-interno">
		    	<div class="encabezado-idioma"><a href="#">English</a></div>
		        <a href="/" class="encabezado-logo"></a>
		    </div>
		</div>
		<div class="menu">
		    <div class="menu-interno">
		        <ul>
		            <li><a href="<?php echo get_post_type_archive_link('ficcion'); ?>"><?php echo __('Ficci&oacute;n','kells')?></a></li>
		            <li><a href="<?php echo get_post_type_archive_link('comercial'); ?>"><?php echo __('Comerciales','kells')?></a></li>
		            <li><a href="<?php echo get_post_type_archive_link('video_musical'); ?>"><?php echo __('Videos Musicales','kells')?></a></li>
		            <li><a href="<?php echo get_post_type_archive_link('documental'); ?>"><?php echo __('Documentales','kells')?></a></li>
		            <li><a href="<?php echo get_post_type_archive_link('ficcion'); ?>"><?php echo __('Qui&eacute;n Soy','kells')?></a></li>
		            <li><a href="<?php echo get_post_type_archive_link('ficcion'); ?>"><?php echo __('Prensa','kells')?></a></li>
		            <li><a href="<?php echo get_post_type_archive_link('ficcion'); ?>"><?php echo __('Contacto','kells')?></a></li>
		        </ul>
		    </div>
		</div>
		</header><!-- #masthead -->

		<div id="main" class="site-main">
