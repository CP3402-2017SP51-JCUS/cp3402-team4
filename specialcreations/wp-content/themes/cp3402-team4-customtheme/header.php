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
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header class="navigation">
        <div class="container">
            <?php wp_nav_menu( array(
                'container' => 'div',
                'container_class' => 'nav-bar',
            ) ); ?>
            <div class="search">
                <?php
                $search_bar = get_template_directory() . '/woocommerce/product-searchform.php';
                require_once ( $search_bar );
                ?>
            </div>
        </div>
    </header><!-- header end -->
	<div id="content" class="site-content">
