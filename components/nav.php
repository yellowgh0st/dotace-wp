<nav class="flex w-1/2 justify-end items-center space-x-8">
    <?php
    wp_nav_menu([
        'theme_location' => 'primary',
        'menu_class' => 'flex space-x-8',
        'container' => false,
        'fallback_cb' => false,
        'depth' => 1,
        'link_before' => '',
        'link_after' => '',
    ]);
    ?>
    <button class="bg-green-600
        text-white
        px-6
        py-2
        rounded-lg
        hover:bg-green-700
        transition-colors
        cursor-pointer" onclick="window.location.href='#contactForm';">Konzultace</button>
</nav>