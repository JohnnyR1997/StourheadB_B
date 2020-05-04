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
define( 'DB_NAME', 'Stourhead_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '9{7qTbhZMY.U4|#TI^Ikeaf!9@U{iePWRi|} yg}5xZpI^(hv($5J.#c <`Y5u(4' );
define( 'SECURE_AUTH_KEY',  'c2W+k7{bvDIj(6Ja!&w=$e>71K{FJpSom!#k-|ZKIE8@5}~4J({F6p=B8.=k}19&' );
define( 'LOGGED_IN_KEY',    'Cz/rhzjl8H.6F^^xFL$vgBe(U>%Uck$I~`9P.2x:PdB?7<xj>_?dF6<ZY6+%WP(c' );
define( 'NONCE_KEY',        'S!H>tD0#3/MaJt9~QWQ=U0ue(h4Qt)CQesXBs5:OA]l#qv0L#Fo:xrol%A; @X~1' );
define( 'AUTH_SALT',        'VBnVS^zFdMe&eG?rkzH[348eRyfVi7ZxOEhQz34ht5X{hEeY<G[Lk.=grEMWAV$=' );
define( 'SECURE_AUTH_SALT', '{JASm]V}#8xX;}tCDM<VfL6Y_D! D;w;-pgMmw*KLP#?U` s^(;+jBH9wHGn/[,_' );
define( 'LOGGED_IN_SALT',   '$LM{Qqlj/~)$),R]SmTFJO;TLpXFd-}RtAJ>{mzCh>8VoJa$POoc1o~ui`AeP3gI' );
define( 'NONCE_SALT',       '[~&Xny*e!M<wcHKR)2Vxa&fHnPowW12SYpXNuv nG`cw:x2OM}G/ynd]@zFztc#[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'stourheadWP_';

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
