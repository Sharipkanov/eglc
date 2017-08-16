<?php

if(isset($_POST['name'])) {

    $subject = $_POST['subject'];
    $name = "Имя:\r\n" . $_POST['name'] . "\r\n\r\n";
    $phone = "Телефон:\r\n" . $_POST['phone'] . "\r\n\r\n";
    $from_email = 'eglcompany.kz@gmail.com'; //sender email
    // $recipient_email = 'yurabogatyrenko@gmail.com'; //recipient email
    $message .= $name . $phone;

    $headers = "From: $from_email \r\n";
    $headers .= "Reply-To: $from_email \r\n";
    $headers .= "Return-Path: $from_email\r\n";
    $headers .= "X-Mailer: PHP \r\n";


    echo(mail($from_email,$subject,$message,$headers))
        ? json_encode(['status' => 1])
        : json_encode(['status' => 0]);
}