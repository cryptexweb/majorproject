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
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-text"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
            </div>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => false)); ?>
            </nav>
        </div>
    </header>