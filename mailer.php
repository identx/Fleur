<?php
if(isset($_POST['type'])&&$_POST['type']!=''){
    if($_POST['type']=='order'){
        if($_POST['delivery']=='true'){
            $delivery = 'с доставкой по адресу: '.$_POST['address'];
        }
        else{
            $delivery = 'без доставки';
        }
        $subject = 'Заказ букета';
        $message = 'Заказ: '.$_POST['order_name'].', размер: '.$_POST['order_size'].', '.$delivery.'.
        Контакты для связи: имя: '.$_POST['client_name'].', телефон: '.$_POST['client_phone'];
    }
    elseif($_POST['type']=='fast_order'){
        $subject = 'Заявка на заказ букета';
        $message = 'Заявка: '.$_POST['bouquet_type'].', размер: '.$_POST['bouquet_size'].'.
        Контакты для связи: имя: '.$_POST['client_name'].', телефон: '.$_POST['client_phone'];
    }
    elseif($_POST['type']=='question'){
        $subject = 'Вопрос';
        $message = 'Вопрос: '.$_POST['question'].'
        Контакты для связи: имя: '.$_POST['client_name'].', телефон: '.$_POST['client_phone'];
    }
    $to = 'artem_sharamchenko_is@mail.ru';
    mail($to, $subject, $message); 
}
?>