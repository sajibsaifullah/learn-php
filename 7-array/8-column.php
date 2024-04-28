<?php 

    $infos = array(
        array(
            "id" => 1,
            "name" => "Kamal",
            "city" => "Dhaka"
        ),
        array(
            "id" => 2,
            "name" => "Jamal",
            "city" => "Rajshahi"
        ),
        array(
            "id" => 3,
            "name" => "Amal",
            "city" => "Tangail"
        ),
    );

    // $arr = array_column($infos, "city");
    // $arr = array_column($infos, "id");
    $arr = array_column($infos, "name");

    echo '<pre>';
        print_r($arr);
    echo '</pre>';

?>