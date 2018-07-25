<?php

    $region_wise = array();
    $gender_wise = array();
    $disease_wise = array();

    foreach ($activeprodiver->getData() as $data) {
        $disease = $data->disease->disease;
        $disease_wise[$disease]++;
        $gender_wise[$data->patient->gender]++;

        $district = $data->patient->district();
        $tehsil   = $data->patient->tehsil();

        if ( !array_key_exists($district, $disease_wise) ) {
            $disease_wise[$district] = array();
        }
        $disease_wise[$district][$tehsil]++;
    }

    var_dump( $region_wise, $gender_wise, $disease_wise );
?>

I am on state overview page