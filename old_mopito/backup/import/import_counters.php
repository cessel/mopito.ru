<?php

include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";

if(recaptcha_test($_POST['g_recaptcha_response']))
	{
var_dump($_FILES['inputfile']);
if(isset($_FILES) && $_FILES['inputfile']['error'] == 0)
	{ // Проверяем, загрузил ли пользователь файл
	$destiation_dir = dirname(__FILE__) .'/import_file.xlsx'; // Директория для размещения файла
	move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию

	$sql = 'DROP TABLE IF EXISTS `alco_clicks`';
	sql($sql);

	$sql = 'DROP TABLE IF EXISTS `alco_views`';
	sql($sql);

	
	
	
	
	
	require_once $_SERVER['DOCUMENT_ROOT']."/import/PHPExcel/IOFactory.php"; // подключаем класс для доступа к файлу
	$objPHPExcel = PHPExcel_IOFactory::load($destiation_dir);
			$header = '';
					
			$i=1;
			$j=1;
			$pages = array();
			foreach ($objPHPExcel->setActiveSheetIndex(0)->getRowIterator() as $row) // обходим все строки
				{
					$cellIterator = $row->getCellIterator();
					$cellIterator->setIterateOnlyExistingCells(false);
					$line_clicks = '';
					$line_views = '';
					$j = 0;
					foreach ($cellIterator as $cell) 
						{
							if($i != 1)
								{
									
									if($j > 2)
										{
											$stats_data = explode('/',$cell->getValue());
											
											$line_clicks[] = '\''.$stats_data[1].'\'';
											$line_views[] = '\''.$stats_data[0].'\'';
										}
									else if($j == 2)
										{
											$line_clicks[] = '\''.$cell->getValue().'\'';
										}
									else 
										{
											
											$line_clicks[] = '\''.$cell->getValue().'\'';
											$line_views[] = '\''.$cell->getValue().'\'';
										}
								}
							$j++;
						}
						
						$rows_clicks[] = implode(',',$line_clicks);
						if(!in_array($line_views[1],$pages))
							{
								$rows_views[] = implode(',',$line_views);
							}
						$pages[] = $line_views[1];
						$i++;
				}

		for($row_i = 1;$row_i<count($rows_clicks);$row_i++)
			{
				$new_rows_clicks[] = $rows_clicks[$row_i];
			}
		for($row_i = 1;$row_i<count($rows_views);$row_i++)
			{
				$new_rows_views[] = $rows_views[$row_i];
			}
	$sql = 'CREATE TABLE `alco_views` (
 `index0` int(11) NOT NULL AUTO_INCREMENT,
 `url` text NOT NULL,
 `views_1` int(11) NOT NULL,
 `views_2` int(11) NOT NULL,
 `views_3` int(11) NOT NULL,
 `views_4` int(11) NOT NULL,
 `views_5` int(11) NOT NULL,
 `views_6` int(11) NOT NULL,
 `views_7` int(11) NOT NULL,
 `views_8` int(11) NOT NULL,
 `views_9` int(11) NOT NULL,
 `views_10` int(11) NOT NULL,
 `views_11` int(11) NOT NULL,
 `views_12` int(11) NOT NULL,
 KEY `index0` (`index0`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8';
		sql($sql);
	$sql = 'CREATE TABLE `alco_clicks` (
 `index0` int(11) NOT NULL AUTO_INCREMENT,
 `url` text NOT NULL,
 `product_id` text NOT NULL,
 `clicks_1` int(11) NOT NULL,
 `clicks_2` int(11) NOT NULL,
 `clicks_3` int(11) NOT NULL,
 `clicks_4` int(11) NOT NULL,
 `clicks_5` int(11) NOT NULL,
 `clicks_6` int(11) NOT NULL,
 `clicks_7` int(11) NOT NULL,
 `clicks_8` int(11) NOT NULL,
 `clicks_9` int(11) NOT NULL,
 `clicks_10` int(11) NOT NULL,
 `clicks_11` int(11) NOT NULL,
 `clicks_12` int(11) NOT NULL,
 KEY `index0` (`index0`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8';
		sql($sql);
		
	


	/*for($n = 85; $n<count($header);$n++)
		{
			$sql = 'ALTER TABLE `alco_base` ADD '.$header[$n].' TEXT NOT NULL;';
			sql($sql);
		}*/
	//$sql = 'ALTER TABLE `alco_base` ADD `vcolumn_name` VARCHAR(255) NOT NULL;';
	  
	  
	  
		$sql = 'INSERT INTO
		`alco_clicks`
		(`index0`, `url`, `product_id`, `clicks_1`, `clicks_2`, `clicks_3`, `clicks_4`, `clicks_5`, `clicks_6`, `clicks_7`, `clicks_8`, `clicks_9`, `clicks_10`, `clicks_11`, `clicks_12`)
		VALUES
	';
	$k = 0;
	foreach($new_rows_clicks as $r)
		{
			if($k != 0)
				{
					$sql .= ',';
				}
			$sql .= '('.$r.')';
			$k = 1;
		}
		sql($sql);
		
		
		
		
		$sql = 'INSERT INTO
		`alco_views`
		(`index0`, `url`, `views_1`, `views_2`, `views_3`, `views_4`, `views_5`, `views_6`, `views_7`, `views_8`, `views_9`, `views_10`, `views_11`, `views_12`)
		VALUES
	';
	$k = 0;
	foreach($new_rows_views as $r)
		{
			if($k != 0)
				{
					$sql .= ',';
				}
			$sql .= '('.$r.')';
			$k = 1;
		}
		sql($sql);
	  
	
//'.implode(',',$new_rows).'



	}
else
	{
		echo 'Ошибка загрузки файла'; // Оповещаем пользователя о том, что файл не был загружен
	}

	}
else
	{
		echo 'Пройдите проверку на бота';
	}
?>


