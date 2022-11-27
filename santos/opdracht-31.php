<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <?php
    // Ik heb geen idee hoe en waarom ik hier append zou moeten gebruiken dus ik doe het niet. :)
    if (!empty($_GET)) {
        $naamnieuw = $_GET["naam"];
        $plaatsnieuw = $_GET["plaats"];
        $adresnieuw = $_GET["adres"];

        echo "Hoi $naamnieuw, je pakketje wordt morgen bezorgd bij $adresnieuw in $plaatsnieuw.";

        if (file_exists("opdracht-31_naam.txt")) {
            $fp_naam = fopen("opdracht-31_naam.txt", "r");
            $fp_plaats = fopen("opdracht-31_plaats.txt", "r");
            $fp_adres = fopen("opdracht-31_adres.txt", "r");

            $naam = fgets($fp_naam);
            $plaats = fgets($fp_plaats);
            $adres = fgets($fp_adres);

            fclose($fp_naam);
            fclose($fp_plaats);
            fclose($fp_adres);

            $fp_naam = fopen("opdracht-31_naam.txt", "w");
            $fp_plaats = fopen("opdracht-31_plaats.txt", "w");
            $fp_adres = fopen("opdracht-31_adres.txt", "w");

            fputs($fp_naam, $naamnieuw);
            fputs($fp_plaats, $plaatsnieuw);
            fputs($fp_adres, $adresnieuw);

            fclose($fp_naam);
            fclose($fp_plaats);
            fclose($fp_adres);

            if ($naam !== $naamnieuw || $plaats !== $plaatsnieuw || $adres !== $adresnieuw) {
                echo "<br>Je oude gegevens ($naam die woont in $adres in $plaats) zijn veranderd. <br>";
            }
        } else {
            $fp_naam = fopen("opdracht-31_naam.txt", "w");
            fputs($fp_naam, $naamnieuw);
            fclose($fp_naam);

            $fp_plaats = fopen("opdracht-31_plaats.txt", "w");
            fputs($fp_plaats, $plaatsnieuw);
            fclose($fp_plaats);

            $fp_adres = fopen("opdracht-31_adres.txt", "w");
            fputs($fp_adres, $adresnieuw);
            fclose($fp_adres);
        }
    }
    ?>
</head>

<body>
    <form name="gegevens" id="gegevens" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <label for="naam">Naam:</label>
        <input type="text" required name="naam" id="naam" value=""> <br />
        <label for="plaats">Woonplaats:</label>
        <input value="" type="text" required name="plaats" id="plaats"> <br />
        <label for="adres">Adres:</label>
        <input type="text" value="" required name="adres" id="adres">
        <br><br>
        <input type="submit" value="submit" name="submit">


    </form>
</body>

</html>