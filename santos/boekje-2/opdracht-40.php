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
    try {

        $db = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'usbw');

        $sql = "UPDATE products 
        SET productDescription = 'Een super goeie Samsung telefoon'
        WHERE productDescription LIKE '%Samsung%'";

        $result = $db->exec($sql);

        echo "Geslaagd.";

        $db = NULL;
    } catch (PDOException $e) {
        echo $sql . "<br><hr>" . $e->getMessage();
    }
    ?>
</body>

</html>