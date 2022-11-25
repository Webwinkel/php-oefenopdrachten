<!DOCTYPE html>
<html lang="nl">
<meta charset="UTF-8">
<?php
if (!empty($_GET)) {
    $naamnieuw = $_GET["naam"];
    if (file_exists("naam.txt")) {
        $fp = fopen("naam.txt", "r");
        $naam = fgets($fp);
        $fclose($fp);
        echo "Jouw naam is $naamnieuw";
    }
}
?>

</html>