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
// exo 01
    function somme ($argu1,$argu2){
        $somme=$argu1+$argu2;
        return $somme;
    }
    echo somme(5,2);


    // exo 02
    function soustraction($argu1,$argu2){
        $somme=$argu1-$argu2;
        return $somme;
    }
    echo soustraction(15,2);

    // exo 03
    function multiplication($argu1,$argu2){
        $somme=$argu1*$argu2;
        return $somme;
    }
    echo multiplication(15,8);

//    exo 04
   function heuresMinutesSecondes($temps){

       $seconde= $temps%60;//Calcul les secondes restantes
       $minutes=$temps/60;//
       $minutesaafficher=$minutes%60; //
       $heures=$minutes/60;
       $heureaafficher=$heures-(($seconde/60/60)+$minutesaafficher/60);
       // 4318.2922222222 -> 4318
       $phrase="Il y a ".$heureaafficher."heures et ".$minutesaafficher."minutes, et ".$seconde."seconde";
        return $phrase;

    //exo4
   }
   echo heuresMinutesSecondes(15545852);/// arrondis plus facilement
   echo "<br>";
   function heure($heuro){
    $heures=floor($heuro/3600);//floor= plancher (arrondis en dessous) ceil = plafond(arrondis au dessus) 
    $minutes=floor($heuro/60)%60;
    $secondes=$heuro%60;
    return " $heures H : $minutes MN : $secondes SEC OKAY";
   }
   echo heure(36585);

   //exo4
   function heuresMinutesSecondes ($sec){//version cheaté
       $date=date("H : i : s",$sec);
       return $date;
   }
   echo $sec (1525)
?>
    
</body>
</html>