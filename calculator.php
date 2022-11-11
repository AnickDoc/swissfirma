<?php
$title = "Tax calculator";
$breadcrams_page = $title;
include_once 'components/header.php' ?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

  <div class="calculator">
    <div class="container">
      <h1 class="calculator__title title">Tax calculator</h1>
      <div class="calculator__inner">
        <p class="calculator__subtitle">
          One of our specialists will contact you via email to provide additional info. We will NOT send you any unsolicited emails.
        </p>

        <form class="calculator__form">
          <div class="calculator__form-inputs">
            <label class="contact-form__label">
              <input type="text" name="country" class="contact-form__input" placeholder="Your country*" required />
            </label>
            <label class="contact-form__label">
              <input type="text" name="taxable" class="contact-form__input" placeholder="Please add taxable amount" />
            </label>
            <label class="contact-form__label">
              <input type="text" name="name" class="contact-form__input" placeholder="Your Name*" required />
            </label>
            <label class="contact-form__label">
              <input type="tel" name="phone" class="contact-form__input" placeholder="Your phone number*" required />
            </label>
            <label class="contact-form__label">
              <input type="text" name="email" class="contact-form__input" placeholder="Your e-mail*" required />
            </label>
          </div>
          <button type="submit" class="calculator__form-btn btn">
            SEND DATA FOR PROCESSING
          </button>
          <p class="contact-form__police">Privacy police</p>
        </form>
      </div>
      <div class="calculator__tnx" style="display: none;">
        <h2 class="calculator__title title">Thanks</h2>
        <p class="calculator__subtitle">
          One of our specialists will contact you via email to provide additional info. We will NOT send you any unsolicited emails.
        </p>
      </div>
    </div>
  </div>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>