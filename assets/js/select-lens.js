// step form js

const selectLensRadios = document.querySelectorAll(".select-lens-radio");
const formStep = document.querySelectorAll(".step");
const msform = document.getElementById("msform");
const pricelences = document.querySelectorAll(".price-lences");
var prescriptionimg = document.querySelector(".prescription-img");

let step = 1;


$(".next-step-btn").click(function () {
  step = step + 1;
  setUpdate(step);
  const radio = msform.querySelectorAll(".select-lens-radio");
  radio.forEach(item => {
    item.addEventListener("change", () => {
      pricelences.forEach(price => {
        if (price.dataset.price === item.value) {
          pricelences.forEach(element => {
            element.classList.remove("active");
          });
          price.classList.add("active");
        }
      });
    });
  });
});

$(".step-pre-btn").click(function () {
  step = step - 1;
  setUpdate(step);
});

function setUpdate(step) {

  $(`.step`).removeClass("active");
  $(`.step-${step}`).addClass("active");
}

document.getElementById("dropArea").addEventListener("click", function () {
  document.getElementById("uploadFile").click();
});

const pupDisSelectOne = document.querySelector("#pupillary-distance-select-1");
const pupDisSelectTwo = document.querySelector("#pupillary-distance-select-2");
const pupDisSelectThree = document.querySelector("#pupillary-distance-select-3");

$(".pupillary-distance-select").on("change", function () {
  if (pupDisSelectTwo.value && pupDisSelectThree.value) {
    $(".prescription-values-area").addClass("active");
  } else if (pupDisSelectOne.value) {
    $(".prescription-values-area").removeClass("active");
    $(".prescription-values-area").addClass("active");
  }
});

function fileChangeHandler(event) {
  var file = event.target.files[0];
  if (file) {
    var fileName = URL.createObjectURL(file);
    var previewImg = document.getElementById("previewImg");
    previewImg.setAttribute("src", fileName);
    var prescriptionImg = document.querySelector(".prescription-img");
    var pupillarydistanceselect1 = document.querySelector("#pupillary-distance-select-1");
    var lencesSelect = document.querySelectorAll(".only-lencs");

    prescriptionImg.classList.add("active");

    if (step === 4) {  
      lencesSelect.forEach(item => {
        item.options[2].setAttribute("selected", "")
      });
      console.log(pupillarydistanceselect1.options[2], "option")
      pupillarydistanceselect1.options[0].removeAttribute("selected", "")
      pupillarydistanceselect1.options[2].setAttribute("selected", "")
      $(".prescription-values-area").addClass("active");
      step = 5;        
      setUpdate(step);
    }
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
    var prescriptionImg = document.querySelector(".prescription-img");
    prescriptionImg.classList.add("active");
    if (step === 4) {  
      step = 4;        
      setUpdate(step);
    }
  }
}

document.getElementById("uploadFile").addEventListener("change", fileChangeHandler);


// swiper pro-dtl-slider js

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

// upload priscription img js

("use strict");


// pupillary_distance_radio js

const twoNumArea = document.querySelector("#two-numbers-select");
const oneNumArea = document.querySelector("#one-number-select");
const pupillaryDistanceRadios = document.getElementsByName("pupillary_distance_radio");

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

// birth year js

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

// Pupillary Distance js

  // const pupDisSelectOne = document.querySelector("#pupillary-distance-select-1");
  // const pupDisSelectTwo = document.querySelector("#pupillary-distance-select-2");
  // const pupDisSelectThree = document.querySelector("#pupillary-distance-select-3");
  // $(".pupillary-distance-select").on("change", function () {
  //   if (pupDisSelectTwo.value && pupDisSelectThree.value) {
  //     $(".prescription-values-area").addClass("active");
  //   } else if (pupDisSelectOne.value) {
  //     $(".prescription-values-area").removeClass("active");
  //     $(".prescription-values-area").addClass("active");
  //   }
  // });
