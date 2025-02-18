<?php
    $data = [
        [1, "Alice", 25],
        [2, "Bob", 30],
        [3, "Charlie", 22]
    ];

    for ($i=0; $i<count($data); $i++) {
        for ($j= 0; $j<count($data[$i]); $j++) {
            echo '<li>'. $data[$i][$j];
        }
    }

    echo '<br>';
    echo '<br>';

    echo '<table>'; # echo allows to display html
    for ($i=0; $i<count($data); $i++) {
        echo '<tr>';
        for ($j= 0; $j<count($data[$i]); $j++) {
            if ($i != 0) {
                echo '<td>'. $data[$i][$j].'</td>';
            }
            else {
                echo '<td>'. $data[$i][$j].'</td>';
            }
        }
        echo '</tr>';
    }
    echo '<table>';
?>

<style>
/* This is how to include css */
table {
    border-color: aliceblue;
    border-radius: 10px;
}
</style>