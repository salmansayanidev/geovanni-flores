// link active js
document.addEventListener("DOMContentLoaded", function () {
  var dashboard = document.querySelector(".first-li");
  dashboard.classList.add("active");
  var currentUrl = window.location.pathname;
  console.log(currentUrl, "currentUrl");
  var activeLiElements = document.querySelectorAll(".header-link");
  activeLiElements.forEach(function (activeLi) {
    var anchorHref = activeLi.querySelector("a").getAttribute("href");
    var underLi = activeLi.querySelector("ul");
    if (currentUrl.includes(anchorHref)) {
      console.log("Adding 'active' class to:", activeLi);
      activeLi.classList.add("active");
      dashboard.classList.remove("active");
    }
    if (underLi) {
      var anchorActive = underLi.querySelectorAll("li");
      anchorActive.forEach(function (anchorLi) {
        var underAnchorHref = anchorLi.querySelector("a").getAttribute("href");
        var underAnchorHrefActive = anchorLi.querySelector("a");
        if (currentUrl.includes(underAnchorHref)) {
          var closestActiveLi = getClosest(anchorLi, ".header-link");
          if (closestActiveLi) {
            console.log(
              "Adding 'active' class to:",
              closestActiveLi,
              underAnchorHrefActive
            );
            closestActiveLi.classList.add("active");
            dashboard.classList.remove("active");
            underAnchorHrefActive.classList.add("active");
          }
        }
      });
    }
  });
  function getClosest(element, selector) {
    while (element && !element.matches(selector)) {
      element = element.parentElement;
    }
    return element;
  }
});

// search popup js
const searchOpenBtn = document.querySelector(".srch-opn-btn");
const searchPopup = document.querySelector(".search-popup-wrap");
const searchClsBtn = document.querySelector(".srch-pop-cls-btn");

searchOpenBtn?.addEventListener("click", () => {
  searchPopup.classList.add("active");
});
searchClsBtn?.addEventListener("click", () => {
  searchPopup.classList.remove("active");
});



// services slider js

$(".services-slider-area").slick({
    dots: true,
    infinite: true,
    speed: 700,
    // autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          dots: false,
        },
      },
    ],
  });