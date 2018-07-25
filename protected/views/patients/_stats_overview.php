<?php

    $region_wise = array();
    $gender_wise = array();
    $disease_wise = array();

    foreach ($activeprodiver->getData() as $data) {
        $disease = $data->disease->disease;
        if ( !array_key_exists($disease, $disease_wise) ) {
            $disease_wise[$disease] = 0;
        }
        $disease_wise[$disease]++;
        if ( !array_key_exists($data->patient->gender, $gender_wise) ) {
            $gender_wise[$data->patient->gender] = 0;
        }
        $gender_wise[$data->patient->gender]++;

        $district = $data->patient->district();
        $tehsil   = $data->patient->tehsil();

        if ( !array_key_exists($district, $disease_wise) ) {
            $disease_wise[$district] = array();
        }
        if ( !array_key_exists($tehsil, $disease_wise[$district]) ) {
            $disease_wise[$district][$tehsil] = 0;
        }
        $disease_wise[$district][$tehsil]++;
    }

    var_dump( $region_wise, $gender_wise, $disease_wise );
?>

I am on state overview page