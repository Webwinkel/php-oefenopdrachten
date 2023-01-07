<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data verwijderen</title>
</head>

<body>
    <?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'usbw');

        $sql = "DELETE FROM products WHERE productCode = ?";
        $stmt = $db->prepare($sql);

        $stmt->execute([$_POST["verstopt"]]);

        echo "<a href='opdracht-41_databekijken.php'>Bekijk alle data</a>";
    } catch (PDOException $e) {
        echo $e;
    }
    ?>
</body>

</html>