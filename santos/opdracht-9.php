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
        date_default_timezone_set('Europe/Amsterdam') ;
        $dag = date('d');
        $maand = date('m') ;
        $jaar = date('Y');
        echo "<p>";
        echo "$dag ";
        switch ($maand) {
            case 1:
                echo "januari";
                break;
            case 2:
                echo "februari";
                break;
            case 3:
                echo "maart";
                break;
            case 4:
                echo "april";
                break;
            case 5:
                echo "mei";
                break;
            case 6:
                echo "juni";
                break;
            case 7:
                echo "juli";
                break;
            case 8:
                echo "augustus";
                break;
            case 9:
                echo "september";
                break;
            case 10:
                echo "oktober";
                break;
            case 11:
                echo "november";
                break;
            case 12:
                echo "december";
                break;
        }
        echo " $jaar";
        echo "</p>";
    ?>
</body>
</html>