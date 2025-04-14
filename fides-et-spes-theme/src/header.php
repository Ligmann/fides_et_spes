<?php
/**
 * Wrapper header loader
 */
$custom_header = get_template_directory() . '/views-components/header-chunk.php';

if ( file_exists( $custom_header ) ) {
    include $custom_header;
};
