<?php
/**
 * The front-page.php
 *
 * @package ShopIsle
 */

get_header(); ?>

<?php
$slider_shortcode = get_theme_mod( "slider_shortcode" );
if ( isset( $slider_shortcode ) && ! empty( $slider_shortcode ) ) {
    echo '<div class="slider">';
    echo do_shortcode( $slider_shortcode );
    echo '</div>';
}
?>
<div class="front-page-content">
    <div class="container">
        <div class="section">


            <!-- Products section -->
            <h2>TOP SELLING GIFTS</h2>
            <?php
            $frontpage_shortcode = get_theme_mod( 'frontpage_products_shortcode' );
            if ( ! isset( $frontpage_shortcode ) && empty( $frontpage_shortcode ) ) :
                $frontpage_shortcode = '[best_selling_products]';
            endif;
                echo '<div class="products_shortcode">';
                echo do_shortcode( '[best_selling_products per_page="8"]' );
                echo '</div>';
            ?>

            <?php
            $products1_shortcode = get_theme_mod( 'products_category_section1' );
            if ( isset( $products1_shortcode ) && ! empty( $products1_shortcode ) ) {
                echo '<h2>GIFTS FOR ' . strtoupper( $products1_shortcode ) . '</h2>';
                echo do_shortcode( '[product_category category="' . $products1_shortcode . '" per_page="4"]' );
            }
            ?>

            <?php
            $products2_shortcode = get_theme_mod( 'products_category_section2' );
            if ( isset( $products2_shortcode ) && ! empty( $products2_shortcode ) ) {
                echo '<h2>GIFTS FOR ' . strtoupper( $products2_shortcode ) . '</h2>';
                echo do_shortcode( '[product_category category="' . $products2_shortcode . '" per_page="4"]' );
            }
            ?>

            <?php
            $products3_shortcode = get_theme_mod( 'products_category_section3' );
            if ( isset( $products3_shortcode ) && ! empty( $products3_shortcode ) ) {
                echo '<h2>GIFTS FOR ' . strtoupper( $products3_shortcode ) . '</h2>';
                echo do_shortcode( '[product_category category="' . $products3_shortcode . '" per_page="4"]' );
            }
            ?>
<!--            --><?php
//            $args = array(
//                'post_type' => 'product',
//                'posts_per_page' => 12,
//                'orderby'        => 'date',
//                'order'          => 'DESC',
//            );
//            $loop = new WP_Query( $args );
//            if ( $loop->have_posts() ) {
//                while ( $loop->have_posts() ) : $loop->the_post();
//                    wc_get_template_part( 'content', 'product' );
//                endwhile;
//            } else {
//                echo __( 'No products found' );
//            }
//            wp_reset_postdata();
//            ?>

        </div>

        <!-- Video section -->
        <div class="section">
            <div class="video">
                <div class="display-title">Video</div>
                <iframe width="662" height="506" src="https://www.youtube.com/embed/qNUtoW3pW6k" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

<?php get_footer(); ?>

