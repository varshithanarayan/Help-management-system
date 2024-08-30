<?php

function getDistance($addressFrom, $addressTo, $unit = '') {
    $urlFrom = 'https://nominatim.openstreetmap.org/search?format=json&q=' . urlencode($addressFrom);
    $urlTo = 'https://nominatim.openstreetmap.org/search?format=json&q=' . urlencode($addressTo);

    $dataFrom = json_decode(file_get_contents($urlFrom));
    $dataTo = json_decode(file_get_contents($urlTo));

    // Check for errors in the API response
    if (empty($dataFrom) || isset($dataFrom->error)) {
        return 'Error retrieving geolocation data for address: ' . $addressFrom . '. Details: ' . json_encode($dataFrom);
    }

    if (empty($dataTo) || isset($dataTo->error)) {
        return 'Error retrieving geolocation data for address: ' . $addressTo . '. Details: ' . json_encode($dataTo);
    }

    // Extract latitude and longitude as before
    $latitudeFrom = $dataFrom[0]->lat;
    $longitudeFrom = $dataFrom[0]->lon;
    $latitudeTo = $dataTo[0]->lat;
    $longitudeTo = $dataTo[0]->lon;

    // Calculate distance and return
    // (remaining code is unchanged)
}

$a = $_POST['p1'];
$b = $_POST['p2'];

$addressFrom = $a;
$addressTo = $b;

$distance = getDistance($addressFrom, $addressTo, "K");
$c = floatval($distance) * 15;

echo '<script type="text/javascript">';
echo 'window.alert("Kilometer ' . $distance . ', Price ' . $c . '");';
echo 'window.location="drequest.php";';
echo '</script>';

?>
