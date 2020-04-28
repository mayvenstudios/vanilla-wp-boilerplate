<?php


/**
 * Customize the classes added to next/prev post links
 */
add_filter('next_posts_link_attributes', function() {
    return 'class="btn btn-load"';
});

add_filter('previous_posts_link_attributes', function() {
    return 'class="btn btn-load"';
});
