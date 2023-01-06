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

        $sql = 'SELECT productName, buyPrice 
            FROM products';

        $result = $db->query($sql);

        foreach ($result as $row) {
            echo $row['productName'] . "///////////" . $row['buyPrice'] . "<br>";
        }
    } catch (PDOException $e) {

        echo $sql . "<br> <hr>" . $e->getMessage();
    }

    $db = NULL;
    ?>
</body>

</html>