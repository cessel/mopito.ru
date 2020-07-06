<?php
include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";

$start = $_POST['start'];
$stop = $_POST['stop'];
$stop = ($stop>51) ? 51 : $stop ;
$start = ($start<1) ? 1 : $start ;
$pagetype = (isset($_POST['pagetype'])) ? $_POST['pagetype'] : '_krepkie_msk';

 


$error = '';
$blocks = array();

if(isset($_POST['filter_field']) && isset($_POST['filter_value']))
	{
		$filter_field = $_POST['filter_field'];
		$filter_value = $_POST['filter_value'];
		
		
				for($i=$start;$i<$stop;$i++)
					{
						$print_block = the_block($pagetype,$i,array($filter_field,$filter_value));
						if($print_block == 'stop')
							{
								$error = 'stop1';
								break;
							}
						else
							{
								$blocks[] =  $print_block;
							}
					}
		
		
	}
else
	{
		
		if($start<=51)
			{
				for($i=$start;$i<$stop;$i++)
					{
						$print_block = the_block($pagetype,$i);
						if($print_block == 'stop')
							{
								$error = 'stop3';
								break;
							}
						else
							{
								$blocks[] =  $print_block;
							}
					}
			}
		else
			{
				$error = 'stop3';
			}
	}
	
//echo $blocks[0];
if(count($blocks)==0)
	{
		$error = 'not_found';
	}


$result = array(
		'blocks'	=>	implode('',$blocks),
		'error'=>$error
	);
echo json_encode($result);
?>