<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="py-4 shadow">
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
</header>
