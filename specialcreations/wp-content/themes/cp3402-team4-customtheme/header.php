<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CP3402-Team4-Custom-Theme
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
    <header class="header">
        <div class="container">
            <div class="title"><a href="new.html">Special Creations</a></div>
            <div class="subtitle">Let's make your own gift</div>

            <?php wp_nav_menu( array(
            'container' => 'div',
            'container_class' => 'navigation',
                ) ); ?>

        </div>
	</header><!-- header end -->

	<div id="content" class="site-content">
