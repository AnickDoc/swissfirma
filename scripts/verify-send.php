<?php

$company_name = $_POST['company-name'];
$company_name2 = $_POST['company-name2'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];


$myaddres  = "info@goldblum.ch";
$mes = "Verify the Company Name :\n\nCompany Name: $company_name\nCompany Name (optional): $company_name2\nName: $name\nPhone: $phone\nEmail: $email\nText: $textarea";

$sub = 'Verify the Company Name';
$title = 'swissfirma.com';
$send = mail($myaddres, $sub, $mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$title");