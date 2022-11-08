<?php
include_once 'connect.php';
$articles = get_articles();
$cats = get_cat();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="BLg2dpYYtc3D3bEIhDC9UzsacHtNl5kSNExAF5RM8wg">
    <!--metatextblock-->
    <title><?= $title ?></title>
    <meta name="description" content="All information about the start business of all kinds in Switzerland. Samples, budgets and the timeline.">
    <meta name="keywords" content="Business in Switzerland, business, switzerland">
    <meta property="og:url" content="http://swissfirma.com">
    <meta property="og:title" content="Business in Switzerland for the reliable future of your entrepreneurship.">
    <meta property="og:description" content="All information about the start business of all kinds in Switzerland. Samples, budgets and the timeline.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/business-in-switzerl.jpeg">
    <link rel="canonical" href="http://swissfirma.com">
    <meta property="fb:app_id" content="257953674358265">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <!--/metatextblock-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/null.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
  </head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__owerlay">
        <div class="header__inner">
          <div class="header__close">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 25 25">
              <defs>
                <path id="avzva" d="M691.485 160.07l-1.414 1.415-7.071-7.071-7.071 7.071-1.414-1.414 7.07-7.071-7.07-7.071 1.414-1.415 7.07 7.071 7.072-7.07 1.414 1.414-7.07 7.07z" />
              </defs>
              <g>
                <g transform="translate(-674 -144)">
                  <use fill="#fff" xlink:href="#avzva" />
                </g>
              </g>
            </svg>
          </div>
          <div class="header__top">
            <div class="container">
              <div class="header__top-inner">
                <a class="header__logo header__logo--dt" href="/"><img src="images/logo.png" alt="logo" /></a>
                <a class="header__logo header__logo--mob" href="/"><img src="images/logo_mob.png" alt="logo" /></a>
                <div class="header__top-block">
                  <a class="header__link" href="tel:+41445152591">+41 44 5152591</a>
                  <a class="header__watsapp" href="https://wa.me/41765148874?text=I%20need%20more%20information%21" target="_blank">
                    <svg width="30px" height="30px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM69.7626 28.9928C64.6172 23.841 57.7739 21.0027 50.4832 21C35.4616 21 23.2346 33.2252 23.2292 48.2522C23.2274 53.0557 24.4823 57.7446 26.8668 61.8769L23 76L37.4477 72.2105C41.4282 74.3822 45.9107 75.5262 50.4714 75.528H50.4823C65.5029 75.528 77.7299 63.301 77.7363 48.2749C77.7408 40.9915 74.9089 34.1446 69.7626 28.9928ZM62.9086 53.9588C62.2274 53.6178 58.8799 51.9708 58.2551 51.7435C57.6313 51.5161 57.1766 51.4024 56.7228 52.0845C56.269 52.7666 54.964 54.2998 54.5666 54.7545C54.1692 55.2092 53.7718 55.2656 53.0915 54.9246C52.9802 54.8688 52.8283 54.803 52.6409 54.7217C51.6819 54.3057 49.7905 53.4855 47.6151 51.5443C45.5907 49.7382 44.2239 47.5084 43.8265 46.8272C43.4291 46.1452 43.7837 45.7769 44.1248 45.4376C44.3292 45.2338 44.564 44.9478 44.7987 44.662C44.9157 44.5194 45.0328 44.3768 45.146 44.2445C45.4345 43.9075 45.56 43.6516 45.7302 43.3049C45.7607 43.2427 45.7926 43.1776 45.8272 43.1087C46.0545 42.654 45.9409 42.2565 45.7708 41.9155C45.6572 41.6877 45.0118 40.1167 44.4265 38.6923C44.1355 37.984 43.8594 37.3119 43.671 36.8592C43.1828 35.687 42.6883 35.69 42.2913 35.6924C42.2386 35.6928 42.1876 35.6931 42.1386 35.6906C41.7421 35.6706 41.2874 35.667 40.8336 35.667C40.3798 35.667 39.6423 35.837 39.0175 36.5191C38.9773 36.5631 38.9323 36.6111 38.8834 36.6633C38.1738 37.4209 36.634 39.0648 36.634 42.2002C36.634 45.544 39.062 48.7748 39.4124 49.2411L39.415 49.2444C39.4371 49.274 39.4767 49.3309 39.5333 49.4121C40.3462 50.5782 44.6615 56.7691 51.0481 59.5271C52.6732 60.2291 53.9409 60.6475 54.9303 60.9612C56.5618 61.4796 58.046 61.4068 59.22 61.2313C60.5286 61.0358 63.2487 59.5844 63.8161 57.9938C64.3836 56.4033 64.3836 55.0392 64.2136 54.7554C64.0764 54.5258 63.7545 54.3701 63.2776 54.1395C63.1633 54.0843 63.0401 54.0247 62.9086 53.9588Z" fill="#32CD32"></path>
                    </svg>
                  </a>
                  <button class="header__btn btn popup-contact" type="button">Callback</button>
                </div>
              </div>
            </div>
          </div>
          <nav class="header__nav">
            <ul class="header__nav-list">
              <?php foreach ($cats as $cat) : ?>
                <li class="header__nav-item">
                  <a href="<?= $cat['url'] ?>" class="header__nav-link"><?= $cat['category'] ?></a>
                </li>
              <?php endforeach; ?>
              <li class="header__nav-item">
                <a href="contacts" class="header__nav-link">CONTACTS</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="header__burger">
        <span></span>
      </div>
    </header>