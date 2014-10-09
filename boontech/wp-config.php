<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'boontech_wp58');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'NNQ8B|&ho+u`<Nl5c^r)uvNYes/ $KvS6sIaf.2#s)8_f*$}gY4S(5]Nr(*:2c=o');
define('SECURE_AUTH_KEY',  '( a4XgR@Dt<Ci;<(d/]Tsv{m>-,u5SF#_*iA9C>v2L5UsTi@`Oz0Ag@KLm~C)g.2');
define('LOGGED_IN_KEY',    'wRiXSjAU}[`2WXa/~(]o),Wq4j7~dy>Bj(Az{/C#Y;1Z<z(MWtG[;fAWogS~Wq=/');
define('NONCE_KEY',        'LdM]*&E.(Hp}3}=h383/q} 0, N-X,Ms3JUYw@fN0IXc;P]mG/r:uYaXRVfI<Sl%');
define('AUTH_SALT',        'CmRNb(p3UrH#n]JFmx6_@zNr~c(B<<)5.W5<L.,gHWhU2]u`%MEH^UQj48w]v#r9');
define('SECURE_AUTH_SALT', 'LH><H,UaSuH.Nh=@fc6BzK eO1!?1SJPD/~Uq#91&tFlou;.bA(aa5M DNsKsJfq');
define('LOGGED_IN_SALT',   's?B,Nvr,)sAIp/g{IRo&,A.gNm|;CJ!r]Cx&iSNop`7mO`jqf8`>g<;bHXD-g68&');
define('NONCE_SALT',       '{sd[hg/VV&pt|,V@2O`]dO/xjOm].HrsWcL`54W#hTxhg,tu}#IP||#&[v@}o&~G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
