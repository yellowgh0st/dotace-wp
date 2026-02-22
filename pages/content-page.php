<?php
$data = App\Controllers\PageController::data();
?>
<article>
    <h1 class="bg-sky-900">
        <?php echo esc_html($data['title']); ?>
    </h1>
    <div><?php the_content(); ?></div>
</article>