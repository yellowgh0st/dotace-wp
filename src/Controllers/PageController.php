<?php
namespace App\Controllers;

class PageController
{
    public static function data()
    {
        return [
            'title' => get_the_title()
        ];
    }
}
