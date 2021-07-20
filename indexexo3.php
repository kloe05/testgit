<!DOCTYPE html>
    <html lang="fr">
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="style.css">
                <title>cours php</title>
                <?php 
                $n=5;
                $i=0;
                do{
                    echo $i." ";
                    $i++;
                }while($i<$n && isNaN($n) && $n<0 && $n%1!==0);
                    echo ($n+$i);
                ?>
        </head>
             <body>
             </body>
</html>

