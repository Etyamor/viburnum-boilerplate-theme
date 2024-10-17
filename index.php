<?php get_header(); ?>

    <div class="mx-auto my-8 max-w-4xl px-4">
        <div class="flex flex-col gap-y-8">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div class="max-w-full prose">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <?php the_excerpt(); ?>
                    </div>
                <?php }
            } ?>
        </div>
    </div>

<?php get_footer();
