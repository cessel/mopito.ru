<?php

if(substr($_SERVER['REQUEST_URI'], -1) != '/' && explode('/',$_SERVER['REQUEST_URI'])[1] != 'ajax')
	{
		header('HTTP/1.1 301 Moved Permanently');
		header('Location: '.$_SERVER['REQUEST_URI'].'/');
	}
@header('Content-Type: text/html; charset= utf-8');

//echo 'functions.php Initiated!';
$db_host = 'localhost';
$db_user = 'smsmoru2_alco';
$db_password = 'Hs7DMc&W';
$database = 'smsmoru2_test';
define('DB_HOST',$db_host);
define('DB_USER',$db_user);
define('DB_PASS',$db_password);
define('DB_NAME',$database);
define('TABLE_NAME','alco_base_new');

function get_request_uri()
	{
		$request_uri = explode('/',$_SERVER['REQUEST_URI']);
		$request_uri = array_values( array_filter( $request_uri ) );
		return $request_uri;
	}
/**
 * mb_ucfirst - преобразует первый символ в верхний регистр
 * @param string $str - строка
 * @param string $encoding - кодировка, по-умолчанию UTF-8
 * @return string
 */
function mb_ucfirst($str, $encoding='UTF-8')
{
	$str = mb_strtolower($str, $encoding);
	$str = mb_ereg_replace('^[\ ]+', '', $str);
	$str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
	       mb_substr($str, 1, mb_strlen($str), $encoding);
	return $str;
}
/**

 * Функция возвращает окончание для множественного числа слова на основании числа и массива окончаний

 * param  $number Integer Число на основе которого нужно сформировать окончание

 * param  $endingsArray  Array Массив слов или окончаний для чисел (1, 4, 5),

 *         например array('яблоко', 'яблока', 'яблок')

 * return String

 */

function getNumEnding($number, $endingArray)
{
	$number = $number % 100;
	if ($number>=11 && $number<=19)
		{
			$ending=$endingArray[2];
		}
	else
		{
			$i = $number % 10;
			switch ($i)
				{
					case (1): $ending = $endingArray[0]; break;
					case (2):
					case (3):
					case (4): $ending = $endingArray[1]; break;
					default: $ending=$endingArray[2];
				}
		}
	return $ending;
}

function recaptcha_test($g_recaptcha_response)

{

	$secret = '6LfRXmIUAAAAAF3V6jrwrLYbQPSPKonMcZEqLqbc';



	$myCurl = curl_init();

	curl_setopt_array($myCurl, array(

		CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',

		CURLOPT_RETURNTRANSFER => true,

		CURLOPT_POST => true,

		CURLOPT_POSTFIELDS => http_build_query(array('secret'=>$secret,'response'=>$g_recaptcha_response))

	));

	$response = curl_exec($myCurl);

	curl_close($myCurl);

	$answer = json_decode($response, true);



	if($answer->success)

	{

		return true;

	}

	else

	{

		return $answer;

	}

}


function sql($sql,$dbName='')
{

	//echo $sql."<br>";

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS)

	or die("<p class='text-danger bg-danger' >Could not connect: " . mysqli_error($link)."</p>");

	if($dbName=='')

	{$dbName=DB_NAME;}

	mysqli_select_db($link,$dbName) or die ('<p class="text-danger bg-danger" >Can\'t select database : ' . mysqli_error($link)."</p>");


	mysqli_query($link,'SET names "utf8"');
	$result = mysqli_query($link,$sql)

	or die("<p class='text-danger bg-danger' >Could not query:" . mysqli_error($link)."</p>");

	$thread_id = mysqli_thread_id($link);

	//echo $thread_id."<br>";

	/* Kill connection */

	mysqli_kill($link, $thread_id);



	return $result;

}


function get_query()
    {
	    $query_str = $_SERVER['QUERY_STRING'];
	    parse_str($query_str,$query_array);
		return $query_array;
    }

