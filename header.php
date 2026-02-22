<?php
/**
 * Theme Header
 *
 * @package DotaceApp
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    /**
     * Required WordPress hook.
     * Loads scripts, styles, meta tags, etc.
     */
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="flex w-full justify-center">
        <div class="container flex min-h-16 items-center bg-red-500">

            <!-- Logo / Site Title -->
            <div id="branding" class="w-1/2">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>

            <nav class="flex w-1/2 justify-end">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_class' => 'flex space-x-4', // Tailwind classes
                    'container' => false,
                    'fallback_cb' => false,
                    'depth' => 1,
                    'link_before' => '',
                    'link_after' => '',
                ]);
                ?>
            </nav>

        </div>
    </header>