<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 29.07.2019
 * Time: 12:37
 */

//if (substr($_SERVER['HTTP_HOST'], 0, 4) == 'www.') {
//	$host = str_replace('www.','',$_SERVER['HTTP_HOST']);
//	$https = ($_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
//
//	$destination = $https.$host.$_SERVER['REQUEST_URI'];
//	header('Location: '.$destination,true,301);
//}

require( dirname( __FILE__ ) . '/functions.php' );
require( dirname( __FILE__ ) . '/routing.php' );