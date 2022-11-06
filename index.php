<?php
$title = "Business in Switzerland for the reliable future of your entrepreneurship";
include_once "components/header.php";
?>

<main class="main">
  <section class="swissfirma">
    <div class="container">
      <h1 class="swissfirma__title title">Business In Switzerland — Swissfirma</h1>
      <div class="swissfirma__slider slider">
        <div class="slider__item">
          <a href="#" class="slider__item-link"></a>
          <div class="slider__item-img">
            <img src="images/swissfirma/1.jpg" alt="photo" />
          </div>
          <div class="slider__item-bottom">
            <div class="slider__item-box">
              <span class="slider__item-data">31.12.2017</span>
              <span class="slider__item-name">Anna Ledenyova</span>
            </div>
            <h3 class="slider__item-title">
              OPEN AN E-COMMERCE COMPANY IN switzerland
            </h3>
            <p class="slider__item-text">
              Our team of Swiss company formation representatives can offer assistance for the incorporation of an
              e-commerce company
              in Switzerland.
            </p>
          </div>
        </div>
        <div class="slider__item">
          <a href="#" class="slider__item-link"></a>
          <div class="slider__item-img">
            <img src="images/swissfirma/2.jpg" alt="photo" />
          </div>
          <div class="slider__item-bottom">
            <div class="slider__item-box">
              <span class="slider__item-data">31.08.2018</span>
              <span class="slider__item-name">Dari Podhur</span>
            </div>
            <h3 class="slider__item-title">
              BLOCKCHAIN IN SWITZERLAND
            </h3>
            <p class="slider__item-text">
              Helping Blockchain Companies Open Bank Accounts The past year has seen such a major shift in
              blockchain in Switzerland,
              pushing it to the top of the financial development agenda.
            </p>
          </div>
        </div>
        <div class="slider__item">
          <a href="#" class="slider__item-link"></a>
          <div class="slider__item-img">
            <img src="images/swissfirma/3.jpg" alt="photo" />
          </div>
          <div class="slider__item-bottom">
            <div class="slider__item-box">
              <span class="slider__item-data">09.03.2018</span>
              <span class="slider__item-name">Dmytro Pichugin</span>
            </div>
            <h3 class="slider__item-title">
              SWITZERLAND – GERMANY DOUBLE TAX TREATY
            </h3>
            <p class="slider__item-text">
              There have been over 80 double taxation treaties signed by Switzerland with nations all around the
              world. This network
              of treaties has created an entire framework for which the Swiss taxation laws and regulations for
              foreign investors are
              built on. Most of the treaties put in place by Switzerland follow regulations set out by the OECD.
            </p>
          </div>
        </div>
      </div>
      <div class="swissfirma__box box">

        <?php foreach ($articles as $article) : ?>
          <?php if ($article[0] <= 3) : ?>
            <div class="box__item">
              <a href="#" class="box__item-link"></a>
              <div class="box__item-img">
                <img src="<?= $article[2] ?>" alt="photo" />
              </div>
              <div class="box__item-content">
                <p class="box__item-data">05-09-2018</p>
                <h4 class="box__item-title">
                  <?= $article[1] ?>
                </h4>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

      </div>
      <div class="swissfirma__links links">
        <a href="verify" class="links__link">VERIFY THE COMPANY name</a>
        <a href="calculator" class="links__link">TAX CALCULATOR</a>
        <a href="formation" class="links__link">COMPANY FORMATION ONLINE</a>
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
        <button type="button" data-cat="business" class="filter__nav-btn">Business in Switzerland</button>
        <button type="button" data-cat="taxes" class="filter__nav-btn">Taxes in Switzerland</button>
        <button type="button" data-cat="economic" class="filter__nav-btn">Economic</button>
        <button type="button" data-cat="immigration" class="filter__nav-btn">Immigration</button>
        <button type="button" data-cat="investments" class="filter__nav-btn">Investments</button>
      </div>
      <div class="filter__cards">
        <div class="filter__item" data-item-cat="taxes">
          <a href="#" class="filter__item-link"></a>
          <div class="filter__item-img">
            <img src="images/cards/1.jpg" alt="photo" />
          </div>
          <div class="filter__item-content">
            <h4 class="filter__item-title">
              Legal Guidance for Bail Bonds The common man might not fear the lord but he sure fears the law
            </h4>
            <p class="filter__item-text">
              The worst of legal fears for a common man is to end up behind bars.
            </p>
            <div class="filter__item-more">Read more</div>
          </div>
          <div class="filter__item-checks">
            <span class="filter__item-check">01.10.2022</span>
            <span class="filter__item-check">Taxes in Switzerland</span>
          </div>
        </div>
        <div class="filter__item" data-item-cat="business">
          <a href="#" class="filter__item-link"></a>
          <div class="filter__item-img">
            <img src="images/cards/1.jpg" alt="photo" />
          </div>
          <div class="filter__item-content">
            <h4 class="filter__item-title">
              Legal Guidance for Bail Bonds The common man might not fear the lord but he sure fears the law
            </h4>
            <p class="filter__item-text">
              The worst of legal fears for a common man is to end up behind bars.
            </p>
            <div class="filter__item-more">Read more</div>
          </div>
          <div class="filter__item-checks">
            <span class="filter__item-check">01.10.2022</span>
            <span class="filter__item-check">Business in Switzerland</span>
          </div>
        </div>
        <div class="filter__item" data-item-cat="economic">
          <a href="#" class="filter__item-link"></a>
          <div class="filter__item-img">
            <img src="images/cards/1.jpg" alt="photo" />
          </div>
          <div class="filter__item-content">
            <h4 class="filter__item-title">
              Legal Guidance for Bail Bonds The common man might not fear the lord but he sure fears the law
            </h4>
            <p class="filter__item-text">
              The worst of legal fears for a common man is to end up behind bars.The worst of legal fears for a
              common man is to end up behind bars.The worst of legal fears for a common man is to end up behind
              bars.The worst of legal fears for a common man is to end up behind bars.
            </p>
            <div class="filter__item-more">Read more</div>
          </div>
          <div class="filter__item-checks">
            <span class="filter__item-check">01.10.2022</span>
            <span class="filter__item-check">Economic</span>
          </div>
        </div>
        <div class="filter__item" data-item-cat="economic">
          <a href="#" class="filter__item-link"></a>
          <div class="filter__item-img">
            <img src="images/cards/1.jpg" alt="photo" />
          </div>
          <div class="filter__item-content">
            <h4 class="filter__item-title">
              Legal Guidance for Bail Bonds The common man might not fear the lord but he sure fears the law
            </h4>
            <p class="filter__item-text">
              The worst of legal fears for a common man is to end up behind bars.
            </p>
            <div class="filter__item-more">Read more</div>
          </div>
          <div class="filter__item-checks">
            <span class="filter__item-check">01.10.2022</span>
            <span class="filter__item-check">economic</span>
          </div>
        </div>
        <div class="filter__item" data-item-cat="economic">
          <a href="#" class="filter__item-link"></a>
          <div class="filter__item-img">
            <img src="images/cards/1.jpg" alt="photo" />
          </div>
          <div class="filter__item-content">
            <h4 class="filter__item-title">
              Legal Guidance for Bail Bonds The common man might not fear the lord but he sure fears the law
            </h4>
            <p class="filter__item-text">
              The worst of legal fears for a common man is to end up behind bars.
            </p>
            <div class="filter__item-more">Read more</div>
          </div>
          <div class="filter__item-checks">
            <span class="filter__item-check">01.10.2022</span>
            <span class="filter__item-check">economic</span>
          </div>
        </div>
        <div class="filter__item" data-item-cat="economic">
          <a href="#" class="filter__item-link"></a>
          <div class="filter__item-img">
            <img src="images/cards/1.jpg" alt="photo" />
          </div>
          <div class="filter__item-content">
            <h4 class="filter__item-title">
              Legal Guidance for Bail Bonds The common man might not fear the lord but he sure fears the law
            </h4>
            <p class="filter__item-text">
              The worst of legal fears for a common man is to end up behind bars.The worst of legal fears for a
              common man is to end up behind bars.The worst of legal fears for a common man is to end up behind
              bars.The worst of legal fears for a common man is to end up behind bars.
            </p>
            <div class="filter__item-more">Read more</div>
          </div>
          <div class="filter__item-checks">
            <span class="filter__item-check">01.10.2022</span>
            <span class="filter__item-check">Economic</span>
          </div>
        </div>
        <div class="filter__item" data-item-cat="economic">
          <a href="#" class="filter__item-link"></a>
          <div class="filter__item-img">
            <img src="images/cards/1.jpg" alt="photo" />
          </div>
          <div class="filter__item-content">
            <h4 class="filter__item-title">
              Legal Guidance for Bail Bonds The common man might not fear the lord but he sure fears the law
            </h4>
            <p class="filter__item-text">
              The worst of legal fears for a common man is to end up behind bars.
            </p>
            <div class="filter__item-more">Read more</div>
          </div>
          <div class="filter__item-checks">
            <span class="filter__item-check">01.10.2022</span>
            <span class="filter__item-check">economic</span>
          </div>
        </div>
        <div class="filter__item" data-item-cat="economic">
          <a href="#" class="filter__item-link"></a>
          <div class="filter__item-img">
            <img src="images/cards/1.jpg" alt="photo" />
          </div>
          <div class="filter__item-content">
            <h4 class="filter__item-title">
              Legal Guidance for Bail Bonds The common man might not fear the lord but he sure fears the law
            </h4>
            <p class="filter__item-text">
              The worst of legal fears for a common man is to end up behind bars.
            </p>
            <div class="filter__item-more">Read more</div>
          </div>
          <div class="filter__item-checks">
            <span class="filter__item-check">01.10.2022</span>
            <span class="filter__item-check">economic</span>
          </div>
        </div>
        <div class="filter__item" data-item-cat="economic">
          <a href="#" class="filter__item-link"></a>
          <div class="filter__item-img">
            <img src="images/cards/1.jpg" alt="photo" />
          </div>
          <div class="filter__item-content">
            <h4 class="filter__item-title">
              Legal Guidance for Bail Bonds The common man might not fear the lord but he sure fears the law
            </h4>
            <p class="filter__item-text">
              The worst of legal fears for a common man is to end up behind bars.The worst of legal fears for a
              common man is to end up behind bars.The worst of legal fears for a common man is to end up behind
              bars.The worst of legal fears for a common man is to end up behind bars.
            </p>
            <div class="filter__item-more">Read more</div>
          </div>
          <div class="filter__item-checks">
            <span class="filter__item-check">01.10.2022</span>
            <span class="filter__item-check">Economic</span>
          </div>
        </div>
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
        <div class="slider__item">
          <a href="#" class="slider__item-link"></a>
          <div class="slider__item-img">
            <img src="images/business/1.jpg" alt="photo" />
          </div>
          <div class="slider__item-bottom">
            <div class="slider__item-box">
              <span class="slider__item-data">31.12.2017</span>
              <span class="slider__item-name">Anna Ledenyova</span>
            </div>
            <h3 class="slider__item-title">
              OPEN AN E-COMMERCE COMPANY IN switzerland
            </h3>
            <p class="slider__item-text">
              Our team of Swiss company formation representatives can offer assistance for the incorporation of an
              e-commerce company
              in Switzerland.
            </p>
          </div>
        </div>
        <div class="slider__item">
          <a href="#" class="slider__item-link"></a>
          <div class="slider__item-img">
            <img src="images/business/2.jpg" alt="photo" />
          </div>
          <div class="slider__item-bottom">
            <div class="slider__item-box">
              <span class="slider__item-data">31.08.2018</span>
              <span class="slider__item-name">Dari Podhur</span>
            </div>
            <h3 class="slider__item-title">
              BLOCKCHAIN IN SWITZERLAND
            </h3>
            <p class="slider__item-text">
              Helping Blockchain Companies Open Bank Accounts The past year has seen such a major shift in
              blockchain in Switzerland,
              pushing it to the top of the financial development agenda.
            </p>
          </div>
        </div>
        <div class="slider__item">
          <a href="#" class="slider__item-link"></a>
          <div class="slider__item-img">
            <img src="images/business/3.jpg" alt="photo" />
          </div>
          <div class="slider__item-bottom">
            <div class="slider__item-box">
              <span class="slider__item-data">09.03.2018</span>
              <span class="slider__item-name">Dmytro Pichugin</span>
            </div>
            <h3 class="slider__item-title">
              SWITZERLAND – GERMANY DOUBLE TAX TREATY
            </h3>
            <p class="slider__item-text">
              There have been over 80 double taxation treaties signed by Switzerland with nations all around the
              world. This network
              of treaties has created an entire framework for which the Swiss taxation laws and regulations for
              foreign investors are
              built on. Most of the treaties put in place by Switzerland follow regulations set out by the OECD.
            </p>
          </div>
        </div>
      </div>
      <div class="business__box box">
        <div class="box__item">
          <a href="#" class="box__item-link"></a>
          <div class="box__item-img">
            <img src="images/business/4.jpg" alt="photo" />
          </div>
          <div class="box__item-content">
            <p class="box__item-data">05-09-2018</p>
            <h4 class="box__item-title">
              How to Establish a Business in Switzerland
            </h4>
          </div>
        </div>
        <div class="box__item">
          <a href="#" class="box__item-link"></a>
          <div class="box__item-img">
            <img src="images/business/5.jpg" alt="photo" />
          </div>
          <div class="box__item-content">
            <p class="box__item-data">16-02-2018</p>
            <h4 class="box__item-title">
              Opening a Corporation in 2022 - your guideline for business starting in Switzerland
            </h4>
          </div>
        </div>
        <div class="box__item">
          <a href="#" class="box__item-link"></a>
          <div class="box__item-img">
            <img src="images/business/6.jpg" alt="photo" />
          </div>
          <div class="box__item-content">
            <p class="box__item-data">05-03-2018</p>
            <h4 class="box__item-title">
              Double Tax Treaties in Switzerland — your guideline for business starting in Switzerland
            </h4>
          </div>
        </div>
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