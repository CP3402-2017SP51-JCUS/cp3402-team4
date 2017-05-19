<?php
/**
 * CP3402-Team4-Custom-Theme Theme Customizer
 *
 * @package CP3402-Team4-Custom-Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cp3402_team4_customtheme_customize_register( $wp_customize ) {

    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';

    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

}
add_action( 'customize_register', 'cp3402_team4_customtheme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cp3402_team4_customtheme_customize_preview_js() {
	wp_enqueue_script( 'cp3402_team4_customtheme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'cp3402_team4_customtheme_customize_preview_js' );
