      <?php
        $args = [
            'post_type' => 'Event',
            'orderby' => 'menu_order name',
            'order' => 'DESC',
            'posts_per_page' => -1,
        ];

            $eventPost = new WP_Query($args);
            ?>

      <?php if ($eventPost->have_posts()):  while ($eventPost->have_posts()): $eventPost->the_post(); ?>

      <div class=" col-12 col-md-6 col-lg-4 d-flex">
          <a href="<?php the_permalink(); ?>" class="entry-post" rel="bookmark" id="post-<?php the_ID(); ?>"
              <?php post_class(); ?>>
              <p><strong>Case study</strong></p>
              <?php the_post_thumbnail()?>
              <h2> <?php the_title(); ?> </h2>
              <p>View project</p>
              <?php if (is_singular()) {get_template_part('entry-footer');} ?>
          </a>
      </div>

      <?php endwhile;endif; ?>