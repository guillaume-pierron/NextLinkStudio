<?php
/**
 * NextLink Studio — Theme functions
 */

function nextlinkstudio_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );

    register_nav_menus( [
        'primary'          => 'Menu principal',
        'footer-expertise' => 'Footer Expertise',
        'footer-agence'    => 'Footer Agence',
    ] );
}
add_action( 'after_setup_theme', 'nextlinkstudio_setup' );

function nextlinkstudio_enqueue() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'nextlinkstudio-theme',
        get_template_directory_uri() . '/assets/css/theme.css',
        [ 'google-fonts' ],
        '1.1.7'
    );
    // Polices Playfair Display (Google) + Interstate (Adobe Fonts) — uniquement pour l'étude de cas Les jardins du chêne (identité visuelle)
    if ( is_page_template( 'page-etude-de-cas-les-jardins-du-chene-identite-visuelle.php' ) ) {
        wp_enqueue_style(
            'google-fonts-playfair',
            'https://fonts.googleapis.com/css2?family=Overpass:wght@400;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap',
            [],
            null
        );
        wp_enqueue_style(
            'adobe-fonts-interstate',
            'https://use.typekit.net/sbs0ljq.css',
            [],
            null
        );
    }
    wp_enqueue_script(
        'nextlinkstudio-app',
        get_template_directory_uri() . '/assets/js/app.js',
        [],
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'nextlinkstudio_enqueue' );

add_action( 'wp_head', function() {
    if ( is_front_page() ) {
        echo '<link rel="preload" as="image" href="' . esc_url( get_template_directory_uri() . '/assets/images/header_artisan.webp' ) . '" fetchpriority="high">' . "\n";
    }
}, 1 );

add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );
}, 100 );

remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles' );

add_filter( 'show_admin_bar', '__return_false' );

function nls_page_url( $slug ) {
    $page = get_page_by_path( $slug );
    return $page ? get_permalink( $page ) : '#';
}

function nls_active_class( $slug ) {
    return is_page( $slug ) ? ' active' : '';
}

add_action( 'wp_footer', function() {
    ?>
    <script>
    (function() {
        var style = document.createElement('style');
        style.textContent = '#cmplz-cookiebanner-container { opacity: 0 !important; pointer-events: none; }';
        document.head.appendChild(style);
        setTimeout(function() {
            style.textContent = '';
        }, 4000);
    })();
    </script>
    <?php
} );
