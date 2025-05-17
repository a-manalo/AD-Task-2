<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/htmlEscape.utils.php';
require_once BASE_PATH . '/handlers/quotes.handler.php';
require_once BASE_PATH . '/utils/updateQuote.utils.php';

require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
?>

<?php
head('Home');
navHeader();
?>

<!-- video background -->
<div class="video-background" style="position: fixed; left: 0; top: 0; width: 100vw; height: 100vh; z-index: -1;">
    <video autoplay muted loop id="myVideo" style="width: 100vw; height: 100vh; object-fit: cover;">
        <source src="./assets/vid/ghibliNature.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<!-- display ghibli quotes -->
<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; width: 80%; max-width: 800px;">
    <div id="quote-container" style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 2);">
        <p id="quote-text" style="font-size: 2em; margin-bottom: 1rem; font-style: italic;"></p>
        <p id="quote-source" style="font-size: 1.2em; opacity: 1;"></p>
    </div>
</div>

<?php echo updateQuote(); ?>

<?php
footer();
?>