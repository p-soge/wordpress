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
define('DB_PASSWORD', 'ac3r');

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
define('AUTH_KEY',         'F,];@7I(1!p7h,_+_%2UT{r]Z8M=_*zr~X`yF0A1:%O}A8?tNZ2l#P;pwwdskT#M');
define('SECURE_AUTH_KEY',  '/ez5K[%CQ=>W^OpP))Ehyykzl4H$Y|$8!^YXf[J~M]q,;j-M ~u=JnMgtdo`}i9*');
define('LOGGED_IN_KEY',    'XeQUz~skr+;:KpF]?O1PpbVf[0ewSsT!DJvs<CY@X)SHw~nXy9e]b~Q/[aZZ8mNE');
define('NONCE_KEY',        'rC|gg*X@O&a,%qL2fq485@!kEW]Hv^C`/H_]TkUDajNN)ZneSQ^6!cAvX?_Xk*3k');
define('AUTH_SALT',        '9+-JHeJl84xxEFXq4S?ip@6oiyMXMX#TlgS7u0?)No2{I&vE(S?Iunn|5_Q_K%ht');
define('SECURE_AUTH_SALT', 'SYY~r?S--+bZUQ-`5R)!Z#ytdeBMZ94S_M:qUC6^+`B[#kui8o[+Gj+uI:1qYY`g');
define('LOGGED_IN_SALT',   '* N=`Z=Ai:A@[10qg^lp*&i5;[{x|m@#M32IqfXnb:d^^I($~O+zPTT1ix:0hzZ{');
define('NONCE_SALT',       'jR_Tva0zr[wK.@l9^X%)n~WDoRo}6,(b,8eA{w+XG=!uV3B]#mk;1@3qTh B%elv');

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


