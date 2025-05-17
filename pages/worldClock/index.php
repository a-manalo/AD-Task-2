<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/htmlEscape.utils.php';

require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
?>

<?php
head('World Digital Clock');
navHeader();
?>

<?php
footer();
?>