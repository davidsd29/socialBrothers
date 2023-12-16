<?php get_header(); ?>

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
        <div class="col-12 hero__background" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
    </div>
</section>

<section class="container">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>

     
        <h1 class="hero__title">
            <?php echo $first_line; ?><br>
            <?php echo $second_line; ?>
        </h1>
        

        <?php the_content();?>

         <?php get_template_part('partials/relatedPost', '',  ['current_category' => the_category() ]); ?>
    

    <?php endwhile;endif; ?>
</section>
<!-- </main> -->

<?php get_footer(); ?>