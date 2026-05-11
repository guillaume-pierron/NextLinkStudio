<?php
/**
 * NextLink Studio — Theme functions
 */

function nextlinkstudio_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );

    register_nav_menus( [
        'primary'        => 'Menu principal',
        'footer-expertise' => 'Footer — Expertise',
        'footer-agence'    => 'Footer — Agence',
    ] );
}
add_action( 'after_setup_theme', 'nextlinkstudio_setup' );

function nextlinkstudio_enqueue() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800;900&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'nextlinkstudio-theme',
        get_template_directory_uri() . '/assets/css/theme.css',
        [ 'google-fonts' ],
        '1.1.6'
    );
    wp_enqueue_script(
        'nextlinkstudio-app',
        get_template_directory_uri() . '/assets/js/app.js',
        [],
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'nextlinkstudio_enqueue' );

// Remove WordPress block library CSS (not using Gutenberg blocks)
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );
}, 100 );

// Remove global styles inline CSS (WP 5.9+ FSE remnants)
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles' );

// Hide admin bar on frontend — interferes with fixed transparent nav
add_filter( 'show_admin_bar', '__return_false' );

/**
 * Helper — return permalink for a page by slug, with fallback to '#'.
 */
function nls_page_url( string $slug ): string {
    $page = get_page_by_path( $slug );
    return $page ? get_permalink( $page ) : '#';
}

/**
 * Helper — CSS class 'active' when on the given page slug.
 */
function nls_active_class( string $slug ): string {
    return is_page( $slug ) ? ' active' : '';
}

