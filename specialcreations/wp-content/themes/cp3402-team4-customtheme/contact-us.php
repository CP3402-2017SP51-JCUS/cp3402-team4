<?php
/**
 * Template Name: Contact Us Template
 */
get_header(); ?>
    <div class="contact-us-content">
        <div class="navigation-container"></div>
        <div class="container">
            <div class="display-title">Contact Us</div>
            <div class="details">

                <?php
                    /* Custom address */
                    $address_text = get_theme_mod( "address_text" );
                    $postal_code_text = get_theme_mod( "postal_code_text" );
                    if ( isset( $address_text ) && ! empty( $address_text ) ) {
                        echo 'Address : ' . $address_text;
                    }
                    if ( (isset( $address_text ) && ! empty( $address_text )) && (isset( $postal_code_text ) && ! empty( $postal_code_text )) ) {
                        echo ', ' . $postal_code_text . '<br />';
                    }

                    /* Custom email */
                    $email_text = get_theme_mod( "email_text" );
                    if ( isset( $email_text ) && ! empty( $email_text ) ) {
                        echo 'Email : ' . $email_text . '<br />';
                    }

                    /* Custom phone */
                    $phone_number_text = get_theme_mod( "phone_number_text" );
                    if ( isset( $phone_number_text ) && ! empty( $phone_number_text ) ) {
                        echo 'Phone Number : ' . $phone_number_text . '<br />';
                    }

                    /* Timings */
                    $timing_day_text1 = get_theme_mod( "timing_day_text1" );
                    $timing_day_text2 = get_theme_mod( "timing_day_text2" );
                    if ( (isset( $timing_day_text1 ) && ! empty( $timing_day_text1 )) ||
                         (isset( $timing_day_text2 ) && ! empty( $timing_day_text2 )) ) {
                        echo 'Opening Hours : <br />';

                        if ( isset( $timing_day_text1 ) && ! empty( $timing_day_text1 ) ) {
                            echo $timing_day_text1 . '<br />';
                        }

                        if ( isset( $timing_day_text2 ) && ! empty( $timing_day_text2 ) ) {
                            echo $timing_day_text2 . '<br />';
                        }
                    }
                    ?>
            </div>
            <div class="map">
                <?php echo do_shortcode( get_theme_mod( "maps_shortcode" ) ); ?>
            </div>
        </div>

<?php get_footer(); ?>