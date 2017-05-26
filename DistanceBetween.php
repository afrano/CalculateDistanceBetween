<?php

echo 'Jarak Univ Sadhar ke Tugu Jogja : ' . getDistanceBetween(-7.778056, 110.3857267, -7.782865, 110.367084). ' Kilometer';

    function getJarakLokasi($latitude1, $longitude1, $latitude2, $longitude2) {
        $theta = $longitude1 - $longitude2;
        $jarak = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
        $jarak = acos($jarak);
        $jarak = rad2deg($jarak);
        $jarak = $jarak * 60 * 1.1515;
        $JarakTotal = $distance * 1.609344;
        return (round($JarakTotal, 2));
    }


