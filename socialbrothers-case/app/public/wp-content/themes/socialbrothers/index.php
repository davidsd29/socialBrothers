<?php defined('ABSPATH') || exit('Forbidden'); ?>

<?php get_header(); ?>

<?php if (is_home() ) : ?>
    <?php get_template_part('partials/hero'); ?>
    <section class="container">
        <?php get_template_part('post-entry'); ?>
    </section>
<?php endif; ?>

 <?php get_footer(); ?>