<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastenboek lezen</title>
</head>

<body>
    <?php
    $bestandsnaam = "opdracht-32_gastenboek.txt";
    $aantal_regels = 5;
    $teller = 0;
    $aantal_bijdragen = 0;
    if (file_exists($bestandsnaam)) {
        $fp = fopen($bestandsnaam, "r");
    } else {
        echo "<h2>Het gastenboek is nog leeg!</h2> <a href=\"opdracht-32_gastenboekschrijven.php\">Wees de eerste om erin te schrijven!</a>";
        exit;
    }
    while (!feof($fp)) {
        $regel = fgets($fp);
        if (!feof($fp)) {
            if ($teller % $aantal_regels == 0) {
                $aantal_bijdragen++;
                echo "<hr>";
                echo "<h3>Bijdrage: $aantal_bijdragen</h3>";
            }
        }
        echo "$regel <br>";
        $teller++;
    }
    echo "<a href=\"opdracht-32.php\">Ga terug naar het beginscherm</a>";
    ?>
</body>

</html>