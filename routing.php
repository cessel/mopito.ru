<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 29.07.2019
 * Time: 14:21
 */


/* Убираем www и перенаправляем на https */
//if (substr($_SERVER['HTTP_HOST'], 0, 4) == 'www.') {
//	$host = str_replace('www.','',$_SERVER['HTTP_HOST']);
//	$https = ($_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
//
//	$destination = $https.$host.$_SERVER['REQUEST_URI'];
//	header('Location: '.$destination,true,301);
//}


/* Добавляем слеш "/" вконце */
if(mb_substr($_SERVER['REQUEST_URI'],'-1',1) != '/'){
	header('Location: '.$_SERVER['REQUEST_URI'].'/',true,301);
}

/* Все редирректы для SEO */
function redirect_before(){
	$redirect_array['/kofe-chaj/chaj-optom/'] = 'https://mopito.ru/bakaleya/chaj-optom/';
	$redirect_array['/kofe-chaj/'] = 'https://mopito.ru/bakaleya/kofe-optom/';
	$redirect_array['/kofe-chaj/kofe-optom/'] = 'https://mopito.ru/bakaleya/kofe-optom/';
	$redirect_array['/produkty-pitaniya/myaso-optom/'] = 'https://mopito.ru/myaso-optom/';
	$redirect_array['/produkty-pitaniya/ryba-optom/'] = 'https://mopito.ru/rybnaya-produkciya/ryba-optom/';
	$redirect_array['/bezalkogolnie/soki-optom/'] = 'https://mopito.ru/bezalkogolnie/soki-voda-mors-optom/';
	$redirect_array['/bezalkogolnie/voda-optom/'] = 'https://mopito.ru/bezalkogolnie/soki-voda-mors-optom/';
	$redirect_array['/bezalkogolnie/limonad-optom/'] = 'https://mopito.ru/bezalkogolnie/kvas-limonad-optom/';
	$redirect_array['/bezalkogolnie/kvas-optom/'] = 'https://mopito.ru/bezalkogolnie/kvas-limonad-optom/';
	$redirect_array['/oborudovanie/kofemashiny/'] = 'https://mopito.ru/bakaleya/kofe-optom/';
	$redirect_array['/oborudovanie/oborudovanie-dlya-piva/'] = 'https://mopito.ru/alkogolnie/pivo-optom/';
	$redirect_array['/oborudovanie/'] = 'https://mopito.ru/alkogolnie/pivo-optom/';
	$redirect_array['/oborudovanie/xolodilnoe-oborudovanie/'] = 'https://mopito.ru/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/oborudovanie/dlya-fastfudov-i-ulichnoe/'] = 'https://mopito.ru/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/oborudovanie/torgovoe-oborudovanie/'] = 'https://mopito.ru/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/uslugi/otdelka-i-montazh/'] = 'https://mopito.ru/alkogolnie/pivo-optom/';
	$redirect_array['/catering/'] = 'https://mopito.ru/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/catering/vyezdnoe-obsluzhivanie/'] = 'https://mopito.ru/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/catering/bankety/'] = 'https://mopito.ru/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/catering/organizaciya-prazdnikov/'] = 'https://mopito.ru/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/uslugi/'] = 'https://mopito.ru/alkogolnie/pivo-optom/';
	$redirect_array['/uslugi/servis/'] = 'https://mopito.ru/alkogolnie/pivo-optom/';

	$redirect_array['/spb/kofe-chaj/chaj-optom/'] = 'https://mopito.ru/spb/bakaleya/chaj-optom/';
	$redirect_array['/spb/kofe-chaj/'] = 'https://mopito.ru/spb/bakaleya/kofe-optom/';
	$redirect_array['/spb/kofe-chaj/kofe-optom/'] = 'https://mopito.ru/spb/bakaleya/kofe-optom/';
	$redirect_array['/spb/produkty-pitaniya/myaso-optom/'] = 'https://mopito.ru/spb/myaso-optom/';
	$redirect_array['/spb/produkty-pitaniya/ryba-optom/'] = 'https://mopito.ru/spb/rybnaya-produkciya/ryba-optom/';
	$redirect_array['/spb/bezalkogolnie/soki-optom/'] = 'https://mopito.ru/spb/bezalkogolnie/soki-voda-mors-optom/';
	$redirect_array['/spb/bezalkogolnie/voda-optom/'] = 'https://mopito.ru/spb/bezalkogolnie/soki-voda-mors-optom/';
	$redirect_array['/spb/bezalkogolnie/limonad-optom/'] = 'https://mopito.ru/spb/bezalkogolnie/kvas-limonad-optom/';
	$redirect_array['/spb/bezalkogolnie/kvas-optom/'] = 'https://mopito.ru/spb/bezalkogolnie/kvas-limonad-optom/';
	$redirect_array['/spb/oborudovanie/kofemashiny/'] = 'https://mopito.ru/spb/bakaleya/kofe-optom/';
	$redirect_array['/spb/oborudovanie/oborudovanie-dlya-piva/'] = 'https://mopito.ru/spb/alkogolnie/pivo-optom/';
	$redirect_array['/spb/oborudovanie/'] = 'https://mopito.ru/spb/alkogolnie/pivo-optom/';
	$redirect_array['/spb/oborudovanie/xolodilnoe-oborudovanie/'] = 'https://mopito.ru/spb/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/spb/oborudovanie/dlya-fastfudov-i-ulichnoe/'] = 'https://mopito.ru/spb/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/spb/oborudovanie/torgovoe-oborudovanie/'] = 'https://mopito.ru/spb/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/spb/uslugi/otdelka-i-montazh/'] = 'https://mopito.ru/spb/alkogolnie/pivo-optom/';
	$redirect_array['/spb/catering/'] = 'https://mopito.ru/spb/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/spb/catering/vyezdnoe-obsluzhivanie/'] = 'https://mopito.ru/spb/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/spb/catering/bankety/'] = 'https://mopito.ru/spb/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/spb/catering/organizaciya-prazdnikov/'] = 'https://mopito.ru/spb/myaso-optom/oborudovanie-dlya-gotovki/';
	$redirect_array['/spb/uslugi/'] = 'https://mopito.ru/spb/alkogolnie/pivo-optom/';
	$redirect_array['/spb/uslugi/servis/'] = 'https://mopito.ru/spb/alkogolnie/pivo-optom/';

	foreach ( $redirect_array as $from => $to ) {
		if($_SERVER['REQUEST_URI'] == $from) {
			header('HTTP/1.1 301 Moved Permanently');
			$to = str_replace('https://mopito.ru','',$to);
			header('Location: '.$to,'301');
			exit();
		}
	}
}


