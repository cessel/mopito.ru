<?
include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";
$product_id = $_POST['product_id'];
$request_uri = explode(',',$_POST['request_uri']);




$return['status'] = 0;
$return['html'] = get_statistic($product_id,$request_uri);
$return['debug'] = $_POST;



echo json_encode($return);
