<?php
namespace App\Core;

class Filters
{
    public static function init()
    {
        add_filter('nav_menu_link_attributes', [self::class, 'nav_link_classes'], 10, 4);
    }

    public static function nav_link_classes($atts, $item, $args, $depth)
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
}
