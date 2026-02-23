<?php

use App\Controllers\PostsController;
$heroTitlePosts = PostsController::getByCategory('hero-title', 1);

?>

<?php get_template_part('components/heroTopMessage'); ?>

<section id="hero" class="flex pt-8 pb-11 bg-[#F3FDF6] min-h-96 flex-col lg:flex-row">
    <div class="flex container flex-col lg:flex-row mx-auto">
        <div class="w-full">
            <?php foreach ($heroTitlePosts as $post): ?>
                <h1 class="text-5xl
        lg:text-6xl
        text-gray-900
        leading-tight
        mbe-6
        "><?= $post->title(); ?></h1>
                <p class="text-xl
        text-gray-600
        leading-relaxed
        mbe-6">
                    <?= trim(strip_tags($post->content())); ?>
                </p>
            <?php endforeach; ?>

            <div class="space-y-3 mbe-6">
                <div class="flex items-center gap-3">
                    <?php get_template_part('components/tickIcon'); ?>
                    <span class="text-gray-700">Až o <b>70 % nižší náklady na energii</b></span>
                </div>
                <div class="flex items-center gap-3">
                    <?php get_template_part('components/tickIcon'); ?>
                    <span class="text-gray-700">Profesionální instalace a odborná podpora</span>
                </div>

                <div class="flex items-center gap-3">
                    <?php get_template_part('components/tickIcon'); ?>
                    <span class="text-gray-700">Možnost využití <b>státních dotací a financování</b></span>
                </div>
            </div>

            <button class="bg-green-600
        text-white
        px-8
        py-4
        rounded-lg
        hover:bg-green-700
        transition-colors
        flex
        items-center
        justify-center
        gap-2 group
        cursor-pointer">Získat bezplatnou konzultaci
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-1 transition-transform">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <div class="flex sm:pl-0 lg:pl-12 w-full flex-col">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/flagged/photo-1566838634584-c541648798ab?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzb2xhciUyMHBhbmVscyUyMHJvb2YlMjBob21lfGVufDF8fHx8MTc3MTcwMDk5NHww&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                    alt="Solar panels on modern home" class="w-full h-full object-cover aspect-4/3">
            </div>

            <div class="relative">
                <div class="absolute bottom-6 left-6 right-6 bg-white rounded-xl p-6 shadow-xl">
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <div class="text-2xl text-green-600">15k+</div>
                            <div class="text-sm text-gray-600">realizovaných instalací</div>
                        </div>
                        <div>
                            <div class="text-2xl text-green-600">99%</div>
                            <div class="text-sm text-gray-600">spokojenost zákazníků</div>
                        </div>
                        <div>
                            <div class="text-2xl text-green-600">25+ let</div>
                            <div class="text-sm text-gray-600">zkušeností v oboru</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>