<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thegioididong');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.ym^>ZX@M&~8syule>>wL~^,F-aFO0Q]hT?pfQI9k6j`yARURA#}:75D+{[=%cMP');
define('SECURE_AUTH_KEY',  '4JU%>H1&rOBR)l0g&8.5C*;zy<L]A$<r*yuAB#bLHoU6-8M;~?.VZ;OxZpMNV?#O');
define('LOGGED_IN_KEY',    'W% /jPmop$<mjJ$M3|C#G=r6Ffh,Elr?q[_5UZ|u3(|46v{ZO[]hd)Qg^9`K]v]6');
define('NONCE_KEY',        'q%?p9teg+B3|x<Xf:5n6sy~-a=#*y|@T,b-ob]Kc;WiELQ^vDX<`,PI/m)A*SDlP');
define('AUTH_SALT',        '{TEn 4 (A^q cE}@#3@mz:y*J 7C}t.,wtS-rK1f~;!$JTlL-U0^b/$?/lcvD.N7');
define('SECURE_AUTH_SALT', 'zO9gy1lPBYQ-|?<b;B&M,+#D?@IMJ.py<]JRmvwr1?tQe}:*&Z.;/Bd9L3xzyO a');
define('LOGGED_IN_SALT',   'TaD{nPX9On4 t;N]<&~/%.lVnMSfv2>rle_9O9$lD>e,0zi%;Ta+#a>CC(d=ZV@a');
define('NONCE_SALT',       'lI?(3_=qH=n0YYgROH)VxEskxC.IVtSGcq3X4cjGi|zTKqySB65FFrG5,OXU2oX&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
