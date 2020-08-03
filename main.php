<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link rel="stylesheet" href="css/main.css?v=1">
        <link rel="stylesheet" href="css/media.css?v=1">
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script src="media/owlcarousel/owl.carousel.js"></script>
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
                            <input type="button" class="popup_button popup_form_button" name="form_button" value="Заказать букет">
                        </form>
                        <div class="popup_order_notice_content">
                            <div class="popup_notice_picture">
                                <img src="media/notice_order_pic.svg">
                            </div>
                            <button class="popup_button popup_notice_button" name="notice_button">Вернуться на сайт</button>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="popup_notice_bg"></div>            
        </div>        
        <section class="section_header">
            <div class="header_frame"></div>
            <div class="header_mobile_menu_line"></div>
            <header class="header">
                <div class="header_logo">
                    <a href="">
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
                    <a class="phone_link" href="tel:+79999999999">+7 999 999-99-99</a>
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
                        <a class="phone_link" href="tel:+79999999999">+7 999 999-99-99</a>
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
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href=""><i class="fab fa-vk"></i></a></li>
                </ul>
            </div>
            <div class="actual_offers">
                <ul>
                    <li>
                        <a href="">
                            <div class="bouquet">
                                <div class="bouquet_image">
                                    <img src="media/b_classic.png">
                                </div>
                                <div class="bouquet_name">Классические<br> букеты</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
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
                        <a href="">
                            <div class="bouquet">
                                <div class="bouquet_image">
                                    <img src="media/b_svad.png">
                                </div>
                                <div class="bouquet_name">Свадебные<br> букеты</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
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
        <section class="welcome_section">
            <div class="frame2"></div>
            <div class="welcome_container container">
                <div class="row">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <div class="welcome_content_photo">
                            <img src="media/DSC_3428 1.png">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <div class="welcome_content_text">
                            <h2>Давайте познакомимся!</h2>
                            <p>Привет! Меня зовут Анастасия, я мастер букетной мастерской Fleur. С самого детства я обожаю дарить необычные и запоминающиеся подарки своим близким, и считаю, что сюрприз должен дарить только яркие эмоции и обязательно нравиться адресату.</p>
                            <p>Угодить с подарком сложно, но можно:) И я готова помочь вам с этим. Букет может быть романтичным, строгим и даже вкусным. Женским, мужским, детским. Он может отразить ваши чувства, будь то любовь или уважение к человеку, знак благодарности или же быть приятным сюрпризом без повода.</p>
                            <p>Я выслушаю и учту все ваши пожелания, предложу свои идеи и мы соберем эксклюзивный букет идеально подходящий для вашего случая.</p>
                            <span class="open_full_text">Читать полностью ↓</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="order_section" id="order">
            <div class="order_container container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="order_instruction">
                            <div class="section_header_name instruction_header">Как заказать и получить букет?</div>
                            <div class="instruction_p">
                                <div class="instruction_p_num">1</div>
                                <div class="instruction_p_text">Выберите букет из <a href="#catalog">каталога</a>, либо сформулируйте свою идею</div>
                            </div>
                            <div class="instruction_p">
                                <div class="instruction_p_num">2</div>
                                <div class="instruction_p_text">Оставьте заявку на сайте или по телефону, мы обсудим детали и стоимость букета</div>
                            </div>
                            <div class="instruction_p">
                                <div class="instruction_p_num">3</div>
                                <div class="instruction_p_text">Внесите предоплату 50% от стоимости до начала выполнения заказа</div>
                            </div>
                            <div class="instruction_p">
                                <div class="instruction_p_num">4</div>
                                <div class="instruction_p_text">По готовности <b>доставим букет бесплатно</b>, либо можете забрать самостоятельно</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order_col">
                        <div class="order_form_box_bg" id="order_form">
                            <div class="order_form_box">
                                <div class="order_form_header">Быстрый заказ букета</div>
                                <div class="order_form_text">Оставьте заявку и я перезвоню в течение 10 минут для уточнения деталей</div>
                                <form class="order_form">
                                    <select class="bouquet_type order_input" style="width: 100%;">
                                        <option class="placeholder"></option>
                                        <option value="1">Цветочный букет</option>
                                        <option value="2">Свадебный букет</option>
                                        <option value="3">Food-букет</option>
                                    </select>
                                    <select class="bouquet_size order_input" style="width: 100%;">
                                        <option class="placeholder"></option>
                                        <option value="big">большой</option>
                                        <option value="medium">средний</option>
                                        <option value="small">маленький</option>
                                    </select>
                                    <input type="name" name="name" class="order_input" placeholder="Ваше имя">
                                    <input type="tel" name="phone" class="order_input" placeholder="Телефон">
                                    <input type="button" id="order_input_button" class="order_input_button" value="Оставить заявку">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="catalog_section" id="catalog">
            <div class="frame3"></div>
            <div class="frame4"></div>
            <div class="catalog_container container">
                <div class="section_header_name catalog_header">Каталог букетов</div>
                <div class="catalog_categories catalog_categories_nav">
                    <ul>
                        <?php
                        foreach ($all_cats as $category):
                            if($category['link']!='Dopolneniya-k-buketu'){
                                echo '<li class="cat_point" id="'.$category['link'].'">'.mb_strtolower($category['name']).'</li>';
                            }
                        endforeach;
                        ?>                        
                    </ul>
                </div>
                <div class="catalog_description"><span><i class="far fa-clock"></i>Срок изготовления от 2-х часов</span> <span class="pipeline">|</span> <span>Внешний вид букета может незначительно отличаться от фото</span></div>
                <?php
                foreach ($all_cats as $category):
                    if($category['link']!='Dopolneniya-k-buketu'){
                        echo '<div class="catalog_carousel owl-carousel category_'.$category['link'].'">
                        <div class="row">';
                        foreach ($items as $it):
                            $item = $cat->getItem($it['id']);
                            if($category['link']==substr($it['path'], 1)){
                                echo '<div class="col-6 col-lg-4 col-xl-3">
                                    <div class="bouquet_card">
                                        <div class="bouquet_card_photo">
                                            <img src="adminer/images/tovars/b-'.$item['imgs'][0]['name'].'">
                                        </div>
                                        <div class="bouquet_card_description">
                                            <div class="bouquet_descr_name">'.$item['name'].'</div>
                                            <div class="bouquet_descr_size">'.$item['attrs']['razmer']['val'].'</div>
                                            <div class="bouquet_descr_cost_box">
                                                <div class="bouquet_descr_cost">от '.number_format($item['price'], 0, '', ' ' ).' ₽</div>
                                                <div class="bouquet_descr_button">заказать</div>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>';
                            }
                        endforeach;
                        echo '</div>
                        </div>';
                    }
                endforeach;
                ?>
                <div class="catalog_nav_dots catalog_categories_nav">
                    <ul>
                        <li class="catalog_nav_dot"></li>
                        <li class="catalog_nav_dot"></li>
                        <li class="catalog_nav_dot"></li>
                    </ul>
                </div>
                <div class="dlc_catalog_header section_header_name">Дополнения к букету</div>
                <div class="dlc_catalog_description">Сообщите при заказе и мы добавим к букету подходящую открытку</div>                
                <div class="owl-carousel category_Dopolneniya-k-buketu">
                <?php
                    echo '<div class="row">';
                    foreach ($items as $it):
                        $item = $cat->getItem($it['id']);
                        if('Dopolneniya-k-buketu'==substr($it['path'], 1)){
                            echo '<div class="col-6 col-lg-4 col-xl-3">
                                <div class="dlc_card">
                                    <div class="dlc_card_photo">
                                        <img src="adminer/images/tovars/b-'.$item['imgs'][0]['name'].'">
                                    </div>
                                    <div class="dlc_card_name">'.$item['name'].'</div>
                                </div>
                            </div>';
                        }                        
                    endforeach;
                    echo '</div>';
                ?>
                </div>
                <div class="dlc_nav_dots">
                    <ul>
                        <li class="dlc_nav_dot"></li>
                        <li class="dlc_nav_dot"></li>
                        <li class="dlc_nav_dot"></li>
                    </ul>
                </div>
                <div class="row your_ideas_row">
                    <div class="col-12 col-lg-6">
                        <div class="your_ideas_mobile_header section_header_name">Есть свои идеи?</div>
                        <div class="bouquet_prev">
                            <img src="media/bouquet.jpg">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="your_ideas">
                            <div class="your_ideas_header section_header_name">Есть свои идеи?</div>
                            <p>Отлично! Я люблю интересные проекты. Вы можете заказать букет на свой вкус.</p>
                            <p>Свяжитесь со мной, поделитесь своими пожеланиями. И мы обязательно осуществим их в жизнь!</p>
                            <div class="your_ideas_social">
                                <ul>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fab fa-telegram-plane"></i></a></li>
                                    <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href=""><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                            <div class="your_ideas_phone">
                                <i class="fas fa-phone-alt"></i>
                                <a class="phone_link" href="tel:+79999999999">+7 999 999-99-99</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>                       
        </section>
        <!-- <section class="interior_bouquets_section">            
            <div class="interior_bouquets_container container">
                <div class="interior_bouquet_header section_header_name">Интерьерные букеты под заказ за 14 дней</div>
                <div class="interior_bouquet_description">Долговечные композиции из стабилизированных цветов и цветов из полимерной глины</div>
                <div class="row interior_bouquets_row">
                    <div class="col-12 col-md-6">
                        <div class="interior_bouquet_photo interior_large_photo">
                            <img src="media/interior_b_large.jpg">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="interior_bouquet_photo">
                            <img src="media/interior_b.jpg">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="interior_bouquet_photo">
                            <img src="media/interior_b.jpg">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="interior_bouquet_photo">
                            <img src="media/interior_b.jpg">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="interior_bouquet_photo interior_large_photo">
                            <img src="media/interior_b_large.jpg">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="interior_bouquet_photo">
                            <img src="media/interior_b.jpg">
                        </div>
                    </div>
                </div>
                <div class="interior_bouquets_carousel_box">
                    <div class="interior_bouquets_carousel owl-carousel">
                        <div class="carousel_bouquets_item">
                            <div class="interior_bouquet_photo interior_large_photo">
                                <img src="media/interior_b_large.jpg">
                            </div>
                        </div>
                        <div class="carousel_bouquets_item">
                            <div class="interior_bouquet_photo">
                                <img src="media/interior_b.jpg">
                            </div>
                        </div>
                        <div class="carousel_bouquets_item">
                            <div class="interior_bouquet_photo">
                                <img src="media/interior_b.jpg">
                            </div>
                        </div>
                        <div class="carousel_bouquets_item">
                            <div class="interior_bouquet_photo">
                                <img src="media/interior_b.jpg">
                            </div>
                        </div>
                        <div class="carousel_bouquets_item">
                            <div class="interior_bouquet_photo interior_large_photo">
                                <img src="media/interior_b_large.jpg">
                            </div>
                        </div>
                        <div class="carousel_bouquets_item">
                            <div class="interior_bouquet_photo">
                                <img src="media/interior_b.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="weddings_decoration_section" id="weddings_decoration">
            <div class="weddings_decoration_container container">
                <div class="weddings_decoration_bg">
                    <div class="weddings_decoration">
                        <div class="weddings_decoration_header section_header_name">Оформление свадеб</div>
                        <div class="weddings_decoration_description">Помогу сделать ваш праздник незабываемым! Возьму на себя весь процесс оформления от букета невесты до оформления зала и бокалов</div>
                        <div class="weddings_decoration_more">Подробнее<span class="arrow"></span></div>
                    </div>
                </div>
            </div>
        </section>
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
                                    <li><a href="">Как заказать букет?</a></li>
                                    <li><a href="">Каталог букетов</a></li>
                                    <li><a href="">Оформление свадеб</a></li>                                    
                                </ul>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fab fa-telegram-plane"></i></a></li>
                                    <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href=""><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                            <div class="footer_phone">
                                <i class="fas fa-phone-alt"></i>
                                <a class="phone_link" href="tel:+79999999999">+7 999 999-99-99</a>
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
                                <input type="button" class="question_button" name="question_button" value="Отправить вопрос">
                            </form>
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
        <script src="js/main.js"></script>
        <script src="js/style.js"></script>
    </body>
</html>