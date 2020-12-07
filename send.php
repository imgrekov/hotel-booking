<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$name     = (isset($_POST['name'])) ? $_POST['name'] : '';
$phone    = (isset($_POST['phone'])) ? $_POST['phone'] : '';
$email    = (isset($_POST['email'])) ? $_POST['email'] : '';
$message  = ($_POST['message']) ? $_POST['message'] : 'Пользователь оставил поле пустым…';
$sub_mail = (isset($_POST['sub_mail'])) ? $_POST['sub_mail'] : '';

$title = "Новое сообщение с сайта Best Tour Plan";
$body = "
  <h2>Новое письмо</h2>
  <b>Имя:</b> $name<br>
  <b>Телефон:</b> $phone<br><br>
  <b>Сообщение:</b><br>$message
";

if ($email) {
  $title = "Модальное окно. Новое сообщение с сайта Best Tour Plan";
  $body = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br>
    <b>Почта:</> $email<br><br>
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
  $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
  $mail->Username   = 'tourplan59@gmail.com'; // Логин на почте
  $mail->Password   = 'T2TiPA4siyi2'; // Пароль на почте
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  // Адрес самой почты и имя отправителя
  $mail->setFrom('tourplan59@gmail.com', 'Hotel Booking');

  // Получатель письма
  $mail->addAddress('d9fgrek@gmail.com');

  // Отправка сообщения
  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;

  // Проверяем отравленность сообщения
  $result = ($mail->send()) ? 'success' : 'error';
} catch (Exception $e) {
  $result = "error";
  $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

$type = $sub_mail ? 'sub' : 'msg';

// Отображение результата
header('Location: thanks.php?t=' . $type);
// echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
