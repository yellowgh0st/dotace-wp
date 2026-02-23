<?php
namespace App\Controllers;

use App\Models\PostModel;

class PostsController
{
    public static function getByCategory(string $slug, int $limit = 10): array
    {
        return PostModel::getPostsByCategory($slug, $limit);
    }
}