<?php

/* Path to the WordPress codebase you'd like to test. Add a forward slash in the end. */
define( 'ABSPATH', dirname( __FILE__ ) . '/src/' );

/*
 * Path to the theme to test with.
 *
 * The 'default' theme is symlinked from test/phpunit/data/themedir1/default into
 * the themes directory of the WordPress installation defined above.
 */
define( 'WP_DEFAULT_THEME', 'default' );

/*
 * Test with multisite enabled.
 * Alternatively, use the tests/phpunit/multisite.xml configuration file.
 */
// define( 'WP_TESTS_MULTISITE', true );

/*
 * Force known bugs to be run.
 * Tests with an associated Trac ticket that is still open are normally skipped.
 */
// define( 'WP_TESTS_FORCE_KNOWN_BUGS', true );

// Test with WordPress debug mode (default).
define( 'WP_DEBUG', true );

// ** Database settings ** //

/*
 * This configuration file will be used by the copy of WordPress being tested.
 * wordpress/wp-config.php will be ignored.
 *
 * WARNING WARNING WARNING!
 * These tests will DROP ALL TABLES in the database with the prefix named below.
 * DO NOT use a production database or one that is shared with something else.
 */


define( 'DB_NAME', 'dbo' );
define( 'DB_USER', 'dbo' );
define( 'DB_PASSWORD', 'db./2024' );
define( 'DB_HOST', 'https://vm.ui-app.org/phpmyadmin/index.php' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
define('AUTH_KEY',         '++|)i&$UEG=8E]VA!# Go.:aByqm}6yVa9*_Z.2$@I}^$j/OpjHedU~)o@JSfubg');
define('SECURE_AUTH_KEY',  'I}D;SwynDe61u?#?3 hmtIkV(@ASz9z/%Z80>J1oY-`=G&Xw|K}BCH|T6+|a-`4D');
define('LOGGED_IN_KEY',    'd3SpO4-(SxOW[Sl+rbnurp16Hk__qV}zw.L{*McD8WSl%|D*@D{%LL: * %GT;sz');
define('NONCE_KEY',        'bMishf<I.jak-Foe4X{,_4hU@?UI-]D_9H1i0V U G2(?=U(j;#no& k/WO gx/3');
define('AUTH_SALT',        ',N]|p9UQYe qnBFBb_+7;`$V^xS$,)9i@p_:2A`__b%n-2$K>fXDaT)}]MTOM?_|');
define('SECURE_AUTH_SALT', '%DGA+K{4X_q,A,eWs,]&hSJ^[uUUQ*[Sjg|OoJ#rbsP~=M[Bvyxi,(I-Am3WHbRd');
define('LOGGED_IN_SALT',   '`-+7t Ov+Wt<>s)wr:Ab$4f~XBoUQxvB=YQTw+isMq2E)4gc-TVdbHu*Yo((Iu@r');
define('NONCE_SALT',       'Yxwp<l9<k|BNig0O <7d_!igfY/$qirOGJPh2Xo#hUy5WOY^ @!KpNud&d.A;8Ow');

$table_prefix = 'wptests_';   // Only numbers, letters, and underscores please!

define( 'WP_TESTS_DOMAIN', 'localhost' );
define( 'WP_TESTS_EMAIL', 'admin@localhost' );
define( 'WP_TESTS_TITLE', 'Develop 2024 Ghepes' );

define( 'WP_PHP_BINARY', 'php' );

define( 'WPLANG', '' );
