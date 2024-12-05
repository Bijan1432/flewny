$(document).ready(function () {
  $(".test-car").slick({
    infinite: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
  $(".blog-car").slick({
    slidesToShow: 2,
    dots: true,
    slidesToScroll: 1,
    infinite: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

$(document).ready(function () {
  $(".hamburger").click(function () {
    $(this).toggleClass("is-active");
  });
});

// $(window).on('scroll', function (e) {
//   console.log($(window).scrollTop());
//   var top = $(window).scrollTop() + $(window).height(),

//       isVisible = top > $('.underline').offset().top;

//   $('#container').toggleClass('animate', isVisible);
// });

// ============member toggle=============
// $(document).ready(function () {

// $members = document.querySelectorAll(".member > div");

// $members.slice( 0, 3 ).show();

// });

// =======================================================my written js ========
//menu open close

document.getElementById("menuopen").addEventListener("click", () => {
  document.getElementById("menu").classList.remove("d-none");
});
document.getElementById("menuclose").addEventListener("click", () => {
  document.getElementById("menu").classList.add("d-none");
});

//slick slider for serivce =================
$(".slider-service").slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  lazyLoad: "ondemand",
  autoplay: true,
  arrows: false,
  autoplaySpeed: 2000,
});
