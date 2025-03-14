<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form method="get"> <!-- add action="generateur de mots de passe.php" if you need it to redirect to another file, the method="get" sets what method is used to provide the value, but it is possible to use others such as $_POST -->
        <label>Enter a number:</label>
        <input type="number" name="size" required> <!-- size is the name of the variable and number is what help the browser provides -->
        <button type="submit">Submit</button>
    </form>
    <form method="post">
        <p> <!-- checkbox = choix multiples, radio = choix exclusif --> Min: <input type="checkbox" name="Min" value="y" <?= $checked; ?>/> Maj: <input type="checkbox" name="Maj" value="y" <?= $checked; ?>/> Other: <input type="checkbox" name="Other" value="y" <?= $checked; ?>/> 
        </p>
    </form>
</body>
</html>

<?php
    $data_min = range('a', 'z');
    $data_maj = range('A', 'Z');
    $data_other=str_split('?!$*-');
    function gen($size, $data) {
        $password = '';
        for ($i = 0; $i < $size; $i++) {
            $r = rand() % count($data);
            $password .= $data[$r]; # .= is used to concatenate strings
        }
        return $password;
    }
    $size = $_GET['size'];
    $min = $_POST['Min'];
    echo $min;
    $maj = $_POST['Maj'];
    $other = $_POST['Other'];

    # Chooses the data to use
    $data = array_merge($data_min, $data_maj, $data_other);
    global $data;
    if ($min == 'y' && $maj == 'y' && $other == 'y') {
        $data = array_merge($data_min, $data_maj, $data_other);
        global $data; # global is used to access variables outside of the function, prefer using Dependency Injection, and public static in classes
    }
    else if ($min == 'y' && $maj == 'y' && $other == 'n') {
        $data = array_merge($data_min, $data_maj);
        global $data;
    }
    else if ($min == 'y' && $maj == 'n' && $other == 'y') {
        $data = array_merge($data_min, $data_other);
        global $data;
    }
    else if ($min == 'n' && $maj == 'y' && $other == 'y') {
        $data = array_merge($data_maj, $data_other);
        global $data;
    }
    else if ($min == 'y' && $maj == 'n' && $other == 'n') {
        $data = $data_min;
        global $data;
    }
    else if ($min == 'n' && $maj == 'y' && $other == 'n') {
        $data = $data_maj;
        global $data;
    }
    else if ($min == 'n' && $maj == 'n' && $other == 'y') {
        $data = $data_other;
        global $data;
    }
    else {
        echo 'Please select at least one option';
    }

    echo gen($size, $data);
?>