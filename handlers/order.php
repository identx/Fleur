<?php
header('Content-Type: text/html; charset=utf-8');
include_once("../include/fns_mailer.php");	
include_once("../include/config.php");	

error_reporting(0);

$res=array('status'=>0);
$a=$_POST;

$MAILLIST = ['chocovvay@gmail.com'];
	// $a=array('name'=>'azaza','phone'=>'123-345','time'=>'12:00','address'=>'10th avenue');

$ob=['client_name','order_size', 'client_phone'];
foreach($ob as $o) if(!isset($a[$o])||$a[$o]=='') $err='заполните все поля';

if(strlen($err)>0)
	$res['error']=$err;
else {		
	$head = 'Заказ букета '.strip_tags($a['order_name']);
		$text = '<p>:Размер букета: <strong>'.strip_tags($a['order_size']).'</strong></p>';
		$text .= '<p>:Имя: <strong>'.strip_tags($a['client_name']).'</strong></p>';
		$text .= '<p>Телефон: <strong>'.strip_tags($a['client_phone']).'</strong></p>';
		$text .= '<p>Доставка: <strong>'.strip_tags($a['delivery']).'</strong></p>';
		if ($a['delivery']) {
			$text .= '<p>Доставка, адрес: <strong>'.strip_tags($a['address']).'</strong></p>';
		}

		foreach($MAILLIST as $mail)
			$res['status']=sendmailer($head,$text,$mail);
	}
	exit(json_encode($res));
	?>


