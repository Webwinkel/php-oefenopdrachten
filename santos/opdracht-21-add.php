<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
</head>

<body>
    <?php
    $num1 = $_GET["number1"];
    $num2 = $_GET["number2"];

    function add(int $num1, int $num2)
    {
        $result = $num1 + $num2;
        echo $result;
    };

    add($num1, $num2);

    ?>
</body>

</html>