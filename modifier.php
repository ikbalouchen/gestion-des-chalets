<?php

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$nom_base_de_donnees = "chalets";

$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $nom_base_de_donnees);


if (!$connexion) {
    die("La connexion a échoué : " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $numChalet = $_POST["numChalet"];
    $numCategorie = $_POST["numCategorie"];

   
    $requete = "UPDATE chalet SET numcategorie = '$numCategorie' WHERE numchalet = '$numChalet'";


    if (mysqli_query($connexion, $requete)) {
        echo "Chalet mis à jour avec succès !";
    } else {
        echo "Erreur lors de la mise à jour du chalet : " . mysqli_error($connexion);
    }
}


mysqli_close($connexion);
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un chalet</title>
</head>
<body>

<h2>Modifier un chalet</h2>

<form action="modifier.php" method="post">
    <label for="numChalet">Numéro du chalet :</label><br>
    <input type="text" id="numChalet" name="numChalet"><br><br>

    <label for="numCategorie">Numéro de catégorie :</label><br>
    <input type="text" id="numCategorie" name="numCategorie"><br><br>

    <input type="submit" value="Modifier">
</form>

</body>
</html>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

h2 {
    color: #333;
}

form {
    max-width: 400px;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>