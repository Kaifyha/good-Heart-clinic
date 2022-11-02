<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
 
/* Сюда впишите свою эл. почту */
$myaddres  = "svetapopova_2019@mail.ru"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка!\nТелефон: $tel\nИмя: $name";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ обратного звонка'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>