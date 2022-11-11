<?php

$country = $_POST['country'];
$taxable = $_POST['taxable'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$myaddres  = "info@goldblum.ch";
$mes = "Tax calculator:\n\nCountry: $country\nTaxable amount: $taxable\nName: $name\nPhone: $phone\nEmail: $email";

$sub = 'Tax calculator';
$title = 'swissfirma.com';
$send = mail($myaddres, $sub, $mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$title");