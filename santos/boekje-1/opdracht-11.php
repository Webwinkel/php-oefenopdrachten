<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <?php
    echo "<p>Dit is de do-while teller <br></p>";
    $teller = 5;
    do {
        echo "De teller is $teller <br>";
        $teller--;
    } while ($teller >= 6);
    echo "<p>Deze telt wel omdat de while pas na <br></p>";
    echo "<p>Het aftellen van de teller komt</p>";
    echo "<hr><br><p>Dit is de while</p>";
    while ($teller >= 6) {
        echo "<p>De teller is $teller</p>";
        $teller--;
    }
    echo "<p>Nu wordt de code niet uitgevoerd omdat er wordt gecheckt of de waarde true is <b>voordat</b> de code wordt uitgevoerd</p>";
    echo "<hr><p>Nu de for() loop:</p>";
    for ($forTeller = 5; $forTeller >= 1; $forTeller--) {
        echo "<p>De teller is $forTeller</p>";
    };
    ?>
</body>

</html>