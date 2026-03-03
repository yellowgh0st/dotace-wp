<?php

use App\Controllers\PostsController;

$bannerPosts = PostsController::getByCategory('banner', 1);

?>

<div class="mt-16 bg-linear-to-r from-green-600 to-emerald-600 rounded-2xl p-12 text-center text-white">
    <?php foreach ($bannerPosts as $post): ?>
        <h3 class="text-3xl mb-4">
            <?= $post->title(); ?>
        </h3>
        <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
            <?= trim(strip_tags($post->content())); ?>
        </p>
    <?php endforeach; ?>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <button class="bg-white text-green-600 px-8 py-4 rounded-lg hover:bg-gray-50 transition-colors">
            Naplánovat bezplatnou konzultaci
        </button>
    </div>
</div>