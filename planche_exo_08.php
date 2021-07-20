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
if(isset($_POST["couleur1"])){
$couleurFond=$_POST["couleur1"];
setcookie("couleurF",$couleurFond,time()+2628000);
}
if(isset($_POST["couleur2"])){
$couleurTexte=$_POST["couleur2"];
setcookie("couleurT",$couleurTexte, time()+2628000);
}
?>
<form method="post">
  <p>Votre couleur de fond : <input type="text" name="couleur1" placeholder="Ex:blue" /></p>
  <p>Votre couleur de texte : <input type="text" name="couleur2" placeholder="Ex:red"/></p>
  <p><input type="submit" value="OK"></p>
  <p><input type="submit" name="boutton" value="effacer">  </p>
 </form>
 <p class="couleur">test</p>
<style>
.couleur{
  color:<?php
  echo $_COOKIE["couleurT"];?>;
  background-color:<?php
  echo $_COOKIE["couleurF"];
  ?>;
  font-size:2em;
}
</style>



<?php
if( isset ($_POST["boutton"])){
  setcookie("couleurF","",time()-3600);
  setcookie("couleurT","",time()-3600);
}
?>
</body>
</html>
