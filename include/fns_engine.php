<?php

function engine_get_content($opts){
	switch($opts[1]){
		default:
		$a=engine_page('404');
		break;
		case '':
		$a=engine_page('index');
		break;
		case 'reviews':
		$a=engine_page('reviews');
		break;
		case 'contacts':
		$a=engine_page('contacts');
		break;
		case 'vacancies':
		$a=engine_page('vacancies');
		break;
		case 'products':
		$a=engine_page('products');
		break;
		case 'services':
		$a=engine_page('services');
		break;
		case 'generalnaya-uborka-uborka-posle-remonta':
		$a=engine_page('generalnaya-uborka-uborka-posle-remonta');
		break;
		case 'standartnaya-uborka':
		$a=engine_page('standartnaya-uborka');
		break;
		case 'cart':
		$a=engine_page('cart');
		break;
		case 'mite-lodgiy-i-balkonov':
		$a=engine_page('mite-lodgiy-i-balkonov');
		break;
		case 'mite-fasadov-i-vivesok':
		$a=engine_page('mite-fasadov-i-vivesok');
		break;
		case 'himchistka-matrasov':
		$a=engine_page('himchistka-matrasov');
		break;
		case 'mite-okon-vitragey-vitrin':
		$a=engine_page('mite-okon-vitragey-vitrin');
		break;
		case 'himchistka-koganoy-i-myagkoy-mebeli':
		$a=engine_page('himchistka-koganoy-i-myagkoy-mebeli');
		break;
		case 'himchistka-kovrov':
		$a=engine_page('himchistka-kovrov');
		break;
		case 'himchistka-galyuzi':
		$a=engine_page('himchistka-galyuzi');
		break;
		case 'himchistka-myagkih-igrushek-meha-ovchini-podushek-pledov-i-dr':
		$a=engine_page('himchistka-myagkih-igrushek-meha-ovchini-podushek-pledov-i-dr');
		break;
		case 'stirka-shtor-i-drugogo':
		$a=engine_page('stirka-shtor-i-drugogo');
		break;
		case 'privacy':
		$a=engine_page('privacy');
		break;
		case 'drugie-uslugi-po-uborke':
		$a=engine_page('drugie-uslugi-po-uborke');
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