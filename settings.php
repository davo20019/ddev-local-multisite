<?php

/**
 * Keep this at the end of the file to ensure overrides
 */
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}

// Automatically generated include for settings managed by ddev.
$ddev_settings = dirname(__FILE__) . '/settings.ddev.php';
if (getenv('IS_DDEV_PROJECT') == 'true' && is_readable($ddev_settings)) {
  require $ddev_settings;
}

#$config_directories['sync'] = $app_root . '/../config/' . basename($site_path);
$settings['config_sync_directory'] = $app_root . '/../config/' . basename($site_path);
