<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start ();
$motDePasse=null;


if($_POST["nom"]=="admin"&& $_POST["mdp"]== "admin"){
    $nom=null;
    $motDePasse=null;
    $nom=$_POST["nom"];
    setcookie("nomValid",$nom);
    $motDePasse=$_POST["mdp"];
    setcookie("passValid",$motDePasse);
    $_SESSION["mdp"]=$motDePasse;
    header('Location: info.php');
    exit();

}else {
    echo"Mauvais identifiant";
    

}
?>
<form method="post">
  <p>Veuillez saisir votre nom : <input type="text" name="nom" require /></p>
  <p>Veuillez saisir votre MDP : <input type="password" name="mdp"require /></p>
  <p><input type="submit" value="OK"></p>
 
 </form>

    
</body>
</html>