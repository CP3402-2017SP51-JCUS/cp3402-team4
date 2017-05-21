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

    /* Custom customizations*/
    $wp_customize->add_panel( 'theme_settings', array(
        'priority' => 1,
        'title'    => esc_html__( 'Custom Theme Settings', 'customtheme' ),
    ) );
}
add_action( 'customize_register', 'cp3402_team4_customtheme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cp3402_team4_customtheme_customize_preview_js() {
	wp_enqueue_script( 'cp3402_team4_customtheme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'cp3402_team4_customtheme_customize_preview_js' );

/**
 * Slider customizer
 */
function slider_customize_register( $wp_customize ) {

    /* Slider Section */
    $wp_customize->add_section( 'slider_section', array(
        'default'     => false,
        'title'       => __( 'Frontpage Slider', 'cp3402-team4-customtheme' ),
    ) );

    /* Slider */
    $wp_customize->add_setting( 'slider_shortcode', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'slider_shortcode', array(
            'label'    => __( 'Main Title', 'cp3402-team4-customtheme' ),
            'section'  => 'slider_section',
            "settings" => "slider_shortcode",
        )
    ) );

    $wp_customize->get_section( 'slider_section' )->panel = 'theme_settings';
}
add_action( 'customize_register', 'slider_customize_register' );

/**
 * Title customizer
 */
function title_customize_register( $wp_customize ) {

    /* Title Section */
    $wp_customize->add_section( 'title_section', array(
        'default'     => false,
        'title'       => __( 'Title Section', 'cp3402-team4-customtheme' ),
    ) );

    /* Main Title */
    $wp_customize->add_setting( 'main_title_text', array(
        'transport'         => 'postMessage',
        'default'           => __( 'Title', 'cp3402-team4-customtheme' )
    ) );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'main_title_text', array(
        'label'    => __( 'Main Title', 'cp3402-team4-customtheme' ),
        'section'  => 'title_section',
        "settings" => "main_title_text",
        )
    ) );

    /* Subtitle*/
    $wp_customize->add_setting( 'sub_title_text', array(
        'transport'         => 'postMessage',
        'default'           => __( 'Subtitle', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'sub_title_text', array(
            'label'    => __( 'Subtitle', 'cp3402-team4-customtheme' ),
            'section'  => 'title_section',
            "settings" => "sub_title_text",
        )
    ) );

    $wp_customize->get_section( 'title_section' )->panel = 'theme_settings';
}
add_action( 'customize_register', 'title_customize_register' );

/**
 * Products section customizer
 */
function products_customize_register( $wp_customize ) {

    /* Products Section */
    $wp_customize->add_section( 'products_section', array(
        'default'     => false,
        'title'       => __( 'Products Section', 'cp3402-team4-customtheme' ),
    ) );

    /* Category 1 */
    $wp_customize->add_setting( 'products_category_section1', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'products_category_section1', array(
            'label'    => __( 'Products Category 1', 'cp3402-team4-customtheme' ),
            'section'  => 'products_section',
            "settings" => "products_category_section1",
        )
    ) );

    /* Category 2 */
    $wp_customize->add_setting( 'products_category_section2', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'products_category_section2', array(
            'label'    => __( 'Products Category 2', 'cp3402-team4-customtheme' ),
            'section'  => 'products_section',
            "settings" => "products_category_section2",
        )
    ) );

    /* Category 3 */
    $wp_customize->add_setting( 'products_category_section3', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'products_category_section3', array(
            'label'    => __( 'Products Category 3', 'cp3402-team4-customtheme' ),
            'section'  => 'products_section',
            "settings" => "products_category_section3",
        )
    ) );

    $wp_customize->get_section( 'products_section' )->panel = 'theme_settings';
}
add_action( 'customize_register', 'products_customize_register' );

/**
 * Video section
 */
function video_customize_register( $wp_customize ) {

    /* Video Section */
    $wp_customize->add_section( 'video_section', array(
        'default'     => false,
        'title'       => __( 'Video Section', 'cp3402-team4-customtheme' ),
    ) );

    /* Main Title */
    $wp_customize->add_setting( 'video_link', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'video_link', array(
            'label'    => __( 'Video Link', 'cp3402-team4-customtheme' ),
            'section'  => 'video_section',
            "settings" => "video_link",
        )
    ) );

    $wp_customize->get_section( 'video_section' )->panel = 'theme_settings';
}
add_action( 'customize_register', 'video_customize_register' );

