<?php /*?>*/

function output_header(){
	global $opts;
	global $discount;
	$v = 23;
	$cat = new Catalog('mcatu_');
	$categories = $cat->getCats($root=0);
	$r='<!DOCTYPE html>
	<html lang="ru">
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<title>'.$_SERVER['page']['title'].' Марафет - Профессиональная уборка помещений и территорий</title>
	<meta name="description" content="" />
	
	<link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="../libs/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="../libs/owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/styles.css?v='.$v.'">
	<link rel="stylesheet" href="/css/media.css?v='.$v.'">
	<link rel="stylesheet" href="../libs/select2/css/select2.min.css">
	<link rel="stylesheet" href="../libs/hamburgers/hamburgers.min.css">
	<link rel="stylesheet" href="../libs/sweetalert2/sweetalert2.min.css">
	<link rel="stylesheet" href="../libs/fancybox/jquery.fancybox.min.css">

	
	

	</head>
	<body>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(61160110, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/61160110" style="; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<div class="modal fade" id="call-manager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">Выберите удобный способ связи</h5>
	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>
	<p>также вы можете позвонить нам самостоятельно по номерам: <br>
	<a href="tel:73902305880">+7 (3902) 305-880</a>,  <a href="tel:79134446600">+7 913 444-66-00</a></p>
	</div>
	<div class="modal-body">
	<div class="container">
	<div class="row">
	<div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1">
	<div class="call-item">
	<img src="../images/whatsapp-2 2.svg" alt="" height="75">
	<a href="https://api.whatsapp.com/send?phone=79134446600" title="WhatsApp: 79134446600" rel="nofollow" target="_blank" class="to-whatsapp animated">Перейти в чат WhatsApp</a>
	</div>
	</div>
	<div class="col-lg-5 col-md-5">
	<div class="call-item">
	<img src="../images/Group.svg" alt="" height="75">
	<a  href="#" class="to-call call-btn animated">Заказать звонок</a>
	</div>
	</div>
	</div>
	</div>
	</div>

	</div>
	</div>
	</div>

<div class="modal fade" id="quick-order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">Заполните форму для быстрого заказа</h5>
	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>
	</div>
	<div class="modal-body">
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<div class="quick-order-form-block">
	<form id="quick-order-form">
	<input id="quick-order-form-name" type="text" placeholder="Ваше имя*">
	<input id="quick-order-form-phone" type="tel" placeholder="Телефон*">
	<textarea id="quick-order-form-textarea" placeholder="Описание заказа"></textarea>
	<span class="form-info">* - обязательное поле </span>

	<p class="quick-order-info">Для самостоятельного расчета стоимости заказа воспользуйтесь калькуляторами услуг в соответствующих категориях. Перейти в <a href="/services">Каталог услуг</a> </p>
	<div class="error"></div>
	<button class="quick-order-btn call-btn animated">Отправить</button>
	</form>
	<p class="privacy-info text-center">Оставляя свои контактные данные, вы соглашаетесь на обработку персональных данных в соответствии с <a href="/privacy">Политикой конфиденциальности</a></p>
	</div>

	</div>
	</div>
	</div>
	</div>

	</div>
	</div>
	</div>




	<div class="modal fade" id="to-call-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">Заполните форму для связи</h5>
	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>
	</div>
	<div class="modal-body">
	<div class="container">
	<p class="sec60">мы перезвоним в течение 60 секунд</p>
	<div class="row">
	<div class="col-lg-12">
	<div class="to-call-form-block">
	<form id="to-call-form">
	<input id="to-call-form-organization" type="text" placeholder="Организация">
	<input id="to-call-form-name" type="text" placeholder="Ваше имя*">
	<input id="to-call-form-phone" type="tel" placeholder="Телефон*">
	<span class="form-info">* - обязательное поле </span>
	<div class="error"></div>
	<button class="to-call-btn call-btn animated">Заказать звонок</button>
	</form>
	<p class="privacy-info text-center">Оставляя свои контактные данные, вы соглашаетесь на обработку персональных данных в соответствии с <a href="/privacy">Политикой конфиденциальности</a></p>
	</div>

	</div>
	</div>
	</div>
	</div>

	</div>
	</div>
	</div>
	<div class="modal fade" id="del-pos-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">

	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>

	</div>
	<div class="modal-body">
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<p>Удалить позицию из калькулятора?</p>
	<div class="d-flex justify-content-center">
	<button class="del-pos-cancel" data-dismiss="modal" aria-label="Close">Отмена</button><button class="del-pos-accept">Удалить</button></div>
	</div></div>
	</div>
	</div>
	</div>
	</div>
	</div>

	<div class="modal fade" id="modal-review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<p class="modal-title">Оставьте отзыв о нашей работе</p>
	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>

	</div>
	<div class="modal-body">
	<div class="container">
	<div class="row">
	<div class="col-lg-12">

	<div class="review-form-block">
	<form id="review-form">
	<input type="text" id="review-form-name" placeholder="Ваше имя*">
	<input type="tel" id="review-form-phone" placeholder="Ваш телефон*">
	<input type="text" id="review-form-address" placeholder="Адрес проведения работ">
	<textarea name="" id="review-form-textarea" id="" placeholder="Отзыв"></textarea>
	<span class="form-info">* - обязательное поле </span>
	<div class="error"></div>
	<p class="text-center" style="margin: 0">Поставьте оценку нашей работе!</p>
	<div class="rate">

	<input type="radio" id="star5" name="rate" value="5" />
	<label for="star5" title="text">5 stars</label>
	<input type="radio" id="star4" name="rate" value="4" />
	<label for="star4" title="text">4 stars</label>
	<input type="radio" id="star3" name="rate" value="3" />
	<label for="star3" title="text">3 stars</label>
	<input type="radio" id="star2" name="rate" value="2" />
	<label for="star2" title="text">2 stars</label>
	<input type="radio" id="star1" name="rate" value="1" />
	<label for="star1" title="text">1 star</label>
	</div>
	</div>
	</div>
	<button class="review-btn">Отправить</button></div>
	<p class="privacy-info text-center">Оставляя свои контактные данные, вы соглашаетесь на обработку персональных данных в соответствии с <a href="/privacy">Политикой конфиденциальности</a></p>
	</form>

	</div></div>
	</div>

	</div>
	</div>
	</div>




	<div class="modal fade" id="successful-order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">




	</div>
	<div class="modal-body">
	<div class="container">
	<div class="row">
	<div class="col-lg-12 s-order-block">
	<p class="modal-title">Спасибо за оформление заказа на cайте marafet-ooo.ru!</p>
	<p>Наши менеджеры свяжутся с вами в ближайшее время для уточнения информации и согласования времени.</p>
	<img src="../images/smile 1.svg" alt="">

	<button class="back-to-site" data-dismiss="modal"  aria-label="Close">Вернуться на сайт</button>
	</div>
	</div>
	</div>
	</div>

	</div>
	</div>
	</div>
	<div class="modal fade" id="vacancies-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>

	</div>
	<div class="modal-body">
	<div class="container">
	<div class="row">
	<div class="col-lg-12 s-order-block">
	<p class="modal-title">Ваша заявка принята</p>
	<p>В ближайшее время с Вами свяжется наш менеджер</p>
	<img src="../images/smile 1.svg" alt="">

	<button class="back-to-site" data-dismiss="modal"  aria-label="Close">Вернуться на сайт</button>
	</div>
	</div>
	</div>
	</div>

	</div>
	</div>
	</div>
	<div class="modal fade" id="review-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>

	</div>
	<div class="modal-body">
	<div class="container">
	<div class="row">
	<div class="col-lg-12 s-order-block">
	<p class="modal-title">Ваша отзыв успешно отправлен</p>
	<p>Спасибо за оценку!</p>
	<img src="../images/smile 1.svg" alt="">

	<button class="back-to-site" data-dismiss="modal"  aria-label="Close">Вернуться на сайт</button>
	</div>
	</div>
	</div>
	</div>

	</div>
	</div>
	</div>


	<div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">

	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>

	</div>
	<div class="modal-body">
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<p class="modal-title">Оформление заказа на <span class="total-order"></span> <span class="symbol"> ₽</span></p>
	<p>Обращаем внимание, что оплата производится при получении заказа</p>
	<div class="order-form">
	<form action="" id="order-form">
	<label for="order-form-firstname">
	<p>Укажите Ваше Имя</p><input type="text" id="order-form-name" name="order-form-name" placeholder="Имя*"></label>
	
	<label for="order-form-phone">
	<p>По какому телефону можно уточнить подробности?
	</p><input type="tel"  id="order-form-phone" name="order-form-phone" placeholder="Телефон*">
	</label>
	<label for="order-form-email">
	<p>Куда отправить копию заказа?</p>
	<input type="email"  id="order-form-email" placeholder="Email">
	</label>
	<p class="form-info">* - обязательное поле </p>
	</form>

	<div class="error"></div>
	<button class="order-continue">Отправить заказ</button>
	<p class="privacy-info">Оставляя свои контактные данные, вы соглашаетесь на обработку персональных данных в соответствии с <a href="/privacy">Политикой конфиденциальности</a></p>
	</div>

	
	</div>
	</div>
	</div>
	</div>

	</div>
	</div>
	</div>

	<div class="modal fade" id="order-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">

	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>

	</div>
	<div class="modal-body">

	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<p class="modal-title">Редактирование услуги в корзине</p>
	<div style="display:none">

	<select name="" class="material-sofa-0">
	
	<option value="0">Текстиль</option>
	<option value="1">Кожа</option>
	
	</select>
	<select name="" class="type_sofa_0" >
	
	<option value="2" data-price-one="810" data-price-two="1275">2</option>
	<option value="3" data-price-one="1155" data-price-two="1735">3</option>
	<option value="4" data-price-one="1505" data-price-two="2195">4</option>
	<option value="5" data-price-one="1850" data-price-two="2660">5</option>
	<option value="6" data-price-one="2195" data-price-two="3120">6</option>
	<option value="7" data-price-one="2545" data-price-two="3585">7</option>
	<option value="8" data-hide="1" data-price-one="2890" data-price-two="3585">8</option>

	</select></div>
	<div class="edit-position-block"></div>

	<button class="save-position">Сохранить изменения</button>
	</div>
	</div>
	</div>
	</div>

	</div>
	</div>
	</div>



	<div class="modal fade" id="add-service-nocalc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">

	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>

	</div>
	<div class="modal-body">
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<p class="modal-title">Добавление услуги к заказу </p>
	<div class="modal-service-block">
	<div class="modal-service-list">
	<span class="modal-service-name"></span>
	<span class="dots"></span>
	<span class="modal-service-price"></span></div>
	<p class="volume-service">Укажите объем работ:</p>
	<input type="text" class="volume_facade" value="" placeholder="Объем работ"><span class="service-unit"></span>


	<div class="modal-prices-block"> 
	<p>Итоговая стоимость:</p>	<span><del></del></span><span class="green-price"></span></div>
	<div class="error">Не указан объем работ!</div>
	<p class="star-p">*со скидкой 10% процентов на услуги<br> за заказ на сайте</p>
	<button class="serv-add-cart">В корзину</button>
	</div>



	</div>
	</div>
	</div>
	</div>

	</div>
	</div>
	</div>

	<div class="modal fade" id="product-info-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">

	<button type="button" class="close animated" data-dismiss="modal" aria-label="Close">
	<img src="../images/close.svg" alt="">
	</button>

	</div>
	<div class="modal-body">
	<div class="container">
	<div class="row modal-product-wrapper">
	<div class="col-lg-6 col-md-6 col-sm-6 col-12 modal-product-block">
	<div class="modal-product-img">
	<img class="img-fluid" src="" alt="">
	</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-12 modal-product-block">
	<div class="logo-brand">
	</div>
	<div class="modal-product-info">
	<div class="modal-product-title">
	</div>
	<div class="modal-product-descr">
	</div>
	<div class="modal-product-price-block">
	<div class="modal-product-price">
	</div>
	<div class="modal-product-count"><button class="minus-count" disabled="disabled">-</button><span class="count-value">1 </span>шт <button class="plus-count">+</button></div>
	</div>
	
	<button class="modal-add-cart">В корзину</button>
	</div>
	</div>
	</div>
	</div>
	</div>

	</div>
	</div>
	</div>

	<header>
	<div class="top-header">
	<div class="container">
	<div class="row">
	<div class="col-xl-6 col-lg-5">
	<span>
	<img src="../images/time1.png" alt=""> Пн-Пт: с 9:00 до 18:00, Сб-Вс: работаем по заранее согласованным заказам
	</span>
	</div>
	<div class="col-xl-4 col-lg-4 text-center">
	<span>	
	<img src="../images/Group.png" alt=""> +7(3902) 305-880, +7 913  444-66-00</span>
	</div>
	<div class="col-xl-2 col-lg-3 text-right">
	<div class="social-section">
	<ul class="list-inline"> 
	<li class="list-inline-item">
	<a href="https://api.whatsapp.com/send?phone=79134446600" rel="nofollow" target="_blank" title="WhatsApp"><img src="../images/social-icon/whatsapp.svg" alt=""></a></li>
	<li class="list-inline-item">
	<a href="https://www.instagram.com/marafet.abk/" rel="nofollow" target="_blank" title="Instagram"><img src="../images/social-icon/instagram.svg"  style="border-radius: 50%" alt=""></a></li>
	<li class="list-inline-item">
	<a href="https://vk.com/clubmarafet_abakan" rel="nofollow" target="_blank" title="ВКонтакте"><img src="../images/social-icon/vk.svg" alt=""></a></li>
	<li class="list-inline-item">
	<a href="https://www.facebook.com/groups/732161870268040/" rel="nofollow" target="_blank" title="Facebook"><img src="../images/social-icon/facebook.svg" alt=""></a></li>
	<li class="list-inline-item">
	<a href="https://ok.ru/group/53401897140393" rel="nofollow" target="_blank" title="Одноклассники"><img src="../images/social-icon/ok.png" alt=""></a></li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="container">
	<div class="row align-items-center">
	<div class="d-lg-none d-md-block col-md-3 col-sm-4 col-4 mmenu-block"><button id="mmenu-icon" class="menu-btn hamburger hamburger--collapse" type="button">
	<span class="hamburger-box">
	<span class="hamburger-inner"></span>
	</span>
	</button></div>
	<div class="col-xl-1 col-lg-1 col-md-6 col-sm-4 col-4">
	<div class="logo-block">
	<a href="/"><img  src="../images/logo1.png" width="89" alt="Логотип"></a>
	
	</div>
	</div>
	<div class="col-xl-8 col-lg-8 d-none d-lg-block">
	<nav class="navbar navbar-expand-lg">
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
	<ul class="navbar-nav">
	<li class="nav-item active">
	<a class="nav-link" href="/">Главная</a>
	</li>
	<li class="nav-item dropdown" id="nav-item-dropdown">
	<a class="nav-link dropdown-toggle" href="/services" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	Каталог услуг
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	<a class="dropdown-item" href="/generalnaya-uborka-uborka-posle-remonta">Генеральная уборка, уборка после ремонта</a>
	<a class="dropdown-item" href="/standartnaya-uborka">Стандартная уборка</a>
	<a class="dropdown-item" href="/himchistka-kovrov">Химчистка ковров</a>
	<a class="dropdown-item" href="/himchistka-koganoy-i-myagkoy-mebeli">Химчистка кожаной и мягкой мебели</a>
	<a class="dropdown-item" href="/himchistka-galyuzi">Химчистка жалюзи</a>
	<a class="dropdown-item" href="/himchistka-matrasov">Химчистка матрасов</a>
	<a class="dropdown-item" href="/himchistka-myagkih-igrushek-meha-ovchini-podushek-pledov-i-dr">Химчистка мягких игрушек, меха, <br> овчины, подушек, пледов и др.</a>
	<a class="dropdown-item" href="/mite-okon-vitragey-vitrin">Мытье окон, витражей, витрин</a>
	<a class="dropdown-item" href="/mite-lodgiy-i-balkonov">Мытье лоджий и балконов</a>
	<a class="dropdown-item" href="/mite-fasadov-i-vivesok">Мытье фасадов и вывесок</a>
	<a class="dropdown-item" href="/stirka-shtor-i-drugogo">Стирка штор и другого</a>
	<a class="dropdown-item" href="/drugie-uslugi-po-uborke">Отдельные услуги по уборке (потолки, стены и пр).</a>

	
	

	
	
	
	
	</div>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="/products">Каталог товаров</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="/reviews">Отзывы</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="/vacancies">Вакансии</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="/contacts">Контакты</a>
	</li>
	</ul>
	</div>
	</nav>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-4 text-right cart-block">
	<a href="/cart" class="animated" title="Перейти в корзину">';
	$serv_cookie = json_decode($_COOKIE['cookie-serv']);
	$prod_cookie = json_decode($_COOKIE['cookie-prod']);
	

	
	if($serv_cookie OR $prod_cookie) {
		$cart_not_empty = 'smart-cart-not-empty';
		$smart_class = 'smart-total-show';
		$minicart = json_decode(miniCart());
	}else {
		$smart_class = 'smart-total';
		$cart_not_empty = 'smart-cart';

	}

	
	$r.='
	<div class="'.$cart_not_empty.'">
	<div class="smart-img ">
	<img src="../images/smart-cart 1.svg" alt="">
	</div>
	<span class="'.$smart_class.'">

	<span class="smart-count">
	<span class="smart-count-value">'.$minicart->count_val.'</span> <span class="smart-count-words">'.$minicart->count_words.'</span>
	<br>
	</span>
	на <span class="smart-full">'.$minicart->sum.'</span> <span class="symbol">₽</span>
	</span>
	</div>
	</a>
		<button data-toggle="modal" data-target="#quick-order" class="quick-btn">Быстрый заказ</button></div>
	<div id="menu-block" class="menu">
	<ul class="navbar-nav">
	<li class="nav-item active">
	<a class="nav-link" href="/">Главная</a>
	</li>
	<li class="nav-item dropdown" >
	<a href="#" id="dropdown-mmenu-link" class="nav-link dropdown-toggle">
	Каталог услуг
	</a>
	<div class="dropdown-menu-block">
	<a class="nav-link" href="/generalnaya-uborka-uborka-posle-remonta">Генеральная уборка, уборка после ремонта</a>
	<a class="nav-link" href="/standartnaya-uborka">Стандартная уборка</a>
	<a class="nav-link" href="/himchistka-kovrov">Химчистка ковров</a>
	<a class="nav-link" href="/himchistka-koganoy-i-myagkoy-mebeli">Химчистка кожаной и мягкой мебели</a>
	<a class="nav-link" href="/himchistka-galyuzi">Химчистка жалюзи</a>
	<a class="nav-link" href="/himchistka-matrasov">Химчистка матрасов</a>
	<a class="nav-link" href="/himchistka-myagkih-igrushek-meha-ovchini-podushek-pledov-i-dr">Химчистка мягких игрушек, меха, <br> овчины, подушек, пледов и др.</a>
	<a class="nav-link" href="/mite-okon-vitragey-vitrin">Мытье окон, витражей, витрин</a>
	<a class="nav-link" href="/mite-lodgiy-i-balkonov">Мытье лоджий и балконов</a>
	<a class="nav-link" href="/mite-fasadov-i-vivesok">Мытье фасадов и вывесок</a>
	<a class="nav-link" href="/stirka-shtor-i-drugogo">Стирка штор и другого</a>
	<a class="nav-link" href="/drugie-uslugi-po-uborke">Отдельные услуги по уборке (потолки, стены и пр).</a>





	</div>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="/products">Каталог товаров</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="/reviews">Отзывы</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="/vacancies">Вакансии</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="/contacts">Контакты</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="tel:+73902305880"><img src="../images/Group.png" alt=""> +7 (3902) 305-880</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="tel:+79134446600"><img src="../images/Group.png" alt=""> +7 913 444-66-00</a>
	</li>

	<li>
	<div class="social-section">
	<ul class="list-inline"> 
	<li class="list-inline-item">
	<a class="animated" href="whatsapp://send/?phone=79134446600" rel="nofollow" target="_blank" title="WhatsApp"><img src="../images/whatsapp.svg" alt=""></a></li>
	<li class="list-inline-item">
	<a class="animated" href="https://www.instagram.com/marafet.abk/" rel="nofollow" target="_blank" title="Instagram"><img src="../images/instagram.svg" alt=""></a></li>
	<li class="list-inline-item">
	<a class="animated" href="https://vk.com/clubmarafet_abakan" rel="nofollow" target="_blank" title="ВКонтакте"><img src="../images/vk.svg" alt=""></a></li>
	<li class="list-inline-item">
	<a class="animated" href="https://www.facebook.com/groups/732161870268040/" rel="nofollow" target="_blank" title="Facebook"><img src="../images/facebook.svg" alt=""></a></li>
	<li class="list-inline-item">
	<a class="animated" href="https://ok.ru/group/53401897140393" rel="nofollow" target="_blank" title="Одноклассники"><img src="../images/ok.svg" alt=""></a></li>
	</ul>
	</div>
	</li>
	</ul>


	</div>
	</div>
	</div>
	</header>

	<div id="wrapper">
	';
	
	return $r;
}

function output_footer(){

	$r='
	</div>
	<div class="loader">
	<img src="../images/logo1.png" alt="" width="100"></div>
	<div id="button-up" title="Наверх"><img src="../images/to-up.svg" alt="" width="60"></div>
	<footer>
	<div class="container">
	<div class="row" style="margin-bottom: 40px;">
	<div class="col-lg-2 col-md-2 col-sm-2 col-6 d-flex">
	<a href="/" class="footer-logo">
	<img class="img-fluid" src="../images/logo-footer.png" alt="Логотип" width="100">
	</a>


	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-6 d-lg-none d-md-block">
	<div class="footer-links">
	<a href="/">Главная</a>
	<a href="/services">Каталог услуг</a>
	<a href="/products">Каталог товаров</a>
	<a href="/contacts">Контакты</a>
	<a href="/reviews">Отзывы </a>
	<a href="/vacancies">Вакансии</a>
	</div>
	</div>
	<div class="col-lg-2  d-none d-lg-flex col-md-2 f-links-block">
	<div class="footer-links">
	<a href="/">Главная</a>
	<a href="/services">Каталог услуг</a>
	<a href="/products">Каталог товаров</a>
	</div>

	</div>
	<div class="col-lg-2 d-none d-lg-flex col-md-2 f-links-block">
	<div class="footer-links">

	<a href="/reviews">Отзывы </a>
	<a href="/vacancies">Вакансии</a>
	<a href="/contacts">Контакты</a>
	</div>

	</div>
	<div class="col-lg-5 col-md-5 col-sm-5 offset-sm-3 col-12 offset-md-3 offset-lg-1 contacts-block">
	<div>
	<p><img src="../images/pin.svg" alt=""><span>Абакан, ул. Котовского, 125 В</span></p>
	<p><img src="../images/phone-call.svg" alt=""><span>+7 (3902) 305-880</span></p>
	<p><img src="../images/phone-call.svg" alt=""><span>+7 913 444-66-00</span></p>
	<span style="margin-left: 18px">Прием звонков:</span>
	<p><img src="../images/time.svg" alt=""><span>Пн – Сб: с 9:00 до 18:00  </span></p>
	</div>
	<div>
	<div class="social-section">
	<ul class="list-inline"> 
	<li class="list-inline-item">
	<a href="https://api.whatsapp.com/send?phone=79134446600" rel="nofollow" target="_blank" title="WhatsApp"><img src="../images/social-icon/whatsapp.svg" alt=""></a></li>
	<li class="list-inline-item">
	<a href="https://www.instagram.com/marafet.abk/" rel="nofollow" target="_blank" title="Instagram"><img src="../images/social-icon/instagram.svg"  style="border-radius: 50%" alt=""></a></li>
	<li class="list-inline-item">
	<a href="https://vk.com/clubmarafet_abakan" rel="nofollow" target="_blank" title="ВКонтакте"><img src="../images/social-icon/vk.svg" alt=""></a></li>
	<li class="list-inline-item">
	<a href="https://www.facebook.com/groups/732161870268040/" rel="nofollow" target="_blank" title="Facebook"><img src="../images/social-icon/facebook.svg" alt=""></a></li>
	<li class="list-inline-item">
	<a href="https://ok.ru/group/53401897140393" rel="nofollow" target="_blank" title="Одноклассники"><img src="../images/social-icon/ok.png" alt=""></a></li>
	</ul>
	</div>
	<button data-toggle="modal" data-target="#quick-order" class="quick-btn">Быстрый заказ</button>
	</div>
	</div>
	</div>
	<div class="row" style="border-top: 1px solid rgba(156, 156, 156, 0.17); padding-top: 30px;">
	<div id="identx" style="width: 230px; padding-top: 20px; clear: both; margin: auto;"><style>
	a.hv:hover{text-decoration:underline}
	a.hv{text-decoration:none}<br />
	p:first-letter{color:#43CB83;}<br />
	</style><span style="line-height: 1.3; /*! font-size: 11px !important; */; font-family: Arial Narrow, sans-serif; width: 114px; display: block; float: left; text-align: right; margin-right: 5px;">
	<a class="hv" style="color: #000;font-size: 11px;" title="identx.ru" href="//identx.ru/?utm_source=copyright&amp;utm_medium=marafet" target="_blank" rel="noopener">создание сайтов</a><br>
	<a class="hv" style="color: #000; font-size: 11px;" title="identx.ru" href="//identx.ru/реклама-яндекс-google/?utm_source=copyright&amp;utm_medium=marafet" target="_blank" rel="noopener">реклама в интернете</a>
	</span>
	<a class="hv" style="font-family: Arial Narrow, sans-serif; font-size: 16px; color: #000;" title="identx.ru" href="//identx.ru/?utm_source=copyright&amp;utm_medium=marafet" target="_blank" rel="noopener">
	<img style="float: left;" src="../images/logo-i.svg" alt="айдентика">
	<p style="float: left; margin-top: 7px; margin-left: 5 px;"><span style="color:#43CB83; margin-left: 5px;font-size: 16px;">A</span>йдентика</p></a>

	</div>
	</div>
	</div>
	</footer>
													<div class="min-price-info">
			<p>Внимание! Минимальная сумма заказа на выездные услуги – 2 000 <span class="symbol">₽</span></p>
		</div>
		<div class="products-delivery-info">
			<p>Бесплатная доставка по Абакану от 700 рублей</p>
		</div>
	<div class="alert text-center cookiealert" role="alert">
	Оставаясь на нашем сайте, вы принимаете использование сайтом файлов cookies&#x1F36A;  в соответствии с нашей <a href="/privacy">Политикой конфиденциальности.</a>

	<button type="button" class="btn btn-cookies btn-sm acceptcookies" aria-label="Close">
	Принимаю
	</button>
	</div>



	<script src="/libs/jquery/jquery-3.4.1.min.js"></script>

	<script src="/js/jquery.maskedinput.min.js"></script>
	<script src="/js/jquery.cookie.js"></script>

	<script src="/js/cookiealert.js"></script>

	<script src="/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="/js/scripts.js?v='.$v.'"></script>
	<script src="/js/calculator.js?v='.$v.'"></script>

	<script src="/libs/owlcarousel/owl.carousel.min.js"></script>
	<script src="/libs/select2/js/select2.min.js"></script>
	<script src="/libs/sweetalert2/sweetalert2.all.min.js"></script>
	<script src="/libs/fancybox/jquery.fancybox.min.js"></script>

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

