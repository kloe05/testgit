<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="value">
<input type="submit">
</form>

<?php

$n=$_POST["value"];
    

function fact($n){
    $multi=1;
    for($i=0;$i<$n;$i++){
        $multi *=$i+1;
    }
    return ($multi);
}
echo fact($n) ;
?>



    
</body>
</html>



 <!-- Commentaire Loutre

// Function qui s'appelle fact ( ici je décide de ma valeur qui est pris dans mon echo donc ma valeur est de 5  )

// Début de ma boucle
//     For(pour) $i=0 ; tant que i est inférieur a 5($nb) $i<$nb, i par pas de 1 ($i++)
//     {
            

//     }






// ici j'ai fai un echo avec un appel de ma fonction fact avec une initialisation de valeur 5
// echo fact(5) -->