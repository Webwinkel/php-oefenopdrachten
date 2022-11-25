<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Bezoekersteller</title>
    <?php
    if (file_exists("teller.txt")) { // Check of teller.txt in dezelfde map bestaat
        $fp = fopen("teller.txt", "r+"); // Maak een filepointer variabele met het bestand en de machtigingen
        $teller = fgets($fp); // Laat de variabele teller gelijk staan aan de data in teller.txt
        $teller++; // Verhoog de teller met 1
        rewind($fp); // Zet de filepointer aan het begin van het bestand
        fputs($fp, $teller); // Zet de nieuwe waarde van $teller in teller.txt
        fclose($fp); // Sluit teller.txt 
    } else { // Als teller.txt niet bestaat:
        $fp = fopen("teller.txt", "w"); // Maak een bestand genaamd teller.txt waarin geschreven kan worden
        $teller = "1"; // Maak een tellervariabele met de waarde van "1"
        fputs($fp, $teller); // Zet de waarde van $teller in het teller.txt bestand
        fclose($fp); // Sluit teller.txt
    }
    ?>
</head>

<body>
    U bent de <?php echo $teller // Weergeef de waarde van teller
                ?>e bezoeker van deze pagina
</body>

</html>