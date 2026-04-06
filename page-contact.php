<?php 
/* Template Name: Contact Page */
get_header(); ?>

<section class="section-padding">
    <div class="container">
        <h1 class="section-title" style="text-align: center; margin-bottom: 40px;">Get In Touch</h1>
        
        <div class="contact-wrapper">
            
            <div class="contact-info">
                <div class="info-card">
                    <h3>Visit Our Studio</h3>
                    <p>123 Skincare Boulevard</p>
                    <p>Suite 400, Botanical District</p>
                    <p>Wellness City, 10101</p>
                </div>
                <div class="info-card">
                    <h3>Call or Email</h3>
                    <p>Phone: +1 555 000 0000</p>
                    <p>Email: hello@project.com</p>
                </div>
                <div class="info-card">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                    <p>Saturday - Sunday: Closed</p>
                </div>
            </div>

            <div class="contact-form-area">
                <h3>Send a Message</h3>
                
                <div class="wp-content-text" style="margin-bottom: 20px;">
                    <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                            the_content(); 
                        endwhile; 
                    endif; 
                    ?>
                </div>

                <form action="#" method="post" class="mojar-contact-form">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Your email" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" placeholder="How can we help you?" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>