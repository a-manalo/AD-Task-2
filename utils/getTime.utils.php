<?php
function getCurrentTime($timezone) {
    $date = new DateTime('now', new DateTimeZone($timezone));
    return [
        'time' => $date->format('h:i:s'),
        'period' => $date->format('A')
    ];
}

function handleTimezoneRequest() {
    if (isset($_GET['timezone'])) {
        $timezone = $_GET['timezone'] ?? 'Asia/Manila';
        $time = getCurrentTime($timezone);
        echo json_encode($time);
        exit;
    }
}