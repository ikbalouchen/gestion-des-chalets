<?php
   session_start();
   @$numchalet=$_POST["numchalet"];
   @$numcategorie=$_POST["numcategorie"];
   @$ajouter=$_POST["ajouter"];
   $erreur="";
   if(isset($ajouter)){
      if(empty($numchalet)) $erreur="entrer le  numchalet";
      elseif(empty($numcategorie)) $erreur=" entrer le numcategorie ";
      else{
             include("config.php");
             $ins=$pdo->prepare("insert into chalet (numchalet,numcategorie)values(?,?)");
                if($ins->execute(array($numchalet,$numcategorie))){
                    header("location:afficher.php");
             }
                else{
                 echo '<h4> le numchalet deja existe</h4>';
             }

     };
   };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <style>
     body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.formulaire {
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

input[type="text"],
input[type="submit"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; /* Garantit que la largeur inclut le padding */
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.erreur {
    color: red;
    font-weight: bold;
    margin-bottom: 10px;
}

    </style>
</head>

<body>
    
        <div class="erreur"><?php echo $erreur ?></div>

        <form class="formulaire" name="for" method="post" action="">
            <label for="numchalet">numchalet</label>
            <input type="text" id="numchalet" name="numchalet" placeholder="numchalet"><br>
            <label for="numcategorie">numcategorie:</label>
            <input type="text" id="numcategorie" name="numcategorie" placeholder="numcategorie"><br>
            <input id="button" type="submit" name="ajouter" value="ajouter">
        

</body>

</html>




