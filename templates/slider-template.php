<?php
// static mockup of card-slider
// items will be rendered by backend with data attributes in html elements
// js will handle the items and animations according to data
?>

<?php
function render_atts($atts)
{
    foreach ($atts as $att_name => $att_value) {
        if ($att_name === "data-content") {
            continue; // skip content, it belongs inside the element
        }
        if ($att_name === "data-filename") {
            echo ' data-src="' . SLIDER_IMG_DIR . htmlspecialchars($att_value) . '"';
            continue;
        }
        echo ' ' . htmlspecialchars($att_name) . '="' . htmlspecialchars($att_value) . '"';
    }
}
?>

<div id="slides-container">
    <!-- slides -->
    <?php foreach ($slides_to_render as $slide_id => $slide): ?>
        <div class="slide hidden"
            data-slide-id="<?php echo htmlspecialchars($slide_id); ?>"
            data-slide-title="<?php echo htmlspecialchars($slide["data-slide-title"]); ?>">

            <div class="slide-bg animate__animated" <?php render_atts($slide["background"]); ?>></div>

            <!-- image layers -->
            <?php if (!empty($slide['images'])): ?>
                <?php foreach ($slide['images'] as $image_layer): ?>
                    <div class="slide-img__wrapper <?php echo htmlspecialchars($image_layer['data-position']); ?>" <?php render_atts($image_layer); ?>>
                        <div class="slide-img animate__animated"></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- text layers -->
            <?php if (!empty($slide['text'])): ?>
                <?php foreach ($slide['text'] as $text_layer): ?>
                    <div class="slide-text__wrapper <?php echo htmlspecialchars($text_layer['data-position']); ?>" <?php render_atts($text_layer); ?>>
                        <div class="slide-text animate__animated">
                            <?php echo htmlspecialchars($text_layer["data-content"]); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    <?php endforeach; ?>

    <!-- navigation -->
    <div id="slides-container__nav">
        <span class="slides-container__nav-arrow arrow-left"><i class="fa-solid fa-chevron-left"></i></span>

        <!-- dots -->
        <?php foreach ($slides_to_render as $slide_id => $slide): ?>
            <span class="nav-dot"
                data-nav-id="<?php echo htmlspecialchars($slide_id); ?>">
                <i class="fa-regular fa-circle"></i>
            </span>
        <?php endforeach; ?>

        <span class="slides-container__nav-arrow arrow-right"><i class="fa-solid fa-chevron-right"></i></span>
    </div>
</div>