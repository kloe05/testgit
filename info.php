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
   
?>
    <form method="post">;
    <input type="submit" name="boutton" value="Se deconnecter"> ;

 <?php

if(!isset($_SESSION['mdp'])) {

   echo 'Désolé, vous devez être identifié ';
   header('Location: index.php');
   exit();
}    
    if( isset( $_POST["boutton"])){
        header('Location: index.php');
        session_destroy();
        exit();
}
?>
</body>
</html>