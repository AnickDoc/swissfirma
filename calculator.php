<?php
$title = "Tax calculator";
$breadcrams_page = $title;
include_once 'components/header.php' ?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

  <div class="calculator">
    <div class="container">
      <h1 class="calculator__title title">Tax calculator</h1>
      <p class="calculator__subtitle">
        One of our specialists will contact you via email to provide additional info. We will NOT send you any unsolicited emails.
      </p>

      <form action="#" method="POST" class="calculator__form">
        <div class="calculator__form-inputs">
          <label class="contact-form__label">
            <input type="text" name="Country" class="contact-form__input" value="" placeholder="Your country*" data-placeholder-tmp="" required />
          </label>
          <label class="contact-form__label">
            <input type="text" autocomplete="taxable" name="taxable" class="contact-form__input" value="" placeholder="Please add taxable amount" data-placeholder-tmp="" />
          </label>
          <label class="contact-form__label">
            <input type="text" autocomplete="name" name="Name" class="contact-form__input" value="" placeholder="Your Name*" data-placeholder-tmp="" required />
          </label>
          <label class="contact-form__label">
            <input type="tel" autocomplete="tel" name="Phone" class="contact-form__input" value="" placeholder="Your phone number*" data-placeholder-tmp="" required />
          </label>
          <label class="contact-form__label">
            <input type="text" autocomplete="email" name="Email" class="contact-form__input" value="" placeholder="Your e-mail*" data-placeholder-tmp="" required />
          </label>
        </div>
        <button type="submit" class="calculator__form-btn btn">
          SEND DATA FOR PROCESSING
        </button>
        <p class="contact-form__police">Privacy police</p>
      </form>
    </div>
  </div>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>