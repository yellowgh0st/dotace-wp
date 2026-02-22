<?php
/**
 * Header
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

    <header class="
    flex
    mx-auto
    items-center
    bg-[#FEFFFE]
    border-b
    border-gray-200
    min-h-17
    ">
        <div class="flex container mx-auto">
            <?php get_template_part('components/branding'); ?>
            <?php get_template_part('components/nav'); ?>
        </div>
    </header>