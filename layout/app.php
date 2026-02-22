<?php get_header(); ?>

<main class="container">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            get_template_part('pages/content', 'page');
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>