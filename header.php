<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container header-flex">
            <div class="site-logo">
                <?php if (has_custom_logo()) : the_custom_logo(); else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-text">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>

          <nav class="main-navigation">
    <ul class="nav-menu">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        
        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
        
        <li><a href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a></li>
        
        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
    </ul>
</nav>
        </div>
    </header>
