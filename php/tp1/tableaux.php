<?php
    $data = [
        ["Alice", 25], # ça marche
        ["Bob"],
        ["Charlie"]
    ];

    for ($i=0; $i<count($data); $i++) { # nombre de sous-tableaux dans le tableau à double entrée
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

    echo '<br>';

    # Autre manière de définir les tableaux
    $menu["Lundi"]["Entrée"]="Salade";
    $menu["Lundi"]["Plat"]="Boudin/Purée";
    $menu["Mardi"]["Entrée"]="Tomates";
    print_r($menu);
?>

<style>
/* This is how to include css */
table td {
    border: 1px solid;
}
</style>