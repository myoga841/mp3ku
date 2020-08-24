<?php

date_default_timezone_set( 'UTC' );

/*----------------------------------------------------------------------------*/

define( 'MC', dirname( __FILE__ ), true );
define( 'HOST', $_SERVER['HTTP_HOST'], true );
define( 'DOMAIN', strtr( $_SERVER['HTTP_HOST'], array( 'www.' => '' ) ), true );
define( 'BASE', str_replace( "\\", '/', MC ), true );
define( 'PATH', strtr( BASE, array( rtrim( $_SERVER['DOCUMENT_ROOT'], '/' ) => '' ) ), true );
define( 'APP', BASE . '/application', true );
define( 'DEFAULT_SITE', BASE . '/sites/default', true );
define( 'SITE', BASE . '/sites/' . DOMAIN, true );

/*----------------------------------------------------------------------------*/

if ( ! @is_writable( BASE ) )
  die( 'Directory is not writable.<br />Please check your directory ownership!' );

/*----------------------------------------------------------------------------*/

require APP . '/core/loader.php';
