<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <?php
    if (!empty($_GET)) { // Als er data te verkrijgen is:
        $naamnieuw = $_GET["naam"]; // Stel naamnieuw gelijk aan de data
        if (file_exists("naam.txt")) { // Als naam.txt bestaat:
            $fp = fopen("naam.txt", "r"); // Maak een filepointer naar naam.txt met read-only machtigingen
            $naam = fgets($fp); // Laat naam gelijk staan aan de tekst uit naam.txt
            fclose($fp); // Sluit naam.txt
            $fp = fopen("naam.txt", "w"); // Maak een filepointer naar naam.txt met create-rewrite machtigingen
            echo "Jouw naam is $naamnieuw"; // Print naamnieuw
            if ($naamnieuw != $naam) { // Als naamnieuw niet gelijk is aan naam
                echo "<br>Maar vorige keer was je naam nog $naam"; // Print de tekst uit naam.txt
            }
            fputs($fp, $naamnieuw); // Herschrijf naam.txt met naamnieuw
            fclose($fp); // Sluit naam.txt
        } else { // Als er geen data te verkrijgen is (naam.txt bestaan niet)
            $fp = fopen("naam.txt", "w"); // Maak een naam.txt
            $naamnieuw = $_GET["naam"]; // Naamnieuw is de waarde van het tekstveld
            fputs($fp, $naamnieuw); // Schrijf de waarde van naamnieuw in naam.txt
            fclose($fp); // Sluit naam.txt
        };
    }
    ?>
</head>

<body>
    <form name="naamform" method="get" action="<?php echo $_SERVER["PHP_SELF"]
                                                // Verstuur de data naar de php code in de head 
                                                // Opdracht 29: Het naam.txt bestand wordt altijd herschreven dus een rewind functie is onnodig.
                                                ?>">
        <label for="naam">Vertel me je naam</label>
        <input type="text" name="naam" value="">
        <br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>