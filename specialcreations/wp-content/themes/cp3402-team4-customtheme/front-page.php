<?php
/**
 * The front-page.php
 *
 * @package ShopIsle
 */

get_header(); ?>
<div class="slider">
    <div class="container"></div>
</div>
<div class="front-page-content">
    <div class="container">
        <div class="section">


            <!-- Products section -->
            <?php
            $frontpage_shortcode = get_theme_mod( 'frontpage_products_shortcode' );
            if ( ! isset( $frontpage_shortcode ) && empty( $frontpage_shortcode ) ) :
                $frontpage_shortcode = '[best_selling_products]';
            endif;
                echo '<div class="products_shortcode">';
                echo do_shortcode( '[best_selling_products]' );
                echo '</div>';
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

