<?php
namespace App\Core;

class Setup
{
    public static function init()
    {
        add_action('after_setup_theme', [self::class, 'configure']);
    }

    public static function configure()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus([
            'primary' => __('Primary Menu', 'dotace-app'),
            'footer_quick_links' => __('Footer Quick Links', 'dotace-app'),
            'services' => __('Services', 'dotace-app'),
        ]);
    }
}
