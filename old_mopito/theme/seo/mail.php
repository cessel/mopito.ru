<?php



$user_email = "no-reply@".$_SERVER['SERVER_NAME'];

$mail = "zakaz@logofirm.ru";

//$mail = "dmitriy.programer@gmail.com";


if($_POST['form'] == 'invoice'){

	$subject = "Запрос на СЕО";

	$message ="<table width=\"300\" border=\"1\">

		<tr><td>IP Отправителя</td><td>".$_SERVER['REMOTE_ADDR']."</td></tr>

		<tr><td>Город продвижения</td><td>".$_POST['company']."</td></tr>
		
		<tr><td>Сайт</td><td>".$_POST['city']."</td></tr>
		
		<tr><td>Ключ.фраза</td><td>".$_POST['name']."</td></tr>

		<tr><td>Выбор услуги</td><td>".$_POST['selectionServices']."</td></tr>

		<tr><td>Способ оплаты</td><td>".$_POST['paymentMethod']."</td></tr>

		<tr><td>Текст</td><td>".$_POST['text']."</td></tr>

		<tr><td>Email</td><td>".$_POST['email']."</td></tr>

		<tr><td>Моб.</td><td>".$_POST['phone']."</td></tr>

		<tr><td>Дата запроса</td><td>".$_POST['timedata']."</td></tr>

		</table>";

	

	$boundary = "--".md5(uniqid(time()));

	$mailheaders = "MIME-Version: 1.0;\r\n"; 

	$mailheaders .="Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

	$mailheaders .= "From: $user_email <$user_email>\r\n"; 

	$mailheaders .= "Reply-To: $user_email\r\n"; 

	

	$multipart = "--$boundary\r\n"; 

	$multipart .= "Content-Type: text/html; charset=utf-8\r\n";

	$multipart .= "Content-Transfer-Encoding: base64\r\n";    

	$multipart .= "\r\n";

	$multipart .= chunk_split(base64_encode($message));

	

	

	mail($mail,$subject,$multipart,$mailheaders);

	

	/****************************************************/

	

	$user_email = "no-reply@".$_SERVER['SERVER_NAME'];

	$mail = $_POST['email'];

	

	$subject = "Запрос на СЕО услуги продвижения сайта";

	$message ="Ваш запрос отправлен менеджеру, который с Вами свяжется в ближайшее время. Спасибо";

	

	$boundary = "--".md5(uniqid(time()));

	

	$mailheaders = "MIME-Version: 1.0;\r\n"; 

	$mailheaders .="Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

	$mailheaders .= "From: $user_email <$user_email>\r\n"; 

	$mailheaders .= "Reply-To: $user_email\r\n"; 

	

	$multipart = "--$boundary\r\n"; 

	$multipart .= "Content-Type: text/html; charset=utf-8\r\n";

	$multipart .= "Content-Transfer-Encoding: base64\r\n";    

	$multipart .= "\r\n";

	$multipart .= chunk_split(base64_encode($message));

	

	

	mail($mail,$subject,$multipart,$mailheaders);

}

?>