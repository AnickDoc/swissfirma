<?php
$title = "Company Formation Online";
$breadcrams_page = $title;
include_once 'components/header.php' ?>

<main class="main">
  <?php include_once 'components/breadcrams.php' ?>

  <div class="company">
    <div class="container">
      <h1 class="company__title title">Company Formation Online</h1>

      <form action="#" method="POST" class="company__form">
        <div class="company__form-inputs">
          <div class="company__form-wrap">
            <p class="company__form-subtitle">Contact person</p>
            <label class="contact-form__label">
              <input type="text" name="Input" class="contact-form__input" value="" placeholder="First name and last name*" required>
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_2" class="contact-form__input" value="" placeholder="Company*" required>
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_3" class="contact-form__input" value="" placeholder="Registered address (street)*" required>
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_4" class="contact-form__input" value="" placeholder="ZIP / Postal code*" required>
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_5" class="contact-form__input" value="" placeholder="City*" required>
            </label>
            <label class="contact-form__label">
              <input type="tel" autocomplete="tel" name="Phone" class="contact-form__input" value="" placeholder="Phone*" required>
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_6" class="contact-form__input" value="" placeholder="Fax">
            </label>
            <label class="contact-form__label">
              <input type="tel" autocomplete="tel" name="Phone_2" class="contact-form__input" value="" placeholder="Mobile*" required>
            </label>
            <label class="contact-form__label">
              <input type="text" autocomplete="email" name="Email" class="contact-form__input" value="" placeholder="E-mail*" required>
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_7" class="contact-form__input" value="" placeholder="Internet / URL">
            </label>

            <div class="contact-form__checkboxes">
              <p class="contact-form__desk">I found you through:</p>
              <div class="contact-form__checkboxes-inner">
                <label class=" contact-form__checkboxes-label">
                  <input type="checkbox" value="Google" class="contact-form__checkbox">
                  <span>Google</span>
                </label>
                <label class="contact-form__checkboxes-label">
                  <input type="checkbox" value="Yahoo!" class=" contact-form__checkbox">
                  <span>Yahoo</span>
                </label>
                <label class=" contact-form__checkboxes-label">
                  <input type="checkbox" value="web.de" class="contact-form__checkbox">
                  <span>web.de</span>
                </label>
                <label class="contact-form__checkboxes-label">
                  <input type="checkbox" value="Lycos" class=" contact-form__checkbox">
                  <span>Lycos</span>
                </label>
                <label class="contact-form__checkboxes-label">
                  <input type="checkbox" value="MSN" class=" contact-form__checkbox">
                  <span>MSN</span>
                </label>
                <label class="contact-form__checkboxes-label">
                  <input type="checkbox" value="GMX" class=" contact-form__checkbox">
                  <span>GMX</span>
                </label>
                <label class="contact-form__checkboxes-label">
                  <input type="checkbox" value="Yandex" class=" contact-form__checkbox">
                  <span>Yandex</span>
                </label>
              </div>
            </div>

            <label class="contact-form__label">
              <input type="text" name="Input_8" class="contact-form__input" value="" placeholder="other:">
            </label>

            <div class="contact-form__radios">
              <p class="contact-form__desk">List of documents attached to checklist:</p>
              <div class="contact-form__radios-inner">
                <label class=" contact-form__radio-label">
                  <input type="radio" name="List of documents attached to checklist:" value="Copies of all director’s passports" class="contact-form__radio">
                  <span>Copies of all director’s passports</span>
                </label>
                <label class=" contact-form__radio-label">
                  <input type="radio" name="List of documents attached to checklist:" value="Copies of all shareholder’s passports" class="contact-form__radio">
                  <span>Copies of all shareholder’s passports</span>
                </label>
                <label class=" contact-form__radio-label">
                  <input type="radio" name="List of documents attached to checklist:" value="If a sha reholder is a legal entity, copies of the statutory documents of this legal entity" class="contact-form__radio">
                  <span>If a sha reholder is a legal entity, copies of the statutory documents of this legal entity</span>
                </label>
                <label class=" contact-form__radio-label">
                  <input type="radio" name="List of documents attached to checklist:" value="If you use your own legal address, a copy of the rental agreement" class="contact-form__radio">
                  <span>If you use your own legal address, a copy of the rental agreement</span>
                </label>
                <label class=" contact-form__radio-label">
                  <input type="radio" name="List of documents attached to checklist:" value="If accounting and tax returns will be done by your accountant, their contact details." class="contact-form__radio">
                  <span>If accounting and tax returns will be done by your accountant, their contact details.</span>
                </label>
              </div>
            </div>
          </div>
          <div class="company__form-wrap">
            <p class="company__form-subtitle">Company, domicile (business address)</p>
            <label class="contact-form__label">
              <input type="text" name="Input_9" class="contact-form__input" value="" placeholder="Desired company name">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_10" class="contact-form__input" value="" placeholder="Address">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_11" class="contact-form__input" value="" placeholder="Street">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_12" class="contact-form__input" value="" placeholder="ZIP / Postal code">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_13" class="contact-form__input" value="" placeholder="City">
            </label>
            <label class="contact-form__checkboxes-label">
              <input type="checkbox" name="Checkbox" value="yes" class=" contact-form__checkbox">
              <span>I need a business address (see additional services).</span>
            </label>
            <label class="contact-form__label">
              <textarea name="Textarea" class="contact-form__textarea" placeholder="Corporate objective"></textarea>
            </label>
          </div>
          <div class="company__form-wrap">
            <p class="company__form-subtitle">Shareholder: (Please do not forget your passport)</p>
            <label class="contact-form__label">
              <input type="text" name="Input_14" class="contact-form__input" value="" placeholder="Amount of share">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_15" class="contact-form__input" value="" placeholder="Company name">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_16" class="contact-form__input" value="" placeholder="First name">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_17" class="contact-form__input" value="" placeholder="Last name">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_18" class="contact-form__input" value="" placeholder="Registered address (street)">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_19" class="contact-form__input" value="" placeholder="ZIP / Postal code , City">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_20" class="contact-form__input" value="" placeholder="Country">
            </label>

            <label class="contact-form__date-label">
              <input type="date" name="Date" class="contact-form__date" value="" placeholder="dd.mm.yyyy">
            </label>

            <label class="contact-form__label">
              <input type="text" name="Input_21" class="contact-form__input" value="" placeholder="Nationality">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_22" class="contact-form__input" value="" placeholder="Profession">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_23" class="contact-form__input" value="" placeholder="Commercial register">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_24" class="contact-form__input" value="" placeholder="Commercial register no.">
            </label>
          </div>
          <div class="company__form-wrap">
            <p class="company__form-subtitle">Managing director: (Please do not forget your passport)</p>
            <label class="contact-form__label">
              <input type="text" name="Input_25" class="contact-form__input" value="" placeholder="First name">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_26" class="contact-form__input" value="" placeholder="Last name">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_27" class="contact-form__input" value="" placeholder="Registered address (street)">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_28" class="contact-form__input" value="" placeholder="ZIP / Postal code, City">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_29" class="contact-form__input" value="" placeholder="Country">
            </label>

            <label class="contact-form__date-label">
              <input type="date" name="Date" class="contact-form__date" value="" placeholder="dd.mm.yyyy">
            </label>

            <label class="contact-form__label">
              <input type="text" name="Input_30" class="contact-form__input" value="" placeholder="Nationality">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_31" class="contact-form__input" value="" placeholder="Profession">
            </label>

            <label class="contact-form__label">
              <textarea name="Textarea_2" class="contact-form__input" placeholder="Additional information"></textarea>
            </label>
          </div>
          <div class="company__form-wrap">
            <p class="company__form-subtitle">Appointment information (if already known)</p>
            <label class="contact-form__label">
              <input type="text" name="Input_32" class="contact-form__input" value="" placeholder="Notary Public">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_33" class="contact-form__input" value="" placeholder="Time">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_34" class="contact-form__input" value="" placeholder="Kanzlei">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_35" class="contact-form__input" value="" placeholder="Registered address (street)">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_36" class="contact-form__input" value="" placeholder="ZIP / Postal code, City">
            </label>
            <label class="contact-form__label">
              <input type="tel" autocomplete="tel" name="Phone_3" class="contact-form__input" value="" placeholder="Phone">
            </label>
            <label class="contact-form__label">
              <input type="text" name="Input_37" class="contact-form__input" value="" placeholder="Fax">
            </label>
            <label class="contact-form__label">
              <input type="email" autocomplete="email" name="Email_2" class="contact-form__input" value="" placeholder="E-mail" data-tilda-rule="email">
            </label>

            <label class="contact-form__file-label btn">
              Choose a file
              <input class="contact-form__file" type="file" name="File" multiple>
            </label>
          </div>
          <button type="submit" class="company__form-btn btn">
            SEND
          </button>
        </div>
      </form>
    </div>
  </div>

  <?php include_once 'components/quest.php' ?>
  <?php include_once 'components/subscribe.php' ?>
</main>

<?php include_once 'components/footer.php' ?>