<?php
include_once 'connect.php';
$articles = get_articles();
$posts = get_recent_articles();
$cats = get_cat();
$title = "Business in Switzerland for the reliable future of your entrepreneurship";
include_once "components/header.php";
?>

<main class="main">
  <section class="swissfirma">
    <div class="container">
      <h1 class="swissfirma__title title">Business In Switzerland — Swissfirma</h1>
      <div class="swissfirma__slider slider">
        <?php foreach ($articles as $article) : ?>
          <div class="slider__item">
            <a href="<?= $article['url'] ?>" class="slider__item-link"></a>
            <div class="slider__item-img">
              <img src="images/<?= $article['img'] ?>" alt="<?= str_replace(['-', '.jpg'], [' ', ''],  $article['img']) ?>" />
            </div>
            <div class="slider__item-bottom">
              <div class="slider__item-box">
                <span class="slider__item-data"><?= $article['date'] ?></span>
                <span class="slider__item-name"><?= $article['author'] ?></span>
              </div>
              <h3 class="slider__item-title">
                <?= $article['title'] ?>
              </h3>
              <p class="slider__item-text">
                <?= substr($article['text'], 3, 100) . "..."  ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swissfirma__box box">
        <?php foreach ($articles as $article) : ?>
          <?php if ($article['id'] <= 3) : ?>
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
      <div class="swissfirma__links links">
        <a href="verify-the-company-name" class="links__link">VERIFY THE COMPANY name</a>
        <a href="tax-calculator" class="links__link">TAX CALCULATOR</a>
        <a href="company-formation-online" class="links__link">COMPANY FORMATION ONLINE</a>
      </div>
      <div class="swissfirma__quest quest">
        <div class="quest__content">
          <p class="quest__title">HAVE A questions?</p>
          <p class="quest__subtitle">ASK now!</p>
        </div>
        <button type="button" class="quest__btn btn popup-ask">GET feedback NOW!</button>
      </div>
    </div>
  </section>

  <div class="swissfirma-filter filter">
    <div class="container">
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
      <div class="filter__btns">
        <button type="button" class="filter__btn btn">SHOW more</button>
        <a href="all-news" class="filter__btn btn">ALL NEWS</a>
      </div>
    </div>
  </div>

  <?php include_once 'components/quest.php' ?>

  <section class="business">
    <div class="container">
      <h1 class="business__title title">OPEN A BUSINESS</h1>
      <div class="business__slider slider">
        <?php foreach ($articles as $article) : ?>
          <?php if ($article['cat'] == "taxes-in-switzerland") : ?>
            <div class="slider__item">
              <a href="<?= $article['url'] ?>" class="slider__item-link"></a>
              <div class="slider__item-img">
                <img src="images/<?= $article['img'] ?>" alt="<?= str_replace(['-', '.jpg'], [' ', ''],  $article['img']) ?>" />
              </div>
              <div class="slider__item-bottom">
                <div class="slider__item-box">
                  <span class="slider__item-data"><?= $article['date'] ?></span>
                  <span class="slider__item-name"><?= $article['author'] ?></span>
                </div>
                <h3 class="slider__item-title">
                  <?= $article['title'] ?>
                </h3>
                <p class="slider__item-text">
                  <?= substr($article['text'], 3, 100) . "..." ?>
                </p>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <div class="business__box box">
        <?php foreach ($posts as $article) : ?>
          <?php if ($article['id'] >= 30 && $article['id'] <= 32) : ?>
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
      <div class="business__quest quest">
        <div class="quest__content">
          <p class="quest__title">HAVE A questions?</p>
          <p class="quest__subtitle">ASK now!</p>
        </div>
        <button type="button" class="quest__btn btn popup-ask">GET feedback NOW!</button>
      </div>
    </div>
  </section>

  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>

<script>
  //Sliders
  $(".slider").slick({
    prevArrow: '<button type="button" class="slick-arrow slick-arrow--prev"></button>',
    nextArrow: '<button type="button" class="slick-arrow slick-arrow--next"></button>'
  });

  //Filter
  function createNewArray(arr) {
    let newArray = [];
    for (let i = 0; i < arr.length; i++) {
      let element = arr[i];
      if (!$(element).hasClass('close')) {
        newArray.push(element);
      }
    }
    return newArray
  }

  function hideFilterItems(arr) {
    for (let i = 0; i < arr.length; i++) {
      if (i < 3) {
        $("button.filter__btn").css("display", "none");
      } else {
        $(arr[i]).addClass("close");
        $("button.filter__btn").css("display", "block");
      }
    }
  }

  hideFilterItems($(".filter__item"));

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

    let catItems = createNewArray($(".filter__item"));
    hideFilterItems(catItems);
  });

  $(".filter__btn").on("click", function() {
    let cat = $(".filter__nav-btn.active").data("cat");
    let catItem;
    let catItems = [];

    $(".filter__item").each(function() {
      catItem = $(this).data("itemCat");
      if (cat == catItem || cat == "all") {
        catItems.push($(this));
      }
      return catItems
    });

    let a = 0;
    for (let i = 0; i < catItems.length; i++) {
      if ($(catItems[i]).hasClass("close")) {
        a++
        if ((a <= 3)) {
          $(catItems[i]).removeClass('close');
          $("button.filter__btn").css("display", "block");
        }
      } else {
        $("button.filter__btn").css("display", "none");
      }
    }

    if (a <= 3) {
      $("button.filter__btn").css("display", "none");
    }
  });
</script>