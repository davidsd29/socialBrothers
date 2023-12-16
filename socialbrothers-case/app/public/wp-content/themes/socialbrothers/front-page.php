<?php defined('ABSPATH') || exit('Forbidden');?>
<?php get_header();?>

<?php  
    $argsBlog = [
        'post_type' => 'Blog',
        'orderby' => 'menu_order name',
        'order' => 'DESC',
        'posts_per_page' => 3,
    ];

    $blogPost = new WP_Query($argsBlog);
    
    $argsEvent = [
        'post_type' => 'Event',
        'orderby' => 'menu_order name',
        'order' => 'DESC',
        'posts_per_page' => 3,
    ];

    $eventPost = new WP_Query($argsEvent);
?>

<?php get_template_part('partials/hero'); ?>
<div class="container">
    <section>
        <h1>De nieuwste blogs</h1>
            <div class="row post-row">
                <?php if ($blogPost->have_posts()):  while ($blogPost->have_posts()): $blogPost->the_post(); ?>
                    <?php get_template_part('partials/post'); ?>
                <?php endwhile;endif; ?>
            </div>
    
    </section>
    
    <section>
        <h1>Opkomende events</h1>
            <div class="row post-row">
                <?php if ($eventPost->have_posts()):  while ($eventPost->have_posts()): $eventPost->the_post(); ?>
                    <?php get_template_part('partials/post'); ?>
                <?php endwhile;endif; ?>
            </div>
    </section>
</div>

<?php get_footer(); ?>