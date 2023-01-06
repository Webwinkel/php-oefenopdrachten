<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 38</title>
</head>

<body>
    <?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'usbw');

        $sql = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP)
             VALUES ('S20_8392', 'Samsung Galaxy S20+', 'Classic Cars', '1:10', 'Samsung', 'A brand new Samsung phone!', 728, 983.90, 289.38)";

        $result = $db->exec($sql);
        echo "Rij is succesvol toegevoegd";
    } catch (PDOException $e) {
        echo $sql . "<br> <hr>" . $e->getMessage();
    }


    //

    $db = NULL;
    ?>
</body>

</html>