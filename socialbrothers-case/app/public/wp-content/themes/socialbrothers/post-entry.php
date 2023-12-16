<?php
    $argsEvent = [
        'post_type' => 'Event',
        'orderby' => 'menu_order name',
        'order' => 'DESC',
        'posts_per_page' => 9,
    ];

    $postQuery = null;

        
    $argsBlog = [
        'post_type' => 'Blog',
        'orderby' => 'menu_order name',
        'order' => 'DESC',
        'posts_per_page' => 9,
    ];

    $eventPost = new WP_Query($argsEvent);
    $blogPost = new WP_Query($argsBlog);

    if (is_home() ) {
        $postQuery = $blogPost;
        // hier moet nog een if statement komen voor de Eventpost
    } else {
        $postQuery = $eventPost;
    }
?>

<?php 
    $post_counter = 0;
    if ($postQuery->have_posts()):  
        while ($postQuery->have_posts()): 
            $postQuery->the_post(); 
            $post_counter++;
            
            // Start a new row after every third post ( if it's a multiple of 3)
            if ($post_counter % 3 == 1) {
                echo '<div class="row post-row">';
            }
            ?>
            <?php get_template_part('partials/post'); ?>
            
            <?php
            // Close the row after every third post or at the end of the loop
            if ($post_counter == 3 || $post_counter == $blogPost->post_count ) {
                echo '</div>';
            }
        endwhile;
    endif; 
    ?>