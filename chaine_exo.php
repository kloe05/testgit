<?php

// //exo1
// function helloWorld($texte="hello world"){

// return $texte;
// }
// echo helloWorld($texte);

// exo2
function quiEstLeMeilleurProf(){
   
    return "Mon super prof de php";
}
echo quiEstLeMeilleurProf ();




//exo3
function jeRetourneMonArgument($argument){
        return $argument;

}
echo jeRetourneMonArgument("Je me nomme Odile de Rey")




//exo4
 function concatenation($argu1,$argu2){
    
     return $argu1.$argu2;
     
     
 }
 echo concatenation ( "Chloe","Le Faucheur");

//  //exo5
function concatenationAvecEspace($argu1,$argu2){
    
    return  $argu1." ".$argu2;
}


echo concatenationAvecEspace ("chloe","Le Faucheur");








//exo6
function getFirstWord($phrase1){
    $ceci= explode(" ",$phrase1); //$ceci=str_word_count($phrase,1)
    
    return $ceci[0];
}
echo getFirstWord("Ceci est une phrase Test. Cette phrase est un test");
echo"<br>";










// //exo7
 function getLastWord($phrase1){
    $derniermot=explode(" ",$phrase1);
    $taille=count($derniermot);
    return $derniermot[$taille-1];
}
echo getLastWord("ceci est une phrase");

?>



