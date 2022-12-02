<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leveranciers</title>
</head>

<body>
    <?php
    // Maak verbinding
    $db = new PDO('sqlite:kantoor.sqlite');
    echo $db;
    // SQL
    $sql = "SELECT Naam FROM Leverancier";
    $resultaat = $db->query($sql);
    foreach ($resultaat as $row) {
        echo $row['Naam'] . '<br/>';
    }
    // Sluit verbinding
    $db = NULL;
    ?>
</body>

</html>