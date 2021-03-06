<?php
/**
 * Application settings file.
 *
 * Rename this file to settings.php and remember to change the
 * permissions to read-only once all settings are configured properly.
 * 0444 on a *nix system.
 */

// Used in the title
$settings['sitename'] = 'Velox PHP Framework';

// Override unsecure or secure site url if there are any problems with
// the autodetection. Do not include trailing slash.
// $settings['site_url']['unsecure'] = 'http://localhost/veloxphp';
// $settings['site_url']['secure'] = 'https://localhost/veloxphp';

// Database configuration
$settings['database'] = array(
  'default' => array(
    'driver'  => 'mysql',
    'host'    => 'localhost',
    'user'    => 'root',
    'pass'    => 'root',
    'name'    => 'root',
    'port'    => '3306', // Optional
  ),
);

// Custom application settings
$settings['application'] = array();

// When development is set to false, no error messages or errors
// from other modules will show up. Remember to set this to false
// when running on the production server.
$settings['development'] = true;

// Enabled modules
$settings['modules'] = array();

// The default theme
$settings['theme'] = 'velox';

// A timezone supported by PHP. See
// http://php.net/manual/en/timezones.php
$settings['timezone'] = 'Europe/Stockholm';

// The lang attribute of the html tag.
$settings['language'] = 'en';

// Turn off clean urls.
// $settings['clean_urls'] = false;

// Specify a cron key which can be used to call the cron.php file via
// http. If not configured, the cron.php file can only be called using
// the php cli.
// $settings['cron_key'] = '';
