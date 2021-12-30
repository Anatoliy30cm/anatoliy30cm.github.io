<?php
$to = "nso-osnova@yandex.ru"; //емайл получателя
$topic = "Ответы на частые вопросы"; //Тема

$message = "Ваше имя: ".$_POST['fio']."<br>";//присвоить переменной значение, полученное из формы name=fio
$message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "Желаемая вакансия: ".$_POST['vacancy']."<br>"; //полученное из формы name=vacancy

$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента

mail($to, $topic, $message, $headers); //отправляет получателю на емайл значения переменных
header('Location: http://xn----8sbebnynsibzgi1k.xn--p1ai/')
?>
