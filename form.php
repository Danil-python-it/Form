<?php
	$name = htmlspecialchars($_POST['name']) ;
	$tel = htmlspecialchars($_POST['tel']);
	$email = htmlspecialchars($_POST['email']);
	$string = "ваше имя - $name \r\n  ваш телефон - $tel \r\n ваша почта - $email";
	if(mail("Davolk2007@mail.ru","Заказ",$string)){
		echo "TRUE";
	} else{
		echo "FALSE";
	}
	
?>
