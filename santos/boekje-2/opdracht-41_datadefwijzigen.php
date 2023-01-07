<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data definitief wijzigen</title>
</head>

<body>
    <?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'usbw');

        $sql = "UPDATE products 
            SET productCode = ?,
                productName = ?,
                productLine = ?,
                productScale = ?,
                productVendor = ?,
                productDescription = ?,
                quantityInStock = ?,
                buyPrice = ?,
                MSRP = ?
            WHERE productCode = ?";

        $stmt = $db->prepare($sql);

        $stmt->execute([$_POST["productCode"], $_POST["productName"], $_POST["productLine"], $_POST["productScale"], $_POST["productVendor"], $_POST["productDescription"], $_POST["quantityInStock"], $_POST["buyPrice"], $_POST["MSRP"], $_POST["productCode"]]);

        echo "<a href='./opdracht-41_databekijken.php'>Bekijk de geüpdatete data</a>";

        // $sql = "SELECT * FROM products WHERE productCode = " . implode($_POST['productCode']);

        // $result = $db->query($sql);

        // foreach ($result as $row) {
        //     echo $_POST["productCode"] . "<br>";
        //     echo $_POST["productName"] . "<br>";
        //     echo $_POST["productLine"] . "<br>";
        //     echo $_POST["productScale"] . "<br>";
        //     echo $_POST["productVendor"] . "<br>";
        //     echo  $_POST["productDescription"] . "<br>";
        //     echo  $_POST["quantityInStock"] . "<br>";
        //     echo  $_POST["buyPrice"] . "<br>";
        //     echo  $_POST["MSRP"] . "<br>";
        // }

        $db = NULL;
    } catch (PDOException $e) {
        echo $e . "<hr>" . $sql;
    }
    ?>
</body>

</html>