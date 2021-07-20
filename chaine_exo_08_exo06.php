<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form enctype="multipart/form-data" method="post">
  <p>Veuillez saisir le pseudo du joueur numéro 1 :<input type="text" name="joueur1" required /></p>
  <p>Veuillez saisir le pseudo du joueur numéro 2: <input type="text" name="joueur2" required/></p>
  <p>Veuillez saisir l'identifiant du match(de 1 à 64): <input type="text" name="idMatch" required/></p>
  <label>
  Quel joueur est le gagnant?<br/>
  <select name="gagnant">
  <option value="joueur 1">Joueur 1</option>
  <option value = "joueur2">Joueur2</option>
  </select>
  </label><br /><br />
  <input type="hidden" name=MAX_FILE_SIZE value=50100000>
  Envoyer ce fichier: <input name="userfile" type="file">

  <p><input type="submit" value="OK"></p>
  
 </form>
 <?php
 $upploaddir= 'upload/';
 $uploadfile=$upploaddir.basename($_FILES['userfile']['name']);
 if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)){
     echo "<script>";
     echo "alert ('oké')";
     echo"</script>";
 }else{
    
    echo "<script>";
    echo "alert ('pas oké')";
    echo"</script>";
 
   
}
 ?>
    
</body>
</html>