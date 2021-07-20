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
                switch($age){
                    case ($age<=18):
                        echo"Vous êtes mineur";
                        break;
                    case($age>18 OR $age<=40):
                        echo"Vous êtes majeur mais pas sénior"; 
                        break;
                    case($age>60):
                        echo"Vous êtes senior";
                        break;
                    default:
                        echo"Votre âge n'est pas valide"
                }
                ?>
        </head>
             <body>
             </body>
</html>