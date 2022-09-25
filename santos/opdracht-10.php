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
        echo "<p>Tot 3 tellen</p>";
        echo "<p>";
        $teller = 1;
        while ($teller <= 3) {
            echo "$teller <br>";
            $teller++;
        }
        echo "</p>";
    ?>
</body>
</html>