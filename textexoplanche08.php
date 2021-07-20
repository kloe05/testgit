<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        if(isset($_POST['couleurtexte'])){
            $couleurtexte=$_POST["couleurtexte"];
            setcookie ('couleurtexte', $couleurtexte, time()+2628000, '/');
            }

        if(isset($_POST["couleurfond"])){
            $couleurfond=$_POST["couleurfond"];
            setcookie ('couleurfond', $couleurfond, time()+2628000, '/' );
            }

    ?>

<style type="text/css">


#content div.test{
color:<?php echo $couleurtexte;?>;
background-color:<?php echo $couleurfond;?>;
}


</style>


<form action="" method="post">
<p>Votre couleur de fond : <input type="text" name="couleurfond" placeholder="Ex:blue"required /></p>
<p>Votre couleur de texte : <input type="text" name="couleurtexte" placeholder="Ex:red" required/></p>
<p><input type="submit" value="OK"></p>
</form>
  
</body>
</html>