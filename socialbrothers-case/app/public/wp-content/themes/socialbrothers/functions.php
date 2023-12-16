<?php defined('ABSPATH') || exit('Forbidden');

// Require theme files
require_once get_template_directory() . "/lib/init.php";

/**
 * Disable Gutenberg block editor
 * 
 * @see https://developer.wordpress.org/reference/hooks/use_block_editor_for_post/
 */
add_filter('use_block_editor_for_post', '__return_false', 10, 0);



// Custom Event post type
function event_post_type()
{
    $labels = array(
        'name' => 'Event',
        'singular_name' => 'Event',
        'menu_name' => 'Event',
        'name_admin_bar' => 'Event',
        'add_new' => 'Add a post',
        'add_new_item' => 'Event post',
        'new_item' => 'Event post',
        'edit_item' => 'Edit Event post',
        'view_item' => 'View Event post',
        'all_items' => 'All Event posts',
        'search_items' => 'Search Event post',
        'parent_item_colon' => 'Parent Event post:',
        'not_found' => 'No Event post found.',
        'not_found_in_trash' => 'No Event post found in trash.',
    );

    $supports = array(
        'title', 
        'editor', 
        'thumbnail',
        'custom-fields',
        'post-formats', 
    );

    $details = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'query_var' => true,
        'rewrite' => array('slug' => 'Event'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 22,
        'show_in_rest' => true,
        'supports' => $supports,
    );

    register_post_type('Event', $details);

}

add_action('init', 'event_post_type');

function scripts_enqueue()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css');
    // wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'scripts_enqueue');