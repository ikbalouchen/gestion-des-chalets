<?php
session_start();

if (isset($_POST['nom']) && isset($_POST['password'])) {
    $nom = trim($_POST['nom']);
    $password = $_POST['password'];
    if ($nom == 'administrateur'){
        if ($password == '1234') {
            $_SESSION['nom'] = $nom;
            header('location: Menu_Admin.php');
        } 
    }
    elseif($nom == 'client'){
       if ($password == '3456') {
             $_SESSION['nom'] = $nom;
             header('location: Menu_client.php');
    }
}
    else
        $error_password_nom = " le mot de passe  ou nom d'utilisateur incorrect.";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<style>
/* Style pour le conteneur du formulaire */
.container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

/* Style pour les labels */
.form-label {
    margin-bottom: 5px;
    display: block;
    font-weight: bold;
}

/* Style pour les champs de saisie */
.form-control {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box; /* Garantit que la largeur du champ reste fixe */
}

/* Style pour le bouton */
.btn {
    padding: 8px 16px;
    border: none;
    border-radius: 3px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}


.text-danger {
    color: red;
    font-size: 14px;
}
</style>

<body>
    <form method="POST" class="container mt-3">
        <h4>Connexion</h4>
        <div >
            <label class="form-label" for="login">Nom :</label>
            <input id="login" type="text" class="form-control" name="nom">
        </div>
        <div >
            <label class="form-label" for="mot-de-passe">Mot de passe:</label>
            <input name="password" id="mot-de-passe" type="password" class="form-control">
            
        </div>
        <small class="text-danger"><?php if (isset($error_password_nom)) echo $error_password_nom ?></small>
         
        <div >
            <button  type="submit" class="btn btn-primary">Accéder</button>
        </div>
    </form>
</body>
</html>