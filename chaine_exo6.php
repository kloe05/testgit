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
//--------------EXO01--------------------
// $chiffre=null;
// function syracuse($chiffre){
//     do{
//         if($chiffre %2==0){
//             $chiffre/=2;
//         }else{
//             $chiffre=$chiffre * 3 + 1;
//         }
//         echo $chiffre." ";
//         }while($chiffre!=1);
//     }


// echo syracuse(85);



//-----------------------------EXO02----------------------

// function reverse($string){
//     $espace = '';
//     for ($i = mb_strlen($string); $i>=0; $i--) {
//         $espace .= mb_substr($string, $i, 1);
//     }
//     return $espace;
// }

// echo reverse("Je sais j'ai utilisé des fonctions, mais sivouplait ça passe"); 


//------------------------------EXO03-------------------------

// function display_triangle($nb){
//     $display=" ";
//     for($i=0;$i<=$nb;$i++){
//         $display=$display."**";
//         echo "<p style ='text-align:center'>".$display."</p>";
//     }
// }
// echo display_triangle(560);


//--------------------------------EXO04-------------------------------

function fibonacci($mois){
    for($i=0;$i<$mois;$i++){
        $couple = 0;
        $bebe = 1;
        $couple2 = 1;
        $couple2 = $couple + $bebe;
        $couple = $bebe;
        $bebe = $couple2; 
        return $couple2;   
         
    } 
}
echo fibonacci(6);




        //--------------------------------EXO05-------------------------------
        // function conjugaison($verif){
        //     $longueur=null;
        //     $longueur=strlen($verif);
        //     if($longueur<=15 && $longueur=substr("programmer",6,0)){
        //         return"je programme 
        //         tu programmes
        //         il programme
        //         nous programmons
        //         vous programmez
        //         ils programment";
        //     }
                
        //     }
        //     echo conjugaison (programmer);

?>
    
</body>
</html>
