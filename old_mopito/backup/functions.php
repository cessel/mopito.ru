<?php

@header("Content-Type: text/html; charset=utf-8");



$db_host = 'localhost'; 

$db_user = 'smsmoru2_alco'; 

$db_password = 'Hs7DMc&W'; 

$database = 'smsmoru2_test'; 



define('DB_HOST',$db_host);

define('DB_USER',$db_user);

define('DB_PASS',$db_password);

define('DB_NAME',$database);



define('TABLE_NAME','alco_base');



function sql($sql,$dbName='')

	{	

		//echo $sql."<br>";

		$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS)

				or die("<p class='text-danger bg-danger' >Could not connect: " . mysqli_error($link)."</p>");

	 	if($dbName=='')

			{$dbName=DB_NAME;}

		mysqli_select_db($link,$dbName) or die ('<p class="text-danger bg-danger" >Can\'t select database : ' . mysqli_error($link)."</p>");

			 

		$result = mysqli_query($link,$sql)

				or die("<p class='text-danger bg-danger' >Could not query:" . mysqli_error($link)."</p>");

		$thread_id = mysqli_thread_id($link);

		//echo $thread_id."<br>";

		/* Kill connection */

		mysqli_kill($link, $thread_id);

		

		return $result;

	}

	

function fields_counter($field,$value,$add_cond = false)

	{

		

		$sql = ($value) 
			? 'SELECT '.$field.', COUNT(*) AS count FROM `'.TABLE_NAME.'` WHERE '.$field.' = \''.$value.'\' GROUP BY '.$field 
			: 'SELECT `'.$field.'`, COUNT('.$field.') AS count FROM `'.TABLE_NAME.'` WHERE `alco_23` NOT LIKE \'%_кикс\' AND `'.$field.'` != \'\' AND `alco_23` LIKE \'%'.$add_cond.'%\'  GROUP BY '.$field ;
		$result = sql($sql);

		$row = ($value) ? mysqli_fetch_array($result) : $result ;

		return $row;

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

    if ($number>=11 && $number<=19) {

        $ending=$endingArray[2];

    }

    else {

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



function find_row($field,$value,$filter = false)

	{

		$sql = ($filter) ? 'SELECT * FROM `'.TABLE_NAME.'` WHERE '.$field.' = \''.$value.'\' AND alco_113 NOT LIKE \'%кикс%\'  ORDER BY `alco_113`=0, -`alco_113` DESC, `alco_113`' : 'SELECT * FROM `'.TABLE_NAME.'` WHERE '.$field.' = \''.$value.'\'';

		$result = sql($sql);

		$row = ($filter) ? $result : mysqli_fetch_array($result);

		return $row;



	}

function rus_date() {

// Перевод

 $translate = array(

 "am" => "дп",

 "pm" => "пп",

 "AM" => "ДП",

 "PM" => "ПП",

 "Monday" => "Понедельник",

 "Mon" => "Пн",

 "Tuesday" => "Вторник",

 "Tue" => "Вт",

 "Wednesday" => "Среда",

 "Wed" => "Ср",

 "Thursday" => "Четверг",

 "Thu" => "Чт",

 "Friday" => "Пятница",

 "Fri" => "Пт",

 "Saturday" => "Суббота",

 "Sat" => "Сб",

 "Sunday" => "Воскресенье",

 "Sun" => "Вс",

 "January" => "Января",

 "Jan" => "Янв",

 "February" => "Февраля",

 "Feb" => "Фев",

 "March" => "Марта",

 "Mar" => "Мар",

 "April" => "Апреля",

 "Apr" => "Апр",

 "May" => "Мая",

 "May" => "Мая",

 "June" => "Июня",

 "Jun" => "Июн",

 "July" => "Июля",

 "Jul" => "Июл",

 "August" => "Августа",

 "Aug" => "Авг",

 "September" => "Сентября",

 "Sep" => "Сен",

 "October" => "Октября",

 "Oct" => "Окт",

 "November" => "Ноября",

 "Nov" => "Ноя",

 "December" => "Декабря",

 "Dec" => "Дек",

 "st" => "ое",

 "nd" => "ое",

 "rd" => "е",

 "th" => "ое"

 );

 // если передали дату, то переводим ее

 if (func_num_args() > 1) {

 $timestamp = func_get_arg(1);

 return strtr(date(func_get_arg(0), $timestamp), $translate);

 } else {

// иначе текущую дату

 return strtr(date(func_get_arg(0)), $translate);

 }

 }



function the_block($pagetype,$index,$filter = false)

	{

		if($filter)

			{

				$r[]='';

				$filters_data = find_row($filter[0],$filter[1],true);

				while($fd = mysqli_fetch_array($filters_data)) 

					{

						$r[] = $fd;

					}

				$row = $r[$index];

				if($index >= (count($r)+2))

					{

						return 'stop';

					}

			}

		else

			{

				$row = find_row('alco_113',$index.$pagetype);

			}

		

		$date_arr = explode('-',$row['alco_1']);

		$data_alko_1 = rus_date("d.F.Y", mktime(0,0,0,$date_arr[0],$date_arr[1],$date_arr[2]));



		$return = '<!-- начало блока'.$index.'-->

		<div class="blockin '.$row['alco_126'].'" data-product_id="'.$row['alco_71'].'">

			<div class="blocktitle '.$row['alco_127'].'">

				<h3 class="blockh3left moly-1">'.$row['alco_15'].' '.$row['alco_24'].' '.$row['alco_32'].', '.$row['alco_62'].', '.$row['alco_63'].', <span class="grey1">'.$row['alco_111'].'</span>

				</h3>

				<div class="blockimg2 statuswhen" data-title="'.$row['alco_122'].'">

					<img src="'.$row['alco_121'].'" class="blockright point-a1 "  alt="">

				</div>

				<div class="clr"></div>

			</div>

			<div class="col-1">

				<div class="opisanie">

				'.str_replace('??','И',mb_convert_encoding($row['alco_21'],'UTF-8')).'

				<span class="text600">'.$row['alco_43'].'</span></div>

				<img src="'.$row['alco_75'].'" class="blockleft blockimg1 point-2" alt="" width="120" height="99">

				<ul class="lishki">

					<li class="point-a2 text500">'.$row['alco_25'].': <span class="greytext text100">'.$row['alco_32'].'</span></li>

					<li class="point-a2 text500">'.$row['alco_34'].': <span class="greytext text100">'.$row['alco_41'].'</span></li>

					<li class="point-a2 text500">'.$row['alco_44'].': <span class="greytext text100">'.$row['alco_51'].'</span></li>

					<li class="point-a2 text500">'.$row['alco_52'].': <span class="greytext text100">'.$row['alco_59'].'</span></li>

					<li class="point-a2 text500">'.$row['alco_61'].': <span class="greytext text100">'.$row['alco_68'].'</span></li>

				</ul>

			</div>

			<div class="col-2">

				<div class="statuswhen" data-title="'.$row['alco_124'].'">

				<img src="'.$row['alco_123'].'" class="blockright point-a1 "  alt="">

				</div>

				<p class="textbig textpall text-ale1">'.$row['alco_3'].'</p>

				<p class="textbig textpall text-ale2">Контакты:</p>

				<p class="textpall">'.$row['alco_60'].': <span class="greytext text100">'.$row['alco_98'].'</span></p>

				<p class="textpall">Представитель: <span class="greytext text100">'.$row['alco_6'].'</span></p>

				<div class="biginfo">

					<p class="textbig textpall" data-biginfo="'.$row['alco_7'].'">'.$row['alco_99'].'</p>

				</div>

			</div>

			<div class="'.$row['alco_130'].' infohot">

				<div class="statushot" data-title="Горячие предложения Партнера - доступно от 3-х приоритетов">

					<img src="http://mopito.ru/img/hot.png" class="promohotimg"  alt="Акции">

				</div>

				<span class="'.$row['alco_130'].' promotext1">

					'.$row['alco_131'].'

				</span><br>

				<span class="'.$row['alco_133'].' promotext2">

					'.$row['alco_134'].'

				</span><br>

				<span class="'.$row['alco_136'].' promotext3">

					'.$row['alco_137'].'

				</span>

			</div>



			<div class="allinfo infotop">

				<div class="col-1 point-3">

					<div class="blockright">Создано: '.$data_alko_1.' <span class="'.$row['alco_144'].' text100">'.$row['alco_117'].'</span></div>

				</div>

				<div class="col-2">

                    <span class="AdvStatView">'.get_statistic($row['alco_71']).'</span>

					<a href="'.$row['alco_69'].'" class="blockright">Поднять выше?</a>	

				</div>

			</div>

		</div>

				<!-- конец блока'.$index.' -->';

	if(isset($row['alco_113']) && $row['alco_113'] != '')
		{
			return $return;
		}
	else
		{
			return '';
		}

	}

	

function get_filters_data($field = 'alco_23')

	{

		$sql = 'SELECT '.$field.' FROM `'.TABLE_NAME.'` WHERE 1 GROUP BY '.$field;

		$result = sql($sql);

		$filters_data = mysqli_fetch_array($result);

		return $filters_data;

	}

function get_statistic($product_id)
	{
		/*$curr_link = ($_COOKIE['link_cookie'] === NULL) ? $_SERVER['PHP_SELF'] : $_COOKIE['link_cookie'];
		$links = ($_COOKIE['links_cookie'] === NULL) ? array($_SERVER['PHP_SELF']) : $_COOKIE['links_cookie'];
		if($_COOKIE['links_cookie'] === NULL)
			{
				$curr_link = $_SERVER['PHP_SELF'];
			}
		else
			{
				$links = explode('|',$_COOKIE['links_cookie']);
				$flag = false;
				foreach($links as $link)
					{
						if($link == $_SERVER['PHP_SELF'])
							{
								$curr_link = $_SERVER['PHP_SELF'];
								$flag = true;
								break;
							}
					}
				$curr_link = ($_COOKIE['link_cookie'] !== NULL && !$flag) ? $_COOKIE['link_cookie'] : $_SERVER['PHP_SELF'];
				
			}*/
			
		$curr_link = '/msk/alkogolnie/vodka_konyak_vino_shampanskoe/';
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
		
function get_block_ids($start = '0',$stop = '10')
	{
		$ids = array();
		$limit = ($start !== false && $stop !== false) ? 'LIMIT '.$start.','.$stop : '';
		$sql = 'SELECT `alco_71` FROM `alco_base` WHERE `alco_71` NOT LIKE \'%кикс%\' AND `alco_71` != \'\' ORDER BY `alco_71` '.$limit;
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
		
		
function get_block_row($id)
	{
		$sql = 'SELECT * FROM `alco_base` WHERE `alco_71` = \''.$id.'\' ';
		$result = sql($sql);
		$row = mysqli_fetch_array($result);
		return $row;
	}
function get_block_html($id)
	{
		
		$row = get_block_row($id);
		
		$return = '<!-- начало блока'.$index.'--><div id="'.$id.'" class="blockin '.$row['alco_126'].'" data-product_id="'.$id.'">';
		
		$return .= get_block_header($row);
		
		$return .= '<div class="col-1">';
		$return .= '<div class="opisanie">';
		$return .= get_block_description($row);
		$return .= '</div>';
		$return .= '<img src="'.$row['alco_75'].'" class="blockleft blockimg1 point-2" alt="" width="120" height="99">';
		$return .= get_block_features($row);
		$return .= '</div>';
		
		$return .= '<div class="col-2">';
		$return .= '<div class="statuswhen" data-title="'.$row['alco_124'].'">';
		$return .= '<img src="'.$row['alco_123'].'" class="blockright point-a1 "  alt="">';
		$return .= '</div>';
		$return .= get_block_vendor_info($row);
		$return .= '</div>';
		
		$return .= get_block_promo_info($row);
		$return .= get_block_footer($row);
		
		$return .= '</div><!-- конец блока'.$index.' -->';
		
		return $return;
		
	}
function get_block_header($row)
	{
		$return =
			'<div class="blocktitle '.$row['alco_127'].'">
				<h3 class="blockh3left moly-1"><a href="/msk/alkogolnie/vodka_konyak_vino_shampanskoe/product?id='.$row['alco_71'].'" title="'.$row['alco_15'].'">'.$row['alco_15'].' '.$row['alco_24'].' '.$row['alco_32'].', '.$row['alco_62'].', '.$row['alco_63'].', <span class="grey1">'.$row['alco_111'].'</span>
				</a></h3>
				<div class="blockimg2 statuswhen" data-title="'.$row['alco_122'].'">
					<img src="'.$row['alco_121'].'" class="blockright point-a1 "  alt="">
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
					<img src="http://mopito.ru/img/hot.png" class="promohotimg"  alt="Акции">
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
function get_block_footer($row)
	{
		$return = '<div class="allinfo infotop">
				<div class="col-1 point-3">
					<div class="blockright">Создано: '.$data_alko_1.' <span class="'.$row['alco_144'].' text100">'.$row['alco_117'].'</span></div>
				</div>
				<div class="col-2">
                    <span class="AdvStatView">'.get_statistic($row['alco_71']).'</span>
					<a href="'.$row['alco_69'].'" class="blockright">Поднять выше?</a>	
				</div>
			</div>';
				
		return $return;
	}
?>