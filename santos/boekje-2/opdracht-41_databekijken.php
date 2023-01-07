<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data bekijken</title>
    <style>
        td {
            border: 1px black solid;
        }
    </style>
</head>

<body>
    <?php
    try {
        // Maak verbinding met de database
        $db = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'usbw');

        // Vraag data op
        $sql = "SELECT * FROM products WHERE productVendor LIKE '%Samsung%'";
        $result = $db->query($sql);

        // Zet data om naar tabel
        echo "<table>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row["productCode"] . "<td/>";
            echo "<td>" . $row["productName"] . "<td/>";
            echo "<td>" . $row["productLine"] . "<td/>";
            echo "<td>" . $row["productScale"] . "<td/>";
            echo "<td>" . $row["productVendor"] . "<td/>";
            echo "<td>" . $row["productDescription"] . "<td/>";
            echo "<td>" . $row["quantityInStock"] . "<td/>";
            echo "<td>" . $row["buyPrice"] . "<td/>";
            echo "<td>" . $row["MSRP"] . "<td/>";
            echo "<td><form action='opdracht-41_datawijzigen.php' method='post'>
                <input type='hidden' name='verstopt' value='" . $row["productCode"] . "'>
                <input type='submit' name='wijzig' value='wijzig'>
            </form></td>";
            echo "<td><form action='opdracht-41_dataverwijderen.php' method='post'>
                <input type='hidden' name='verstopt' value='" . $row["productCode"] . "'>
                <input type='submit' name='verwijder' value='verwijder'>
            </form></td>";
            echo "</tr>";
        }
        echo "</table>";

        $db = NULL;
    } catch (PDOException $e) {
        echo $e;
        echo "<hr>";
        echo $sql;
    }
    ?>
</body>

</html>