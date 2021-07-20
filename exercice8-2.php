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
    <input type="text" name="value">
    <input type="submit">
</form>
<?php
    $nombre=$_POST["value"];

    function fact ($nombre){
        $somme=1;
        for($i=0;$i<$nombre;$i++){
            $somme*=$i+1;
        }
        return $somme;
    }

    echo "Prout: ".fact($nombre);




?>
</body>
</html>