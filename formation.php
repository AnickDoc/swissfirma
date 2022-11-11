<?php
$title = "Company Formation Online";
$breadcrams_page = $title;
include_once 'components/header.php' ?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

  <div class="company">
    <div class="container">
      <h1 class="company__title title">Company Formation Online</h1>
      <div class="company__inner">
        <form enctype="multipart/form-data"  class="company__form">
          <div class="company__form-inputs">
            <div class="company__form-wrap">
              <p class="company__form-subtitle">Contact person</p>
              <label class="contact-form__label">
                <input type="text" name="name" class="contact-form__input" placeholder="First name and last name*" required>
              </label>
              <label class="contact-form__label">
                <input type="text" name="company" class="contact-form__input" placeholder="Company*" required>
              </label>
              <label class="contact-form__label">
                <input type="text" name="address" class="contact-form__input" placeholder="Registered address (street)*" required>
              </label>
              <label class="contact-form__label">
                <input type="text" name="zip" class="contact-form__input" placeholder="ZIP / Postal code*" required>
              </label>
              <label class="contact-form__label">
                <input type="text" name="city" class="contact-form__input" placeholder="City*" required>
              </label>
              <label class="contact-form__label">
                <input type="tel" name="phone" class="contact-form__input" placeholder="Phone*" required>
              </label>
              <label class="contact-form__label">
                <input type="text" name="fax" class="contact-form__input" placeholder="Fax">
              </label>
              <label class="contact-form__label">
                <input type="tel" name="mobile" class="contact-form__input" placeholder="Mobile*" required>
              </label>
              <label class="contact-form__label">
                <input type="text" name="email" class="contact-form__input" placeholder="E-mail*" required>
              </label>
              <label class="contact-form__label">
                <input type="text" name="url" class="contact-form__input" placeholder="Internet / URL">
              </label>

              <div class="contact-form__checkboxes">
                <p class="contact-form__desk">I found you through:</p>
                <div class="contact-form__checkboxes-inner">
                  <label class="contact-form__checkboxes-label">
                    <input type="checkbox" value="Google" name="site[]" class="contact-form__checkbox">
                    <span>Google</span>
                  </label>
                  <label class="contact-form__checkboxes-label">
                    <input type="checkbox" value="Yahoo!" name="site[]" class="contact-form__checkbox">
                    <span>Yahoo</span>
                  </label>
                  <label class=" contact-form__checkboxes-label">
                    <input type="checkbox" value="web.de" name="site[]" class="contact-form__checkbox">
                    <span>web.de</span>
                  </label>
                  <label class="contact-form__checkboxes-label">
                    <input type="checkbox" value="Lycos" name="site[]" class="contact-form__checkbox">
                    <span>Lycos</span>
                  </label>
                  <label class="contact-form__checkboxes-label">
                    <input type="checkbox" value="MSN" name="site[]" class="contact-form__checkbox">
                    <span>MSN</span>
                  </label>
                  <label class="contact-form__checkboxes-label">
                    <input type="checkbox" value="GMX" name="site[]" class="contact-form__checkbox">
                    <span>GMX</span>
                  </label>
                  <label class="contact-form__checkboxes-label">
                    <input type="checkbox" value="Yandex" name="site[]" class="contact-form__checkbox">
                    <span>Yandex</span>
                  </label>
                </div>
              </div>

              <label class="contact-form__label">
                <input type="text" name="other" class="contact-form__input" placeholder="other:">
              </label>

              <div class="contact-form__radios">
                <p class="contact-form__desk">List of documents attached to checklist:</p>
                <div class="contact-form__radios-inner">
                  <label class="contact-form__radio-label">
                    <input type="radio" name="checklist" value="Copies of all director’s passports" class="contact-form__radio">
                    <span>Copies of all director’s passports</span>
                  </label>
                  <label class="contact-form__radio-label">
                    <input type="radio" name="checklist" value="Copies of all shareholder’s passports" class="contact-form__radio">
                    <span>Copies of all shareholder’s passports</span>
                  </label>
                  <label class="contact-form__radio-label">
                    <input type="radio" name="checklist" value="If a sha reholder is a legal entity, copies of the statutory documents of this legal entity" class="contact-form__radio">
                    <span>If a sha reholder is a legal entity, copies of the statutory documents of this legal entity</span>
                  </label>
                  <label class="contact-form__radio-label">
                    <input type="radio" name="checklist" value="If you use your own legal address, a copy of the rental agreement" class="contact-form__radio">
                    <span>If you use your own legal address, a copy of the rental agreement</span>
                  </label>
                  <label class="contact-form__radio-label">
                    <input type="radio" name="checklist" value="If accounting and tax returns will be done by your accountant, their contact details." class="contact-form__radio">
                    <span>If accounting and tax returns will be done by your accountant, their contact details.</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="company__form-wrap">
              <p class="company__form-subtitle">Company, domicile (business address)</p>
              <label class="contact-form__label">
                <input type="text" name="company-name" class="contact-form__input" placeholder="Desired company name">
              </label>
              <label class="contact-form__label">
                <input type="text" name="company-address" class="contact-form__input" placeholder="Address">
              </label>
              <label class="contact-form__label">
                <input type="text" name="company-street" class="contact-form__input" placeholder="Street">
              </label>
              <label class="contact-form__label">
                <input type="text" name="company-zip" class="contact-form__input" placeholder="ZIP / Postal code">
              </label>
              <label class="contact-form__label">
                <input type="text" name="company-city" class="contact-form__input" placeholder="City">
              </label>
              <label class="contact-form__checkboxes-label">
                <input type="checkbox" name="company-check" value="yes" class="contact-form__checkbox">
                <span>I need a business address (see additional services).</span>
              </label>
              <label class="contact-form__label">
                <textarea name="company-text" class="contact-form__textarea" placeholder="Corporate objective"></textarea>
              </label>
            </div>
            <div class="company__form-wrap">
              <p class="company__form-subtitle">Shareholder: (Please do not forget your passport)</p>
              <label class="contact-form__label">
                <input type="text" name="shareholder-amount" class="contact-form__input" placeholder="Amount of share">
              </label>
              <label class="contact-form__label">
                <input type="text" name="shareholder-company-name" class="contact-form__input" placeholder="Company name">
              </label>
              <label class="contact-form__label">
                <input type="text" name="shareholder-first-name" class="contact-form__input" placeholder="First name">
              </label>
              <label class="contact-form__label">
                <input type="text" name="shareholder-last-name" class="contact-form__input" placeholder="Last name">
              </label>
              <label class="contact-form__label">
                <input type="text" name="shareholder-address" class="contact-form__input" placeholder="Registered address (street)">
              </label>
              <label class="contact-form__label">
                <input type="text" name="shareholder-zip" class="contact-form__input" placeholder="ZIP / Postal code , City">
              </label>
              <label class="contact-form__label">
                <input type="text" name="shareholder-country" class="contact-form__input" placeholder="Country">
              </label>

              <label class="contact-form__date-label">
                <input type="date" name="shareholder-date" class="contact-form__date" placeholder="dd.mm.yyyy">
              </label>

              <label class="contact-form__label">
                <input type="text" name="shareholder-nationality" class="contact-form__input" placeholder="Nationality">
              </label>
              <label class="contact-form__label">
                <input type="text" name="shareholder-profession" class="contact-form__input" placeholder="Profession">
              </label>
              <label class="contact-form__label">
                <input type="text" name="shareholder-register" class="contact-form__input" placeholder="Commercial register">
              </label>
              <label class="contact-form__label">
                <input type="text" name="shareholder-register-no" class="contact-form__input" placeholder="Commercial register no.">
              </label>
            </div>
            <div class="company__form-wrap">
              <p class="company__form-subtitle">Managing director: (Please do not forget your passport)</p>
              <label class="contact-form__label">
                <input type="text" name="director-first-name" class="contact-form__input" placeholder="First name">
              </label>
              <label class="contact-form__label">
                <input type="text" name="director-last-name" class="contact-form__input" placeholder="Last name">
              </label>
              <label class="contact-form__label">
                <input type="text" name="director-address" class="contact-form__input" placeholder="Registered address (street)">
              </label>
              <label class="contact-form__label">
                <input type="text" name="director-zip" class="contact-form__input" placeholder="ZIP / Postal code, City">
              </label>
              <label class="contact-form__label">
                <input type="text" name="director-country" class="contact-form__input" placeholder="Country">
              </label>

              <label class="contact-form__date-label">
                <input type="date" name="director-date" class="contact-form__date" placeholder="dd.mm.yyyy">
              </label>

              <label class="contact-form__label">
                <input type="text" name="director-nationality" class="contact-form__input" placeholder="Nationality">
              </label>
              <label class="contact-form__label">
                <input type="text" name="director-profession" class="contact-form__input" placeholder="Profession">
              </label>

              <label class="contact-form__label">
                <textarea name="director-text" class="contact-form__input" placeholder="Additional information"></textarea>
              </label>
            </div>
            <div class="company__form-wrap">
              <p class="company__form-subtitle">Appointment information (if already known)</p>
              <label class="contact-form__label">
                <input type="text" name="appointment-notary" class="contact-form__input" placeholder="Notary Public">
              </label>
              <label class="contact-form__label">
                <input type="text" name="appointment-time" class="contact-form__input" placeholder="Time">
              </label>
              <label class="contact-form__label">
                <input type="text" name="appointment-kanzlei" class="contact-form__input" placeholder="Kanzlei">
              </label>
              <label class="contact-form__label">
                <input type="text" name="appointment-address" class="contact-form__input" placeholder="Registered address (street)">
              </label>
              <label class="contact-form__label">
                <input type="text" name="appointment-zip" class="contact-form__input" placeholder="ZIP / Postal code, City">
              </label>
              <label class="contact-form__label">
                <input type="tel" name="appointment-phone" class="contact-form__input" placeholder="Phone">
              </label>
              <label class="contact-form__label">
                <input type="text" name="appointment-fax" class="contact-form__input" placeholder="Fax">
              </label>
              <label class="contact-form__label">
                <input type="email" name="appointment-email" class="contact-form__input" placeholder="E-mail">
              </label>
            </div>
            <button type="submit" class="company__form-btn btn">
              SEND
            </button>
          </div>
        </form>
      </div>
      <div class="company__tnx" style="display: none;">
        <h2 class="company__title title">Thanks</h2>
        <p class="company__subtitle">
          One of our specialists will contact you via email to provide additional info. We will NOT send you any unsolicited emails.
        </p>
      </div>
    </div>
  </div>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>