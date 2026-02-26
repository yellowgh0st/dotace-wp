<?php

use App\Controllers\PostsController;

$solutionsTitlePosts = PostsController::getByCategory('solutions-title', 1);
$solutionsPosts = PostsController::getByCategory('solutions', 4);

?>

<section id="solutions" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-30">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <?php foreach ($solutionsTitlePosts as $post): ?>
                <h2 class="text-4xl text-gray-900 mb-4">
                    <?= $post->title(); ?>
                </h2>
                <p class="text-xl text-gray-600">
                    <?= trim(strip_tags($post->content())); ?>
                </p>
            <?php endforeach; ?>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <?php foreach ($solutionsPosts as $post): ?>
                <div
                    class="group bg-white rounded-2xl border border-gray-200 overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="relative h-48 overflow-hidden"><img src="<?= esc_url($post->featuredImage('large')); ?>"
                            alt="<?= esc_attr($post->title()); ?>"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute top-4 left-4 w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg">
                            <?= $post->icon(); ?>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl text-gray-900">
                            <?= $post->title(); ?>
                        </h3>
                        <p class="text-gray-600">
                            <?= $post->excerpt(); ?>
                        </p>
                        <button
                            class="text-green-600 hover:text-green-700 font-medium flex items-center gap-2 group/btn pt-2 cursor-pointer"
                            onclick="window.location.href='<?= esc_url($post->url()); ?>';">
                            Zjistit více<span class="group-hover/btn:translate-x-1 transition-transform">→</span></button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>