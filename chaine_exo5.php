<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="value" placeholder="Mot de passe">
    <input type="submit">
    </form>
    <form action="" method="post">
    <input type="text" name="capitale" placeholder="Votre pays">
    <input type="submit">
    </form>
    <form action="" method="post">
    <input type="text" name="string" placeholder="Votre phrase">
    <input type="submit">
    </form>
    </form>
    <form action="" method="post">
    <input type="text" name="capital" placeholder="Votre pays">
    <input type="submit">
    </form>


    <?php
    $password=null;
    if(isset($_POST['value'])){
        $password=$_POST['value'];
    }

    function verificationPassword($verif){
        $longueur=null;
        $longueur=strlen($verif);
        if($longueur<8){
            return 'false';
        }else {
            return 'true';
        }
    }


        $point=null;
        for ($i=0; $i<$longueur;$i++){
            $lettre=$verif[$i];

            if($lettre>='a' && $lettre<='z'){
                $point=$point+1;
                $point_min=1;
            }elseif ($lettre>='A' && $lettre<='Z') {
                $point=$point+2;
                $point_maj=2;
            }elseif ($lettre>=0 && $lettre<=9) {
                $point=$point+4;
                $point_num=4;
            }else {
                $point=$point+5;
                $point_caract=5;
            }
        }
        $check1=null;
        $check2=null;
        // calcul points/longueur
        $check1=$point/$longueur;
        //calcul du bonus
        $check2=$point_min+$point_caract+$point_maj+$point_num;
        // calcul du résultat
        $result=$check1*$check2;
        // Efficacité du code
        $total=$result*$longueur;
        
        if($total<40){
            return 'mot de passe  faible';
        }elseif ($total<=80){
            return 'mot de passe dans la moyenne';
        }else {
            return 'Mot de passe tres good camarade';
        }
    }  
    $pays=null;
    if(isset($_POST['capitale'])){   // isset=Détermine si une variable est déclarée et est différente de null
        $pays=$_POST['capitale'];
    }

    
    function capitale($capitale){
       $capitale=strtolower($capitale);  // met la chaine de caractères en minuscules
            switch ($capitale) {
                case $capitale=='france':
                    return 'Paris';
                    break;
                case $capitale=='allemagne':
                    return 'Berlin';
                    break;
                case $capitale=='italie':
                    return 'Rome';
                    break;
                case $capitale=='maroc':
                    return 'Rabat';
                    break;
                case $capitale=='espagne':
                    return 'Madrid';
                    break;
                case $capitale=='portugal':
                    return 'Lisbonne';
                    break;
                case $capitale=='angleterre':
                    return 'Londres';
                    break;
                
                default:
                    return 'INCONNU';
                    break;
                }
        
    }

    $string=null;
    if(isset($_POST['string'])){
        $string=$_POST['string'];
    }
    function  remplacerLesLettres($switch){
         $switch=strtr($switch,"eiao","3140");  //strtr (nom de ta variable, 'lettre d'origine', 'lettre de remplacement')
         return $switch;
    }

    function quelleAnnee(){
        return date("Y");
    }
    function quelledate(){
        return date("d/m/Y");  // si tu met d/m/Y  cela met la date mois année en chiffres  si en D M Y alors le d et le m sont en lettres
    }

    $test=null;
    if(isset($_POST['capital'])){   // isset=Détermine si une variable est déclarée et est différente de null
        $test=$_POST['capital'];
    }

    function capital($loutre){
        switch ($loutre) {
            case soundex('france')==soundex($loutre):
                return 'Paris';
                break;
            case soundex('allemagne')==soundex($loutre):
                return 'Berlin';
                break;
            case soundex('italie')==soundex($loutre):
                return 'Rome';
                break;
            case soundex('maroc')==soundex($loutre):
                return 'rabat';
                break;
            case soundex('espagne')==soundex($loutre):
                return 'Madrid';
                break;
            case soundex('portugal')==soundex($loutre):
                return 'Lisbonne';
                break;
            case soundex('angleterre')==soundex($loutre):
                return 'Londres';
                break;
            
            default:
                return ' Pays Inconnu';
                break;
        }
    }
    ?>

    <p style="color:purple; font-size:24px">Votre mot de passe est : <?= verificationPassword($password);?></p>
    <p style="color:red; font-size:24px"><?= capitale($pays)?></p>
    <p style="color:green; font-size:24px"><?= remplacerLesLettres($string)?></p>
    <p style="color:orange; font-size:24px"><?= quelleAnnee()?></p>
    <p style="color:pink; font-size:24px"><?= quelleDate()?></p>
    <p style="color:crimson; font-size:24px"><?= capital($test)?></p>
</body>
</html>