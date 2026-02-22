<?php
/**
 * Footer template
 *
 * @package DotaceApp
 */
?>

<footer class="bg-[#101828]">
    aaa
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
        <!-- Site Info -->
        <div class="text-center md:text-left mb-4 md:mb-0">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>