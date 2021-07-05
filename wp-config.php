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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "dev_buzz_db" );


/** MySQL database username */

define( 'DB_USER', "buzz_user" );


/** MySQL database password */

define( 'DB_PASSWORD', "_@J]q9q+=boi" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


// To remove the p tags from the contact form 7

define( 'WPCF7_AUTOP', false );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         ' yG0N2g)uC?_|<ul0;/PoXtAD6)w(Rui`12zZH^,cR:*NWWv `vi>kwB3ZWHAi*.' );

define( 'SECURE_AUTH_KEY',  ':sQLZG-a(_{kBa`G?hwxNp?jl(]?CVR*IjpDvjrneW?,jnYaBR{jl?*S /ExJ/YL' );

define( 'LOGGED_IN_KEY',    ':^!GYwgc0E?`I{xiq`==-Bl%jj4 y8/+s`!Rx5;b.2Jz(E|Z3sO]!gUK(IlhIxrM' );

define( 'NONCE_KEY',        'c-n|{)!Z@@4Rnuj5kZH:X-gay$)_)o8f[bkJZ!b9=ATD_*PFqtlKCn3]{qBl2@10' );

define( 'AUTH_SALT',        'Q)<D>4VI2]4n[[KO/Uik7~$+:T77]#T$:X_|GO[/!CzXlTfc|Y^(G$5pn6{U>f25' );

define( 'SECURE_AUTH_SALT', 'f~g91aFL3<wC_|t=KSD%:U*frhL8QWPspB|EZ${yL.pD~/)li!HMbhzCn^<PWNQT' );

define( 'LOGGED_IN_SALT',   '~bpG|Z#~w+aDG~|!BkGzl%5(hK,V)nZx[X;b0nO?jZkvvZV;x}1)[wto!C7 DnlA' );

define( 'NONCE_SALT',       'gat$N-D)]?d&`t+Tp}LA?<v3Esf{]|BudgPLr^j!uo|)sk31^zBkyf+tQ$yu -v+' );


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

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

