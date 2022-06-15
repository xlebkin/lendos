<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$title = "Заголовок письма";
$body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>Почта:</b> $email<br><br>
<b>Сообщение:</b><br>$message
";

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = "smtp.mail.ru";//Сервер SMTP
    $mail->SMTPAuth = true;
    $mail->Username = "xl32547567@mail.ru";//В документации указано что логин это адрес вместе с собакой
    $mail->Password = "7TpKeKYJ1dzfqm6gjKWa";//Пароль
    $mail->SMTPSecure = ssl;
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';
    //Отправитель
    $mail->setFrom('xl32547567@mail.ru');
    // Получатели
    $mail->addAddress('xl32547567@mail.ru');

    //Контент сообщения
    $mail->isHTML(true);
    $mail->Subject = 'Отправка';
    $mail->Body    = $body;
    $mail->send();
echo 'Сообщение успешно отправлено';
    } catch (Exception $e) {
        echo 'При отправке сообщения произошла следующая ошибка : ', $mail->ErrorInfo;
}
?>