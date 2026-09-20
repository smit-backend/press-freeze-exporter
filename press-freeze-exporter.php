<?php
/**
 * Plugin Name:       StaticFreeze: Automated Static Site Exporter
 * Plugin URI:        https://github.com/smit-backend/press-freeze-exporter
 * Description:       Parses WordPress core loops to export compiled, lightning-fast static HTML sites directly to server disks or CDNs.
 * Version:           1.0.0
 * Author:            smit-backend
 * Author URI:        https://github.com/smit-backend
 * License:           MIT
 * Text Domain:       press-freeze-exporter
 */

if (!defined('ABSPATH')) {
    exit;
}

final class StaticExporter
{
    public static function boot(): void
    {
        // WordPress hooks bootstrapping
    }
}

add_action('plugins_loaded', ['StaticExporter', 'boot']);
