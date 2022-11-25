<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Je bestelling</title>
</head>

<body>
    <?php
    $keuze = (string) $_POST["pizzakeuze"];
    if ($keuze == "") {
        $keuze = "niks";
    }
    echo "je hebt $keuze gekozen";
    ?>
</body>

</html>