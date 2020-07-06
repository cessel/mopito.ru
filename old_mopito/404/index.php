<?
header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
require( $_SERVER["DOCUMENT_ROOT"].'/404/settings.php' );
require( get_theme_uri().'/404.php' );