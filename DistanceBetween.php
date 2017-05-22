<?php

echo 'Jarak Univ Sadhar ke Tugu Jogja : ' . getDistanceBetween(-7.778056, 110.3857267, -7.782865, 110.367084, 'K'). ' Kilometers';

function getDistanceBetween($latitude1, $longitude1, $latitude2, $longitude2, $unit) {
    $theta = $longitude1 - $longitude2;
    $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
    $distance = acos($distance); 
    $distance = rad2deg($distance);
    $distance = $distance * 60 * 1.1515;
    if ($unit == 'K') {
        $distance = $distance * 1.609344;
    } else if ($unit == 'N'){
        $distance = $distance * 0.8684;
    }
    return ($distance);
}


