<?php
    function triangle($number_of_stars = null) { /* need to change that for default value */
        if ($number_of_stars == null) { /* and that also with the three = */
            $number_of_stars = 5;
        }
        $sum = 0;
        if ($number_of_stars > 20) {
            echo 'Triangle trop grand';
        }
        else if ($number_of_stars == 0) {
            for ($i = 0; $i < 10; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo '*';
                    $sum ++;
                }
                echo '<br>';
            }
        }
        else {
            for ($i = 0; $i < $number_of_stars; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo '*';
                    $sum ++;
                }
                echo '<br>';
            }
        }
        return $sum;
    }
    triangle();
?>