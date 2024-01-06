</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>


</head>
<body>
<div class="style">
    <div class="liste">
        <p>
            <h1>Menu Principale</h1>
            <a href="ajouter.php"><input  type="button" value="Ajouter un chalet "></a> 
            <a href="supprimer.php"><input  type="button" value="Supprimer un chalet "></a> 
            <a href="afficher.php"><input  type="button" value="liste des chalets"></a> 
            <a href="modifier.php"><input  type="button" value="modifier"></a> 
        </p>
    </div>
</div>  
</body>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.style {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.liste {
    text-align: center;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

a {
    text-decoration: none;
}

input[type="button"] {
    padding: 10px 20px;
    margin: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: #4caf50;
    color: white;
}

input[type="button"]:hover {
    background-color: #45a049;
}
</style>