/**
 * About us customizer
 */
function aboutus_customize_register( $wp_customize ) {

    /* About Section */
    $wp_customize->add_section( 'aboutus_section', array(
        'default'     => false,
        'title'       => __( 'About Us Page', 'cp3402-team4-customtheme' ),
    ) );

    $wp_customize->add_setting( 'aboutus_text', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'aboutus_text', array(
            'label'    => __( 'About Us Text', 'cp3402-team4-customtheme' ),
            'section'  => 'aboutus_section',
            "settings" => "aboutus_text",
        )
    ) );

    $wp_customize->get_section( 'aboutus_section' )->panel = 'theme_settings';
}
add_action( 'customize_register', 'aboutus_customize_register' );

/**
 * Contact us customizer
 */
function contactus_customize_register( $wp_customize ) {

    /* Contact Section */
    $wp_customize->add_section( 'contactus_section', array(
        'default'     => false,
        'title'       => __( 'Contact Us Page', 'cp3402-team4-customtheme' ),
    ) );

    /* Address */
    $wp_customize->add_setting( 'address_text', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'address_text', array(
            'label'    => __( 'Address', 'cp3402-team4-customtheme' ),
            'section'  => 'contactus_section',
            "settings" => "address_text",
        )
    ) );

    /* Postal Code */
    $wp_customize->add_setting( 'postal_code_text', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'postal_code_text', array(
            'label'    => __( 'Postal Code', 'cp3402-team4-customtheme' ),
            'section'  => 'contactus_section',
            "settings" => "postal_code_text",
        )
    ) );

    /* Email */
    $wp_customize->add_setting( 'email_text', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'email_text', array(
            'label'    => __( 'Email', 'cp3402-team4-customtheme' ),
            'section'  => 'contactus_section',
            "settings" => "email_text",
        )
    ) );

    /* Phone number */
    $wp_customize->add_setting( 'phone_number_text', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'phone_number_text', array(
            'label'    => __( 'Phone Number', 'cp3402-team4-customtheme' ),
            'section'  => 'contactus_section',
            "settings" => "phone_number_text",
        )
    ) );

    /* Timing 1 */
    $wp_customize->add_setting( 'timing_day_text1', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'time_day_text1', array(
            'label'    => __( 'Opening hours 1', 'cp3402-team4-customtheme' ),
            'section'  => 'contactus_section',
            "settings" => "timing_day_text1",
        )
    ) );

    /* Timing 2 */
    $wp_customize->add_setting( 'timing_day_text2', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'timing_day_text2', array(
            'label'    => __( 'Opening hours 2', 'cp3402-team4-customtheme' ),
            'section'  => 'contactus_section',
            "settings" => "timing_day_text2",
        )
    ) );

    /* Maps */
    $wp_customize->add_setting( 'maps_shortcode', array(
        'transport'         => 'postMessage',
        'default'           => __( '', 'cp3402-team4-customtheme' )
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'maps_shortcode', array(
            'label'    => __( 'Maps Shortcode', 'cp3402-team4-customtheme' ),
            'section'  => 'contactus_section',
            "settings" => "maps_shortcode",
        )
    ) );

    $wp_customize->get_section( 'contactus_section' )->panel = 'theme_settings';
}
add_action( 'customize_register', 'contactus_customize_register' );

/**
 * Footer customizer
 */
function footer_customize_register( $wp_customize ) {

    /* About Section */
    $wp_customize->add_section( 'footer_section', array(
        'default'     => false,
        'title'       => __( 'Footer section', 'cp3402-team4-customtheme' ),
    ) );

    $wp_customize->add_setting( 'footer_text', array(
        'transport'         => 'postMessage',
        'default'           => __( 'Footer', 'cp3402-team4-customtheme' )
    ) );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'footer_text', array(
            'label'    => __( 'Footer Text', 'cp3402-team4-customtheme' ),
            'section'  => 'footer_section',
            "settings" => "footer_text",
        )
    ) );

    $wp_customize->get_section( 'footer_section' )->panel = 'theme_settings';
}
add_action( 'customize_register', 'footer_customize_register' );

//function customizer_live_preview()
//{
//    wp_enqueue_script("customtheme_customizer", get_template_directory_uri() . "/js/customizer.js", array("jquery", "customize-preview"), '',  true);
//}
//
//add_action("customize_preview_init", "customizer_live_preview");