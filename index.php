<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/htmlEscape.utils.php';

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

<?php
footer();
?>