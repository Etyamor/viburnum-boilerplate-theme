<?php get_header(); ?>

<?php if (have_posts()) { ?>
    <div class="mx-auto my-8 max-w-4xl px-4 prose">
        <?php while (have_posts()) { ?>
            <?php the_post(); ?>
            <div>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        <?php } ?>
    </div>
<?php } ?>

<?php get_footer();
