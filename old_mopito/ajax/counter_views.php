<?php
include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";

$url = $_POST['url'];
$month = date('n');

$sql = "SELECT * FROM `alco_views` WHERE `url` = '".$url."'";
$result = sql($sql);
$view = mysqli_fetch_array($result);

if($view['url'] == '')
	{
		for($i=1;$i<13;$i++)
			{
				
				$view_month_name[$i] = '`views_'.$i.'`';
				$view_month_value[$i] = ($i == $month) ? "'1'" : "'0'";
			}
		$month_name = implode(',',$view_month_name);
		$month_value =  implode(',',$view_month_value);
		
		$sql = "INSERT INTO `alco_views`
		(`index0`, `url`, ".$month_name.") 
		VALUES
		('','".$url."',".$month_value.")";
	}
else
	{
		for($i=1;$i<13;$i++)
			{
				
				$view_month[$i] = ($i == $month) ? "`views_".$i."` = '".((int)$view['views_'.$i] + 1)."'" : "`views_".$i."` = '".$view['views_'.$i]."'";
			}
			
		$view_month_set = implode(',',$view_month);
		
	$sql = "UPDATE `alco_views` SET ".$view_month_set." WHERE `index0` = '".$view['index0']."'";

	}
	
sql($sql);

echo json_encode(array('views'=>$view,'sql'=>$sql,'debug' => $view));



?>