<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <?php the_custom_logo(); ?>
        <a href="<?php echo home_url('/'); ?>" class="site-title">
            <?php bloginfo('name'); ?>
        </a>
        <div class="site-description"><?php bloginfo('description'); ?></div>
    </header>