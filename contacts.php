<?php
$title = "Contacts — Swissfirma";
$breadcrams_page = "Contacts";
include_once 'components/header.php' ?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

  <div class="contacts">
    <div class="container">
      <h1 class="contacts__title title">Contacts</h1>
      <span class="contacts__phone">Phone:</span>
      <a href="tel:+41445152590" class="contacts__link">+41 44 515 25 90</a>

      <form action="#" method="POST" class="contacts__form">
        <div class="contacts__form-inputs">
          <label class="contact-form__label">
            <input type="text" autocomplete="name" name="Name" class="contact-form__input" value="" placeholder="Your name*" data-placeholder-tmp="" required />
          </label>
          <label class="contact-form__label">
            <input type="text" name="Input" class="contact-form__input" value="" placeholder="Country*" data-placeholder-tmp="" required />
          </label>
          <label class="contact-form__label">
            <input type="tel" autocomplete="tel" name="Phone" class="contact-form__input" value="" placeholder="Phone*" data-placeholder-tmp="" required />
          </label>
          <label class="contact-form__label">
            <input type="text" autocomplete="email" name="Email" class="contact-form__input" value="" placeholder="E-mail*" data-placeholder-tmp="" required />
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