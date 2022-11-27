<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 23</title>
</head>

<body>
    <?php
    $result = 0;
    for ($i = 0; $i <= 10; $i++) {
        $result += $i;
        echo "$result $i <br/>";
    };
    echo "<br/>$result";
    ?>
</body>

</html>