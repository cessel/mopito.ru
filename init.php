<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 29.07.2019
 * Time: 12:37
 */


if(mb_substr($_SERVER['REQUEST_URI'],'-1',1) != '/'){
	header('Location: '.$_SERVER['REQUEST_URI'].'/',true,301);
}
if (substr($_SERVER['HTTP_HOST'], 0, 4) == 'www.') {
	$host = str_replace('www.','',$_SERVER['HTTP_HOST']);
	$https = ($_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';

	$destination = $https.$host.$_SERVER['REQUEST_URI'];
	header('Location: '.$destination,true,301);
}

require( dirname( __FILE__ ) . '/functions.php' );
redirect_before();
require( 'routing.php' );

$request_uri = get_request_uri();
if(empty($request_uri[0]))
	{
		require( 'settings.php' );
		require( get_theme_uri().'/index.php' );
	}
else if($request_uri[0] == 'index.php' || $request_uri[0] == 'index' )
{
	header('Location: /',true,301);
}
else if($data_type = route_exist($request_uri))
	{
		$page = get_page_data();
		require( get_theme_uri().'/'.$data_type.'.php' );
	}
else if($page_url = is_static_page_exist($request_uri))
	{
		require( $page_url );
	}
else
	{
		require( dirname( __FILE__ ) .'/404/index.php' );
	}

/*
else if(file_exists($dir))
	{

		require( $dir .'/index.php' );
	}
*/
