<?php get_header(); ?>

<section class="hero-skincare">
    <div class="container">
        <span style="text-transform: uppercase; color: #d4a373; letter-spacing: 4px; font-weight: bold; display: block; margin-bottom: 15px;">Dermatologist Approved</span>
        <h1>Organic Solutions <br> For Your Natural Glow</h1>
        <p>Premium skincare routines tailored to your unique skin concerns.</p>
        <a href="#shop-now" class="btn-primary">Shop the Collection</a>
    </div>
</section>

<div style="background: #1a1a1a; color: #fff; overflow: hidden;">
    <?php echo do_shortcode('[stock_alert]'); ?>
</div>

<section class="section-padding" style="background: #fff;">
    <div class="container">
        <h2 class="section-title">Shop by Concern</h2>
        <div class="cat-grid">
            
            <div class="cat-card">
                <span class="dashicons dashicons-rest-api" style="font-size: 40px; color: #d4a373;"></span>
                <h3>Hydration</h3>
                <p>Quench thirsty skin with hyaluronic serums.</p>
                <?php $cat = get_term_by('slug', 'hydration', 'product_cat'); ?>
                <a href="<?php echo $cat ? get_term_link($cat) : '#'; ?>" style="color: #d4a373; text-decoration: none; font-weight: bold; display: block; margin-top: 15px;">View All &rarr;</a>
            </div>

            <div class="cat-card">
                <span class="dashicons dashicons-shield" style="font-size: 40px; color: #d4a373;"></span>
                <h3>Sun Protection</h3>
                <p>Daily mineral SPF for ultimate defense.</p>
                <?php $cat = get_term_by('slug', 'protection', 'product_cat'); ?>
                <a href="<?php echo $cat ? get_term_link($cat) : '#'; ?>" style="color: #d4a373; text-decoration: none; font-weight: bold; display: block; margin-top: 15px;">View All &rarr;</a>
            </div>

            <div class="cat-card">
                <span class="dashicons dashicons-admin-appearance" style="font-size: 40px; color: #d4a373;"></span>
                <h3>Anti-Aging</h3>
                <p>Retinol treatments for timeless resilience.</p>
                <?php $cat = get_term_by('slug', 'anti-aging', 'product_cat'); ?>
                <a href="<?php echo $cat ? get_term_link($cat) : '#'; ?>" style="color: #d4a373; text-decoration: none; font-weight: bold; display: block; margin-top: 15px;">View All &rarr;</a>
            </div>

        </div>
    </div>
</section>

<section id="shop-now" class="section-padding" style="background: #fdf6f0;">
    <div class="container">
        <h2 class="section-title">Skin Bestsellers</h2>
        <?php echo do_shortcode('[featured_products limit="4" columns="4"]'); ?>
        <div style="text-align:center; margin-top:50px;">
            <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn-primary">Browse Full Store</a>
        </div>
    </div>
</section>

<section class="section-padding" style="background: #fff; border-top: 1px solid #eee;">
    <div class="container" style="display: flex; justify-content: space-around; text-align: center; flex-wrap: wrap; gap: 20px;">
        <div><span class="dashicons dashicons-yes-alt" style="color: #d4a373; font-size: 30px;"></span><h4>Cruelty Free</h4></div>
        <div><span class="dashicons dashicons-admin-plugins" style="color: #d4a373; font-size: 30px;"></span><h4>Dermatologist Tested</h4></div>
        <div><span class="dashicons dashicons-awards" style="color: #d4a373; font-size: 30px;"></span><h4>Award Winning</h4></div>
        <div><span class="dashicons dashicons-car" style="color: #d4a373; font-size: 30px;"></span><h4>Local Delivery</h4></div>
    </div>
</section>

<section class="section-padding" style="background: #1a1a1a; color: #fff;">
    <div class="container">
        <h2 class="section-title" style="color: #fff;">Customer Results</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
            <?php 
            $reviews = new WP_Query(array('post_type' => 'reviews', 'posts_per_page' => 2));
            if ($reviews->have_posts()) : while ($reviews->have_posts()) : $reviews->the_post(); ?>
                <div style="background: #2c2c2c; padding: 30px; border-radius: 8px;">
                    <p style="font-style: italic; margin-bottom: 20px;">"<?php echo get_the_excerpt(); ?>"</p>
                    <h5 style="color: #d4a373;">- <?php the_title(); ?></h5>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>