<?php
include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";
if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		echo the_block($id);
	}
?>