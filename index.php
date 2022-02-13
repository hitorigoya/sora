<?php
get_header();
?>

<main>
    <?php while (have_posts()) : the_post(); ?>
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <div><?php the_time(get_option('date_format')); ?></div>
        <?php the_post_thumbnail('full'); ?>
        <?php the_excerpt(); ?>
    <?php endwhile; ?>

    <?php the_posts_pagination(); ?>
</main>

<?php
get_footer();