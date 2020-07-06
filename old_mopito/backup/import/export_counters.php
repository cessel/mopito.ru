<?php

include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";

if(recaptcha_test($_POST['g_recaptcha_response']))

	{



$sql = "SELECT * FROM `alco_clicks` WHERE 1";

$result_clicks = sql($sql);



$sql = "SELECT * FROM `alco_views` WHERE 1";

$result_views = sql($sql);



$n = 0;

while($row_views = mysqli_fetch_array($result_views)) 

	{

		for($i=1;$i<13;$i++)

			{

				$data[$row_views['url']][$i] = $row_views['views_'.$i];

			}

	}

$header = array('№пп','Путь к странице','ID товара','Посещения Январь','Посещения Февраль','Посещения Март','Посещения Апрель','Посещения Май','Посещения Июнь','Посещения Июль','Посещения Август','Посещения Сентябрь','Посещения Октябрь','Посещения Ноябрь','Посещения Декабрь');

$j=0;

while($row_clicks = mysqli_fetch_array($result_clicks)) 

	{

		$line[$j][] = $row_clicks['index0'];

		$line[$j][] = $row_clicks['url'];

		$line[$j][] = $row_clicks['product_id'];

		$k = 1;

		foreach($data[$row_clicks['url']] as $d)

			{

				$line[$j][] = $d.'/'.$row_clicks['clicks_'.$k++];

			}

				

		$j++;

	}

$filename = 'statistic_'.date('d_m_y_G_i').'.csv';

$hander = fopen($filename,'w+');

foreach($header as $h)

	{

		$new_header[] = mb_convert_encoding($h,'UTF-8');

	}



fputcsv($hander,$new_header);

foreach($line as $l)

	{

		fputcsv($hander,$l);

	}

fclose($hander);



echo "Экспорт успешно завершен<br>";

echo "<a href='".$filename."'>Скачать файл</a>";

	}

else

	{

		echo 'Пройдите проверку на бота';

	}





?>





