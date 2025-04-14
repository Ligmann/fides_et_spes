<?php
/**
 * Enqueue theme styles and scripts.
 *
 * @package fides-et-spes
 */
function mytheme_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    $css_folder = 'assets/styles/';
    $js_folder  = 'assets/scripts/';

    // Enqueue styles and scripts
    $css_files = array( 'main.css');
    $js_files  = array( 'footer.js', 'main.js' );

    foreach ( $css_files as $css_file ) {
        $css_path = get_theme_file_path( $css_folder . $css_file );
        $css_version = file_exists( $css_path ) ? filemtime( $css_path ) : $theme_version;

        wp_enqueue_style(
            'mytheme-' . basename( $css_file, '.css' ),
            get_theme_file_uri( $css_folder . $css_file ),
            array(),
            $css_version
        );
    }

    foreach ( $js_files as $js_file ) {
        $js_path = get_theme_file_path( $js_folder . $js_file );
        $js_version = file_exists( $js_path ) ? filemtime( $js_path ) : $theme_version;

        wp_enqueue_script(
            'mytheme-' . basename( $js_file, '.js' ),
            get_theme_file_uri( $js_folder . $js_file ),
            array(),
            $js_version,
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_assets' );
