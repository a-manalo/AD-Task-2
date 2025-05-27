<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/HtmlEscape.utils.php';
require_once BASE_PATH . '/staticData/quotes.staticData.php';
require_once BASE_PATH . '/utils/UpdateQuote.utils.php';

require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/components/componentGroup/displayQuote.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
?>

<?php
head('Home');
navHeader();
?>

<body>
    <!-- video background -->
    <div class="video-background" style="position: fixed; left: 0; top: 0; width: 100vw; height: 100vh; z-index: -1;">
        <video autoplay muted loop id="myVideo" style="width: 100vw; height: 100vh; object-fit: cover;">
            <source src="../assets/vid/ghibliNature.mp4" type="video/mp4">
            Your browser does not support the video tag. <!-- message when browser doesn't support the video element -->
        </video>
    </div>

    <?php 
    displayQuote();
    echo updateQuote();
    ?>
</body>

<?php footer(); ?>