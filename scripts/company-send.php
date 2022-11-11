<?php
//Main
$name = $_POST['name'];
$company = $_POST['company'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$url = $_POST['url'];

//I found you through
$site = $_POST['site'];
$site_choice = implode(", ", $site);
$other = $_POST['other'];

//List of documents attached to checklist
$checklist = $_POST['checklist'];

//Company, domicile (business address)
$com_name = $_POST['company-name'];
$com_address = $_POST['company-address'];
$com_street = $_POST['company-street'];
$com_zip = $_POST['company-zip'];
$com_city = $_POST['company-city'];
$com_check = $_POST['company-check'];
$com_text = $_POST['company-text'];

//Shareholder: (Please do not forget your passport)
$shar_amount = $_POST['shareholder-amount'];
$shar_company_name = $_POST['shareholder-company-name'];
$shar_first_name = $_POST['shareholder-first-name'];
$shar_last_name = $_POST['shareholder-last-name'];
$shar_address = $_POST['shareholder-address'];
$shar_zip = $_POST['shareholder-zip'];
$shar_country = $_POST['shareholder-country'];
$shar_date = $_POST['shareholder-date'];
$shar_nationality = $_POST['shareholder-nationality'];
$shar_profession = $_POST['shareholder-profession'];
$shar_register = $_POST['shareholder-register'];
$shar_register_no = $_POST['shareholder-register-no'];

//Managing director: (Please do not forget your passport)
$dir_first_name = $_POST['director-first-name'];
$dir_last_name = $_POST['director-last-name'];
$dir_address = $_POST['director-address'];
$dir_zip = $_POST['director-zip'];
$dir_country = $_POST['director-country'];
$dir_date = $_POST['director-date'];
$dir_nationality = $_POST['director-nationality'];
$dir_profession = $_POST['director-profession'];
$dir_text = $_POST['director-text'];

//Appointment information (if already known)
$appointment_notary = $_POST['appointment-notary'];
$appointment_time = $_POST['appointment-time'];
$appointment_kanzlei = $_POST['appointment-kanzlei'];
$appointment_address = $_POST['appointment-address'];
$appointment_zip = $_POST['appointment-zip'];
$appointment_phone = $_POST['appointment-phone'];
$appointment_fax = $_POST['appointment-fax'];
$appointment_email = $_POST['appointment-email'];

$myaddres  = "info@goldblum.ch";

$mes = "Company Formation Online:
\n\nContact person:
\nFirst name and last name: $name
\nCompany: $company
\nRegistered address (street): $address
\nZIP / Postal code: $zip
\nCity: $city
\nPhone: $phone
\nFax: $fax
\nMobile: $mobile
\nE-mail: $email
\nInternet / URL: $url

\n\nI found you through:
\n $site_choice
\n Other: $other

\n\nList of documents attached to checklist:
\n $checklist

\n\nCompany, domicile (business address):
\nDesired company name: $com_name
\nAddress: $com_address
\nStreet: $com_street
\nZIP / Postal code: $com_zip
\nCity: $com_city
\nI need a business address (see additional services): $com_check
\nCorporate objective: $com_text

\n\nShareholder: (Please do not forget your passport):
\nAmount of share: $com_street
\nCompany name: $shar_company_name
\nFirst name: $shar_first_name
\nLast name: $shar_last_name
\nRegistered address (street): $shar_address
\nZIP / Postal code , City: $shar_zip
\nCountry: $shar_country
\nDate: $shar_date
\nNationality: $shar_nationality
\nProfession: $shar_profession
\nCommercial register: $shar_register
\nCommercial register no.: $shar_register_no

\n\nManaging director: (Please do not forget your passport):
\nFirst name: $dir_first_name
\nLast name: $dir_last_name
\nRegistered address (street): $dir_address
\nZIP / Postal code, City: $dir_zip
\nCountry: $dir_country
\nDate: $dir_date
\nNationality: $dir_nationality
\nProfession: $dir_profession
\nAdditional information: $dir_text

\n\nAppointment information (if already known):
\nNotary Public: $appointment_notary
\nTime: $appointment_time
\nKanzlei: $appointment_kanzlei
\nRegistered address (street): $appointment_address
\nZIP / Postal code, City: $appointment_zip
\nPhone: $appointment_phone
\nFax: $appointment_fax
\nE-mail: $appointment_email";


$sub = 'Company Formation Online';
$title = 'swissfirma.com';
$send = mail($myaddres, $sub, $mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$title");
