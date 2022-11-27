<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In het gastenboek schrijven</title>
</head>

<body>
    <form action="opdracht-32_opslaan.php" method="POST">
        <p>De gegevens die u hier invult zullen voor iedereen zichtbaar zijn.</p>
        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" value="" tabindex="1" required> <br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="" tabindex="2" required> <br>
        <label for="woonplaats">Woonplaats (optioneel):</label>
        <input type="text" name="woonplaats" id="woonplaats" value="" tabindex="3"> <br><br>
        <label for="bericht">Uw bericht:</label> <br>
        <textarea name="bericht" id="bericht" cols="30" rows="10" tabindex="4"></textarea>
        <br><br>
        <input type="submit" value="Versturen" name="submit">
    </form>
</body>

</html>