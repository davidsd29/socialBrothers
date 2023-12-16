<?php defined('ABSPATH') || exit('Forbidden'); ?>

  <header class="container site-header">
      <a href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Social Brothers logo">
      </a>

    <nav class="menu-container" role=" navigation">
      <?php wp_nav_menu(array(
        'theme_location' => 'main-nav',
        'link_before' => '<span>', 
        'link_after' => '</span>'));
      ?>

      <button class="search-toggle">
        <p>zoek</p>
      </button>

      
    </nav>
</header>

<main>