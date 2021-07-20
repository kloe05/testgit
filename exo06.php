<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form enctype="multipart/form-data" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value= "300000"/>
Envoyez ce fichier:<input name="userfile" type="file"/> 
<input type = "submit" value="envoyer le fichier"/>
</form>
<?php

$upploaddir= 'upload/';
$uploadfile=$upploaddir.basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)){
    echo "<script>";
    echo "alert ('oké')";
    echo"</script>";
  

}else{
    
    echo "<script>";
    echo "alert ('pas oké')";
    echo"</script>";
 
   
}

?>

<body>
    
</body>
</html>