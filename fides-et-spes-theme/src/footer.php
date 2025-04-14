<?php
/**
 * Wrapper footer loader
 */
$custom_footer = get_template_directory() . '/views-components/footer-chunk.php';

if ( file_exists( $custom_footer ) ) {
    include $custom_footer;
    wp_footer();
};
