<!DOCTYPE html>
    <html lang="fr">
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="style.css">
                <title>cours php</title>
                <?php 
               $age;
                if($age>18){
                    echo "Vous etes majeur";
                }else{
                    echo "Vous êtes mineur"
                }
                ?>
        </head>
             <body>
             </body>
</html>

<!-- ------------------------------------------------------------------- -->




<!DOCTYPE html>
    <html lang="fr">
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="style.css">
                <title>cours php</title>
                <?php 
               $age=0;
                switch($age){
                    case ($age>0 && $age<=18):
                        echo"Vous êtes mineur";
                         break;
                    case ($age<=40):
                        echo"Vous êtes majeur mais pas senior";
                        break;
                    case($age<=60): 
                        echo "Vous êtes presque a la retraite";
                        break;
                    case($age>60):
                        echo "Vous êtes senior";
                        break;
                    default:
                        echo "Age invalide";          
                }

                ?>
        </head>
             <body>
             </body>
</html>