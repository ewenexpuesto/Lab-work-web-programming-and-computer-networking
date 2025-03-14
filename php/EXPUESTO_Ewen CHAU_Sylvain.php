<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Control Number 2 (Group 2)</title>
    <header>
    <h2>Echiquier (EXPUESTO Ewen and CHAU Sylvain)</h2>
    </header>

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            text-align: ;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }
        h2 {
            text-align: top;
        }
        td {
            width: 50px;
            height: 50px;
            border: 2px solid #000; 
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container">

        <table>
            <?php
                $n=8;
                for ($i = 0 ; $i < $n ; $i++) {
                    echo "<tr>"; // for each line
                    for ($j = 0 ; $j < $n ; $j++) {
                        if ($i % 2 == 0 && $j % 2 == 0) {
                            echo "<td class='white'></td>"; // I tested to get it right
                        }
                        else if ($i % 2 == 0 && $j % 2 == 1) {
                            echo "<td class='black'></td>";
                        }
                        else if ($i % 2 == 1 && $j % 2 == 0) {
                            echo "<td class='black'></td>";
                        }
                        else if ($i % 2 == 1 && $j % 2 == 1) {
                            echo "<td class='white'></td>";
                        }
                    }
                    echo "</tr>";
                }
            ?>

</body>
</html>