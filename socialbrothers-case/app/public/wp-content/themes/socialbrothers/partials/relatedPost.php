<?php
    // if (isset($args['current_category'])) {
        $current_category = $args['current_category'];

        $argsPost = [
            'post_type' => 'Blog',
            'category' => $current_category,
            'category_name' => $current_category, // Get posts from the current category
            'post__not_in' => array(get_the_ID()), // Exclude the current post
            'posts_per_page' => 3, 
        ];

       $relatedPosts = new WP_Query($argsPost);
    // }
?>
 

<section class="related-post">
    <h2>Gerelateerde post</h2>
    

    <div class="row post-row">
        <?php if ($relatedPosts->have_posts()): while ($relatedPosts->have_posts()): $relatedPosts->the_post();?>
             <?php get_template_part('partials/post'); ?>
            <?php endwhile; else: ?>
                <p>Er zijn geen gerelateerde post</p>
        <?php endif;?>
    </div>
</section>