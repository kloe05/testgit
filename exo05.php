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
$affichage= fopen('test.txt','rb');
echo '<b>TOUT LE TXT:</b>'. fread($affichage,filesize('test.txt'));
echo "<br>";
echo "<br>";
$affichage= fopen('test.txt','rb');
echo "<br>";
echo'<b> premier appel: </b>'.fgets($affichage);
echo "<br>";
echo '<b>second appel: </b>'.fgets($affichage).'<br>';
echo '<b>troisieme appel: </b>'.fgets($affichage).'<br>';
$affichage= fopen('test.txt','rb');
echo'<b>premier caractère:</b>'.fgetc($affichage).'<br>';
echo'<b>second caractère:</b>'.fgetc($affichage).'<br>';



?>
    
</body>
</html>