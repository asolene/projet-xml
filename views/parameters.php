<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramétre</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="darkMod">DarkMod :</label>
            <select name="darkMod" id="darkMod">
                <option value="0">LightMod</option>
                <option value="1">DarkMod</option>
            </select>
        </div>
        <div>
            <label for="actu"> Nombre d'actualités choisi :</label>
            <select name="actu" id="actu">
                <option value="6">6</option>
                <option value="9">9</option>
                <option value="12">12</option>
            </select>
        </div>
        <div>
            <label for="checkbox">Choisissez 3 sujets :</label><br>
            <ul>
                <li><input type="checkbox" name="category[]" value="0"><a href="https://rmcsport.bfmtv.com/rss/fil-sport/">Sport</a></li>
                <li><input type="checkbox" name="category[]" value="1"><a href="https://rmcsport.bfmtv.com/rss/football/">Football</a></li>
                <li><input type="checkbox" name="category[]" value="2"><a href="https://rmcsport.bfmtv.com/rss/basket/">Basket</a></li>
                <li><input type="checkbox" name="category[]" value="3"><a href="https://rmcsport.bfmtv.com/rss/tennis/">Tennis</a></li>
                <li><input type="checkbox" name="category[]" value="4"><a href="https://rmcsport.bfmtv.com/rss/rugby/">Rugby</a></li>
            </ul>          
            
            
        </div>
        <div>
            <input type="submit" value="Valider!">
        </div>
    </form>
    
</body>
</html>