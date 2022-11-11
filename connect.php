<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connect = mysqli_connect('127.0.0.1', 'root', '', 'swissfirma');

if (!$connect) {
  die("Error");
}

function get_articles(){

  global $connect;
  $sql = "SELECT * FROM `articles`";
  $result = mysqli_query($connect, $sql);
  $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $articles;
}

function get_articles_two()
{

  global $connect;
  $sql = "SELECT * FROM `articles-two`";
  $result = mysqli_query($connect, $sql);
  $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $articles;
}

function get_article_two_by_id($id)
{

  global $connect;
  $sql = "SELECT * FROM `articles-two` WHERE id = " . $id;
  $result = mysqli_query($connect, $sql);
  $article = mysqli_fetch_assoc($result);

  return $article;
}

function get_article_by_id($id){

  global $connect;
  $sql ="SELECT * FROM `articles` WHERE id = " . $id;
  $result = mysqli_query($connect, $sql);
  $article = mysqli_fetch_assoc($result);

  return $article;
}

function get_cat(){

  global $connect;
  $sql = "SELECT * FROM `category`";
  $result = mysqli_query($connect, $sql);
  $cat = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $cat;
}

function get_recent_articles(){
  global $connect;
  $sql = "SELECT * FROM `articles` ORDER BY `articles`.`id` DESC";
  $result = mysqli_query($connect, $sql);
  $rec_articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $rec_articles;
}

function get_reviews(){

  global $connect;
  $sql = "SELECT * FROM `reviews`";
  $result = mysqli_query($connect, $sql);
  $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $reviews;
}
