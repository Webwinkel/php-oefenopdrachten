<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set('Europe/Amsterdam') ;
        echo '<p>';
            $uur = date('H');
            $time = date('G:i');
            if ($uur >= 0 && $uur < 6) {
                echo "Goedenacht!";
            } elseif ($uur >= 6 && $uur < 12) {
                echo "Goedemorgen!";
            } elseif ($uur >= 12 && $uur < 18) {
                echo "Goedemiddag!";
            } elseif ($uur >= 18 && $uur < 24) {
                echo "Goedeavond!";
            }
            echo "<br> Het is nu $time";
            // Opdracht 3: de <br> tag zorgt voor een linebreak
        echo '</p>';
    ?>
    <!-- Opdracht 7-->
    <!-- A: de woorden/manier waarop bepaalde functies worden uitgevoerd
        B: else if staat aan elkaar in PHP -->
    <!-- Opdracht 8: Omdat elk uur groter is dan 0, dus een of operator met uren < 6 heeft geen zin -->
</body>
</html>