<?php
/**
 * The front-page.php
 *
 * @package ShopIsle
 */

get_header(); ?>

<div class="slider">
    <div class="navigation-container"></div>
    <div class="container"></div>
</div>
<div class="content">
    <div class="container">
        <div class="section">
            <div class="display-title">New Peroduct</div>
            <div class="item">
                <div class="picture"><picture resource="404.jpg"></picture> </div>
                <div class="product-name">The name of a product</div>
            </div>
            <div class="item">
                <div class="picture"><picture resource="404.jpg"></picture> </div>
                <div class="product-name">The name of a product</div>
            </div>
            <div class="item">
                <div class="picture"><picture resource="404.jpg"></picture> </div>
                <div class="product-name">The name of a product</div>
            </div>
        </div>
        <div class="section">
            <div class="video">
                <div class="display-title">Video</div>
                <iframe width="662" height="506" src="https://www.youtube.com/embed/qNUtoW3pW6k" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>

