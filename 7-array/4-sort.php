<?php 
    $colors = array("Red", "Green", "Blue", "Yellow", "Orange");

    sort($colors);
    echo '<pre>';
        print_r($colors);
    echo '</pre>';


    rsort($colors);
    echo '<pre>';
        print_r($colors);
    echo '</pre>';

    // 
    $infos = array(
        "Salam" => 55,
        "Kalam" => 50,
        "Jabbar" => 45,
        "Abbas" => 40,
        "Aslam" => 35
    );

    asort($infos);
    echo '<pre>';
        print_r($infos);
    echo '</pre>';


    arsort($infos);
    echo '<pre>';
        print_r($infos);
    echo '</pre>';


    // 
    $infos_age = array(
        55 =>"Salam",
        50 =>"Kalam",
        45 =>"Jabbar",
        40 =>"Abbas",
        35 =>"Aslam"
    );

    ksort($infos_age);
    echo '<pre>';
        print_r($infos_age);
    echo '</pre>';

    krsort($infos_age);
    echo '<pre>';
        print_r($infos_age);
    echo '</pre>';




?>