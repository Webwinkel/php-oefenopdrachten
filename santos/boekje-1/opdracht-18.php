<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn naam</title>
</head>

<body>
    <form name="name" method="get" action="./opdracht-18.php">
        <input name="voornaam" type="text" placeholder="Voornaam">
        <input name="tussenvoegsel" type="text" placeholder="Tussenvoegsel">
        <input name="achternaam" type="text" placeholder="Achternaam">
        <input type="submit" value="Submit">
    </form>
</body>
<?php
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];

echo "<h1> Welkom, $voornaam $tussenvoegsel $achternaam</h1>"
?>

</html>