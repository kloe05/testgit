<!DOCTYPE html> 
    <html lang="fr">
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="style.css">
                <title>cours php</title>
                <form method="post" action="">
                    <label>Entrez votre valeur<br></label>
                    <input type="number" name="value" placeholder="entrez un chiffre">
                    <input type="submit">
                <?php 
               $n=0;
               if(isset($_POST["value"])){
                   $n=$_POST["value"];
               }
               $i;
                for ($i=0; $i<$n;$i++){
                    echo $i." ";
                }
                echo"vous avez choisi le chiffre : $n";
                ?>

              
        </head>
             <body>
             </body>
</html>

<!-- ------------------------------------------------------------------- -->