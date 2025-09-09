class Transforms {
    static #applyTransformFromData(elToTransform) {
        if (elToTransform.dataset.elementTransformed === "true") return;

        const offsetX = elToTransform.dataset.offsetX || '0';
        const offsetY = elToTransform.dataset.offsetY || '0';

        const existingTransform = window.getComputedStyle(elToTransform).transform;

        // If there is no existing transform - set the new one
        // else - append the new translate values to the existing transform
        if (existingTransform === 'none') {
            elToTransform.style.transform = `translate(${offsetX}, ${offsetY})`;
        } else {
            elToTransform.style.transform = `${existingTransform} translate(${offsetX}, ${offsetY})`;
        }

        elToTransform.dataset.elementTransformed = "true";
    }

    static applyTransforms(parentEl) {
        const children = parentEl.children;
        for (let i = 0; i < children.length; i++) {
            Transforms.#applyTransformFromData(children[i]);
        }
    }
}