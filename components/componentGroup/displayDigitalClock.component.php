<?php
function displayDigitalClock($timeZones) {
    ?>
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
}
?> 