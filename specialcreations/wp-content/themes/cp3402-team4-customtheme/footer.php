<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CP3402-Team4-Custom-Theme
 */

?>

            <div class="footer">
                <div class="container">
                    <?php echo get_theme_mod( "footer_text" ) ?>
                </div>
            </div>
        </div>

	</div><!-- #content -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