function get_header()
    {
        include_once $_SERVER["DOCUMENT_ROOT"].'/theme/header.php';
    }
function get_footer()
    {
        include_once $_SERVER["DOCUMENT_ROOT"].'/theme/footer.php';
    }
function the_theme_url($echo = true)
	{
		if($echo)
			{
				echo '/theme';
			}
		else
			{
				return '/theme';
			}

	}
function get_theme_uri()
	{
		return $_SERVER["DOCUMENT_ROOT"].'/theme';
	}
function get_title()
    {
        global $main_page_title;
        return $main_page_title;
    }
function get_product($id)
    {
	    $sql = "SELECT * FROM `alco_base_new` WHERE `index_0` = '".$id."'";
	    $result = sql($sql);
	    $row = mysqli_fetch_array($result);

	    return $row;

    }
function is_product_exist($index = '')
    {
	    if($index === '')
	        {
		        $levels_db = ['alco_12','alco_18','alco_22','alco_70'];
		        $request_uri = get_request_uri();
		        $where_request = [];
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
		        }
		        else
		        {
			        return false;
		        }



		        $sql = "SELECT * FROM `alco_base_new` WHERE ".$where;

	        }
		else
			{
				$sql = "SELECT * FROM `alco_base_new` WHERE `index_0` =  '".$index."'";
			}
		$result = sql($sql);
	    $row = mysqli_fetch_array($result);

	    return $row;

    }

function get_page_data()
	{

		global $data_type;
		$request_uri = get_request_uri();
		$return = [];
		if($data_type == 'product')
			{
				$return['id'] = $request_uri[3];
				$return['product'] = is_product_exist();
				$return['meta']['title'] = $return['product']['alco_3'];
				$return['meta']['description'] = $return['product']['alco_9'];
				$return['meta']['canonical'] = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				$return['page']['topmenu_link_ancor'] = $return['product']['alco_3'];
				$return['page']['breadcrumb_ancor'] = $return['product']['alco_3'];
				$return['page']['title'] = $return['product']['alco_3'];
				$return['page']['top_menu_title'] = mb_ucfirst($return['product']['alco_20']);
				$return['page']['data_type'] = $data_type;

			}
		else if($data_type == 'category')
			{
				$result = route_query($request_uri);
				$return['product'] = mysqli_fetch_array($result);
				$return['meta']['title'] = $return['product']['alco_11'].' '.$return['product']['alco_19'].' '.$return['product']['alco_20'].' - mopito.ru';
				$return['meta']['description'] = "Мы нашли для Вас ".$result->num_rows." видов продукции. mopito.ru - онлайн витрина для доставки алкоголя";
				$return['meta']['canonical'] = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				$return['page']['count_products'] = $result->num_rows;
				$return['page']['data_type'] = $data_type;
			}


		return $return;

	}

