<?php get_header(); ?>
<main class="main" id="main">
            <?php get_template_part( 'partials/section', 'about' ); ?>

            <?php get_template_part( 'partials/section', 'skills' ); ?>

            <?php get_template_part( 'partials/section', 'works' ); ?>

            <?php get_template_part('partials/section' , 'contact'); ?>
</main>

<?php get_footer();