if(substr($_SERVER['REQUEST_URI'], -1) != '/' && explode('/',$_SERVER['REQUEST_URI'])[1] != 'ajax')
{
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: '.$_SERVER['REQUEST_URI'].'/');
}

$request_uri_test = array_filter(explode('/',$_SERVER['REQUEST_URI']));
//$request_uri_test = get_request_uri();
if($request_uri_test[1] == 'spb' &&	count($request_uri_test) == 1){
	header('HTTP/1.1 301 Moved Permanently');
	$new_location = $request_uri_test[1].'/alkogolnie/';
	header('Location: /'.$new_location);
}
if($request_uri_test[1] == 'msk') {
	if(count($request_uri_test) == 1){
		header('HTTP/1.1 301 Moved Permanently');
		header('Location: /');
	}
	else if(count($request_uri_test) > 1){
		header('HTTP/1.1 301 Moved Permanently');
		array_shift($request_uri_test);
		$new_location = implode('/',$request_uri_test).'/';
		header('Location: /'.$new_location);
	}
}




function route_exist($request_uri = [])
    {
    	if(count($request_uri) == 4 && !empty($request_uri[3]))
	        {
	        	$product = is_product_exist();


		        if(!empty($product))
			        {
				        return 'product';
			        }
		        else
			        {
				        return false;
			        }
	        }


	    $result = route_query($request_uri);
	    if($result)
	        {
	        	$line = mysqli_fetch_assoc($result);
	        	if(!empty($line))
		            {
			            if(count($request_uri) == 2){
				            return 'category';
			            }
			            else{
				            return 'podcategory';
			            }

		            }
		        else
		        	{
	        		    return false;
		            }
	        }
	    else
	    	{
	    	    return false;
	        }
    }

function route_query($request_uri = [])
    {
	    $levels_db = ['alco_12','alco_18','alco_22'];
	    if(count($request_uri) > 0)
		    {
			    $i = 0;
			    foreach ( $request_uri as $level ) {
			    	if($level != '')
			    	    {
			    	    	$where_request[] = "`".$levels_db[$i++]."` = '".urldecode($level)."'";
				        }

			    }
			    $where = implode(' AND ',$where_request);

			    $route_sql = "SELECT * FROM `alco_base_new` WHERE ".$where;


			    return sql($route_sql);
		    }
	    else
	    	{
	    	return false;
	        }

    }
function is_static_page_exist($request_uri)
    {
	    $static_page_index_url = get_theme_uri().'/'.implode('/',$request_uri).'/index.php';
	    $static_page_url = get_theme_uri().'/'.implode('/',$request_uri).'.php';
	    if(file_exists($static_page_index_url)){
	    	return $static_page_index_url;
	    }
	    else if(file_exists($static_page_url)){
		    return $static_page_url;
	    }
	    else{
	    	return false;
	    }
    }

redirect_before();


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
