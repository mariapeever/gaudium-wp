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

define( 'DB_NAME', "etherde1_gaudium" );


/** MySQL database username */

define( 'DB_USER', "etherde1_gaudium" );


/** MySQL database password */

define( 'DB_PASSWORD', "bJYm9+Yiomv#" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'j9yvN3}@p ])xKBfOn+~Qp8yqRw6A[$)^(K641z_4#7I-8C[&e+DHa_jZ:]V[c@@' );

define( 'SECURE_AUTH_KEY',  '471bUlw#qHt@]xEB}]H)I}d >;&4jy/NbRUQP|*`id+[qu>=U=sk4/@vjI^PGu>~' );

define( 'LOGGED_IN_KEY',    's55r+j=(YXBwYv%t/Y;NX@)l;|{]$i05/wmH.X?.Rr8<?ok:X9LOaz6hF-~|vc#s' );

define( 'NONCE_KEY',        'W:un>/@}w8:hfe|uSvWQVbMP(OZ` Q7Rc#l5eU-z6zK 73P8;lDi#RXAMOg`@k:6' );

define( 'AUTH_SALT',        ',,45nos}6Iz-oZ1mjDj&2P}|bEF|s(^>{!(537O~*MNwsYIHCa,CO!KTb7SU^lV+' );

define( 'SECURE_AUTH_SALT', 'RrRJ/8q-nFysvjc=lw7[_#x-LwWG}G!<JR/tA^[o,W%$l4Yz]cucAegdd#e[{NZA' );

define( 'LOGGED_IN_SALT',   'I*X>>WDzvM_`Z+/&rFN6jl_8~V?P2|ImyOW|v aVU1*!kXPCAWNl_Qp_K*B(}k=t' );

define( 'NONCE_SALT',       '~Zj)ZI@:{Mlb*Tl&54hijvJ#Lo8#++XSta #9`|6Dx1KNIVcuZ~+OudOre+,.*$*' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';


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

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

