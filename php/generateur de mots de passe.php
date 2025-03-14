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
</body>
</html>

<?php
    $data_min = range('a', 'z');
    $data_maj = range('A', 'Z');
    $data_other=str_split('?!$*-');
    function gen($size) {
        global $data_min, $data_maj, $data_other; # global is used to access variables outside of the function, prefer using Dependency Injection, and public static in classes
        $data = array_merge($data_min, $data_maj, $data_other);
        $password = '';
        for ($i = 0; $i < $size; $i++) {
            $r = rand() % count($data);
            $password .= $data[$r]; # .= is used to concatenate strings
        }
        return $password;
    }
    $size = $_GET['size'];
    echo gen($size);
?>