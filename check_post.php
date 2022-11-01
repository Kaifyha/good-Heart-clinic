<?php

// делаю данные формы

$tel = $_POST['tel'];
$name = $_POST['name'];

// обработка полученных данных

$tel = htmlspecialchars($tel); // преобразования символов
$name = htmlspecialchars($name);

$tel = urldecode($tel); // декодирование url
$name = urldecode($name);

$tel = trim($tel); // удаления пробелов в конце и в начале поля
$name = trim($name);



if (mail("svetapopova_2019@mail.ru",
         "Новые данные",
         "Телефон: ".$tel."\n".
         "Имя: ".$name,
         "From: smtp.mail.ru \r\n")
   ) {
      echo ('Good!');
      }
      else {
         echo ('check your info...');
      }
?>