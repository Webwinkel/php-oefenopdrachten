<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leveranciers toevoegen</title>
    <style>
        label {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <form action="./opdracht-41_dataopslaan.php" method="post">
        <label for="prodCode">Productcode (VC(15))</label><input required type="text" name="prodCode"><br>
        <label for="prodNaam">Naam (VC(70))</label><input required type="text" name="prodNaam"><br>
        <label for="prodLine">Lijn (VC (50))</label><input required type="text" name="prodLine"><br>
        <label for="prodScale">Schaal (VC(10))</label><input required type="text" name="prodScale"><br>
        <label for="prodVendor">Verkoper (VC(50)) </label><input required type="text" name="prodVendor"><br>
        <label for="prodDesc">Beschrijving (text) </label><input required type="text" name="prodDesc"><br>
        <label for="prodStock">Hoeveelheid (smallint(6)) </label><input required type="number" name="prodStock"><br>
        <label for="prodPrice">Prijs (decimal(10,2)) </label><input required type="number" name="prodPrice"><br>
        <label for="prodMsrp">MSRP (decimal(10,2)) </label><input required type="number" name="prodMsrp"><br>
        <input type="submit" value="Opslaan">
    </form>
</body>

</html>