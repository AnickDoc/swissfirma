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

  $('input').blur(function () {
    let $this = $(this);
    $this.attr('placeholder', $this.data('placeholder-tmp'));
  });

  //Sliders
  $(".slider").slick({
    prevArrow: '<button type="button" class="slick-arrow slick-arrow--prev"></button>',
    nextArrow: '<button type="button" class="slick-arrow slick-arrow--next"></button>'
  });

  //Filter
  function createNewArray(arr) {
    let newArray = [];
    for (let i = 0; i < arr.length; i++) {
      let element = arr[i];
      if (!$(element).hasClass('close')) {
        newArray.push(element);
      }
    }
    return newArray
  }

  function hideFilterItems(arr) {
    for (let i = 0; i < arr.length; i++) {
      if (i < 3) {
        $("button.filter__btn").css("display", "none");
      } else {
        $(arr[i]).addClass("close");
        $("button.filter__btn").css("display", "block");
      }
    }
  }

  hideFilterItems($(".filter__item"));

  $(".filter__nav-btn").on("click", function () {
    $(".filter__nav-btn").removeClass('active');
    $(this).addClass("active");
    $(".filter__item").removeClass("close");

    let cat = $(this).data("cat");
    let catItem;

    $(".filter__item").each(function () {
      catItem = $(this).data("itemCat");

      if (cat !== catItem && cat !== "all") {
        $(this).addClass("close");
      } else if (cat == "all") {
        $(".filter__item").removeClass("close");
      }
    })

    let catItems = createNewArray($(".filter__item"));
    hideFilterItems(catItems);
  });

  $(".filter__btn").on("click", function () {
    let cat = $(".filter__nav-btn.active").data("cat");
    let catItem;
    let catItems = [];

    $(".filter__item").each(function () {
      catItem = $(this).data("itemCat");
      if (cat == catItem || cat == "all") {
        catItems.push($(this));
      }
      return catItems
    });

    let a = 0;
    for (let i = 0; i < catItems.length; i++) {
      if ($(catItems[i]).hasClass("close")) {
        a++
        if ((a <= 3)) {
          $(catItems[i]).removeClass('close');
          $("button.filter__btn").css("display", "block");
        }
      } else {
        $("button.filter__btn").css("display", "none");
      }
    }

    if (a <= 3) {
      $("button.filter__btn").css("display", "none");
    }
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

