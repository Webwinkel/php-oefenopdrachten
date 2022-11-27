<?php
$bestandsnaam = "opdracht-32_gastenboek.txt";
$datum = date("d:m:Y G:i");
// Open of maak gastenboek
if (!$fp = fopen($bestandsnaam, "a+")) {
    echo "<h2>het lukt niet om het gastenboek te openen </h2>";
    exit;
}
// Gegevens importeren
fputs($fp, $datum);
fputs($fp, "\n");
fputs($fp, $_POST["naam"]);
fputs($fp, "\n");
fputs($fp, $_POST["email"]);
fputs($fp, "\n");
if ($_POST["woonplaats"] != "") {
    fputs($fp, $_POST["woonplaats"]);
    fputs($fp, "\n");
}
fputs($fp, $_POST["bericht"]);
fputs($fp, "\n");

echo "<h2>Klaar</h2>";
echo "<a href=\"opdracht-32.php\">Ga terug naar het beginscherm</a>";
