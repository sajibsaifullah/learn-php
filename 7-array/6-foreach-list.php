<?php 
    $numbers = [
        [1, 2, 3],
        [4, 5, 6]
    ];

    foreach($numbers as list($a, $b, $c)){
        echo $a . $b . $c . "<br>";
    };


    //multidimensional array 
    $infos = array(
        [1, "Kamal", 20, "Singer", "Dhaka"], 
        [2, "Jamal", 22, "Cricketer", "Barishal"], 
        [3, "Robi", 25, "Hero", "Sylhet"], 
        [4, "Roni", 18, "Student", "Jashore"], 
        [4, "Rakib", 27, "Bowler", "Bogura"], 
    );

    echo '<table border="1" 
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Age</th>
                <th>Occupation</th>
                <th>City</th>
            </tr>
    >';
    foreach($infos as list($id, $name, $age, $occupation, $city)){
        echo '<tr>';
            echo '<td>' . $id . '</td>';
            echo '<td>' . $name . '</td>';
            echo '<td>' . $age . '</td>';
            echo '<td>' . $occupation . '</td>';
            echo '<td>' . $city . '</td>';
        echo '</tr>';
        // echo $id . $name . $age . $occupation . $city . "<br>";
    };
    echo '</table>';


?>