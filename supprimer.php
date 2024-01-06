<?php

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "chalets";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);


if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numChalet = $_POST["numchalet"];

    $requete = "DELETE FROM chalet WHERE numchalet = '$numChalet'";

    if ($connexion->query($requete) === TRUE) {
        echo "Le chalet a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du chalet : " . $connexion->error;
    }
}


$connexion->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Supprimer un chalet</title>
</head>
<body>
    <form action="supprimer.php" method="post">
        <label>Numéro du chalet à supprimer :</label>
        <input type="number" name="numchalet" required><br>
        <input type="submit" value="Supprimer le chalet">
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

input[type="number"],
input[type="submit"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; /* Garantit que la largeur inclut le padding */
}

input[type="submit"] {
    background-color: #ff6347;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #ff483d;
}
</style>

