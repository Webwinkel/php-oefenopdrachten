<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "<title>yay</title>"; ?>
</head>
<body>
    <!-- http://localhost:8000/Dev/school/po/webwinkel/php-opdrachten/santos/boekje-1/test.php -->

    <?php 
        // Tijdzone instellen
        date_default_timezone_set('Europe/Amsterdam');
        // Controleer zomertijd
        if (date('I') == 1) {
            echo "Het is zomertijd";
        }
        else {
            echo "Het is wintertijd";
        }
     ?>
</body>
</html>