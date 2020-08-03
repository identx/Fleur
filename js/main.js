$( function() {

    function bouquetSize (bouquet) {
        if (!bouquet.id){ 
            return bouquet.text;
        }
        var $bouquet = $('<span class="bouquet_icon-container"><img src="../media/options_icons/'+bouquet.element.value.toLowerCase()+'.png" class="img-bouquet_icon"> ' + bouquet.text + '</span>');
        return $bouquet;
    };

    $('.bouquet_type').select2({
        placeholder: "Тип букета",
        minimumResultsForSearch: Infinity,
    });
    $('.bouquet_size').select2({
        placeholder: "Размер букета",
        minimumResultsForSearch: Infinity,
        templateResult: bouquetSize,
        templateSelection: bouquetSize,
    });
    $('.popup_form_select').select2({
        placeholder: "Размер букета",
        minimumResultsForSearch: Infinity,
        templateResult: bouquetSize,
        templateSelection: bouquetSize,
    });

    function openMobileMenu() {
        $('.header_mobile_menu_box').css('display','block');
    }
    function closeMobileMenu() {
        $('.header_mobile_menu_box').css('display','none');
    }
    function openFullText() {
        $('.open_full_text').css('display','none');
        $('.welcome_content_text p').css('display','block');
    }
    function closePopUp() {
        $('.popup_bg').css('display','none');
        $('.popup_header_text').children().css('display','none');
        $('.popup_content').children().css('display','none');
    }
    function openPopUpForm(){
        $('.popup_bg').css('display','flex');
        $('.popup_header_text').children('.popup_form_text').css('display','block');
        $('.popup_content').children('form').css('display','block');
    }
    function openPopUpOrderNotice(){
        $('.popup_bg').css('display','flex');
        $('.popup_header_text').children('.popup_order_notice_text').css('display','block');
        $('.popup_content').children('.popup_order_notice_content').css('display','block');
    }
    function openPopUpQuestionNotice(){
        $('.popup_bg').css('display','flex');
        $('.popup_header_text').children('.popup_question_text').css('display','block');
        $('.popup_content').children('.popup_order_notice_content').css('display','block');
    }
    function emptyFields(form){        
        form.find('input').each(function() {
            if($(this).val() == '' && $(this).attr('disabled')!='disabled'){
                $(this).addClass('empty_input');
            }            
        });
        form.find('.select2-selection').each(function() {
            if($(this).children('.select2-selection__rendered').children().length != 0){
                $(this).addClass('empty_input');
            }            
        });
        form.find('textarea').each(function() {
            if($(this).val() == ''){
                $(this).addClass('empty_input');
            }            
        });
    }
    
    $('input').focus(function(){
        $(this).removeClass('empty_input');
    });
    $('textarea').focus(function(){
        $(this).removeClass('empty_input');
    });
    $('.select2-selection').click(function(){
        $(this).removeClass('empty_input');
    });

    function sendForm(data){
        $.ajax({
            type: 'POST',
            url: '../mailer.php', 
            data: data,
            success: function(response){                
            }
        });
    }

    $('.header_mobile_menu_button').click(function(){
        openMobileMenu();
    });
    $('.header_mobile_menu_close_button').click(function(){
        closeMobileMenu();
    });

    $('.open_full_text').click(function(){
        openFullText();
    });

    $('.popup_close_button').click(function(){  
        closePopUp();      
    });
    $(".popup_bg").click(function (e){
        var div = $(".popup_box_bg");
        if (!div.is(e.target) && div.has(e.target).length === 0) {
            closePopUp();
        }
    });
    $('button[name=notice_button]').click(function(){
        closePopUp();
    });

    $('.catalog_carousel').on('click', '.bouquet_descr_button', function(){
        $('.popup_header .order_name').text($(this).parent('.bouquet_descr_cost_box').parent('.bouquet_card_description').children('.bouquet_descr_name').text());
        $('.form_cost_value .order_price').text($(this).parent('.bouquet_descr_cost_box').children('.bouquet_descr_cost').text());
        openPopUpForm();
    });    

    $('.check_block').click(function(){
        if($('.check_block input').prop("checked")){
            $('.popup_form_input[name=address]').removeAttr('disabled');
        }
        else{
            $('.popup_form_input[name=address]').attr('disabled','disabled');
            if($('.popup_form_input[name=address]').hasClass('empty_input')){
                $('.popup_form_input[name=address]').removeClass('empty_input');
            }
        }
    });

    $('input[name=form_button]').click(function(){
        var type = "order";
        var order_name = $('.popup_header .order_name').text();
        var order_size = $('.popup_content select[name=bouquet_size]').select2('data')[0].text;
        var client_name = $('.popup_content input[name=name]').val();
        var client_phone = $('.popup_content input[name=phone]').val();
        var delivery = $('.check_block input').prop("checked");
        var address = $('.popup_content input[name=address]').val();
        var send = true;

        if((order_name=="" || order_size == "" || client_name== "" || client_phone== "") || (delivery== true && address== "")){
            send = false;
        }

        var data = {'type':type, 'client_name':client_name, 'client_phone':client_phone, 'order_name':order_name, 'order_size':order_size, 'delivery':delivery, 'address':address};
        if(send == true){
            sendForm(data);
            closePopUp();
            openPopUpOrderNotice();
            $('.popup_content form select').val('').trigger('change');
            $('.popup_content form')[0].reset();
            $('.popup_form_input[name=address]').attr('disabled','disabled');
        }
        else{
            emptyFields($('.popup_content form'));
        }
    });
    $('#order_input_button').click(function(){
        var type = "fast_order";
        var bouquet_type = $('.order_form .bouquet_type').select2('data')[0].text;
        var bouquet_size = $('.order_form .bouquet_size').select2('data')[0].text;
        var client_name = $('.order_form input[name=name]').val();
        var client_phone = $('.order_form input[name=phone]').val();
        var send = true;

        if(bouquet_type=='' || bouquet_size=='' || client_name=='' || client_phone==''){
            send = false;
        }

        var data = {'type':type, 'bouquet_type':bouquet_type, 'bouquet_size':bouquet_size, 'client_name':client_name, 'client_phone':client_phone};

        if(send == true){
            sendForm(data);
            closePopUp();
            openPopUpOrderNotice();
            $('.order_form select').val('').trigger('change');
            $('.order_form')[0].reset();            
        }
        else{
            emptyFields($('.order_form'));            
        }
    });
    $('.question_box input[name=question_button]').click(function(){
        var type = "question";
        var name = $('.question_box input[name=name]').val();
        var phone = $('.question_box input[name=phone]').val();
        var question = $('.question_box textarea[name=question_text]').val();
        var send = true;

        if(name=='' || phone=='' || question==''){
            send = false
        }

        var data = {'type':type, 'client_name':name, 'client_phone':phone, 'question':question};

        if(send == true){
            sendForm(data);
            closePopUp();
            openPopUpQuestionNotice();
            $('.question_box form')[0].reset();
        }
        else{
            emptyFields($('.question_box form'));
        }
    });

    window.onresize = function(){
        if(window.innerWidth > 579){
            closeMobileMenu();
        }        
        makeSliders(catalog_carousel);
        addDots('catalog');
        makeSliders(dopolneniya);
        addDots('dlc');
    }

    var catalog_carousel = $('.category_'+$('.active_cat_point').attr('id'));

    activeCategory($('.cat_point:eq(0)').attr('id'));
    initializeCategory();

    $('.cat_point').click(function(){
        catalog_carousel.trigger('destroy.owl.carousel');
        activeCategory($(this).attr('id'));
        initializeCategory();
    });
    
    function makeSliders(catalog_carousel){
        var elements = catalog_carousel.children('.owl-stage-outer').children('.owl-stage').children('.owl-item ').children('.row').children();
        var count_slides_now = catalog_carousel.children('.owl-stage-outer').children('.owl-stage').children('.owl-item ').length;
        var count_elements = elements.length;        
        var count_slides = 1;
        var count_elements_need = 0;
        var el_number = 0;        
        for(var i = 0; i <= count_slides_now; i++){
            catalog_carousel.owlCarousel('remove', i).trigger('refresh.owl.carousel');
        }        

        if(window.innerWidth > 1199){    
            count_elements_need = 8;        
        }
        else if(window.innerWidth > 991){    
            count_elements_need = 6;        
        }
        else if(window.innerWidth > 0){    
            count_elements_need = 4;        
        }
              
        count_slides = calculateSlides(count_elements);        

        for(var i = 0; i < count_slides; i++){
            var owl_item = $('<div class="row"></div>');            
            catalog_carousel.owlCarousel('add', owl_item).trigger('refresh.owl.carousel');
            for(var j = 0; j < count_elements_need; j++){
                $(elements[el_number]).appendTo(catalog_carousel.children('.owl-stage-outer').children('.owl-stage').children('.owl-item:eq('+i+')').children('.row'));
                el_number++;
            }
        }                
    }

    function initializeCategory(){
        catalog_carousel = $('.category_'+$('.active_cat_point').attr('id'));

        initializeDotsContainer('catalog');

        catalog_carousel.owlCarousel({   
            items: 1,
            loop: false,
            nav: false,            
            dotsContainer: '.catalog_nav_dots ul',            
        });
        makeSliders(catalog_carousel);
        addDots('catalog');
    }
        
    $('.catalog_nav_dots').on('click', 'li', function(){
        catalog_carousel.trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    function activeCategory(el_id){
        $('.catalog_categories ul li').removeClass('active_cat_point');        
        $('#'+el_id).addClass('active_cat_point');
    }

    function initializeDotsContainer(container_prefix){
        if($('.'+container_prefix+'_nav_dots ul').length==0){
            var container = $('<ul></ul>');
            $(container).appendTo('.'+container_prefix+'_nav_dots');
        }
    }
    function addDots(container_prefix){
        var count_dots = $('.'+container_prefix+'_nav_dots ul').children().length;
        $('<li class="'+container_prefix+'_nav_dot active"></li>').replaceAll($('.'+container_prefix+'_nav_dots ul .active'));
        $('<li class="'+container_prefix+'_nav_dot"></li>').replaceAll($('.'+container_prefix+'_nav_dots ul .owl-dot'));
        if(count_dots == 1){
            $('.'+container_prefix+'_nav_dots ul li').css('display', 'none');
        }
    }

    function calculateSlides(count_elements){
        var count_elements_need = 0;
        var count_slides = 1;
        
        if(window.innerWidth > 1199){    
            count_elements_need = 8;        
        }
        else if(window.innerWidth > 991){    
            count_elements_need = 6;        
        }
        else if(window.innerWidth > 0){    
            count_elements_need = 4;        
        }
        
        count_slides = parseInt(count_elements/count_elements_need);
        if(count_elements%count_elements_need>0){
            count_slides+=1;
        }
        
        return count_slides;        
    }    

    initializeDotsContainer('dlc');
    var dopolneniya = $('.category_Dopolneniya-k-buketu');
    dopolneniya.owlCarousel({   
        items: 1,
        loop: false,
        nav: false,
        dotsContainer: '.dlc_nav_dots ul',
    });

    makeSliders(dopolneniya);
    addDots('dlc');

    $('.dlc_nav_dots').on('click', 'li', function(){
        dopolneniya.trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    // var interior_bouquets_carousel = $('.interior_bouquets_carousel');
    // interior_bouquets_carousel.owlCarousel({
    //     loop: true,
    //     autoWidth: true,
    //     center: true,
    //     autoplay: true,
    //     autoplayTimeout: 3500,
    // });
});
