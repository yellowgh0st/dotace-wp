<?php
namespace App\Core;

class Filters
{
    public static function init()
    {
        add_filter('nav_menu_link_attributes', [self::class, 'dotace_nav_link_classes'], 10, 3);
    }

    public static function dotace_nav_link_classes($atts, $item, $args)
    {

        // apply only to primary menu
        if ($args->theme_location === 'primary') {

            $atts['class'] = 'text-gray-700 hover:text-green-600 transition-colors transition-colors duration-200 cursor-pointer';

        }

        return $atts;
    }
}
