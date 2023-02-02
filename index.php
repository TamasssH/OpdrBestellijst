<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Pizzer di sog</title>
</head>
<body>

    <div class="bestelLijst">

        <h2>Pizza Margherita <span>12,50 euro</span></h2>
        <h2>Pizza Funghi <span>12,50 euro</span></h2>
        <h2>Pizza Marina <span>13,95 euro</span></h2>
        <h2>Pizza Hawaii <span>11,50 euro</span></h2>
        <h2>Pizza Quattro Formaggi <span>14,50 euro</span></h2>

    </div>

    <div class="Form">

        <form action="" method="post">

            <label for="fname">Voornaam: </label>
            <input type="text" id="fname" name="fname" placeholder="voer uw naam in."><br />

            <label for="lname">Achternaam: </label>
            <input type="text" id="lname" name="lname" placeholder="Voer uw achternaam in."><br />

            <label for="adres" >Adres: </label>
            <input type="text" id="adres" name="adres" placeholder="Voer uw adres in."><br />

            <label for="postcode">Postcode: </label>
            <input type="text" id="postcode" name="postcode" placeholder="Voer uw postcode in."><br />

            <label for="plaats">Plaats: </label>
            <input type="text" id="plaats" name="plaats" placeholder="Voer uw plaats naam in."><br />

            <label for="besteldatum">Besteldatum: </label>
            <input type="text" id="besteldatum" name="besteldatum" placeholder="Voer uw besteldatum in."><br />

            <label for="bezorgKeuze"></label>
            <select>
                <option value="bezorgen">Laten bezorgen</option>
                <option value="afhalen">Afhalen</option>
                <br />
            </select>

            <input type="submit">
</form>
    </div>

    <?php
    
    ?>
</body>

</html>