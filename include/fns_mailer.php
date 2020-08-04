<?php
require("phpmailer/class.phpmailer.php");
require("phpmailer/class.smtp.php");
function sendmailer($subject,$body,$toemail){
	$email="potolokservis-abakan@yandex.ru";
	$mserv="smtp.yandex.ru";
	$mlogin="potolokservis-abakan@yandex.ru";
	$mpass="q1w2e3r4t5y6";
	$mail = new PHPMailer();
	$mail->SMTPSecure 	= "ssl"; 
	$mail->Port 		= 465;
	// $mail->IsSMTP(); // отсылать используя SMTP
	$mail->Host     = $mserv; // SMTP сервер
	$mail->SMTPAuth = true;     // включить SMTP аутентификацию
	$mail->Username = $mlogin;  // SMTP username
	$mail->Password = $mpass; // SMTP password
	
	$mail->From     = $email; // укажите от кого письмо 
	$mail->FromName = "Fleur - Доставка цветов в Абазе, бесплатная доставка"; // имя отправителя
	$mail->AddAddress($toemail); // е-мэил кому отправлять
	// $mail->AddReplyTo($mfrom,$name); // е-мэил того кому придет ответ на ваше письмо
	$mail->WordWrap = 50;// set word wrap
	$mail->IsHTML(true);// отправить в html формате
	$mail->Subject  =  "$subject"; // тема письма
	$mail->Body     =  "$body"; // тело письма в html формате
	$mail->AltBody  =  ""; // тело письма текстовое

	if(!$mail->Send())
	{
	// echo "Service Mailer Error: ".$mail->ErrorInfo;
		return false;
	} else
	return true;
}
?>
