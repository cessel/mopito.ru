<?php
include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";

$url = $_POST['url'];
$month = date('n');
$product_id = $_POST['product_id'];


$sql = "SELECT * FROM `alco_clicks` WHERE `url` = '".$url."'";
$result = sql($sql);
$view = mysqli_fetch_array($result);

if($view['url'] == '')
	{
		for($i=1;$i<13;$i++)
			{
				
				$view_month_name[$i] = '`clicks_'.$i.'`';
				$view_month_value[$i] = ($i == $month) ? "'1'" : "'0'";
			}
		$month_name = implode(',',$view_month_name);
		$month_value =  implode(',',$view_month_value);
		
		$sql = "INSERT INTO `alco_clicks`
		(`index0`, `url`,`product_id`, ".$month_name.") 
		VALUES
		('','".$url."','".$product_id."',".$month_value.")";
	}
else if($view['product_id'] != $product_id)
	{
		$flag = false;
		while($view = mysqli_fetch_array($result))
			{
				if($view['product_id'] == $product_id)
					{
						$flag = true;
						for($i=1;$i<13;$i++)
							{
								
								$view_month[$i] = ($i == $month) ? "`clicks_".$i."` = '".((int)$view['clicks_'.$i] + 1)."'" : "`clicks_".$i."` = '".$view['clicks_'.$i]."'";
							}
							
						$view_month_set = implode(',',$view_month);
						
					$sql = "UPDATE `alco_clicks` SET ".$view_month_set." WHERE `index0` = '".$view['index0']."'";
						break;
					}
			}
		if(!$flag)
			{
				for($i=1;$i<13;$i++)
						{
							
							$view_month_name[$i] = '`clicks_'.$i.'`';
							$view_month_value[$i] = ($i == $month) ? "'1'" : "'0'";
						}
					$month_name = implode(',',$view_month_name);
					$month_value =  implode(',',$view_month_value);
					
					$sql = "INSERT INTO `alco_clicks`
					(`index0`, `url`,`product_id`, ".$month_name.") 
					VALUES
					('','".$url."','".$product_id."',".$month_value.")";

			}

	}
else
	{
		for($i=1;$i<13;$i++)
			{
				
				$view_month[$i] = ($i == $month) ? "`clicks_".$i."` = '".((int)$view['clicks_'.$i] + 1)."'" : "`clicks_".$i."` = '".$view['clicks_'.$i]."'";
			}
			
		$view_month_set = implode(',',$view_month);
		$sql = "UPDATE `alco_clicks` SET ".$view_month_set." WHERE `index0` = '".$view['index0']."'";

	}
sql($sql);

echo json_encode(array('views'=>$view,'sql'=>$sql));



?>