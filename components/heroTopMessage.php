<?php

use App\Controllers\PostsController;
$heroMessages = PostsController::getByCategory('hero-message', 10);

?>

<?php if (!empty($posts)): ?>
    <div id="heroTopMessage" class="pt-9 bg-[#F3FDF6]">
        <div class="flex container mx-auto gap-7 items-center">
            <?php foreach ($heroMessages as $post): ?>
                <div class="inline-block
                px-4
                py-2
                text-green-700
                rounded-full
                text-sm
                <?= esc_attr($post->backgroundColorClass()); ?>
                ">
                    <?= $post->title(); ?>
                    <?php if ($post->content() != ''): ?>
                        <div class="text-gray-600"><?= $post->content(); ?></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>