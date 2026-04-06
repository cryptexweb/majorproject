<?php 
/* Template Name: About Us Page */
get_header(); ?>

<div class="about-hero">
    <div class="container">
        <h1>Our Skincare Story</h1>
        <p>Science meets nature for your ultimate glow.</p>
    </div>
</div>

<section class="section-padding">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <h2>Our Humble Beginnings</h2>
                <p>Founded on the belief that effective skincare should be accessible and transparent, our journey began in a small botanical lab. We set out to bridge the gap between advanced dermatological science and the raw power of nature.</p>
                
                <p>Today, we continue to innovate, ensuring every product we create is ethically sourced, cruelty-free, and designed to perform for all skin types.</p>

                <div class="wp-custom-content">
                    <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                            the_content(); 
                        endwhile; 
                    endif; 
                    ?>
                </div>
            </div>
            
            <div class="about-image">
                <div class="about-image-box">
                    
                    <div class="image-placeholder-text">Premium Botanical Ingredients</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="values-section">
    <div class="container">
        <div class="values-grid">
            <div class="value-item">
                <h3>Ethically Sourced</h3>
                <p>We partner with local growers worldwide to ensure every ingredient is harvested sustainably.</p>
            </div>
            <div class="value-item">
                <h3>Science Driven</h3>
                <p>Our formulas are tested by experts to ensure safety and maximum efficacy for your skin.</p>
            </div>
            <div class="value-item">
                <h3>Cruelty Free</h3>
                <p>We believe in beauty without harm. None of our products are ever tested on animals.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>