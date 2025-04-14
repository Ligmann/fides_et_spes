<?php
add_action('after_setup_theme', function() {
    $directory = new RecursiveDirectoryIterator(get_template_directory() . '/chunk-functions/');
    $iterator = new RecursiveIteratorIterator($directory);

    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            include_once $file->getPathname();
        }
    }
});
