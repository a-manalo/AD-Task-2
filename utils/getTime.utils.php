<?php
function getCurrentTime($timezone) {
    $date = new DateTime('now', new DateTimeZone($timezone));
    return [
        'time' => $date->format('h:i:s'),
        'period' => $date->format('A')
    ];
}