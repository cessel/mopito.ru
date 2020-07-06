<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 29.07.2019
 * Time: 14:21
 */


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