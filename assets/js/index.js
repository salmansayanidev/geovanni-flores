// products slider js

// $(".our-products-slider-area").slick({
//   dots: true,
//   infinite: false,
//   speed: 700,
//   autoplay: true,
//   autoplaySpeed: 2000,
//   slidesToShow: 4,
//   slidesToScroll: 1,
//   responsive: [
//     {
//       breakpoint: 1034,
//       settings: {
//         slidesToShow: 3,
//       },
//     },
//     {
//       breakpoint: 992,
//       settings: {
//         slidesToShow: 2,
//       },
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//       },
//     },
//   ],
// });

$(".our-products-slider-area").slick({
  dots: true,
  infinite: false,
  speed: 700,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1034,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});


// review slider js

$(".review-slider-main").slick({
  dots: false,
  infinite: true,
  speed: 700,
  // autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  nextArrow: $(".slider-btns.next"),
  prevArrow: $(".slider-btns.pre"),
});

// gallery js

$("[data-fancybox]").fancybox({
  // Options will go here
  buttons: ["close"],
  wheel: false,
  transitionEffect: "slide",
  // thumbs          : false,
  // hash            : false,
  loop: true,
  // keyboard        : true,
  toolbar: true,
  // animationEffect : false,
  // arrows          : true,
  clickContent: false,
});
