const detailTabs = document.querySelectorAll("[data-view-target]");
const detailTabContents = document.querySelectorAll("[data-view-content]");

detailTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.viewTarget);
    detailTabContents.forEach((tabContent) => {
      tabContent.classList.remove("active");
    });
    detailTabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");
    target.classList.add("active");
  });
});

// slider tabs js

document.addEventListener("DOMContentLoaded", function () {
  // Initialize Swiper instances
  const swiperInstances = [];

  document.querySelectorAll(".mySwiper2").forEach((swiperElement, index) => {
    swiperInstances[index] = new Swiper(swiperElement, {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: ".pro-dtl-sldr-btn.next",
        prevEl: ".pro-dtl-sldr-btn.pre",
      },
      thumbs: {
        swiper: {
          el: swiperElement
            .closest(".pro-detail-imgs-area")
            .querySelector(".mySwiper"),
          slidesPerView: 5,
          spaceBetween: 10,
          breakpoints: {
            // when window width is >= 320px
            320: {
              slidesPerView: 3,
            },
            // when window width is >= 480px
            480: {
              slidesPerView: 4,
            },
            // when window width is >= 640px
            640: {
              slidesPerView: 4,
            },
            // when window width is >= 768px
            767: {
              slidesPerView: 5,
            },
          },
        },
      },
    });
  });

  const tabs = document.querySelectorAll("[data-tab-target]");
  const tabContents = document.querySelectorAll("[data-tab-content]");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      const target = document.querySelector(tab.dataset.tabTarget);

      tabContents.forEach((tabContent) => {
        tabContent.classList.remove("active");
      });
      tabs.forEach((tabInner) => {
        tabInner.classList.remove("active");
      });

      tab.classList.add("active");
      target.classList.add("active");

      // Update Swiper instance when tab changes
      const swiperIndex = Array.from(tabContents).indexOf(target);
      if (swiperInstances[swiperIndex]) {
        swiperInstances[swiperIndex].update();
      }
    });
  });
});
