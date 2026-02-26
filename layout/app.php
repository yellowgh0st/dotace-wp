<?php get_header(); ?>

<?php get_template_part('sections/hero'); ?>

<main class="container">
    <?php
    // if (have_posts()):
    //     while (have_posts()):
    //         the_post();
    //         get_template_part('pages/content', 'page');
    //     endwhile;
    // endif;
    ?>
</main>

<?php get_template_part('sections/solutions'); ?>

<?php get_template_part('sections/contact'); ?>

<?php get_footer(); ?>