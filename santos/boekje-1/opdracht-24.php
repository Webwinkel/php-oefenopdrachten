<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 24</title>
</head>

<body>
    <h1>Pizza bestellen!</h1>
    <form name="form" method="post" action="./opdracht-24-bestelling.php">
        <label>Kies je topping:</label><br />
        <input type="radio" name="pizzakeuze" value="pepperoni">
        <label for="pepperoni">Pepperoni</label><br />
        <input type="radio" name="pizzakeuze" value="ananas">
        <label for="ananas">Ananas</label><br />
        <input type="radio" name="pizzakeuze" value="ansjovis">
        <label for="ansjovis">Ansjovis</label><br />
        <input type="radio" name="pizzakeuze" value="broccoli">
        <label for="broccoli">Broccoli</label><br /><br />
        <input type="submit" value="Kiezen">
    </form>
</body>

</html>