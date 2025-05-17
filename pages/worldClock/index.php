<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/htmlEscape.utils.php';
require_once BASE_PATH . '/handlers/timeZone.handler.php';
require_once BASE_PATH . '/utils/getTime.utils.php';
require_once BASE_PATH . '/utils/updateClock.utils.php';

require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';

if (isset($_GET['timezone'])) {
    $timezone = $_GET['timezone'] ?? 'Asia/Manila';
    $time = getCurrentTime($timezone);
    echo json_encode($time);
    exit;
}
?>

<?php
head('World Digital Clock');
navHeader();
?>

<!-- background image -->
<div style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1;">
    <img src=".../../assets/img/ghiblimovies.jpg" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;">
</div>

<!-- digital clock UI -->
<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; width: 80%; max-width: 600px;">
    <!-- dropdown select of timezone -->
    <select id="timezone-select" style="width: 100%; padding: 10px; margin-bottom: 20px; background-color: rgba(0, 0, 0, 0.7); color: white; border-radius: 8px; font-size: 1.2em; font-weight: bold;">
        <?php foreach ($timeZones as $tz): ?>
            <option value="<?php echo $tz['timezone']; ?>"><?php echo $tz['city'] . ', ' . $tz['country'] . ' (' . $tz['abbr'] . ')'; ?></option>
        <?php endforeach; ?>
    </select>

    <!-- display digital time -->
    <div style="background-color: rgba(0, 0, 0, 0.7); padding: 30px; border-radius: 15px; box-shadow: 0 4px 5px rgba(0, 0, 0, 0.3);">
        <div id="clock" style="font-size: 4em; color: white; font-family: 'Digital', monospace; text-shadow: 0 0 10px yellow;">
            <span id="time">00:00:00</span>
            <span id="period" style="font-size: 0.5em; margin-left: 10px;">AM</span>
        </div>
    </div>
</div>

<?php
echo updateClock();
footer();
?>