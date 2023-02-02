<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Pizzer di sog</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href="style.css", rel="stylesheet">
</head>
<body>

    <div class="titlebar">
        <h1>Pizzeria pizza di sog.</h1>
    </div>

    <div class="fonts">
        <div class="bestelLijst">
            <div><h2>Pizza Margherita</h2></div>
            <div><h2>12,50 euro</h2></div>
        </div>
        <div class="pizzaInfo"><h2>Tomato, mozzarella</h2></div>

        <div class="buttons">
            <input type="number" class="bestelButton1">
            <input type="submit" name="voegtoe" value="voeg pizza toe aan bestelling">
        </div>
        

        <div class="bestelLijst">
            <div ><h2>Pizza Funghi</h2></div>
            <div ><h2>12,50 euro</h2></div>  
        </div>
        <div class="pizzaInfo"><h2>Tomato, mozzarella, champignon</h2></div>

        <div class="buttons">
            <input type="number" class="bestelButton1">
            <input type="submit" name="voegtoe" value="voeg pizza toe aan bestelling">
        </div>

        <div class="bestelLijst">
            <div><h2>Pizza Marina</h2></div>
            <div><h2>13,95 euro</h2></div>
        </div>
        <div class="pizzaInfo"><h2>Tomato, garlic</h2></div>

        <div class="buttons">
            <input type="number" class="bestelButton1">
            <input type="submit" name="voegtoe" value="voeg pizza toe aan bestelling">
        </div>

        <div class="bestelLijst">
            <div><h2>Pizza Hawaii</h2></div>
            <div><h2>11,50 euro</h2></div> 
        </div>
        <div class="pizzaInfo"><h2>Tomato, pineapple, cheese</h2></div>

        <div class="buttons">
            <input type="number" class="bestelButton1">
            <input type="submit" name="voegtoe" value="voeg pizza toe aan bestelling">
        </div>

        <div class="bestelLijst">
            <div><h2>Pizza Quattro Formaggi</h2></div>
            <div><h2>14,50 euro</h2></div>
        </div>      
        <div class="pizzaInfo"><h2>tomato, mozzarella, gorgonzola, pecorino, taleggio</h2></div>

        <div class="buttons">
            <input type="number" class="bestelButton1">
            <input type="submit" name="voegtoe" value="voeg pizza toe aan bestelling">
        </div>
    </div>

    <div>
        <h2 class="bestelInfo">bestelling plaatsen.</h2>

        <form action="" method="post" class="form1">
            <div class="form">
                <label for="fname">Voornaam: </label>
                <input type="text" id="fname" name="fname" placeholder="voer uw naam in."><br />
            </div>
            
            <div class="form">
                <label for="lname">Achternaam: </label>
                <input type="text" id="lname" name="lname" placeholder="Voer uw achternaam in."><br /> 
            </div>
            
            <div class="form">
                <label for="adres" >Adres: </label>
                <input type="text" id="adres" name="adres" placeholder="Voer uw adres in."><br />    
            </div>
            
            <div class="form">
                <label for="postcode">Postcode: </label>
                <input type="text" id="postcode" name="postcode" placeholder="Voer uw postcode in."><br />    
            </div>
            
            <div class="form">
                <label for="plaats">Plaats: </label>
                <input type="text" id="plaats" name="plaats" placeholder="Voer uw plaats naam in."><br />    
            </div>
            
            <div class="form">
                <label for="besteldatum">Besteldatum: </label>
                <input type="text" id="besteldatum" name="besteldatum" placeholder="Voer uw besteldatum in."><br />    
            </div>
            
            <div class="form">
                <label for="bezorgKeuze"></label>
                    <select>
                        <option value="bezorgen">Laten bezorgen</option>
                        <option value="afhalen">Afhalen</option>
                        <br />
                    </select>
                <input type="submit">    
            </div>

        </form>
        
    </div>

    <?php
    
    ?>

</body>

</html>