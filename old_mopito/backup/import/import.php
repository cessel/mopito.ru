<?php
include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";
if(recaptcha_test($_POST['g_recaptcha_response']))
	{

var_dump($_FILES['inputfile']);
if(isset($_FILES) && $_FILES['inputfile']['error'] == 0)
	{ // Проверяем, загрузил ли пользователь файл
	$destiation_dir = dirname(__FILE__) .'/import_file.xlsx'; // Директория для размещения файла
	move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию

	$sql = 'DROP TABLE IF EXISTS `alco_base`';
	sql($sql);

	require_once $_SERVER['DOCUMENT_ROOT']."/import/PHPExcel/IOFactory.php"; // подключаем класс для доступа к файлу
	$objPHPExcel = PHPExcel_IOFactory::load($destiation_dir);
			$header = '';
					
			$i=1;
			$j=1;
			foreach ($objPHPExcel->setActiveSheetIndex(0)->getRowIterator() as $row) // обходим все строки
				{
					$cellIterator = $row->getCellIterator();
					$cellIterator->setIterateOnlyExistingCells(false);
					$line = array();
					$j = 0;
					foreach ($cellIterator as $cell) 
						{
							if($i == 1)
								{
									$value = $cell->getValue();
									$value = ($value == '') ? "index_".$j++ : $value;
									$header[] = '`'.$value.'`';
								}
							else
								{
									if($j == 1)
										{
											$line[] = '\''.$cell->getFormattedValue().'\'';
											//var_dump($cell->getFormattedValue());
										}
									/*else if($j == 21)
										{
											$line[] = '\''.$cell->getFormattedValue().'\'';
											//var_dump($cell->getFormattedValue());
										}*/
									else{
										$line[] = '\''.$cell->getFormattedValue().'\'';

									}
									$j++;
								}
						}
						$rows[] = implode(',',$line);
						$i++;
				}
		for($row_i = 2;$row_i<count($rows);$row_i++)
			{
				$new_rows[] = $rows[$row_i];
			}

	$varchararray = array
		(
			'alco_9',
			'alco_131',
			'alco_134',
			'alco_137',
			'alco_157',
			'alco_158',
			'alco_159',
			'alco_160',
			'alco_161',
			'alco_162',
			'alco_163',
			'alco_164',
			'alco_165',
			'alco_166',
			'alco_167',
			'alco_168',
			'alco_169',
			'alco_170',
			'alco_172'
		);
		
	$sql = 'CREATE TABLE
		`alco_base` 
			(	';
		$flag = false;
		$n = 0;
		$m = 0;
		foreach($header as $head)
			{
				/*if($n++<85)
					{*/
						if($flag)
							{
								$sql .= ", ";
								
							}
						if($m == 1)
							{
								//$type_field = 'DATE NOT NULL';
								$type_field = 'TEXT NOT NULL';
							}
						else
							{
								$type_field = 'TEXT NOT NULL';
							}
							
						if(in_array($head,$varchararray))
							{
								$type_field = 'varchar(512) NOT NULL';
								$type_field = 'TEXT NOT NULL';

							}
						$sql .= $head.' '.$type_field;
						$flag = true;

					/*}*/
					$m++;
			}
				
		$sql .= ') ENGINE = InnoDB DEFAULT CHARSET=utf8;';
		sql($sql);
		
	
	/*for($n = 85; $n<count($header);$n++)
		{
			$sql = 'ALTER TABLE `alco_base` ADD '.$header[$n].' TEXT NOT NULL;';
			sql($sql);
		}*/
	//$sql = 'ALTER TABLE `alco_base` ADD `vcolumn_name` VARCHAR(255) NOT NULL;';
	  
	  
	  
		$sql = 'INSERT INTO
		`alco_base`
		('.implode(',',$header).')
		VALUES
	';
	$k = 0;
	foreach($new_rows as $r)
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