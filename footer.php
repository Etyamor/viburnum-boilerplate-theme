<footer class="py-4 shadow">
    <div class="container mx-auto px-4 md:px-8">
        <div class="flex items-center justify-between">
            <h1 class="font-bold">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <nav>
                <?php wp_nav_menu([
                    'menu_class' => 'flex gap-x-4',
                ]); ?>
            </nav>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
