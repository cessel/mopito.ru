<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 31.07.2019
 * Time: 18:23
 */

include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";


$return['status'] = 0;
$return['html'] = '';
$return['debug'] = $_POST;


$levels_db = ['alco_12','alco_18','alco_22'];

$request_uri = explode(',',$_POST['request_uri']);

$where = get_conditions($request_uri,$_POST['filter']);


$page = (isset($_POST['page'])) ? $_POST['page'] : '1';

$start = 0 + (10 * ($page - 1));
$stop = 10; // + (10 * ($page - 1));
$limit = ($start !== false && $stop !== false) ? 'LIMIT '.$start.','.$stop : '';



$sql = "SELECT `index_0` FROM `alco_base_new` WHERE ".$where." ORDER BY `index_0` ".$limit;




$result = sql($sql);
$ids = [];
while($id = mysqli_fetch_array($result))
{
	if($id[0] != '')
	{
		$ids[] = $id[0];
	}
}


if(count($ids) > 0)
	{
		$return_array = '';

		foreach($ids as $id)
			{
				$block_html = get_block_html($id,$request_uri);
				if($block_html != '')
					{
						$return_array .=  $block_html;
					}
			}

		$return['html'] = $return_array;
		$return['debug'] = $sql;

	}
else if($page==1)
	{
		$return_array[0] = 'Ждем ваших предложений  <a href="/theme/regpay/reg.php" class="blockright"> Разместить </a>';
	}
else
	{
		$return_array[0] = '';
		$return['status'] = 'stop';
	}










echo json_encode($return);