$(document).ready(function () {

  //Burger menu
  let burger = $(".header__burger");
  let headerMobBlock = $(".header__inner");
  let owerlay = $(".header__owerlay");
  let body = $("body");

  function open() {
    headerMobBlock.addClass('open');
    owerlay.addClass('open');
    body.addClass('locked');
  }

  function close() {
    headerMobBlock.removeClass('open');
    owerlay.removeClass('open');
    body.removeClass('locked');
  }

  burger.on("click", function () {
    open()
  });

  $(".header__owerlay").mouseup(function (e) {
    if (!$(e.target).closest(".header__inner").length ||
      $(e.target).closest(".header__close").length) {
      close()
    }
  });

  //Popups
  $(".popup-contact").on("click", function () {
    $(".popup--contact").addClass("show");
    body.addClass('locked');
  })

  $(".popup-ask").on("click", function () {
    $(".popup--ask").addClass("show");
    body.addClass('locked');
  })

  $(".popup").mouseup(function (e) {
    if (!$(e.target).closest(".popup__content").length ||
      $(e.target).closest(".popup__close").length) {
      $(".popup").removeClass("show");
      body.removeClass('locked');
    }
  });

  //Input placeholder
  $('input').focus(function () {
    let $this = $(this);
    $this.data('placeholder-tmp', $this.attr('placeholder'));
    $this.attr('placeholder', '');
  });

  $('textarea').focus(function () {
    let $this = $(this);
    $this.data('placeholder-tmp', $this.attr('placeholder'));
    $this.attr('placeholder', '');
  });

  $('input').blur(function () {
    let $this = $(this);
    $this.attr('placeholder', $this.data('placeholder-tmp'));
  });

  $('textarea').blur(function () {
    let $this = $(this);
    $this.attr('placeholder', $this.data('placeholder-tmp'));
  });

  //Form;
  $(".popup-form").on("submit", function (e) {
    $.ajax({
      url: "scripts/send.php",
      type: "POST",
      data: $(this).serialize(),
    }).done(function () {
      $(".popup__form").css("display", "none")
      $(".popup__tnx").css("display", "block")
    });
    e.preventDefault();
  });

  $(".verify__form").on("submit", function (e) {
    $.ajax({
      url: "scripts/verify-send.php",
      type: "POST",
      data: $(this).serialize(),
    }).done(function () {
      $(".verify__inner").css("display", "none")
      $(".verify__tnx").css("display", "block")
    });
    e.preventDefault();
  });

  $(".calculator__form").on("submit", function (e) {
    $.ajax({
      url: "scripts/tax-send.php",
      type: "POST",
      data: $(this).serialize(),
    }).done(function () {
      $(".calculator__inner").css("display", "none")
      $(".calculator__tnx").css("display", "block")
    });
    e.preventDefault();
  });

  $(".company__form").on("submit", function (e) {
    $.ajax({
      url: "scripts/company-send.php",
      type: "POST",
      data: $(this).serialize(),
    }).done(function () {
      $(".company__inner").css("display", "none")
      $(".company__tnx").css("display", "block")
    });
    e.preventDefault();
  });
});

