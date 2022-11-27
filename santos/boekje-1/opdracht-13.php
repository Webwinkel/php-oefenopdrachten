<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafel van 7 met een while loop</title>
</head>

<body>
    <?php
    echo "<p>";
    $teller = 0;
    while ($teller < 7) {
        $teller++;
        $antwoord = $teller * 7;
        echo "$antwoord <br>";
    }
    echo "</p>";
    ?>
</body>

</html>