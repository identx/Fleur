<?php
header('Content-Type: text/html; charset=utf-8');
include_once("../include/fns_mailer.php");	
include_once("../include/config.php");	

error_reporting(0);

$res=array('status'=>0);
$a=$_POST;

$MAILLIST = ['chocovvay@gmail.com'];
	// $a=array('name'=>'azaza','phone'=>'123-345','time'=>'12:00','address'=>'10th avenue');

$ob=['type','size','name','phone'];
foreach($ob as $o) if(!isset($a[$o])||$a[$o]=='') $err='заполните все поля';

if(strlen($err)>0)
	$res['error']=$err;
else {		
	$head = 'Быстрый заказ букета';
	$text = '<p>Имя: <strong>'.strip_tags($a['name']).'</strong></p>';
	$text .= '<p>Телефон: <strong>'.strip_tags($a['phone']).'</strong></p>';
	$text .= '<p>Тип букета: <strong>'.strip_tags($a['type']).'</strong></p>';
	$text .= '<p>Размера букета: <strong>'.strip_tags($a['size']).'</strong></p>';
	foreach($MAILLIST as $mail)
		$res['status']=sendmailer($head,$text,$mail);
}
exit(json_encode($res));
?>


