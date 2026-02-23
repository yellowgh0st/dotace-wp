<?php
$data = App\Controllers\PageController::data();
?>
<article>
    <h1>
        <?php echo esc_html(get_the_title()); ?>
    </h1>
    <div><?php the_content(); ?></div>
</article>