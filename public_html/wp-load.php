<?php
/**
 * Simplified loader for WordPress configuration.
 *
 * This placeholder attempts to load wp-config.php so that
 * wp-blog-header.php can execute without fatal errors. It does
 * not include the full WordPress bootstrap.
 */

if (file_exists(__DIR__ . '/wp-config.php')) {
    require_once __DIR__ . '/wp-config.php';
} elseif (file_exists(dirname(__DIR__) . '/wp-config.php')) {
    require_once dirname(__DIR__) . '/wp-config.php';
} else {
    echo 'wp-config.php not found.';
    exit(1);
}
