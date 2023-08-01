jQuery(document).ready(function ($) {
  $("#sp-menu-btn").click(function () {
    $(this).toggleClass("active");
    $(".header-menu, .sp-menu").toggleClass("active");
    $("body").toggleClass("nav-open");
  });
  $("#sp-menu-btn-ft").click(function () {
    $(this).toggleClass("active");
    $(".sp-menu").toggleClass("active sp-toggle");
    $("body").toggleClass("nav-open");
  });
  $(".header-menu .has-child p").click(function () {
    $(this).toggleClass("sub-open");
    $(this).next(".sub-menu").slideToggle();
  });

  // おすすめ物件スライド
  $("#recommendSlide").slick({
    infinite: true,
    dots: false,
    arrows: true,
    speed: 1000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1,
          dots: true,
        },
      },
    ],
  });

  // footer
  //$(".footer-btn").hide();
  //$(window).on("scroll", function() {
  //    if ($(this).scrollTop() > 800) {
  //        $(".footer-btn").fadeIn("fast");
  //    } else {
  //        $(".footer-btn").fadeOut("fast");
  //    }
  //});

  $(document).on("click", 'a[href^="#"]', function (event) {
    event.preventDefault();

    $("html, body").animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top - 100,
      },
      500
    );
  });

  // globalNav
  var PID = $("body").attr("id");
  $(".footer-menu li." + PID + " a").addClass("current");
});

//サイドのバナー
$(function () {
  var floBtn = $(".float-btn");
  floBtn.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 900) {
      floBtn.fadeIn();
    } else {
      floBtn.fadeOut();
    }
  });
});
