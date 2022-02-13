<?php
get_header();
?>

<main>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <div><?php the_time(get_option('date_format')); ?></div>
        <?php the_content(); ?>
    </article>

    <?php foreach (get_the_category() as $category) : ?>
        <a href="<?php echo get_category_link($category->term_id); ?>">
            <?php echo $category->name; ?>
        </a>
    <?php endforeach; ?>

    <div><?php next_post_link('« %link'); ?></div>
    <div><?php previous_post_link('%link »'); ?></div>

    <?php
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
    ?>
</main>

<?php
get_footer();
