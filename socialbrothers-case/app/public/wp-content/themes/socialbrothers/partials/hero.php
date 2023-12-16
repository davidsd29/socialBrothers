<?php
$title = get_the_title(); 
$title_words = explode(' ', $title); // Splitting the title into words

// find the midpoint of the array of words (6 words = 3rd word)
$midpoint = round(count($title_words) / 2);

// Joining the words with implode to a single string
$first_line = implode(' ', array_slice($title_words, 0, $midpoint));
$second_line = implode(' ', array_slice($title_words, $midpoint));

?>

<section class="hero container-fluid">
        <div class="row">
            <?php if (is_front_page() ) : ?>
                <div class="col-12 hero__background" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                <div class="hero__content">
                    <h1 class="hero__title">
                        <?php echo $first_line; ?><br>
                        <?php echo $second_line; ?>
                    </h1>
                    
                    <?php the_content(); ?>
                    
                </div>                
                <?php elseif (is_home() ) : ?>
                    <section class="col-12 hero__background overview" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                        <h1 class="hero__title"><?php the_title(); ?></h1>
                    </section>
                
                <?php else : ?>
                    <section class="col-12 hero__background detail" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <?php endif; ?>
        </div>
</section>