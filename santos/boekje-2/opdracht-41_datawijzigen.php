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

        $sql = "SELECT * FROM products WHERE productCode = ? AND productVendor LIKE '%Apple%'";
        $stmt = $db->prepare($sql);
        $stmt->execute([$_POST['verstopt']]);

        $result = $stmt->fetchAll();

        foreach ($result as $row) {
            $productCode = $row["productCode"];
            $productName = $row["productName"];
            $productLine = $row["productLine"];
            $productScale = $row["productScale"];
            $productVendor = $row["productVendor"];
            $productDescription = $row["productDescription"];
            $quantityInStock = $row["quantityInStock"];
            $buyPrice = $row["buyPrice"];
            $MSRP = $row["MSRP"];
        }

        echo gettype($productCode);

        $db = NULL;

        echo "<form action='opdracht-41_datadefwijzigen.php' method='post'>
            <label for='$productCode'>productCode</label><input readonly name='productCode' type='text' value='$productCode'><br>
            <label for='$productName'>productName</label><input name='productName' type='text' value='$productName'><br>
            <label for='$productLine'>productLine</label><input name='productLine' type='text' value='$productLine'><br>
            <label for='$productScale'>productScale</label><input name='productScale' type='text' value='$productScale'><br>
            <label for='$productVendor'>productVendor</label><input name='productVendor' type='text' value='$productVendor'><br>
            <label for='$productDescription'>productDescription</label><input name='productDescription' type='text' value='$productDescription'><br>
            <label for='$quantityInStock'>quantityInStock</label><input name='quantityInStock' type='text' value='$quantityInStock'><br>
            <label for='$buyPrice'>buyPrice</label><input name='buyPrice' type='text' value='$buyPrice'><br>
            <label for='$MSRP'>MSRP</label><input name='MSRP' type='text' value='$MSRP'><br>
            <input value='submit' name='submit' type='submit'>
        </form>";
    } catch (PDOException $e) {
        echo $e . "<hr>" . $sql;
    }

    ?>
</body>

</html>