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
        <source src="../assets/vid/ghibliNature.mp4" type="video/mp4">
        Your browser does not support the video tag. <!-- message when browser doesn't support the video element -->
    </video>
</div>

<!-- display ghibli quotes -->
<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; width: 80%; max-width: 800px;">
    <div id="quote-container" style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 2);">
        <p id="quote-text" style="font-size: 2em; margin-bottom: 1rem; font-style: italic;"></p>
        <p id="quote-source" style="font-size: 1.2em; opacity: 1;"></p>
    </div>
    <a href="../pages/worldClock/index.php" style="display: inline-block; margin-top: 2rem; padding: 0.8rem 1.5rem; background-color: black; color: white; text-decoration: none; border-radius: 6px; box-shadow: 0 4px 5px rgba(0, 0, 0, 0.3); transition: all 0.2s ease; transform: translateY(0);" onmouseover="this.style.color='#FCD34D'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 6px 8px rgba(0, 0, 0, 0.4)';" onmouseout="this.style.color='white'; this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 5px rgba(0, 0, 0, 0.3)';">View World Clock</a>
</div>

<?php echo updateQuote(); ?>

<?php
footer();
?>