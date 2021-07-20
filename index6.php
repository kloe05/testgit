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
               $i=0;
               $n=$_POST["value"]; 
               do{
                   echo $i. " ";
                   $i++;
                   
               }while($i<$n);
            //    echo $n."<br>";

                $affich=0;
                for($i=0;$i<$n;$i++){
                    $affich+=$i;//$affich=$affich+$i;
                    // 0=0+0 0+=0
                    // 0=0+1 0+=1
                    // 1=1+2 1+=2
                    // 3=3+3 3+=3
                    // 6=6+4 6+=4
                    
               }
               echo "<span style='color:purple; font-size:32px'>= $affich </span>";


                ?>

              
        </head>
             <body>
             </body>
</html>

  