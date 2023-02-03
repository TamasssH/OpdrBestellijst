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

        <div class="bestelLijst1">
            <div class="pizzaInfo">
                <h2>Tomato, mozzarella</h2>
                <div>
                    <input type="number" class="bestelButton1">
                    <input type="submit" name="voegtoe" value="voeg pizza toe aan bestelling">
                </div>
            </div>
            <img src="source/margherita.jpg" alt="pizza margherita.">
        </div>
            

        <div class="bestelLijst">
            <div ><h2>Pizza Funghi</h2></div>
            <div ><h2>12,50 euro</h2></div>  
        </div>

        <div class="bestelLijst1">
            <div class="pizzaInfo">
                <h2>Tomato, mozzarella, champignon</h2>
                <div>
                    <input type="number" class="bestelButton1">
                    <input type="submit" name="voegtoe" value="voeg pizza toe aan bestelling">
                </div>
            </div>
            <img src="source/funghi.png" alt="pizza funghi">
        </div>
       
        

        <div class="bestelLijst">
            <div><h2>Pizza Marina</h2></div>
            <div><h2>13,95 euro</h2></div>
        </div>

        <div class="bestelLijst1">
            <div class="pizzaInfo">
                <h2>Tomato, garlic</h2>
                <div>
                    <input type="number" class="bestelButton1">
                    <input type="submit" name="voegtoe" value="voeg pizza toe aan bestelling">
                </div>
            </div>
            <img src="source/marina.jpg" alt="pizza marina">
        </div>
        

        <div class="bestelLijst">
            <div><h2>Pizza Hawaii</h2></div>
            <div><h2>11,50 euro</h2></div> 
        </div>

        <div class="bestelLijst1">
            <div class="pizzaInfo">
                <h2>Tomato, pineapple, cheese</h2>
                <div>
                    <input type="number" class="bestelButton1">
                    <input type="submit" name="voegtoe" value="voeg pizza toe aan bestelling">
                </div>
            </div>
            <img src="source/hawaii.jpg" alt="pizza hawaii">
    </div>

        <div class="bestelLijst">
            <div><h2>Pizza Quattro Formaggi</h2></div>
            <div><h2>14,50 euro</h2></div>
        </div>      
        <div class="pizzaInfo"><h2>tomato, mozzarella, gorgonzola, pecorino, taleggio</h2></div>

        <div>
            <input type="number" class="bestelButton1">
            <input type="submit" name="voegtoe" value="voeg pizza toe aan bestelling">
        </div>
    </div>

    <div class="bestelForm">
        <h2 class="bestelInfo">bestelling plaatsen.</h2>

        <form action="" method="post" class="form1">

            <div class="form">
                <div><label for="fname">Voornaam: </label></div>
                <div><input type="text" id="fname" name="fname" placeholder="voer uw naam in." required><br /></div>  
            </div>
            
                

            <div class="form">
                <div><label for="lname">Achternaam: </label></div>
                <div><input type="text" id="lname" name="lname" placeholder="Voer uw achternaam in." required><br /></div>
            </div>
            
            <div class="form">
                <div><label for="adres" >Adres: </label></div>
                <div><input type="text" id="adres" name="adres" placeholder="Voer uw adres in." required><br /></div> 
            </div>
            
            <div class="form">
                <div><label for="postcode">Postcode: </label></div>
                <div><input type="text" id="postcode" name="postcode" placeholder="Voer uw postcode in." required><br /></div>   
            </div>
            
            <div class="form">
                <div><label for="plaats">Plaats: </label></div>
                <div><input type="text" id="plaats" name="plaats" placeholder="Voer uw plaats naam in." required><br /></div>  
            </div>
            
            <div class="form">
                <div><label for="besteldatum">Besteldatum: </label></div>
                <div><input type="text" id="besteldatum" name="besteldatum" placeholder="Voer uw besteldatum in." required><br /></div>    
            </div>
            
            <div class="form">
                <label for="bezorgKeuze">Ophalen of laten bezorgen.</label>
                    <select name="bezorg" class="form1">
                        <option value="bezorgen">Laten bezorgen</option>
                        <option value="afhalen">Afhalen</option>
                    </select>
                <input type="submit" value="Bestelling afronden.">    
            </div>

        </form>
        
    </div>
        
    <?php

        if(isset($_POST["submit"])){
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $adres =  $_POST["adres"];
            $postcode =  $_POST["postcode"];
            $plaats =  $_POST["plaats"];
            $besteldatum =  $_POST["besteldatum"];
            $bezorg =  $_POST["bezorg"];

            
        }

    ?>

</body>

</html>