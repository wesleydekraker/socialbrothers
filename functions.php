<?php

// Additional classes for the body element
add_filter( 'body_class', function( $classes ) {
    return array_merge( array( 'flex-container', 'horizontal' ), $classes );
} );

// Additional classes for the post elements
add_filter( 'post_class', function( $classes ) {
    return array_merge( array( 'content' ), $classes );
} );

// Define sidebar 1
register_sidebar(array(
    'name' => __('Sidebar', 'socialbrothers'),
    'id' => 'sidebar-1',
    'before_widget' => '<div id="%1$s" class="%2$s content">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
));

// Load stylesheet
function load_stylesheet()
{
    // Enqueue style.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

// Removes the default styling of the admin bar
function remove_admin_bar_styling() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

// Styling for the first word of a title
function style_title($text) {
    $words = explode( " ", $text );

    $first_word = $words[0];
    $words[0] = "";

    $other_words = implode (" ", $words);

    return '<span class="orange">' . $first_word . '</span>' . $other_words;
}

// Custom "excerpt more" text
function custom_excerpt_more( $more ) {
    return sprintf( '... <a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        "Lees verder &raquo;"
    );
}

// Custom excerpt length in number of words
function custom_excerpt_length( $length ) {
    return 30;
}

// Optimized page title for search engines
function seo_optimize_title($title) {
    $title = trim($title);

    if ($title == "") {
        if (get_bloginfo('description') == "") {
            return get_bloginfo('name');
        } else {
            return get_bloginfo('name') . ' | ' . get_bloginfo('description');
        }
    } else {
        return $title . ' | ' . get_bloginfo('name');
    }
}

// Add actions
add_action('wp_enqueue_scripts', 'load_stylesheet');
add_action('get_header', 'remove_admin_bar_styling');
add_filter('excerpt_more', 'custom_excerpt_more');
add_filter( 'excerpt_length', 'custom_excerpt_length' );

