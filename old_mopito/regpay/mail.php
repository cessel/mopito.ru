<?php

$user_email = "no-reply@".$_SERVER['SERVER_NAME'];
$mail = "zakaz@logofirm.ru";
//$mail = "dmitriy.programer@gmail.com";

if($_POST['form'] == 'profile'){
	$subject = "Регистрация объявления на mopito.ru";
	$message ="<table width=\"300\" border=\"1\">
		<tr><td>Дата</td><td>".$_POST['timedata']."</td></tr>
		<tr><td>IP Отправителя</td><td>".$_SERVER['REMOTE_ADDR']."</td></tr>
		<tr><td>Наименование компании</td><td>".$_POST['company']."</td></tr>
		<tr><td>Из какого города</td><td>".$_POST['city']."</td></tr>
		<tr><td>...и адрес (при желании)</td><td>".$_POST['adress']."</td></tr>
		<tr><td>Ваше имя</td><td>".$_POST['name']."</td></tr>
		<tr><td>Моб.</td><td>".$_POST['phone']."</td></tr>
		<tr><td>Email</td><td>".$_POST['email']."</td></tr>
		<tr><td>Комментарии</td><td>".$_POST['message']."</td></tr>
		<tr><td>Город показа</td><td>".$_POST['showCity']."</td></tr>
		<tr><td>.. и адрес показа (для точки продаж)</td><td>".$_POST['shouAdres']."</td></tr>
		<tr><td>Тип поставщика</td><td>".$_POST['providerType']."</td></tr>
		<tr><td>Категория</td><td>".$_POST['category']."</td></tr>
		<tr><td>Подкатегория</td><td>".$_POST['subcategory']."</td></tr>";
		foreach($_POST['groups'] as $key => $val){
			$tmp = explode(": ", $val);
			$arr = explode("|", $tmp[1]);
			$message.="<tr style=\"text-align:center; color:#000066;\"><td>Группа</td><td>Значение</td></tr>";	
			for($i = 0; $i<count($arr)-1; $i++){
				$message.="<tr><td>".$tmp[0]."</td><td>".$arr[$i]."</td></tr>";
			}
		}	
	$message.="</table>";
	
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
	
	$subject = "Служба поддержки сайта ".$_SERVER['SERVER_NAME'];
	$message ="Ваше объявление отправлено на модерацию, менеджер свяжется с Вами в ближайшее время";
	
	$boundary = "--".md5(uniqid(time()));
	
	$mailheaders = "MIME-Version: 1.0;\r\n"; 
	$mailheaders .="Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
	$mailheaders .= "From: $user_email <$user_email>\r\n"; 
	$mailheaders .= "Reply-To: $user_email\r\n"; 
	
	$multipart = "--$boundary\r\n"; 
	$multipart .= "Content-Type: text/html; charset=utf-8\r\n";
	$multipart .= "Content-Transfer-Encoding: base64\r\n";    
	$multipart .= "\r\n";
		$message ="<table width=\"300\" border=\"1\">
		<tr><td colspan=\"2\">Добрый день, кто то (надеемся Вы) зарегестрировался на сайте MoPiTo.Ru: </td></tr>
		<tr><td>Дата регистрации</td><td>".$_POST['timedata']."</td></tr>
		<tr><td>Наименование компании</td><td>".$_POST['company']."</td></tr>
		<tr><td>Из какого города</td><td>".$_POST['city']."</td></tr>
		<tr><td>...и адрес (при желании)</td><td>".$_POST['adress']."</td></tr>
		<tr><td>Ваше имя</td><td>".$_POST['name']."</td></tr>
		<tr><td>Моб.</td><td>".$_POST['phone']."</td></tr>
		<tr><td>Email</td><td>".$_POST['email']."</td></tr>
		<tr><td>Комментарии</td><td>".$_POST['message']."</td></tr>
		<tr><td>Город показа</td><td>".$_POST['showCity']."</td></tr>
		<tr><td>.. и адрес показа (для точки продаж)</td><td>".$_POST['shouAdres']."</td></tr>
		<tr><td>Тип поставщика</td><td>".$_POST['providerType']."</td></tr>
		<tr><td>Категория</td><td>".$_POST['category']."</td></tr>
		<tr><td>Подкатегория</td><td>".$_POST['subcategory']."</td></tr>";

	$multipart .= chunk_split(base64_encode($message));
	
	
	mail($mail,$subject,$multipart,$mailheaders);
}

if($_POST['form'] == 'invoice'){
	$subject = "Счет на оплату услуг mopito.ru выставлен";
	$message ="<table width=\"300\" border=\"1\">
		<tr><td>IP Отправителя</td><td>".$_SERVER['REMOTE_ADDR']."</td></tr>
		<tr><td>ID</td><td>".$_POST['id']."</td></tr>
		<tr><td>Выбор услуги</td><td>".$_POST['selectionServices']."</td></tr>
		<tr><td>Способ оплаты</td><td>".$_POST['paymentMethod']."</td></tr>
		<tr><td>Текст</td><td>".$_POST['text']."</td></tr>
		<tr><td> </td><td>".$_POST['text2']."</td></tr>
		<tr><td>Email</td><td>".$_POST['email']."</td></tr>
		<tr><td>Моб.</td><td>".$_POST['phone']."</td></tr>
		<tr><td>Дата счета</td><td>".$_POST['timedata']."</td></tr>
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
	
	$subject = "Служба поддержки mopito.ru".$_SERVER['SERVER_NAME'];
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