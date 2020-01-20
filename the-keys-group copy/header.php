<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
 
$logo =  get_field('header_logo', 99);
$header_phone = get_field('header_phone_icon_link', 99)['url'];
$header_message = get_field('header_message_icon_link', 99)['url'];?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>The Keys Group</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
		<link rel="stylesheet" href="style.css" />
		<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>> 
		<?php
		wp_body_open();
		?>
		<div class="container">
	    <div class="top-border"></div>
        <nav class="navbar is-transparent">
          <div class="navbar-brand">
            <a class="navbar-item" href="/">
             <img src="<?php echo $logo['url']; ?>" />          
            </a>
<!--
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
              <span></span>
              <span></span>
              <span></span>
            </div>
-->
          </div>
          <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-end">
              <div class="navbar-item">
                <div class="field is-grouped">
                  <a class="icon" href="/">
                    <i class="fas fa-home"></i>
                  </a>
                  <a class="icon" href="tel:<?php echo esc_url( $header_phone ); ?>">
                    <i class="fas fa-phone"></i>
                  </a>
                  <a class="icon" href="mailto:<?php echo esc_url( $header_message ); ?>">
                    <i class="fas fa-envelope"></i>
                  </a>
                  <a class="icon" href="/">
                    @
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <div class="is-flex circles is-hidden-mobile">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </div>
	    </div>
		<?php
		// Output the menu modal.
