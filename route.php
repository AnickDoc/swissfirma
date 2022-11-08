<?php
include_once 'connect.php';
$articles = get_articles();
$cats = get_cat();
$url = $_SERVER['REQUEST_URI'];

if ($url === "/contacts") {
  require "contacts.php";
} else if ($url === "/verify-the-company-name") {
  require "verify.php";
} else if ($url === "/tax-calculator") {
  require "calculator.php";
} else if ($url === "/company-formation-online") {
  require "formation.php";
} else if ($url === "/all-news") {
  require "all-news.php";
} else {
  foreach ($cats as $cat) {
    if ($url === "/" . $cat['url']) {
      $_GET["route"] = $cat['cat'];
      require "page-cards.php";
      exit;
    }
  }

  foreach ($articles as $article) {
    if ($url === "/" . $article['url']) {
      $_GET["route"] = $article['id'];
      require "article.php";
      exit;
    }
  }

  require "404.php";
}
