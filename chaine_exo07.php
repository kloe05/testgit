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



//--------------------------------------EXO01-----------------------------



// $tab= array("Roger"=>12,"Monica"=>16,"Najat"=>15,"Emmanuel"=>8,"Brigitte"=>11);
// print_r ($tab);
// echo"<br>";

// $tab['Anton']=10;
// $tab['Sarah']=17.5;
// echo"<br>";
// print_r ($tab);
// echo"<br>";
// unset($tab["Monica"]);
// echo"<br>";
// print_r($tab);
// echo"<br>";
// $max=null;
//     foreach ($tab as $key=> $value) {
//         if($max==null){
//             $max= $value;
//         }elseif($max<$value){
//             $max= $value;
//         }
//     }

// $min=null;
//     foreach ($tab as $key=> $value) {
//         if($min==null){
//             $min=$value;
//         }elseif ($min>$value) {
//             $min = $value;
//         }
//     }
// echo "La note max est: $max" ;
// echo"<br>";
// echo "la note min est : $min" ;
// echo"<br>";
// echo"<br>";
// ksort($tab,SORT_STRING);
// echo"<br>";
// echo"ordre alphabetique";
// echo"<br>";
// print_r($tab);
// echo"<br>";
// rsort($tab);
// echo"<br>";
// echo"ordre décroissant: ";
// print_r($tab);
// echo"<br>";
// $moyenne = array_sum($tab)/count($tab);
// echo"<br>";
// echo"moyenne: ";
// print_r($moyenne);
// echo"<br>";
// $moyenneE=array_sum($tab)/count($tab);
// $total=0;

// foreach ($tab as $key=>$value) {
//     if($value>$moyenne){
//         $total+=1;
//     }
//     }

// echo"<br>";
// echo "Voici les eleves au dessus de la moyenne: $total";
// echo"<br>";


?>
//-----------------------------------------EXO02------------------------

 <?php


// function verifTel($telephone){
//     $regex= "#^[0][6-7]([-. ]?[0-9]{2}){4}$#" ;
//     if(preg_match($regex,$telephone)){
//         return true;
//     }else {
//         return false;
//         echo "telephone non valide";
        
//     }

// }

// function codePostal($verif){
//     $longeur=strlen($verif);
//     if($longeur!==5){
//         return false;
//     }else{
//         return true;
//         echo"code postal non valide";

//     }
// }

// function verifMail($verif){
//  $masque="#^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$#";
//  if(preg_match($masque, $verif))  {
//     echo "L'adresse email mail est valide.";
//   } else {
//       echo "L'adresse email mail est invalide.";
// }
// }
 ?>



 <!-- <form action="" method="post">
  <p>Votre nom complet : <input type="text" name="nom" placeholder="Ex:DEREY Odile"required /></p>
  <p>Votre adresse mail : <input type="email" name="mail" placeholder="Ex:monadresse@mail.com" required/></p>
  <p>Votre numéro de tél : <input type="tel"  name="tel"placeholder="Ex:06 02 05 03 02 "pattern='[0][6-7]([-. ]+[0-9]{2}){4}' required /></p>
  <p>Votre adresse postale : <input type="text" name="adresse"placeholder="Ex:Fion" required/></p>
  <p>Votre code postal : <input type="number_format" name="codep" placeholder="Ex:83700" maxlength="5" pattern="[0-9]{5}" required /></p>
  <p>Votre ville : <input type="text" name="ville" placeholder="Ex:Trouville"required/></p>
  <p><input type="submit" value="OK"></p>
 </form> -->

 <?php
// $nom=null;
// if (isset($_POST["nom"])){
//     $nom=$_POST["nom"];
// }

// echo verifMail($_POST["mail"]);
// echo codePostal($_POST["codep"]);
// echo verifTel($_POST["tel"]);




?>
            

            <!-- <table>
                <thead>
                    <th>Voici vos informations</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Votre nom: $_POST["nom"]</td>
                    </tr>
                </tbody>
                </table> -->

        

<!-------------------------------------------EXO03---------------------------->



<?php
$fichier = "test.txt";


$fp = fopen($fichier, 'r');
$contenu = fread($fp,filesize($fichier));
fclose($fp);


$compteur = intval($contenu) + 1;
print "<p>$compteur visites</p>";


$fp = fopen($fichier, 'w');
fwrite($fp, $compteur);
fclose($fp);
?>

</body>
</html>


