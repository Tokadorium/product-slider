<?php
// static mockup of a backend generated array of posts
// replace by backend logic later
$slides_to_render = require_once 'slides_to_render.php';

// its used in slider-template to populate data-src field of the element
if (!defined("SLIDER_IMG_DIR")) {
    define("SLIDER_IMG_DIR", plugin_dir_url(__FILE__) . 'assets/images/');
}

require_once("templates/slider-template.php");
?>