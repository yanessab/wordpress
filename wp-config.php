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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'oWKG/Ts:-R{*,>;IUBY:&~]:|P!r3W:a(mGHBP>~;FP9w|/6VRQC{)oEpYMOSr(j');
define('SECURE_AUTH_KEY',  '4@uM.1zWmz|2q!,n_%@F-[g?(qv< kS4nG^k=ego04Dbs/o#3ktdF; l$MDyT*%!');
define('LOGGED_IN_KEY',    '=hXEUaF>C8F$i(p&#*$o`>W)DyW:=%QcqN}t~3n~?^iiD]_T35JyUr)C]T .wEUD');
define('NONCE_KEY',        'cYw2{YLohKLmxxcQyrd6&uPn{8K4efSI:1 /;dD<nJ=~4$s_bX&~@M3+v]Rk~yhh');
define('AUTH_SALT',        'nNI.galtgej OT^f+u#PGlb^A@~iFqiAtPTFt@&Lr$gTxW,aPP[[ep}:;7_^4YP,');
define('SECURE_AUTH_SALT', 'X2YwnodPHqRn&mDY!wG_E-a%>+a3^x6^Z&T &l*,qL(|9i&5{[pH}_Lutg8w5ee2');
define('LOGGED_IN_SALT',   '6(Kjl#I;r#RK0&Y`;?Pk.G?HcW4,<K/{q^L{c3E}6{LOgUu_lm_^]#HMFFLR=E23');
define('NONCE_SALT',       'EU<eGV-0=aZ{&dMz1wM!)/yUF+`~B:d^+}rkgKwLW(Q]ZEq1hci]Fxgvwa]*`WL;');

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
