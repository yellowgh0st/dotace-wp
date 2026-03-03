<?php

use App\Controllers\PostsController;

$benefitsTitlePosts = PostsController::getByCategory('benefits-title', 1);
$benefitsPosts = PostsController::getByCategory('benefits', 6);

?>

<section id="benefits" class="py-20 bg-linear-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <?php foreach ($benefitsTitlePosts as $post): ?>
                <h2 class="text-4xl text-gray-900 mb-4">
                    <?= $post->title(); ?>
                </h2>
                <p class="text-xl text-gray-600">
                    <?= trim(strip_tags($post->content())); ?>
                </p>
            <?php endforeach; ?>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($benefitsPosts as $post): ?>
                <div
                    class="bg-white p-8 rounded-xl border border-gray-200 hover:border-green-600 hover:shadow-lg transition-all duration-300 group">
                    <div
                        class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-5 group-hover:bg-green-600 transition-colors duration-300">
                        <?= $post->icon(); ?>
                    </div>
                    <h3 class="text-xl text-gray-900 mb-3">
                        <?= $post->title(); ?>
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <?= trim(strip_tags($post->content())); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
        <?php get_template_part('components/banner'); ?>
    </div>
</section>