<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <?php
    if (!empty($_GET)) {
        $naamnieuw = $_GET["naam"];
        if (file_exists("naam.txt")) {
            $fp = fopen("naam.txt", "r");
            $naam = fgets($fp);
            fclose($fp);
            echo "Jouw naam is $naamnieuw";
            if ($naamnieuw != $naam) {
                echo "<br>Maar vorige keer was je naam nog $naam";
            }
            fputs($fp, $naamnieuw);
            fclose($fp);
        } else {
            $fp = fopen("naam.txt", "w");
            $naamnieuw = $_GET["naam"];
            fputs($fp, $naamnieuw);
            fclose($fp);
        };
    }
    ?>
</head>

<body>
    <form name="naamform" method="get" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <label for="naam">Vertel me je naam</label>
        <input type="text" name="naam" value="">
        <br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>