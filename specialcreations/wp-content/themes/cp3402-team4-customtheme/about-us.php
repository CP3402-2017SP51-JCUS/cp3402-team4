<?php
/**
 * Template Name: About Us Template
 */
get_header(); ?>
<div class="about-us-content">
    <div class="navigation-container"></div>
    <div class="container">
        <h1 class="entry-title">About Us</h1>
        <div class="details">
            <?php get_the_content() ?>
        </div>
    </div>

<?php get_footer(); ?>
