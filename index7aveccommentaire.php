<!DOCTYPE html>
    <html lang="fr">
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="style.css">
                <title>cours php</title>
                <?php 
              $max=null;
              $min=null;
              $tab=array(24,7,13,72,29,2,8,51)
            //     key       0-1- 2- 3- 4- 5-6-7
     // valeur de la key    24-7-13-72-29-2-8-51
              foreach ($tab as $valeur){
                //   if($max<$valeur)
                //  si ma valeur $max=null est inférieur a ma valeur $valeur=24
                //  alors tu exécute  $max = $valeur 
                //  donc je remplace ma valeur $max=null par $valeur=24
                // donc $max a obtenu la valeur 24
                //  deuxieme boucle => 24<7 non ma valeur $max reste la pareil 
                // troisieme boucle  toujours pas 
                // quatrieme boucle 24<72 Oui donc nouvelle valeur $max=72
                // 5 -6-7-8  boucle aucune valeur est supérieure a 72 donc ma valeur max est$max=72
                // tu as le même principe pour le min
                // si ma valeur $min > $valeur alors tu la remplace 
                // exemple: 
                //  $min=null(0)>$valeur=24 alors $min=24
                // deuxieme min=7-- troisieme boucle min reste inchangée -- quatrieme boucle => none --5eme boucle none --6eme boucle min=2--7 +8 boucle reste inchangée
                // Donc ma valeur min de mon tableau est $min=2
                
                  if($max<$valeur){
                      $max=$valeur;
                      echo.$max;
                  }

                  if($min==null){
                      $min=$valeur;
                      var_dump($min);
                  }
                  if($min>$valeur){
                      $min=$valeur;
                      echo.$min;
                  }

              }

            
                $somme=0
            //     key ($i)      0-1- 2- 3- 4- 5-6-7
     // valeur de la key    24-7-13-72-29-2-8-51
            for($key=0; $key<count($tab);$key++){
                    $somme += $tab[$key];
                }
                foreach($tab as $valeur){
//              recherche dans un tableau(nom de mon tableau en tant que valeur)
                $somme +=$valeur;
                // $somme=0= $somme(0)+$valeur(24) premiere boucle 
                }
                $moyenne =$somme/count($tab);

                ?>
        </head>
             <body>
             </body>
</html>