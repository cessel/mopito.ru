<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 08.07.2020
 * Time: 19:50
 */
class Core {
	public function __construct() {
		require_once( dirname( __FILE__ ) . '/config.php' );
	}
	static function init(){
		$returnInstance = new static();
		echo '<pre>'.print_r(get_class($returnInstance),true).'</pre>';
		return $returnInstance;
	}
	static function sql( $sql, $dbName = '' ) {
		$link = mysqli_connect( DB_HOST, DB_USER, DB_PASS )
		or die( "<p class='text-danger bg-danger' >Could not connect: " . mysqli_error( $link ) . "</p>" );
		if ( $dbName == '' ) {
			$dbName = DB_NAME;
		}
		mysqli_select_db( $link, $dbName ) or die ( '<p class="text-danger bg-danger" >Can\'t select database : ' . mysqli_error( $link ) . "</p>" );
		mysqli_query( $link, 'SET names "utf8"' );
		$result = mysqli_query( $link, $sql )
		or die( "<p class='text-danger bg-danger' >Could not query:" . mysqli_error( $link ) . "</p>" );
		$thread_id = mysqli_thread_id( $link );
		/* Kill connection */
		mysqli_kill( $link, $thread_id );
		return $result;
	}

}

