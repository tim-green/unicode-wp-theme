<?php
/**
 * Update Post Title from an ACF field value on post save.
 *
 * Triggers on save, edit or update of published posts.
 * Works in "Quick Edit", but not bulk edit.
 */
function sync_acf_post_title($post_id, $post, $update) {
    
    $acf_title = get_field('staff_name', $post_id); //enter the name of the ACF field here
    if ( $title ) {
        $title = $acf_title;
    } else {
        $title = $post->post_title;
    }
    
    $content = array(
        'ID' => $post_id,
        'post_title' => $title
    );
    remove_action('save_post', 'sync_acf_post_title'); // here to prevent a loop!
    wp_update_post($content);
    
    add_action('save_post', 'sync_acf_post_title');
}
add_action('save_post', 'sync_acf_post_title', 10, 3);