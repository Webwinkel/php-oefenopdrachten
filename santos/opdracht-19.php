<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in loops</title>
</head>

<body>
    <?php
    echo "<h1>De tafels van 7, 8 en 9.</h1><hr>";
    for ($i = 7; $i <= 9; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $tafel = $j * $i;
            echo "$tafel <br>";
        };
        echo "<hr>";
    };
    ?>
</body>

</html>