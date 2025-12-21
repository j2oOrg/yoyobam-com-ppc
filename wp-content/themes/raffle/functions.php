<?php
/**
 * yoyobam theme setup and assets.
 */

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    register_nav_menus([
        'primary' => __('Primary Menu', 'yoyobam'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'yoyobam-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Playfair+Display:wght@600;700&family=Manrope:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    if (is_front_page()) {
        wp_enqueue_style(
            'yoyobam-home-fonts',
            'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Playfair+Display:wght@600;700&family=Manrope:wght@400;500;600;700;800&display=swap',
            [],
            null
        );
    }

    wp_enqueue_style(
        'yoyobam-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
        [],
        '6.5.2'
    );

    wp_enqueue_style(
        'yoyobam-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        [],
        '5.3.3'
    );

    wp_enqueue_style(
        'yoyobam-site',
        get_theme_file_uri('/assets/css/site.css'),
        ['yoyobam-bootstrap'],
        $theme_version
    );

    if (is_front_page()) {
        wp_enqueue_style(
            'yoyobam-home',
            get_theme_file_uri('/assets/css/front-page.css'),
            ['yoyobam-site'],
            $theme_version
        );
    }

    wp_enqueue_script(
        'yoyobam-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.3',
        true
    );

    wp_enqueue_script(
        'yoyobam-main',
        get_theme_file_uri('/assets/js/main.js'),
        [],
        $theme_version,
        true
    );
});

/**
 * Inline critical CSS as a fallback in case external loading is blocked.
 */
add_action('wp_enqueue_scripts', function () {
    $site_css_path = get_theme_file_path('/assets/css/site.css');
    if (file_exists($site_css_path)) {
        $site_css = file_get_contents($site_css_path);
        if ($site_css) {
            wp_add_inline_style('yoyobam-site', $site_css);
        }
    }

    if (is_front_page()) {
        $home_css_path = get_theme_file_path('/assets/css/front-page.css');
        if (file_exists($home_css_path)) {
            $home_css = file_get_contents($home_css_path);
            if ($home_css) {
                wp_add_inline_style('yoyobam-home', $home_css);
            }
        }
    }
}, 20);

add_filter('body_class', function ($classes) {
    $classes[] = 'nova-shell-p7q4';
    return $classes;
});
