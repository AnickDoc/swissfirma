<?php
$post_id = $_GET['route'];
include_once 'connect.php';
$article = get_article_by_id($post_id);
$reviews = get_reviews();
$title = $article['title'];
$meta_title = $article['meta-title'];
$meta_desc = $article['meta-desc'];
$meta_keywords = $article['meta-keywords'];
include_once 'components/header.php';
?>

<main class="main">
  <div class="breadcrams">
    <div class="container">
      <ul class="breadcrams__inner">
        <li class="breadcrams__item">
          <a href="/" class="breadcrams__link">Home</a>
        </li>
        <li class="breadcrams__item">
          <a href="<?= "/" . $article['cat'] ?>" class="breadcrams__link"><?= $article['category'] ?></a>
        </li>
        <li class="breadcrams__item">
          <span class="breadcrams__link"><?= $article['title'] ?></span>
        </li>
      </ul>
    </div>
  </div>

  <article class="article">
    <div class="container">
      <h1 class="article__title title">
        <?= $article['title'] ?>
      </h1>
      <div class="article__box">
        <div class="article__box-img">
          <img src="images/<?= $article['img'] ?>" alt="<?= str_replace(['-', '.jpg'], [' ', ''],  $article['img']) ?>" />
        </div>
        <div class="article__box-inner">
          <span class="article__box-date"><?= $article['date'] ?></span>
          <span class="article__box-author"><?= $article['author'] ?></span>
          <a href="#reviews" class="article__box-link">LEAVE A REVIEWS</a>
        </div>
      </div>
      <div class="article__content">
        <?= $article['text'] ?>
      </div>
    </div>
  </article>

  <section class="reviews" id="reviews">
    <div class="container">
      <div class="reviews__inner">
        <div class="reviews__content">
          <h3 class="reviews__title title">REVIEWS</h3>
          <p class="reviews__text">
            We have been in business for more than 10 years and are experienced in resolving many clients' issues.
            From opening a company in Switzerland and obtaining holding status to debt collection domestically and internationally (enforcement of Court orders).
          </p>
          <p class="reviews__text">
            You can expect fast responses and high-quality services when you choose us.
          </p>
          <p class="reviews__text">
            Compare us with our competitors!
          </p>
        </div>
        <div class="reviews__slider">
          <div class="reviews__slider-inner">
            <?php foreach ($reviews as $rew) : ?>
              <div class="reviews__item">
                <div class="reviews__item-img">
                  <img src="images/<?= $rew['img'] ?>" alt="<?= str_replace(['-', '.jpg'], [' ', ''],  $rew['img']) ?>" />
                </div>
                <div class="reviews__item-box">
                  <div class="reviews__item-top">
                    <span class="reviews__item-name"><?= $rew['author'] ?></span>
                    <span class="reviews__item-country"><?= $rew['country'] ?></span>
                  </div>
                  <h4 class="reviews__item-title">
                    <?= $rew['title'] ?>
                  </h4>
                  <p class="reviews__item-text">
                    <?= $rew['text'] ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="other">
    <div class="container">
      <h3 class="other__title title">OTHER ARTICLES</h3>
      <div class="other-filter filter">
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
  </section>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>
<script>
  //Slider reviews
  $(".reviews__slider-inner").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 1
      },
      breakpoint: 762,
      settings: {
        slidesToShow: 2
      },
      breakpoint: 576,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  //Scroll on click
  $('a.article__box-link').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1500);
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