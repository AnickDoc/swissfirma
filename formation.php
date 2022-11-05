<?php include_once 'header.php' ?>

<main class="main">
  <div class="breadcrams">
    <div class="container">
      <ul class="breadcrams__inner">
        <li class="breadcrams__item">
          <a href="/" class="breadcrams__link">Home</a>
        </li>
        <li class="breadcrams__item">
          <span class="breadcrams__link">Verify the Company Name</span>
        </li>
      </ul>
    </div>
  </div>

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

  <div class="quest-one quest-one--page">
    <div class="container">
      <div class="quest">
        <div class="quest__content">
          <p class="quest__title">HAVE A questions?</p>
          <p class="quest__subtitle">ASK now!</p>
        </div>
        <button type="button" class="quest__btn btn popup-ask">GET feedback NOW!</button>
      </div>
    </div>
  </div>

  <div class="subscribe">
    <div class="container">
      <h2 class="subscribe__title title">subscribe</h2>
      <div class="subscribe__inner">
        <div class="subscribe__item">
          <p class="subscribe__item-title">TO OUR NEWS</p>
          <form action="#" method="post" class="subscribe__form">
            <label class="subscribe__label">
              <input type="email" name="email" class="subscribe__input" value="" placeholder="Your mail" required>
            </label>
            <button type="submit" class="subscribe__btn">subscribe</button>
          </form>
        </div>
        <div class="subscribe__item">
          <p class="subscribe__item-title">TO SWISS BUSINESS CHANNEL</p>
          <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 187px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 48px;" tabindex="0" vspace="0" width="100%" id="I0_1667470979000" name="I0_1667470979000" src="https://www.youtube.com/subscribe_embed?usegapi=1&amp;channelid=UCxW3M32_Hff2eRenqTKRQgw&amp;layout=full&amp;count=default&amp;origin=https%3A%2F%2Fswissfirma.com&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fabc-static%2F_%2Fjs%2Fk%3Dgapi.lb.ru.wfyH1w8kjXM.O%2Fd%3D1%2Frs%3DAHpOoo-T0KCZioWX0DjqiPV-fFLt1dVvMA%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1667470979000&amp;_gfid=I0_1667470979000&amp;parent=https%3A%2F%2Fswissfirma.com&amp;pfname=&amp;rpctoken=15549904" data-gapiattached="true"></iframe>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include_once 'footer.php' ?>