<?php
    $number_of_stars = 11;

    if ($number_of_stars > 20) {
        echo 'Triangle trop grand';
    }
    else if ($number_of_stars == 0) {
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo '*';
            }
            echo '<br>';
        }
    }
    else {
        for ($i = 0; $i < $number_of_stars; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo '*';
            }
            echo '<br>';
        }
    }
?>