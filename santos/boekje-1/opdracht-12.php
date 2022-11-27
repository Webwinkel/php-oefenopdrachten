<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafel van 7</title>
</head>

<body>
    <?php
    echo "<p>";
    for ($teller = 0; $teller <= 7; $teller++) {
        $antwoord = $teller * 7;
        echo "$antwoord <br>";
    };
    echo "</p>";
    ?>
</body>

</html>