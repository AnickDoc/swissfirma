<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$code_phone = $_POST['code-phone'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];
$country = $_POST['country'];

$myaddres  = "info@goldblum.ch";
$mes = "Popup or Contact form:\n\nName: $name\nCountry: $country\nTelephone country code: $code_phone\nPhone: $phone\nEmail: $email\nText: $textarea";

$sub = 'Popup or Contact form';
$title = 'swissfirma.com';
$send = mail($myaddres, $sub, $mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$title");