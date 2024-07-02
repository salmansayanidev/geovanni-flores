const selectLensRadios = document.querySelectorAll(".select-lens-radio");
const formStep = document.querySelectorAll(".step");

let step = 1;

// selectLensRadios.forEach((selectLensRadio) => {
//   selectLensRadio.addEventListener("change", () => {
//     setUpdate((step = step + 1));
//   });
// });

$(".next-step-btn").click(function () {
  setUpdate((step = step + 1));
});

$(".step-pre-btn").click(function() {
  setUpdate((step = step - 1));
})

function setUpdate(step) {
  $(`.step`).removeClass("active");
  $(`.step-${step}`).addClass("active");
}

var swiper = new Swiper(".mySwiper", {
  // loop: true,
  spaceBetween: 10,
  slidesPerView: 5,
  freeMode: true,
  watchSlidesProgress: true,
  breakpoints: {
    320: {
      slidesPerView: 3,
    },
    480: {
      slidesPerView: 4,
    },
    640: {
      slidesPerView: 4,
    },
    767: {
      slidesPerView: 5,
    },
  },
});
var swiper2 = new Swiper(".pro-dtl-slider", {
  // loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".pro-dtl-sldr-btn.next",
    prevEl: ".pro-dtl-sldr-btn.pre",
  },
  thumbs: {
    swiper: swiper,
  },
});

("use strict");

document.getElementById("dropArea").addEventListener("click", function () {
  document.getElementById("uploadFile").click();
});

function fileChangeHandler(event) {
  var file = event.target.files[0];
  if (file) {
    var fileName = URL.createObjectURL(file);
    var previewImg = document.getElementById("previewImg");
    previewImg.setAttribute("src", fileName);
  }
}

function dragOverHandler(event) {
  event.preventDefault();
  document.getElementById("dropArea").className = "draging dragBox";
}

function dropHandler(event) {
  event.preventDefault();
  document.getElementById("dropArea").className = "dragBox";
  var file = event.dataTransfer.files[0];
  if (file) {
    var fileName = URL.createObjectURL(file);
    var previewImg = document.getElementById("previewImg");
    previewImg.setAttribute("src", fileName);
  }
}

const twoNumArea = document.querySelector("#two-numbers-select");
const oneNumArea = document.querySelector("#one-number-select");
const pupillaryDistanceRadios = document.getElementsByName(
  "pupillary_distance_radio"
);

pupillaryDistanceRadios.forEach((pupillaryDistanceRadio) => {
  pupillaryDistanceRadio.addEventListener("change", () => {
    if (pupillaryDistanceRadio.value == "two_number") {
      twoNumArea.classList.add("active");
      oneNumArea.classList.add("active");
    } else {
      twoNumArea.classList.remove("active");
      oneNumArea.classList.remove("active");
    }
  });
});

let dateDropdown = document.getElementById("birth-year-dropdown");

let currentYear = new Date().getFullYear();
let earliestYear = 1914;

while (currentYear >= earliestYear) {
  let dateOption = document.createElement("option");
  dateOption.text = currentYear;
  dateOption.value = currentYear;
  dateDropdown.add(dateOption);
  currentYear -= 1;
}
