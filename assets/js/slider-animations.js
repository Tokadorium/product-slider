class Animations {
    static async #applyAnimationsFromDataset(el, dataset, direction) {
        Animations.#clearAnimations(el, dataset);

        let animToApply = null;
        if (direction === "in") {
            animToApply = dataset.animationIn;
        } else if (direction === "out") {
            animToApply = dataset.animationOut;
        }

        if (!animToApply) return;

        const animDelay = dataset.animationDelay;
        const animDuration = dataset.animationDuration;
        let timeout = null;

        if (animDelay) {
            el.style.animationDelay = animDelay;
            timeout = parseInt(animDelay);
        }
        if (animDuration) {
            el.style.animationDuration = animDuration;
            timeout += parseInt(animDuration);
        }

        el.classList.add(animToApply);

        // if animation out wait for animation to complete
        if (direction === "out") {
            return new Promise(resolve => setTimeout(resolve, timeout));
        }
    }

    static #clearAnimations(el, dataset) {
        el.classList.remove(dataset.animationIn, dataset.animationOut);
    }

    static applyAnimations(slideEl, direction) {
        const promises = [];
        Array.from(slideEl.children).forEach((el) => {
            if (el.classList.contains("slide-bg")) {
                promises.push(Animations.#applyAnimationsFromDataset(el, el.dataset, direction));
            } else if (el.classList.contains("slide-img__wrapper")) {
                const imgLayer = el.querySelector(".slide-img");
                if (imgLayer) {
                    promises.push(Animations.#applyAnimationsFromDataset(imgLayer, el.dataset, direction));
                }
            } else if (el.classList.contains("slide-text__wrapper")) {
                const textLayer = el.querySelector(".slide-text");
                if (textLayer) {
                    promises.push(Animations.#applyAnimationsFromDataset(textLayer, el.dataset, direction));
                }
            }
        });
        return Promise.all(promises);
    }
}