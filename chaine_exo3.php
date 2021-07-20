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
exo1
function estilmajeur($age){
    if($age>18){
        return true;
    }else {
        return false;
    }
    
}
var_dump (estilmajeur(15));


exo2

function plusGrand($max,$min){
    
    if($max>=$min){
        $chiffremax=$max;
        return $chiffremax;
    }else{
        return $min;
    }
};
echo plusGrand(50,478547);





exo3
function plusPetit($max,$min){
    
    if($max<=$min){
        $chiffremin=$max;
        return $chiffremin;
    }else{
        return $min;
    }
};
echo plusPetit(50,478547);






exo4
function lePlusPetit($max,$min,$mid){
    if($max<=$min && $max<=$mid){
        $chiffremin=$max;
        return $chiffremin;
    }
    if($min<=$mid &&$min<=$max){
        $chiffremin=$min;
        return $chiffremin;
    }
    elseif($mid<=$max&&$mid<=$min){
        $chiffremin=$mid;
        return $chiffremin;
    }
    
    
};
echo lePlusPetit(50,478547,13);

    
   ?> 
</body>
</html>