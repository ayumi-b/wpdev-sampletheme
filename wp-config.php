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
define('DB_NAME', 'meetup');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'UtY~)f7UNh@k2W!tjp_]nS]5glgp`Gv66A5&Mxdgu-6EE6-U|NrvJUW?GoF[:nmh');
define('SECURE_AUTH_KEY',  't/K1Hc}S:Jv=!cBh#bnjP,,zQ3]q,{g_f6E<L4fs/>vAX%>w7+/-aLxS:eUn1bq)');
define('LOGGED_IN_KEY',    '+5FT$sy%IL,l&P{[~crFDwg}9w;DVQvw6[mK-6@xzt8WDKrz@m/%Uu:)@(b0+g@1');
define('NONCE_KEY',        'o6a@$Br}WhVT/@[6sl%0UA7y+T%mJ6J5GZ4`Zm7 mXk?_rNf,v(9_H&Jzt]6{H{ ');
define('AUTH_SALT',        '|vum^J,`Os]mXURc:%$equ/OL#EKF9;sS6Ta^YwW3ml!YZdYkR2D{?pAGfG*5oR;');
define('SECURE_AUTH_SALT', '>DoLwP}5`/<h;<{OkeK3@+){Y/h[9UMX1/Lu:f=*Z?C>)sQS=MF+9vX@5h19S*L2');
define('LOGGED_IN_SALT',   'NLu8O?bmaa{|^l:s4X=*ze?CPuB:=2NRC)2Gzzx=#dp/~/6n;fM7^G{1qcsr(QOt');
define('NONCE_SALT',       '6^JL-4N|!B=rDHQzxy ]8IC>a{XrfHhlkmczUN=,M<tTM!-M4!U&;Mbv/w9B!@Em');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
