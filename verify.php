<?php
$title = "Verify the Company Name";
$breadcrams_page = $title;
include_once 'components/header.php' ?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

  <div class="verify">
    <div class="container">
      <h1 class="verify__title title">Verify the Company Name</h1>
      <p class="verify__subtitle">
        One of our specialists will contact you via email to provide additional info. We will NOT send you any unsolicited emails.
      </p>

      <form action="#" method="POST" class="verify__form">
        <div class="verify__form-inputs">
          <label class="contact-form__label">
            <input type="text" autocomplete="CompanyName" name="CompanyName" class="contact-form__input" value="" placeholder="Your 1st Choice as Company Name*" data-placeholder-tmp="" required />
          </label>
          <label class="contact-form__label">
            <input type="text" autocomplete="CompanyName2" name="CompanyName2" class="contact-form__input" value="" placeholder="Your 2nd Choice as Company Name (optional)" data-placeholder-tmp="" />
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
          <label class="contact-form__label">
            <textarea name="Textarea" class="contact-form__textarea" placeholder="Any additional comments (optional)" data-placeholder-tmp=""></textarea>
          </label>
        </div>
        <button type="submit" class="verify__form-btn btn">
          SEND YOUR REQUEST
        </button>
        <p class="contact-form__police">Privacy police</p>
      </form>
    </div>
  </div>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>