<?php
$to = "svetlyi-osnova@yandex.ru"; //емайл получателя
$topic = "Ответы на частые вопросы"; //Тема

$message = "Выберите руководитея: ".$_POST['select']."<br>"; //полученное из формы name=select
$message .= "Ваше имя: ".$_POST['fio']."<br>";//присвоить переменной значение, полученное из формы name=fio
$message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Ваше сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message

$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента

mail($to, $topic, $message, $headers); //отправляет получателю на емайл значения переменных
header('Location: http://xn----8sbebnynsibzgi1k.xn--p1ai/')
?>
