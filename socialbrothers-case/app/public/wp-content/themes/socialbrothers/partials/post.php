<article id="post-<?php the_ID(); ?>" class="col-12 col-md-4">
        <div class="post" itemprop="mainContentOfPage">

                <figure class="post__image">
                    <?php the_post_thumbnail()?>
                    <figcaption class="post__category category"><?php the_category ()?></figcaption>
                </figure>
            <p class="post__title"><?php the_title();?></p>
            <section class="post__text">
                <?php the_content(); ?>
            </section>
            <a href="<?php the_permalink(); ?>" class="post__link" rel="bookmark" id="post-<?php the_ID(); ?>"> Lees meer  -></a> 

        </div>
    </article>