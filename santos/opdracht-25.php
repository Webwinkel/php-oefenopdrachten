<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Bezoekersteller</title>
    <?php
    if (file_exists("teller.txt")) {
        $fp = fopen("teller.txt", "r+");
        $teller = fgets($fp);
        $teller++;
        rewind($fp);
        fputs($fp, $teller);
        fclose($fp);
    } else {
        $fp = fopen("teller.txt", "w");
        $teller = "1";
        fputs($fp, $teller);
        fclose($fp);
    }
    ?>
</head>

<body>
    U bent de <?php echo $teller ?>e bezoeker van deze pagina
</body>

</html>