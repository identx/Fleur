<?php /*?>*/

function output_header(){
	global $opts;
	global $discount;
	$v = 23;

	$r = '<!DOCTYPE html>
	<html>
	<head>
	<title>Fleur '.$_SERVER['page']['title'].'</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" conent="identx">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="fonts/fontawesome/css/fontawesome.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/brands.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/solid.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/regular.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="media/owlcarousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="media/owlcarousel/assets/owl.theme.default.css">
	<link rel="stylesheet" href="css/main.css?v='.$v.'">
	<link rel="stylesheet" href="css/media.css?v='.$v.'">
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css">
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
	<script src="media/owlcarousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.min.js"></script>
	</head>
	<body>
	<div class="popup_bg">
	<div class="popup_box_bg">
	<div class="popup">
	<div class="popup_close_button"></div>                    
	<div class="popup_header_text">
	<div class="popup_form_text">
	<div class="popup_header">Заказ букета “<span class="order_name"></span>”</div>
	<div class="popup_text">Оставьте заявку и я перезвоню в течение 10 минут для уточнения деталей</div>
	</div>
	<div class="popup_order_notice_text">
	<div class="popup_header">Ваш заказ принят</div>
	<div class="popup_text">Спасибо за доверие!</div>
	</div>
	<div class="popup_question_text">
	<div class="popup_header">Ваш вопрос принят</div>
	<div class="popup_text">Ожидайте звонка</div>
	</div>
	</div>
	<div class="popup_content">
	<form>
	<select class="popup_form_select" name="bouquet_size" style="width: 100%;">
	<option class="placeholder"></option>
	<option value="big">большой</option>
	<option value="medium">средний</option>
	<option value="small">маленький</option>
	</select>
	<div class="form_cost_box">
	<div class="form_cost_name">Стоимость:</div>
	<div class="form_cost_value"><span class="order_price"></span></div>
	</div>
	<input class="popup_form_input" type="text" name="name" placeholder="Ваше имя">
	<input class="popup_form_input" type="tel" name="phone" placeholder="Телефон">
	<label class="check_block">
	<input type="checkbox" name="delivery">
	<div class="check_block_text">Нужна бесплатная доставка</div>
	</label>
	<input class="popup_form_input" type="text" name="address" placeholder="Адрес доставки" disabled="disabled">
	<div class="alert alert-danger" role="alert">
 
</div>
	<input type="button" class="popup_button popup_form_button" name="form_button" value="Заказать букет">
	</form>
	
	<div class="popup_order_notice_content">
	<div class="popup_notice_picture">
	<img src="media/notice_order_pic.svg">
	</div>
	<button class="popup_button popup_notice_button" name="notice_button">Вернуться на сайт</button>
	</div>
	</div>
	<p class="privacy-info text-center">Оставляя свои контактные данные, вы соглашаетесь на обработку персональных данных в соответствии с <a href="/privacy">Политикой конфиденциальности</a></p>
	</div>  

	</div>
	<div class="popup_notice_bg"></div>            
	</div>    ';
	if($_SERVER['REQUEST_URI'] == '/') {
		$r.='    
		<section class="section_header">
		<div class="header_frame"></div>
		<div class="header_mobile_menu_line"></div>
		<header class="header">
		<div class="header_logo">
		<a href="/">
		<img src="media/logo_header.png">
		</a>
		</div>
		<div class="header_menu">
		<ul>
		<li><a href="#order">Как заказать букет?</a></li>
		<li><a href="#catalog">Каталог букетов</a></li>
		<li><a href="#weddings_decoration"><span class="icon_rings"></span>Оформление свадеб</a></li>
		</ul>
		</div>
		<div class="header_contacts">
		<i class="fas fa-phone-alt"></i>
		<a class="phone_link" href="tel:+79095250275">+7 909 525-02-75</a>
		</div>
		<div class="header_mobile_menu_button"></div>
		</header>
		<div class="header_mobile_menu_box">
		<div class="header_mobile_menu">
		<div class="header_mobile_menu_list">
		<ul>
		<li><a href="#order">Как заказать букет?</a></li>
		<li><a href="#catalog">Каталог букетов</a></li>
		<li><a href="#weddings_decoration"><span class="icon_rings"></span>Оформление свадеб</a></li>
		</ul>                        
		</div>
		<div class="header_mobile_contacts">
		<i class="fas fa-phone-alt"></i>
		<a class="phone_link" href="tel:+79095250275">+7 909 525-02-75</a>
		</div>
		<div class="header_mobile_menu_close_button"></div>                    
		</div>                
		</div>
		<div class="header_cotainer container">
		<div class="header_banner">
		<h1 class="main_banner_header">
		Букетная мастерская в Абазе
		</h1>
		<div class="main_banner_text">
		Эксклюзивные цветочные и food-букеты ручной работы. Свадебное оформление фотозон, залов, аксессуаров
		</div>
		<div class="main_banner_button">
		<a href="#order_form">Заказать букет</a>                        
		</div>
		</div>                
		</div>
		<div class="social_links">
		<ul>
		<li><a href="https://www.instagram.com/fleur_abaza/" rel="nofollow" target="_blank"><i class="fab fa-instagram"></i></a></li>
		<li><a href="https://api.whatsapp.com/send?phone=79095250275" rel="nofollow" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
		<li><a href="viber://chat?number=79095250275" rel="nofollow" target="_blank"><i class="fab fa-viber"></i></a></li>
		<li><a href="https://vk.com/public_fleur19" rel="nofollow" target="_blank"><i class="fab fa-vk"></i></a></li>
		</ul>
		</div>
		<div class="actual_offers">
		<ul>
		<li>
		<a href="/#catalog">
		<div class="bouquet">
		<div class="bouquet_image">
		<img src="media/b_classic.png">
		</div>
		<div class="bouquet_name">Классические<br> букеты</div>
		</div>
		</a>
		</li>
		<li>
		<a href="/#catalog">
		<div class="bouquet">
		<div class="bouquet_image">
		<img src="media/b_box.png">
		</div>
		<div class="bouquet_name">В коробке/<br> корзине</div>
		</div>
		</a>
		</li>
		</ul>
		<ul>
		<li>
		<a href="/#catalog">
		<div class="bouquet">
		<div class="bouquet_image">
		<img src="media/b_svad.png">
		</div>
		<div class="bouquet_name">Свадебные<br> букеты</div>
		</div>
		</a>
		</li>
		<li>
		<a href="/#catalog">
		<div class="bouquet">
		<div class="bouquet_image">
		<img src="media/b_eat.png">
		</div>
		<div class="bouquet_name">Food-букеты</div>
		</div>
		</a>
		</li>
		</ul>
		</div>
		</section>
		';
	}else {
		$r.='
		<div class="wedding-header">
		<header class="header">
		<div class="header_logo">
		<a href="/">
		<img src="media/logo_header.png">
		</a>
		</div>
		<div class="header_menu">
		<ul>
		<li><a href="#order">Как заказать букет?</a></li>
		<li><a href="#catalog">Каталог букетов</a></li>
		<li><a href="#weddings_decoration"><span class="icon_rings"></span>Оформление свадеб</a></li>
		</ul>
		</div>
		<div class="header_contacts">
		<i class="fas fa-phone-alt"></i>
		<a class="phone_link" href="tel:+79999999999">+7 909 525-02-75</a>
		</div>
		<div class="header_mobile_menu_button"></div>
		</header></div>
		';
	}
	
	
	return $r;
}