function the_breadcrumbs($page = [])
    {
	    global $page;
		$request_uri = get_request_uri();
		$breadcrumbs_levels_db = ['alco_11','alco_19','alco_20'];
		$breadcrumbs_chain_levels_db = ['alco_12','alco_18','alco_22'];

		$breadcrumbs = '<ul class="breadcrumb">
		       <li typeof="v:Breadcrumb">
		          <a href="/" rel="v:url" property="v:title" title="Перейти на главную страницу сайта">Главная</a>
		       </li>';
		$chain = [];
		$i = 0;

		if($page['page']['data_type'] == 'product')
			{
				foreach ( $breadcrumbs_chain_levels_db as $level )
				{
					$chain[] = $page['product'][$level];
					$chain_str = '/'.implode('/',$chain).'/';
					$breadcrumbs .= '<li typeof="v:Breadcrumb">';
					$breadcrumbs .= '<a href="'.$chain_str.'" rel="v:url" property="v:title" title="Перейти в раздел '.mb_ucfirst($page['product'][$breadcrumbs_levels_db[$i]]).'">'.mb_ucfirst($page['product'][$breadcrumbs_levels_db[$i++]]).'</a>';
					$breadcrumbs .= '</li>';
				}

				$breadcrumbs .= '<li class="active" typeof="v:Breadcrumb">';
				$breadcrumbs .= '<span property="v:title">'.$page['product']['alco_3'].'_'.$page['product']['alco_70'].'</span>';
				$breadcrumbs .= '</li>';

			}
	    else if($page['page']['data_type'] == 'category')
	    	{
			    foreach ( $request_uri as $level )
			    {
				    $chain[] = $level;
				    $chain_str = '/'.implode('/',$chain).'/';
				    $breadcrumbs .= '<li typeof="v:Breadcrumb">';
				    $breadcrumbs .= '<a href="'.$chain_str.'" rel="v:url" property="v:title" title="Перейти в раздел '.mb_ucfirst($page['product'][$breadcrumbs_levels_db[$i]]).'">'.mb_ucfirst($page['product'][$breadcrumbs_levels_db[$i++]]).'</a>';
				    $breadcrumbs .= '</li>';
			    }

		    }


		$breadcrumbs .= '</ul>';

		echo $breadcrumbs;

}

function get_block_html($id = '',$request_uri)
{


	$row = is_product_exist($id);

	$return = '<!-- начало блока --><div id="'.$id.'" class="blockin '.$row['alco_126'].'" data-product_id="'.$id.'">';

	$return .= get_block_header($row);

	$return .= '<div class="col-1">';
	$return .= '<div class="opisanie">';
	$return .= get_block_description($row);
	$return .= '</div>';
	$return .= '<img src="'.the_theme_url(false).'/'.$row['alco_75'].'" class="blockleft blockimg1 point-2" alt="" width="120" height="99">';
	$return .= get_block_features($row);
	$return .= '</div>';

	$return .= '<div class="col-2">';
	$return .= '<div class="statuswhen" data-title="'.$row['alco_124'].'">';
	$return .= '<img src="'.the_theme_url(false).$row['alco_123'].'" class="blockright point-a1 "  alt="">';
	$return .= '</div>';
	$return .= get_block_vendor_info($row);
	$return .= '</div>';

	$return .= get_block_promo_info($row);

	$return .= get_block_footer($row,$request_uri);

	$return .= '</div><!-- конец блока -->';

	return $return;

}




function get_block_header($row)
{
	$return =
		'<div class="blocktitle '.$row['alco_127'].'">
				<h3 class="blockh3left moly-1"><a href="/'.$row['alco_12'].'/'.$row['alco_18'].'/'.$row['alco_22'].'/'.$row['alco_70'].'/" title="'.$row['alco_15'].'">'.$row['alco_15'].' '.$row['alco_24'].' '.$row['alco_32'].', '.$row['alco_62'].', '.$row['alco_63'].', <span class="grey1">'.$row['alco_111'].'</span>
				</a></h3>
				<div class="blockimg2 statuswhen" data-title="'.$row['alco_122'].'">
					<img src="'.the_theme_url(false).$row['alco_121'].'" class="blockright point-a1 "  alt="">
				</div>
				<div class="clr"></div></div>';
	return $return;
}





