<?php
$post_id = $_GET['route'];
include_once 'connect.php';
$article = get_article_by_id($post_id);
$title = $article['title'];
include_once 'components/header.php' ?>

<main class="main">
  <article class="article-two">
    <div class="article-two__ibg" style="background-image: url('../images/<?= $article['img'] ?>');">
      <h1 class="article-two__title">
        <?= $article['title'] ?>
      </h1>
    </div>
    <div class="container container--two">
      <div class="article-two__content">
        <?= $article['text'] ?>
      </div>
    </div>
  </article>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>