function output_footer(){

	$r='
	<footer class="footer">
	<div class="frame5"></div>
	<div class="frame6"></div>
	<div class="frame7"></div>
	<div class="frame_vector"></div>
	<div class="footer_container container">
	<div class="row">
	<div class="col-12 col-md-4 col-xl-6">
	<div class="footer_contacts">
	<div class="footer_logo">
	<a href="">
	<img src="media/logo_fleur_footer.svg">
	</a>
	</div>
	<div class="footer_logo_description">букетная мастерская в Абазе</div>
	<div class="footer_menu">
	<ul>
	<li><a href="/#order">Как заказать букет?</a></li>
	<li><a href="/#catalog">Каталог букетов</a></li>
	<li><a href="/#weddings_decoration">Оформление свадеб</a></li>                                    
	</ul>
	</div>
	<div class="footer_social">
	<ul>
	<li><a href="https://www.instagram.com/fleur_abaza/" rel="nofollow" target="_blank"><i class="fab fa-instagram"></i></a></li>
	<li><a href="https://api.whatsapp.com/send?phone=79095250275" rel="nofollow" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
	<li><a href="viber://chat?number=79095250275" rel="nofollow" target="_blank"><i class="fab fa-viber"></i></a></li>
	<li><a href="https://vk.com/public_fleur19" rel="nofollow" target="_blank"><i class="fab fa-vk"></i></a></li>
	</ul>
	</div>
	<div class="footer_phone">
	<i class="fas fa-phone-alt"></i>
	<a class="phone_link" href="tel:+79095250275">+7 909 525-02-75</a>
	</div>
	</div>
	</div>
	<div class="col-12 col-md-8 col-xl-6">
	<div class="question_box">
	<div class="question_box_header">Есть вопросы?</div>
	<div class="question_box_text">Оставьте сообщение и я обязательно вам отвечу</div>
	<form>
	<div class="inputs_row">
	<input class="question_input" type="text" name="name" placeholder="Ваше имя">
	<input class="question_input" type="tel" name="phone" placeholder="Телефон">
	</div>
	<textarea class="question_textarea" name="question_text" placeholder="Текст вопроса"></textarea>
	<div class="alert alert-danger" role="alert">
 
</div>
	<input type="button" class="question_button" name="question_button" value="Отправить вопрос">
	</form>
	<p class="privacy-info text-center">Оставляя свои контактные данные, вы соглашаетесь на обработку персональных данных в соответствии с <a href="/privacy">Политикой конфиденциальности</a></p>
	</div>
	</div>
	</div>                
	</div>
	<div class="identx_box">
	<div id="identx">
	<span class="identx-ad-links">
	<a href="//identx.ru/?utm_source=copyright&amp;utm_medium=">создание сайтов</a><br>
	<a href="//identx.ru/реклама-яндекс-google/?utm_source=copyright&amp;utm_medium=" >реклама в интернете</a>
	</span>
	<a class="identx-logo-link" href="//identx.ru/?utm_source=copyright&amp;utm_medium=">
	<img src="../media/logo_identx.svg">
	<span class="identx-logo-name"><span class="green-letter">A</span>йдентика</span>
	</a>
	</div>
	</div>
	</footer>
	
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/cookiealert.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src="js/main.js"></script>

	</body>
	</html>  	
	';
	return $r;
}


/**
 * Плюральная форма слова
 *
 * @param i Значение для форматирования
 * @param str1 Первая форма слова
 * @param str2 Вторая форма слова
 * @param str3 Третья форма слова
 * @returns string
 */

function plural_str($i,$str1,$str2,$str3){
	switch(plural($i)){
		case 0: return $str1;
		case 1: return $str2;
		default: return $str3;
	}
};

function plural($a){
	if($a%10==1&&$a%100!=11) return 0;
	elseif($a%10>=2&&$a%10<=4&&($a%100<10||$a%100>=20)) return 1;
	else return 2;
};

