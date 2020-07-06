<?
include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";
$sql = "SELECT * FROM `alco_views` WHERE 1";
$result = sql($sql);

$view = mysqli_fetch_array($result);
var_dump($view);

$view = mysqli_fetch_array($result);
var_dump($view);

?>