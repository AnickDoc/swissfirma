<?php
include_once 'connect.php';
$articles = get_articles();
$title = "All news";
$meta_title = "";
$meta_desc = "";
$meta_keywords = "";
$breadcrams_page = $title;
include_once 'components/header.php' ?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

  <div class="all-news">
    <div class="container">
      <h1 class="all-news__title title">ALL NEWS</h1>
      <div class="all-news__filter filter">
        <div class="filter__nav">
          <button type="button" data-cat="all" class="filter__nav-btn active">All</button>
          <button type="button" data-cat="business-in-switzerland" class="filter__nav-btn">Business in Switzerland</button>
          <button type="button" data-cat="taxes-in-switzerland" class="filter__nav-btn">Taxes in Switzerland</button>
          <button type="button" data-cat="economic" class="filter__nav-btn">Economic</button>
          <button type="button" data-cat="immigration" class="filter__nav-btn">Immigration</button>
          <button type="button" data-cat="investments" class="filter__nav-btn">Investments</button>
        </div>
        <div class="filter__cards">
          <?php foreach ($articles as $article) : ?>
            <div class="filter__item" data-item-cat="<?= $article['cat'] ?>">
              <a href="<?= $article['url'] ?>" class="filter__item-link"></a>
              <div class="filter__item-img">
                <img src="images/<?= $article['img'] ?>" alt="<?= str_replace(['-', '.jpg'], [' ', ''],  $article['img']) ?>" />
              </div>
              <div class="filter__item-content">
                <h4 class="filter__item-title">
                  <?= $article['title'] ?>
                </h4>
                <p class="filter__item-text">
                  <?= substr($article['text'], 0, 100) . '...' ?>
                </p>
                <div class="filter__item-more">Read more</div>
              </div>
              <div class="filter__item-checks">
                <span class="filter__item-check"><?= $article['date'] ?></span>
                <span class="filter__item-check"><?= $article['category'] ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>

<script>
  //Filter
  $(".filter__nav-btn").on("click", function() {
    $(".filter__nav-btn").removeClass('active');
    $(this).addClass("active");
    $(".filter__item").removeClass("close");

    let cat = $(this).data("cat");
    let catItem;

    $(".filter__item").each(function() {
      catItem = $(this).data("itemCat");

      if (cat !== catItem && cat !== "all") {
        $(this).addClass("close");
      } else if (cat == "all") {
        $(".filter__item").removeClass("close");
      }
    })
  });
</script>