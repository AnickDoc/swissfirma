<?php

$connect = mysqli_connect('127.0.0.1', 'root', '', 'swissfirma');

if (!$connect) {
  die("Error");
}

$articles = mysqli_query($connect, "SELECT * FROM `article`");
$articles = mysqli_fetch_all($articles);

