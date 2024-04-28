<?php 
    // array combine
    $names = ["Kamal", "Jamal", "Abul"];
    $ages = [20, 25, 30];

    $arr_combine = array_combine($names, $ages);

    echo '<pre>';
        echo print_r($arr_combine);
    echo '</pre>';

    // array merge
    $colors1 = ["Red", "Green", "Blue"];
    $colors2 = ["Yellow", "Orange", "Black"];
    $numbers = [12, 14, 25, 30];

    $arr_merge = array_merge($colors1, $colors2, $numbers);

    echo '<pre>';
        echo print_r($arr_merge);
    echo '</pre>';

    // 
    $colors1 = ["a" =>"Red", "b" => "Green", "c" => "Blue"];
    $colors2 = ["d" => "Yellow", "e" => "Orange", "f" => "Black"];
    $numbers = [12, 14, 25, 30];

    $arr_merge2 = array_merge($colors1, $colors2, $numbers);

    echo '<pre>';
        echo print_r($arr_merge2);
    echo '</pre>';

    // array merge recursive
    $colors1 = ["a" =>"Red", "b" => "Green", "c" => "Blue"];
    $colors2 = ["b" => "Yellow", "a" => "Orange", "c" => "Black"];
    $numbers = [12, 14, 25, 30];

    $arr_merge_rec = array_merge_recursive($colors1, $colors2, $numbers);

    echo '<pre>';
        echo print_r($arr_merge_rec);
    echo '</pre>';


?>