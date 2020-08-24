<?php

if ( ! defined( 'MC' ) )
  die( 'No direct script access allowed!' );

/*----------------------------------------------------------------------------*/

add_action( 'the_header', 'custom_header' );
function custom_header() {
  echo '<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">' . "\n";
  echo '<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">' . "\n";

  if ( route( 'search' ) || route( 'download' ) )
    register_stylesheet( 'https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.23.4/mediaelementplayer.min.css' );

  register_stylesheet( theme_uri() . '/style.css' );

  if ( $header_code = option( 'header_code' ) )
    echo $header_code;
}

add_action( 'the_footer', 'custom_footer' );
function custom_footer() {
  register_javascript( site_url() . '/assets/js/jquery.min.js' );

  if ( route( 'search' ) || route( 'download' ) )
    register_javascript( 'https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.23.4/mediaelement-and-player.min.js' );

  register_javascript( theme_uri() . '/assets/js/scripts.js' );

  if ( $footer_code = option( 'footer_code' ) )
    echo $footer_code;
}