function get_block_description($row)
{
	$return = str_replace('??','И',mb_convert_encoding($row['alco_21'],'UTF-8')).'
				<span class="text600">'.$row['alco_43'].'</span>';
	return $return;
}
function get_block_features($row)
{
	$return = '<ul class="lishki">
					<li class="point-a2 text500">'.$row['alco_25'].': <span class="greytext text100">'.$row['alco_32'].'</span></li>
					<li class="point-a2 text500">'.$row['alco_34'].': <span class="greytext text100">'.$row['alco_41'].'</span></li>
					<li class="point-a2 text500">'.$row['alco_44'].': <span class="greytext text100">'.$row['alco_51'].'</span></li>
					<li class="point-a2 text500">'.$row['alco_52'].': <span class="greytext text100">'.$row['alco_59'].'</span></li>
					<li class="point-a2 text500">'.$row['alco_61'].': <span class="greytext text100">'.$row['alco_68'].'</span></li>
				</ul>';

	return $return;
}
function get_block_vendor_info($row)
{
	$return = '<p class="textbig textpall text-ale1">'.$row['alco_3'].'</p>
				<p class="textbig textpall text-ale2">Контакты:</p>
				<p class="textpall">'.$row['alco_60'].': <span class="greytext text100">'.$row['alco_98'].'</span></p>
				<p class="textpall">Представитель: <span class="greytext text100">'.$row['alco_6'].'</span></p>
				<div class="biginfo">
					<p class="textbig textpall" data-biginfo="'.$row['alco_7'].'">'.$row['alco_99'].'</p>
				</div>';

	return $return;
}
function get_block_promo_info($row)
{
	$desc[1] = str_replace('?','И',htmlentities($row['alco_131'],ENT_IGNORE));

	$return = '
			<div class="'.$row['alco_130'].' infohot">
				<div class="statushot" data-title="Горячие предложения Партнера - доступно от 3-х приоритетов">
					<img src="'.the_theme_url(false).'/img/hot.png" class="promohotimg"  alt="Акции">
				</div>
				<span class="'.$row['alco_130'].' promotext1">
					'.$desc[1].'
				</span><br>
				<span class="'.$row['alco_133'].' promotext2">
					'.$row['alco_134'].'
				</span><br>
				<span class="'.$row['alco_136'].' promotext3">
					'.$row['alco_137'].'
				</span>
			</div>';

	return $return;
}
function get_block_footer($row,$request_uri)
{
	$return = '<div class="allinfo infotop">
				<div class="col-1 point-3">
					<div class="blockright">Создано: <span class="'.$row['alco_144'].' text100">'.$row['alco_117'].'</span></div>
				</div>
				<div class="col-2">
                    <span class="AdvStatView">'.get_statistic($row['index_0'],$request_uri).'</span>
					<a href="'.$row['alco_69'].'" class="blockright">Поднять выше?</a>	
				</div>
			</div>';

	return $return;
}


function get_block_row($id)
{
	$sql = "SELECT * FROM `alco_base_new` WHERE `index_0` = '".$id."'";
	$result = sql($sql);
	$row = mysqli_fetch_array($result);
	return $row;
}





function get_statistic($product_id,$request_uri)
{

	$curr_link = '/'.implode('/',$request_uri).'/';
	$month = date('n');
	$sql = "SELECT `clicks_".$month."` FROM `alco_clicks` WHERE `product_id`='".$product_id."' AND `url` = '".$curr_link."'";
	$result = sql($sql);
	$clicks = mysqli_fetch_array($result);

	$sql = "SELECT  `views_".$month."` FROM `alco_views` WHERE `url` = '".$curr_link."'";
	$result = sql($sql);
	$views = mysqli_fetch_array($result);
	$views = ($views[0] == '') ? 0 : $views[0];
	$clicks = ($clicks[0] == '') ? 0 : $clicks[0];
	$stats = $views."/".$clicks;
	//var_dump($curr_link);
	return $stats."<!--".$sql."-->";
}


function fields_counter($field,$value,$add_cond = false)
	{
		$sql    = ( $value ) ? 'SELECT ' . $field . ', COUNT(*) AS count FROM `' . TABLE_NAME . '` WHERE ' . $field . ' = \'' . $value . '\' GROUP BY ' . $field : 'SELECT `' . $field . '`, COUNT(' . $field . ') AS count FROM `' . TABLE_NAME . '` WHERE `alco_23` NOT LIKE \'%_кикс\' AND `' . $field . '` != \'\' AND `alco_23` LIKE \'%' . $add_cond . '%\'  GROUP BY ' . $field;
		$result = sql( $sql );

		$row = ( $value ) ? mysqli_fetch_array( $result ) : $result;

		return $row;
	}


