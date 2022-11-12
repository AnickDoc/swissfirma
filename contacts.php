<?php
$title = "Contacts — Swissfirma";
$meta_title = "";
$meta_desc = "";
$meta_keywords = "";
$breadcrams_page = "Contacts";
include_once 'components/header.php' ?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

  <div class="contacts">
    <div class="container">
      <h1 class="contacts__title title">Contacts</h1>
      <span class="contacts__phone">Phone:</span>
      <a href="tel:+41445152590" class="contacts__link">+41 44 515 25 90</a>

      <form class="contacts__form popup-form">
        <div class="contacts__form-inputs">
          <label class="contact-form__label">
            <input type="text" name="name" class="contact-form__input" placeholder="Your name*" required />
          </label>
          <label class="contact-form__label">
            <input type="text" name="country" class="contact-form__input" placeholder="Country*" required />
          </label>
          <label class="contact-form__label">
            <input type="tel" name="phone" class="contact-form__input" placeholder="Phone*" required />
          </label>
          <label class="contact-form__label">
            <input type="text" name="email" class="contact-form__input" placeholder="E-mail*" required />
          </label>
        </div>

        <button type="submit" class="contacts__form-btn btn">
          SEND
        </button>
      </form>
    </div>
  </div>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>