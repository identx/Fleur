<?php 

$_SERVER['page']['title'] = '- Доставка цветов в Абазе, бесплатная доставка';

$cat = new Catalog('mcat_');
$items = $cat->getItems();
krsort($items);

$all_cats = $cat->getCats($root=0);
ksort($all_cats);

 ?>
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
                                    <input type="name" id="bouquet-form-name" name="name" class="order_input" placeholder="Ваше имя">
                                    <input type="tel" id="bouquet-form-phone"  name="phone" class="order_input" placeholder="Телефон">
                                    <div class="error"></div>
                                    <input type="button" id="order_input_button" class="order_input_button" value="Оставить заявку">
                                    <div class="alert alert-danger" role="alert">
                                       </div>
                                       
                                </form>
  <p class="privacy-info text-center">Оставляя свои контактные данные, вы соглашаетесь на обработку персональных данных в соответствии с <a href="/privacy">Политикой конфиденциальности</a></p>

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
        <li><a href="https://www.instagram.com/fleur_abaza/" rel="nofollow" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://api.whatsapp.com/send?phone=79095250275" rel="nofollow" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
        <li><a href="viber://chat?number=79095250275" rel="nofollow" target="_blank"><i class="fab fa-viber"></i></a></li>
        <li><a href="https://vk.com/public_fleur19" rel="nofollow" target="_blank"><i class="fab fa-vk"></i></a></li>
        </ul>
                            </div>
                            <div class="your_ideas_phone">
                                <i class="fas fa-phone-alt"></i>
                                <a class="phone_link" href="tel:+79095250275">+7 909 525-02-75</a>
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
                        <div class="weddings_decoration_more"><a href="/wedding">Подробнее<span class="arrow"></span></a></div>
                    </div>
                </div>
            </div>
        </section>
        