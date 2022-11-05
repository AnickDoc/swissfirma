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







  ////lacation
  // ymaps.ready(init);
  // function init() {
  //   ymaps.geolocation.get({
  //     provider: "yandex"
  //   })
  //     .then(function (res) {
  //       var g = res.geoObjects.get(0);
  //       $("input[name=city]").val(g.getLocalities()[0]);
  //       $("input[name=new_region]").val(g.getAdministrativeAreas()[0]);
  //     })
  //     .catch(function (err) {
  //       console.log('Не удалось установить местоположение', err);
  //     });
  // }

  // //mask;
  // $.mask.definitions["9"] = false;
  // $.mask.definitions["5"] = "[0-9]";
  // $("input[type=tel]")
  //   .mask("8(955) 555-5555")
  //   .on("click", function () {
  //     $(this).trigger("focus");
  //   });

  // //form ajax;
  //$("form").on("submit", function (e) {
  //    $.ajax({
  //        url: "scripts/",
  //        type: "POST",
  //        data: $(this).serialize(),
  //    }).done(function () {
  //        location.href = "tnx.php";
  //    });
  //    e.preventDefault();
  //});

  // // scroll on click
  // $('a.cp-s1__link').on('click', function (e) {
  //   e.preventDefault();
  //   $('html, body').animate({
  //     scrollTop: $($.attr(this, 'href')).offset().top
  //   }, 1500);
  // });
});

