<?php
$article_cat = $_GET['route'];
include_once 'connect.php';
$cats = get_cat();
$articles = get_articles();
foreach ($articles as $article) {
  if ($article['cat'] == $article_cat) {
    $title = $article['category'];
    $breadcrams_page = $title;
  }
}
$meta_title = "";
$meta_desc = "";
$meta_keywords = "";
include_once 'components/header.php';
?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

  <section class="cards">
    <div class="container">
      <?php foreach ($cats as $cat) : ?>
        <?php if ($cat['cat'] == $article_cat) : ?>
          <h1 class="cards__title title"><?= $cat['category'] ?></h1>
        <?php endif; ?>
      <?php endforeach; ?>
      <div class="cards__box box">
        <?php foreach ($articles as $article) : ?>
          <?php if ($article['cat'] == $article_cat) : ?>
            <div class="box__item">
              <a href="<?= $article['url'] ?>" class="box__item-link"></a>
              <div class="box__item-img">
                <img src="images/<?= $article['img'] ?>" alt="<?= str_replace(['-', '.jpg'], [' ', ''],  $article['img']) ?>" />
              </div>
              <div class="box__item-content">
                <p class="box__item-data"><?= $article['date'] ?></p>
                <h4 class="box__item-title">
                  <?= $article['title'] ?>
                </h4>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <button type="button" class="cards__btn btn">Show more</button>
    </div>
  </section>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>

<script>
  //Filter
  let boxArr = $(".box__item");
  let boxArrNow = [];

  for (let i = 0; i < boxArr.length; i++) {
    const element = boxArr[i];
    if (i > 8) {
      $(element).addClass('close');
      boxArrNow.push(element)
    }
  }

  $(".cards__btn").on("click", function() {
    let a = 0;
    for (let i = 0; i < boxArrNow.length; i++) {
      const element = boxArrNow[i];
      if ($(element).hasClass("close")) {
        a++
        if (a <= 3) {
          $(element).removeClass('close');
          $(".cards__btn").css("display", "block");
        }
      } else {
        $(".cards__btn").css("display", "none");
      }
    }

    if (a <= 3) {
      $(".cards__btn").css("display", "none");
    }
  });
</script>