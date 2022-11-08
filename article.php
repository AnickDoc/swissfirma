<?php
$post_id = $_GET['route'];
include_once 'connect.php';
$article = get_article_by_id($post_id);
$title = $article['title'];
$breadcrams_page = $article['title'];
include_once 'components/header.php';
?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

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
          <a href="#comments" class="article__box-link">LEAVE A comment</a>
        </div>
      </div>
      <div class="article__content">
        <?= $article['text'] ?>
      </div>
    </div>
  </article>

  <section class="comments" id="comments">
    <div class="container">
      <h3 class="comments__title title">COMMENTS</h3>
      <div class="comments__inner">
        <div id="disqus_thread">
          <iframe id="dsq-app7825" name="dsq-app7825" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" width="100%" src="https://disqus.com/embed/comments/?base=default&amp;f=swissfirma-com&amp;t_u=https%3A%2F%2Fswissfirma.com%2Fopening-swiss-corporation-aktiengesellschaft%2F&amp;t_d=Opening%20a%20Corporation%20in%202022%20-%20your%20guideline%20for%20business%20starting%20in%20Switzerland&amp;t_t=Opening%20a%20Corporation%20in%202022%20-%20your%20guideline%20for%20business%20starting%20in%20Switzerland&amp;s_o=default#version=0a8def5711578064b1e1f551873450b4" style="width: 1px !important; min-width: 100% !important; border: none !important; overflow: hidden !important; height: 358px !important;" horizontalscrolling="no" verticalscrolling="no"></iframe>
        </div>
        <script>
          /**
           *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
           *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
              s = d.createElement('script');
            s.src = 'https://swissfirma-com.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      </div>
    </div>
  </section>

  <section class="other">
    <div class="container">
      <h3 class="other__title title">OTHER ARTICLES</h3>
      <div class="other-filter filter">
        <div class="filter__nav">
          <button type="button" data-cat="all" class="filter__nav-btn active">All</button>
          <button type="button" data-cat="business" class="filter__nav-btn">Business in Switzerland</button>
          <button type="button" data-cat="taxes" class="filter__nav-btn">Taxes in Switzerland</button>
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