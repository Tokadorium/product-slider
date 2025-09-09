class Images {
    static #setupSlideBg(backgroundEl) {
        if (!backgroundEl.classList.contains("slide-bg")) return;

        const bgImgSrc = backgroundEl.dataset.src;
        backgroundEl.style.backgroundImage = `url(${bgImgSrc})`;
    }

    static #setupSlideImg(imageContainerEl, imgAtts = "") {
        if (!imageContainerEl.classList.contains("slide-img__wrapper")) return;
        if (imageContainerEl.dataset.imageGenerated === "true") return;

        const imgImgSrc = imageContainerEl.dataset.src;
        const imgAlt = imageContainerEl.dataset.alt;
        const imgWidth = imageContainerEl.dataset.width;
        const imgHeight = imageContainerEl.dataset.height;
        let html = `<img ${imgAtts} src="${imgImgSrc}" alt="${imgAlt}" width="${imgWidth}" height="${imgHeight}">`;

        imageContainerEl.querySelector(".slide-img").innerHTML = html;
        imageContainerEl.dataset.imageGenerated = "true";
    }

    static applyImages(slideEl, imgElAtts = "") {
        const slideBgEl = slideEl.querySelector(".slide-bg");
        const slideImgEls = slideEl.querySelectorAll(".slide-img__wrapper");

        Images.#setupSlideBg(slideBgEl);

        slideImgEls.forEach(slideImgEl => {
            Images.#setupSlideImg(slideImgEl, imgElAtts);
        });
    }
}