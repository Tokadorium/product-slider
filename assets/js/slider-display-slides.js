class DisplaySlides {
    static #getSlideById(slideId) {
        const allSlides = document.querySelectorAll(".slide");

        let targetSlide = null;
        allSlides.forEach(function findSlideByNumber(slide) {
            if (slide.dataset.slideId == slideId) {
                targetSlide = slide;
                return;
            }
        });

        return targetSlide;
    }

    static #getNavdotById(navdotId) {
        const allDots = document.querySelectorAll(".nav-dot");

        let targetDot = null;
        allDots.forEach(function findSlideByNumber(dot) {
            if (dot.dataset.navId == navdotId) {
                targetDot = dot;
                return;
            }
        });

        return targetDot;
    }

    static async displaySlideById(slideId) {
        const sliderEl = document.getElementById("slides-container");
        const currentSlideEl = document.querySelector(".active-slide");
        const currentDotEl = document.querySelector(".active-nav");
        const targetSlide = DisplaySlides.#getSlideById(slideId);
        const targetDot = DisplaySlides.#getNavdotById(slideId);

        if (!targetSlide || !targetDot) return;

        if (sliderEl.dataset.animPlaying === "true") {
            return;
        } else {
            sliderEl.dataset.animPlaying = "true";

            // handle prevoiously active slides and dots, if any
            if (currentSlideEl) {
                if (currentSlideEl.dataset.slideId === targetSlide.dataset.slideId) return;

                // animate out current slide
                await Animations.applyAnimations(currentSlideEl, "out");
                currentSlideEl.classList.remove("active-slide");
                currentSlideEl.classList.add("hidden");
            }
            if (currentDotEl) {
                currentDotEl.classList.remove("active-nav");
                currentDotEl.querySelector("i").classList.remove("fa-solid");
                currentDotEl.querySelector("i").classList.add("fa-regular");
            }

            // handle applying transforms, images and anims from dataset fields
            await Animations.applyAnimations(targetSlide, "in");
            Images.applyImages(targetSlide);
            targetSlide.classList.remove("hidden");
            Transforms.applyTransforms(targetSlide);
            targetSlide.classList.add("active-slide");

            // handle changing navbar dots
            targetDot.classList.add("active-nav");
            targetDot.querySelector("i").classList.remove("fa-regular");
            targetDot.querySelector("i").classList.add("fa-solid");

            sliderEl.dataset.animPlaying = "false";
        }
    }
}