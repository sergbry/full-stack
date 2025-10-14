<?php

// db
if ( getenv( 'IS_DDEV_PROJECT' ) == 'true' ) {
	define( "DB_HOST", 'db:3306' );
	define( "DB_USER", 'db' );
	define( "DB_PASS", 'db' );
	define( "DB_NAME", 'db' );
} else {
	define( "DB_HOST", '127.0.0.1' );
	define( "DB_USER", 'root' );
	define( "DB_PASS", '' );
	define( "DB_NAME", 'test' );
}
// common
const SITE_SCHEME = 'http';
const DEFAULT_TIMEZONE = '240';
const LOGIN_ATTEMPTS = '15';
