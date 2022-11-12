<?php
include_once 'connect.php';
$articles = get_articles();
$cats = get_cat();
$rec_articles = get_recent_articles();
$title = "404: Page not found";
$meta_title = "";
$meta_desc = "";
$meta_keywords = "";
include_once 'components/header.php' ?>

<main class="main">

  <section class="page-404">
    <div class="container">
      <h1 class="page-404__title">404: Page not found</h1>
      <p class="page-404__text">
        It looks like nothing was found at this location. Maybe one of the links below?
      </p>
      <div class="page-404__posts">
        <h2 class="page-404__title page-404__title--2">Recent Posts</h2>
        <ul class="page-404__list">
          <?php for ($i = 0; $i < count($rec_articles); $i++) :
            $article = $rec_articles[$i] ?>
            <?php if ($i < 4) : ?>
              <li class="page-404__item page-404__item--posts">
                <a href="<?= $article['url'] ?>" class="page-404__link"><?= $article['title'] ?></a>
              </li>
            <?php endif; ?>
          <?php endfor; ?>
        </ul>
      </div>

      <div class="page-404__categories">
        <h2 class="page-404__title page-404__title--2">Categories</h2>
        <ul class="page-404__list">
          <?php foreach ($cats as $cat) : ?>
            <li class="page-404__item">
              <a href="<?= $cat['url'] ?>" class="page-404__link"><?= $cat['category'] ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="page-404__pages">
        <h2 class="page-404__title page-404__title--2">All pages</h2>
        <div class="all-news__filter filter">
          <div class="filter__nav">
            <button type="button" data-cat="all" class="filter__nav-btn active">Все</button>
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

      <div class="page-404__contacts">
        <h2 class="page-404__title page-404__title--2">Contacts</h2>
        <ul class="page-404__list">
          <li class="page-404__item page-404__item--contacts">
            <a href="/" class="page-404__link">Homepage</a>
          </li>
          <li class="page-404__item  page-404__item--contacts">
            <a href="tax-calculator" class="page-404__link">Tax calculator</a>
          </li>
          <li class="page-404__item  page-404__item--contacts">
            <a href="verify-the-company-name" class="page-404__link">Verify the company name</a>
          </li>
          <li class="page-404__item  page-404__item--contacts">
            <a href="company-formation-online" class="page-404__link">Company formation online</a>
          </li>
        </ul>
      </div>
    </div>
  </section>

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