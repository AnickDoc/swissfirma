<?php
$title = "Verify the Company Name";
$meta_title = "";
$meta_desc = "";
$meta_keywords = "";
$breadcrams_page = $title;
include_once 'components/header.php' ?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

  <div class="verify">
    <div class="container">
      <h1 class="verify__title title">Verify the Company Name</h1>
      <div class="verify__inner">
        <p class="verify__subtitle">
          One of our specialists will contact you via email to provide additional info. We will NOT send you any unsolicited emails.
        </p>
        <form class="verify__form">
          <div class="verify__form-inputs">
            <label class="contact-form__label">
              <input type="text" name="company-name" class="contact-form__input" placeholder="Your 1st Choice as Company Name*" required />
            </label>
            <label class="contact-form__label">
              <input type="text" name="company-name2" class="contact-form__input" placeholder="Your 2nd Choice as Company Name (optional)" />
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
            <label class="contact-form__label">
              <textarea name="textarea" class="contact-form__textarea" placeholder="Any additional comments (optional)"></textarea>
            </label>
          </div>
          <button type="submit" class="verify__form-btn btn">
            SEND YOUR REQUEST
          </button>
          <p class="contact-form__police">Privacy police</p>
        </form>
      </div>
      <div class="verify__tnx" style="display: none">
        <h2 class="verify__title title">Thanks</h2>
        <p class="verify__subtitle">
          One of our specialists will contact you via email to provide additional info. We will NOT send you any unsolicited emails.
        </p>
      </div>
    </div>
  </div>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>