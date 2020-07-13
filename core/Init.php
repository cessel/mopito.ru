<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 08.07.2020
 * Time: 21:36
 */

class Init {
	public function __construct() {
		require( dirname( __FILE__ ) . '/Core.php' );
		require( dirname( __FILE__ ) . '/Theme.php' );
		require( dirname( __FILE__ ) . '/Catalog.php' );
		require( dirname( __FILE__ ) . '/Redirects.php' );
		require( dirname( __FILE__ ) . '/Routing.php' );
	}
}
new Init();
$Core = Core::init();
$Theme = Theme::init();
$Catalog = Catalog::init();
$Redirects = Redirects::init();
$Routing = Routing::init();