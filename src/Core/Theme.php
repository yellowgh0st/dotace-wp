<?php
namespace App\Core;

class Theme
{
    public static function boot()
    {
        Setup::init();
        Assets::init();
    }
}
