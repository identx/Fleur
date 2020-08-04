<?php

function engine_get_content($opts){
	switch($opts[1]){
		default:
		$a=engine_page('404');
		break;
		case '':
		$a=engine_page('index');
		break;
		case 'wedding':
		$a=engine_page('wedding');
		break;
		case 'privacy':
		$a=engine_page('privacy');
		break;

		
	}
	return $a;
};

function engine_redirect($path='',$wsp=false){
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: ".((!$wsp)?"/":"")."".$path);
	exit;
};

function engine_page($page,$EXTRAPARAMS=''){
	$page=($page=='')?'index':$page;
	ob_start();
	include_once('./pages/p_'.$page.'.php');
	$res=ob_get_contents();
	ob_clean();
	return $res;
};

function engine_mail($subject,$body,$email,$from){
	$headers="MIME-Version: 1.0\r\n";
	$headers.="Content-type: text/html; charset=utf-8\r\n";
	$headers.="From: ".iconv("UTF-8","WINDOWS-1251","«Двери России»")." <".$from.">\r\n";
	mail($email,$subject,$body,$headers);
};

?>