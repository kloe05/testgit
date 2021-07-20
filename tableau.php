<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau test</title>
</head>
<body>
    <?php
        $loutre=array(1225,25,98,78,5,6989,2,30,0);
        $nombre=null;
        foreach($loutre as $valeur){
            if ($nombre==null){
                $nombre=$valeur;
                //Si $nombre == null ma valeur nombre n'a aucune valeur alors j execute la ligne suivante $nombre= a la premiere valeur de montableau ($valeur) donc mon $nombre obtiens la valeur de 12!!

            }else if($nombre<$valeur) {
                $nombre=$valeur;

            }
        }
         echo "le chiffre max est: $nombre";

        //  val min
        echo"<br>";
        $nombre=null;
        foreach($loutre as $valeur){
            if($nombre==null){
                $nombre=$valeur;
            }else if ($nombre>$valeur){

                $nombre=$valeur;
            }
        }
            echo "le chiffre min est: $nombre";
            echo "<br>";
            $somme=0;
            foreach($loutre as $valeur){
                $somme+=$valeur;
            }
            $moyenne= $somme/count($loutre);
            echo "la moyenne est de : $moyenne";

    
    
    
    ?>
</body>
</html>