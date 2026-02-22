<?php
namespace App\Core;

class Assets
{
    public static function init()
    {
        add_action('wp_enqueue_scripts', [self::class, 'enqueue']);
    }

    public static function enqueue()
    {
        wp_enqueue_style(
            'app',
            get_theme_file_uri('dist/css/app.css'),
            [],
            filemtime(get_theme_file_path('dist/css/app.css'))
        );

        wp_enqueue_script(
            'app',
            get_theme_file_uri('dist/js/app.js'),
            [],
            filemtime(get_theme_file_path('dist/js/app.js')),
            true
        );
    }
}