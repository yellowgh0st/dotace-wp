<?php
namespace App\Core;

class Filters
{
    public static function init()
    {
        add_filter('nav_menu_link_attributes', [self::class, 'navLinkClasses'], 10, 4);
        add_filter('pre_trash_post', [self::class, 'preventProtectedDeletion'], 10, 2);
        add_filter('pre_delete_post', [self::class, 'preventProtectedDeletion'], 10, 2);
    }

    public static function navLinkClasses($atts, $item, $args, $depth)
    {

        // apply only to primary menu
        if ($args->theme_location === 'primary') {

            $atts['class'] = 'text-gray-700 hover:text-green-600 transition-colors transition-colors duration-200 cursor-pointer';

        }

        // apply only to primary menu
        if ($args->theme_location === 'footer_quick_links' || 'services') {

            $atts['class'] = 'hover:text-green-500 transition-colors cursor-pointer';

        }

        return $atts;
    }

    public static function preventProtectedDeletion($override, \WP_Post $post)
    {
        $protected_slugs = ['theme-settings'];

        if (in_array($post->post_name, $protected_slugs, true)) {
            return new \WP_Error(
                'protected_post',
                __('This page is protected and cannot be deleted.', 'dotace')
            );
        }

        return $override;
    }
}
