<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data opslaan</title>
</head>

<body>
    <?php
    try {
        // Verbinding maken
        $db = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'usbw');

        // De SQL opdracht 
        $sql = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP)
            VALUES (?,?,?,?,?,?,?,?,?)"; // Maak een SQL frame statement met placeholders
        $stmt = $db->prepare($sql); // Maak de SQL statement klaar voor gebruik
        $resultaat = $stmt->execute([$_POST["prodCode"], $_POST["prodNaam"], $_POST["prodLine"], $_POST["prodScale"], $_POST["prodVendor"], $_POST["prodDesc"], $_POST["prodStock"], $_POST["prodPrice"], $_POST["prodMsrp"]]);
        // Voer de SQL statement uit met de data uit de HTML form

        // Resultaat
        $code = '$_POST["prodCode"]';
        $sql = 'SELECT * FROM products WHERE productCode LIKE "$code"'; // Maak een SQL Statement die alle toegevoegde data opvraagt
        $result = $db->query($sql); // Vraag data op uit de database met de SQL statement
        foreach ($result as $row) {
            echo "<p>";
            echo "code:" . $row["productCode"];
            echo "naam:" . $row["productName"];
            echo "line:" . $row["productLine"];
            echo "schaal:" . $row["productScale"];
            echo "verkoper:" . $row["productVendor"];
            echo "beschrijving:" . $row["productDescription"];
            echo "hoeveelheid:" . $row["quantityInStock"];
            echo "prijs:" . $row["buyPrice"];
            echo "MSRP:" . $row["MSRP"];
            echo "</p>";
        };

        echo "<a href='opdracht-41.php'>Terug<a/>";
        echo "<a href='opdracht-41_databekijken.php>Bekijk alle data</a>";

        // Sluit verbinding
        $db = NULL;
    } catch (PDOException $e) {
        echo $e;
        echo "<hr>";
        echo $sql;
    }
    ?>
</body>

</html>