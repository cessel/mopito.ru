<?php

include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";



$pagetype = (isset($_POST['pagetype'])) ? $_POST['pagetype'] : '_krepkie_msk';

$page = (isset($_POST['page'])) ? $_POST['page'] : '1';

$filter = (isset($_POST['filter'])) ? $_POST['filter'] : '0';



$start = 0 + (10 * ($page - 1));

$stop = 10; // + (10 * ($page - 1));

$return_array[0] = 'Ждем ваших предложений  <a href="/theme/regpay/reg.php" class="blockright">Разместить</a>';



$ids = array();

$debug = $filter;

if(!$filter)

	{

		$ids_arr = get_block_ids($start,$stop);

		$ids = $ids_arr['ids'];

		//$ids = get_block_ids($start,$stop);

		//$debug = "NO_FILTER";

		$debug = $ids_arr['sql'];

	}

else

	{

		//$ids = get_filtered_block_ids($start,$stop,$filter);

		$ids_arr = get_filtered_block_ids($start,$stop,$filter);

		$ids = $ids_arr['ids'];

		$debug = $ids_arr['sql'];



	}

if(count($ids) > 0)

	{

		$return_array = array();

		foreach($ids as $id)

			{

				$return_array[] = get_block_html($id);

			}

	}

else if($page==1)

	{

		$return_array[0] = 'Ждем ваших предложений  <a href="/theme/regpay/reg.php" class="blockright"> Разместить </a>';

	}

else

	{

		$return_array[0] = '';

		$error = 'stop';

	}





$result = array(

		'return_html'	=>	implode(',',$return_array),

		'error'=>$error,

		'debug'=>$debug

	);

echo json_encode($result);

?>