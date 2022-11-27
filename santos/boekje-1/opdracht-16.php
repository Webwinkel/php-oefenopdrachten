<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafels van 7,8,9</title>
</head>

<body>
    <form name="temp" action="opdracht-16.php" method="get" id="temp">
        <input type="number" name="number" placeholder="Voer een temperatuur in">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    $temp = $_GET['number'];
    if ($temp <= 28) {
        echo "kom scrabbelen";
    } else if ($temp >= 28) {
        echo "kom strand";
    } else {
        echo "voer een temperatuur in";
    }
    ?>
</body>

</html>