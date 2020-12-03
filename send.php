<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name_raw = $_POST['name'];
$name = ($name_raw) ?: '';
$phone_raw = $_POST['phone'];
$phone = ($phone_raw) ?: '';
$message_raw = $_POST['message'];
$message = ($message_raw) ?: 'Пользователь оставил поле пустым…';
$sub_mail_raw = $_POST['sub_mail'];
$sub_mail = ($sub_mail_raw) ?: '';


// Формирование самого письма
if ($name && $phone) {
  $title = "Новое сообщение с сайта Best Tour Plan";
  $body = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Почта:</b> $phone<br><br>
    <b>Сообщение:</b><br>$message
  ";
}

if ($sub_mail) {
  $title = "Подписка на новости Best Tour Plan";
  $body = "
    <h2>Подписка на новости</h2>
    <b>mail:</b> $sub_mail<br>
  ";
}

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
  $mail->isSMTP();
  $mail->CharSet = "UTF-8";
  $mail->SMTPAuth   = true;
  // $mail->SMTPDebug = 2;
  $mail->Debugoutput = function ($str, $level) {
    $GLOBALS['status'][] = $str;
  };

  // Настройки вашей почты
  $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
  $mail->Username   = 'grekon.io@yandex.ru'; // Логин на почте
  $mail->Password   = 'dragon9fruit'; // Пароль на почте
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  // Адрес самой почты и имя отправителя
  $mail->setFrom('grekon.io@yandex.ru', 'Григорий Греков');

  // Получатель письма
  $mail->addAddress('d9fgrek@gmail.com');

  // Отправка сообщения
  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;

  // Проверяем отравленность сообщения
  if ($mail->send()) {
    $result = "success";
  } else {
    $result = "error";
  }
} catch (Exception $e) {
  $result = "error";
  $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

$type = $sub_mail ? 'sub' : 'callback';

// Отображение результата
header('Location: thanks.php?t=' . $type);
// echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
