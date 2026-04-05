<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
get_header( 'shop' ); ?>

<div class="container">
    <div style="background:#e3f2fd; padding:10px; margin-bottom:20px; border-radius:5px; text-align:center;">
        <span class="dashicons dashicons-shield"></span> <strong>Mojar Verified:</strong> 100% Authentic Product & Secure Local Payment.
    </div>

    <?php while ( have_posts() ) : the_post(); ?>
        <?php wc_get_template_part( 'content', 'single-product' ); ?>
    <?php endwhile; ?>
</div>

<?php get_footer( 'shop' ); ?>