<?php 
    $colors = array("Red", "Green", "Blue", "Yellow", "Orange");

    foreach($colors as $color){
        echo '<pre>';
            echo $color;
        echo '</pre>';
    };

    // 
    $infos = array(
        "Salam" => 55,
        "Kalam" => 50,
        "Jabbar" => 45,
        "Abbas" => 40,
        "Aslam" => 35
    );

    foreach ($infos as $key => $info) {
        echo '<pre>';
            echo "<h4>My name is $key. I'm $info years old.</h4>" ;
        echo '</pre>';
    }
    

?>