function get_block_ids($start = '0',$stop = '10')
{
	$ids = [];

	$levels_db = ['alco_12','alco_18','alco_22'];

	$request_uri = get_request_uri();

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
		}
	else
		{
			$where = 1;
		}

	$limit = ($start !== false && $stop !== false) ? 'LIMIT '.$start.','.$stop : '';

	$sql = "SELECT `index_0` FROM `alco_base_new` WHERE ".$where." ORDER BY `index_0` ".$limit;

	$result = sql($sql);

	while($id = mysqli_fetch_array($result))
	{
		if($id[0] != '')
		{
			$ids[] = $id[0];
		}
	}
	$returnids = array
		(
			'ids'	=> $ids,
			'sql'	=> $sql,
		);

	return $returnids;
}
function get_filtered_block_ids($start = '0',$stop = '10',$filter)
{
	$ids = array();
	$limit = ($start !== false && $stop !== false) ? 'LIMIT '.$start.','.$stop : '';
	$sql = 'SELECT `alco_71` FROM `alco_base` WHERE `alco_71` NOT LIKE \'%кикс%\' AND `alco_15` = \''.$filter.'\'  ORDER BY `alco_71` '.$limit;
	$result = sql($sql);
	while($id = mysqli_fetch_array($result))
	{
		if($id[0] != '')
		{
			$ids[] = $id[0];
		}
	}
	$returnids = array
	(
		'ids'	=> $ids,
		'sql'	=> $sql,
	);
	return $returnids;
}

function the_menu($menu_data_file = '/menu.php', $menu_class = 'nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left hidden-xs-block',$selected_menu_class = 'active',$echo = true)
	{
		$menu_array = [];
		require( dirname( __FILE__ ) . $menu_data_file );

		$html = '<ul class="'.$menu_class.'">';
		$html .= '<div class="chr_ball chr_ball-1"></div>';
		$html .= '<div class="chr_ball chr_ball-2"></div>';
		$html .= '<div class="chr_ball chr_ball-3"></div>';
		$reques_uri = $_SERVER['REQUEST_URI'];
		foreach ( $menu_array as $item ) {

			if($item['menu_link'] == $reques_uri){
				$menu_item_class = $selected_menu_class;
			}
			else{
				$menu_item_class= 'fa roadmach';
			}
			if(!empty($item['menu_icon_image_url']))
				{
					$menu_icon_img = '<img src="'.$item['menu_icon_image_url'].'" class="qwert">';
				}
			else
				{
					$menu_icon_img = '';
				}
			$html .= '<li class="'.$menu_item_class.'">';
			$html .= '<a href="'.$item['menu_link'].'" title="'.$item['menu_title'].'"><i class="fa '.$item['menu_link'].'">'.$menu_icon_img.'</i>'.$item['menu_ancor'].'</a>';
			$html .= '</li>';
		}

		$html .= '</ul>';


		if($echo)
			{
				echo $html;
			}
		else
			{
				return $html;
			}


	}

function get_conditions($request_uri,$filter = '0')
    {

	    $levels_db = ['alco_12','alco_18','alco_22'];

	    $where_request = [];
	    if(count($request_uri) > 0)
	    {
		    $i = 0;
		    foreach ( $request_uri as $level ) {
			    if($level != '')
			    {
				    $where_request[] = "`".$levels_db[$i++]."` = '".urldecode($level)."'";
			    }

		    }
	    }
	    else
	    {
		    $where = 1;
	    }

	    if($filter !== "0")
	    {

		    $where_request[] = "`alco_15` = '".urldecode($filter)."'";
	    }
	    $where = implode(' AND ',$where_request);

	    return $where;
    }































