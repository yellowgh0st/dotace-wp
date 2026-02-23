<?php

use App\Controllers\PostsController;
$heroMessages = PostsController::getByCategory('hero-message', 10);

$heroMessagesAllowedColors = [
    'red' => 'bg-red-100',
    'orange' => 'bg-orange-100',
    'amber' => 'bg-amber-100',
    'yellow' => 'bg-yellow-100',
    'lime' => 'bg-lime-100',
    'green' => 'bg-green-100',
    'emerald' => 'bg-emerald-100',
    'teal' => 'bg-teal-100',
    'cyan' => 'bg-cyan-100',
    'sky' => 'bg-sky-100',
    'blue' => 'bg-blue-100',
    'indigo' => 'bg-indigo-100',
    'violet' => 'bg-violet-100',
    'purple' => 'bg-purple-100',
    'fuchsia' => 'bg-fuchsia-100',
    'pink' => 'bg-pink-100',
    'rose' => 'bg-rose-100',
    'slate' => 'bg-slate-100',
    'gray' => 'bg-gray-100',
    'zinc' => 'bg-zinc-100',
    'neutral' => 'bg-neutral-100',
    'stone' => 'bg-stone-100',
    'taupe' => 'bg-taupe-100',
    'mauve' => 'bg-mauve-100',
    'mist' => 'bg-mist-100',
    'olive' => 'bg-olive-100',
];
?>

<?php if (!empty($posts)): ?>
    <div id="heroTopMessage" class="pt-9 bg-[#F3FDF6]">
        <div class="flex container mx-auto gap-7 items-center">
            <?php foreach ($heroMessages as $post): ?>
                <?php $colorName = strtolower($post->color() ?? ''); ?>
                <?php $colorClass = $heroMessagesAllowedColors[$colorName] ?? 'bg-green-100'; ?>
                <div class="inline-block
                px-4
                py-2
                text-green-700
                rounded-full
                text-sm
                <?= esc_attr($colorClass); ?>
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