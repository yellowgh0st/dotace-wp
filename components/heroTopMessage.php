<?php

use App\Controllers\PostsController;
$heroMessages = PostsController::getByCategory('hero-message', 10);

$heroMessagesAllowedColors = [
    'red',
    'orange',
    'amber',
    'yellow',
    'lime',
    'green',
    'emerald',
    'teal',
    'cyan',
    'sky',
    'blue',
    'indigo',
    'violet',
    'purple',
    'fuchsia',
    'pink',
    'rose',
    'slate',
    'gray',
    'zinc',
    'neutral',
    'stone',
    'taupe',
    'mauve',
    'mist',
    'olive',
];
?>

<?php if (!empty($posts)): ?>
    <div id="heroTopMessage" class="pt-9 bg-[#F3FDF6]">
        <div class="flex container mx-auto gap-7 items-center">
            <?php foreach ($heroMessages as $post): ?>
                <?php $colorName = $post->tags() ? strtolower($post->tags()[0]->name) : ''; ?>
                <?php $color = in_array($colorName, $heroMessagesAllowedColors, true) ? $colorName : '' ?>
                <div class="inline-block
                px-4
                py-2
                bg-green-100
                text-green-700
                rounded-full
                text-sm" style="
                    <?= !empty($color) ? 'background-color: var(--color-' . $color . '-100);' : '' ?>
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