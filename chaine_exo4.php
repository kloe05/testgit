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


//----------------EXO1-------------------
$tab1=array(12,25,-4,41,154,-24,0,7);
$tab2=array(-77,4,5,21,-87,0,-87);
$tab3=array();


function premierElementTableau($tab){
    if(empty($tab)){
        return null;
    }else{
    return $tab[0];
    
    }
    
};

echo premierElementTableau($tab1);
echo"<br>";
echo premierElementTableau($tab2);
echo "<br>";
var_dump ( premierElementTableau($tab3));




// -----------------EXO2----------------



function  dernierElementTableau ($tab){
    if(empty($tab)){
        return null;
    }else{
    return end($tab);
    }
    
}
echo dernierElementTableau($tab1);
echo"<br>";
echo dernierElementTableau($tab2);
echo "<br>";
var_dump (dernierElementTableau($tab3));

------------------EXO3----------


function plusGrand($tab){
    $max=null;
    if(empty($tab)){
        return null;
    }else{
        foreach($tab as $valeur){
            if($max==null){
                $max=$valeur;

            }else if($valeur>$max){
                $max=$valeur;
            }
        }
               return $max;
    }
}
echo plusGrand($tab1);
echo"<br>";
echo plusGrand($tab2);
echo"<br>"
var_dump (plusGrand($tab3));


//-----------------EXO04------------
function plusPetit($tab){
    $min=null;
    if(empty($tab)){
        return null;
    }else{
        foreach($tab as $valeur){
            if($min==null){
                $min=$valeur;

            }else if($valeur<$min){
                $min=$valeur;
            }
        }
               return $min;
}
echo plusPetit($tab1);
echo "<br>";
echo plusPetit($tab2);
echo "<br>";
var_dump( plusPetit($tab3)); 



------------EXO5-------------
function lesDeuxPlusPetits($tab){}








?>
    
</body>
</html>