<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/HtmlEscape.utils.php';
require_once BASE_PATH . '/handlers/timeZone.handler.php';
require_once BASE_PATH . '/utils/GetTime.utils.php';
require_once BASE_PATH . '/utils/UpdateClock.utils.php';

require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/components/displayDigitalClock.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';

handleTimezoneRequest();
?>

<?php
head('World Digital Clock');
navHeader();
?>

<body>
    <!-- background image -->
    <div style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1;">
        <img src=".../../assets/img/ghiblimovies.jpg" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;">
    </div>

    <?php displayDigitalClock($timeZones); ?>
</body>

<?php
echo updateClock();
footer();
?>