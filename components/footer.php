<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <div class="footer__item">
        <p class="footer__title">MENU</p>
        <ul class="footer__list">
          <?php foreach ($cats as $cat) : ?>
            <li class="footer__li">
              <a href="<?= $cat['url'] ?>" class="footer__link"><?= $cat['category'] ?></a>
            </li>
          <?php endforeach; ?>
          <li class="footer__li">
            <a href="contacts" class="footer__link">Contacts</a>
          </li>
        </ul>
      </div>
      <div class="footer__item">
        <p class="footer__title">OUR SERVICES</p>
        <ul class="footer__list">
          <li class="footer__li">
            <a href="verify-the-company-name" class="footer__link">Verify the company name</a>
          </li>
          <li class="footer__li">
            <a href="tax-calculator" class="footer__link">Tax calculator</a>
          </li>
          <li class="footer__li">
            <a href="company-formation-online" class="footer__link">Company formation online</a>
          </li>
        </ul>
      </div>
      <div class="footer__item">
        <p class="footer__title">NEWS</p>
        <ul class="footer__list">
          <li class="footer__li">
            <a href="all-news" class="footer__link">All news</a>
          </li>
        </ul>
      </div>
      <div class="footer__item">
        <p class="footer__title">SOCIAL</p>
        <div class="footer__social">
          <a class="footer__social-link" href="https://www.facebook.com/goldblum.and.partners" target="_blank">
            <img class="footer__social-img" alt="facebook-icon" src="images/icons/facebook.png">
          </a>
          <a class="footer__social-link" href="https://www.youtube.com/channel/UCxW3M32_Hff2eRenqTKRQgw" target="_blank">
            <img class="footer__social-img" alt="facebook-icon" src="images/icons/youtube.png">
          </a>
        </div>
      </div>
      <div class="footer__item">
        <p class="footer__title">CONTACTS</p>
        <div class="footer__contact">
          <a href="tel:+41445152591" class="footer__link footer__link--tel">+41 44 5152591</a>
          <a href="mailto:info@goldblum.ch" class="footer__link">info@goldblum.ch</a>
        </div>
        <button type="button" class="btn footer__btn popup-contact">REQUEST A CALL</button>
      </div>
    </div>
  </div>
</footer>
</div>

<div class="popup popup--contact">
  <div class="popup__body">
    <div class="popup__content">
      <div class="popup__form">
        <h2 class="popup__title">Contact us</h2>
        <form class="contact-form popup-form">
          <div class="contact-form__inputs">
            <label class="contact-form__label">
              <input type="text" name="name" class="contact-form__input" value="" placeholder="Your name*" required />
            </label>
            <label class="contact-form__label">
              <input type="text" name="country" class="contact-form__input" value="" placeholder="Country" />
            </label>
            <label class="contact-form__label">
              <input type="text" name="code-phone" class="contact-form__input" value="" placeholder="Telephone country code*" required />
            </label>
            <label class="contact-form__label">
              <input type="tel" name="phone" class="contact-form__input" value="" placeholder="Phone*" required />
            </label>
            <label class="contact-form__label">
              <input type="text" name="email" class="contact-form__input" value="" placeholder="E-mail*" required />
            </label>
            <label class="contact-form__label">
              <textarea name="textarea" class="contact-form__textarea"></textarea>
            </label>
          </div>

          <button type="submit" class="contact-form__btn btn">
            SEND
          </button>
          <p class="contact-form__police">Privacy police</p>
        </form>
      </div>
      <div class="popup__tnx" style="display: none;">
        <h2 class="popup__title">Thanks!</h2>
      </div>
      <div class="popup__close">
        <img src="images/icons/close.svg" alt="close">
      </div>
    </div>
  </div>
</div>

<div class="popup popup--ask">
  <div class="popup__body">
    <div class="popup__content">
      <div class="popup__form">
        <h2 class="popup__title">HAVE A QUESTIONS?</h2>
        <p class="popup__subtitle">ASK NOW!</p>
        <form class="contact-form popup-form">
          <div class="contact-form__inputs">
            <label class="contact-form__label">
              <input type="text" autocomplete="name" name="name" class="contact-form__input" value="" placeholder="Your name*" required />
            </label>
            <label class="contact-form__label">
              <input type="text" name="country" class="contact-form__input" value="" placeholder="Country" />
            </label>
            <label class="contact-form__label">
              <input type="text" name="code-phone" class="contact-form__input" value="" placeholder="Telephone country code*" required />
            </label>
            <label class="contact-form__label">
              <input type="tel" autocomplete="tel" name="phone" class="contact-form__input" value="" placeholder="Phone*" required />
            </label>
            <label class="contact-form__label">
              <input type="text" autocomplete="email" name="Email" class="contact-form__input" value="" placeholder="E-mail*" required />
            </label>
            <label class="contact-form__label">
              <textarea name="Textarea" class="contact-form__textarea"></textarea>
            </label>
          </div>

          <button type="submit" class="contact-form__btn btn">
            SEND
          </button>
          <p class="contact-form__police">Privacy police</p>
        </form>
      </div>
      <div class="popup__tnx" style="display: none;">
        <h2 class="popup__title">Thanks!</h2>
      </div>
      <div class="popup__close">
        <img src="images/icons/close.svg" alt="close">
      </div>
    </div>
  </div>
</div>

<!-- Yandex.Metrika counter 47494372 -->
<script type="text/javascript" data-tilda-cookie-type="analytics">
  setTimeout(function() {
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    window.mainMetrikaId = 47494372;
    ym(window.mainMetrikaId, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true,
      ecommerce: "dataLayer"
    });
  }, 2000);
</script>
<noscript>
  <div><img src="https://mc.yandex.ru/watch/47494372" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZK6HDG" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- FB Pixel code (noscript) -->
<noscript>
  <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=763738298059036&ev=PageView&agent=pltilda&noscript=1" />
</noscript>
<!-- End FB Pixel code (noscript) -->

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/script.js"></script>
</body>

</html>