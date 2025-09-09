const FIRST_DISPLAYED_SLIDE_ID = 1;
const ADVANCE_SLIDE_AFTER = 10000;

document.addEventListener("DOMContentLoaded", () => {
    // display slide 1 on load
    DisplaySlides.displaySlideById(FIRST_DISPLAYED_SLIDE_ID);

    // auto-advance slides every 10 seconds
    let autoAdvanceIntervalId = setInterval(() => {
        const slides = document.querySelectorAll(".slide");
        const slideCount = slides.length;
        const currentSlide = document.querySelector(".active-slide");
        const currentSlideId = currentSlide.dataset.slideId;
        const nextSlideId = (currentSlideId % slideCount) + 1;
        DisplaySlides.displaySlideById(nextSlideId);
    }, ADVANCE_SLIDE_AFTER);

    // handle clicking on navbar
    const sliderNavbar = document.getElementById("slides-container__nav");
    sliderNavbar.addEventListener("click", function clickOnNavbarArea(event) {
        // stop auto-advance on any navbar click
        if (autoAdvanceIntervalId) {
            clearInterval(autoAdvanceIntervalId);
            autoAdvanceIntervalId = null;
        }

        const clickedEl = event.target;

        // handle clicks on nav dots
        const navDot = clickedEl.closest(".nav-dot");
        if (navDot) {
            const slideId = navDot.dataset.navId;
            DisplaySlides.displaySlideById(slideId);
            return;
        }

        // handle clicks on nav arrows
        const arrow = clickedEl.closest(".slides-container__nav-arrow");
        if (arrow) {
            const slides = document.querySelectorAll(".slide");
            const slideCount = slides.length;
            const currentSlide = document.querySelector(".active-slide");
            const currentSlideId = currentSlide.dataset.slideId;
            let nextSlideId;

            if (arrow.classList.contains("arrow-left")) {
                // previous slide
                nextSlideId = (currentSlideId - 2 + slideCount) % slideCount + 1;
            } else { // arrow-right
                // next slide
                nextSlideId = (currentSlideId % slideCount) + 1;
            }
            DisplaySlides.displaySlideById(nextSlideId);
        }
    });
});