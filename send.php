<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$name     = (isset($_POST['name']))     ? trim($_POST['name']) : '';
$phone    = (isset($_POST['phone']))    ? trim($_POST['phone']) : '';
$email    = (isset($_POST['email']))    ? trim($_POST['email']) : '';
$message  = ($_POST['message'])         ? trim($_POST['message']) : 'User left blank…';
$sub_mail = (isset($_POST['sub_mail'])) ? trim($_POST['sub_mail']) : '';

$title = "A new message from site Best Tour Plan";
$body = "
  <h2>New mail</h2>
  <b>Name:</b> $name<br>
  <b>Phone:</b> $phone<br><br>
  <b>Message:</b><br>$message
";

if ($email) {
  $title = "Modal window. A new message from site Best Tour Plan";
  $body = "
    <h2>New mail</h2>
    <b>Name:</b> $name<br>
    <b>Phone:</b> $phone<br>
    <b>Email:</b> $email<br><br>
    <b>Message:</b><br>$message
  ";
}

if ($sub_mail) {
  $title = "Subscribe to news Best Tour Plan";
  $body = "
    <h2>Subscribe to news</h2>
    <b>Email:</b> $sub_mail<br>
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
