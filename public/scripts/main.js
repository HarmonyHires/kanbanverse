const { Swiper } = require("swiper");

const backToTopBtn = document.getElementById("btn-back-to-top");

const scrollFunction = () => {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        backToTopBtn.classList.remove("hidden");
    } else {
        backToTopBtn.classList.add("hidden");
    }
};
const backToTop = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
};

backToTopBtn.addEventListener("click", backToTop);

window.addEventListener("scroll", scrollFunction);

var swiper = new Swiper(".progress-slide-carousel", {
    loop: true,
    fraction: true,
    autoplay: {
        delay: 1200,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".progress-slide-carousel .swiper-pagination",
        type: "progressbar",
    },
});
