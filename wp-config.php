<?php
/** WordPress's config file **/
/** http://wordpress.org/   **/

// ** MySQL settings ** //
define('DB_NAME', 'proctorio');               // The name of the database
define('DB_USER', 'superadmin');              // Your MySQL username
define('DB_PASSWORD', 'fxM56D2jrj');          // ...and password
define('DB_HOST', 'mysql.proctorio.com');     // ...and the server MySQL is running on

// Change the prefix if you want to have multiple blogs in a single database.
$table_prefix  = 'wp_pd_';   // example: 'wp_' or 'b2' or 'mylogin_'

// Change this to localize WordPress.  A corresponding MO file for the
// chosen language must be installed to wp-includes/languages.
// For example, install de.mo to wp-includes/languages and set WPLANG to 'de'
// to enable German language support.
define ('WPLANG', '');

/* Stop editing */

$server = DB_HOST;
$loginsql = DB_USER;
$passsql = DB_PASSWORD;
$base = DB_NAME;

// Get everything else
require_once(ABSPATH.'wp-settings.php');
?>
