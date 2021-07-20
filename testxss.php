<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form method="post" action="testxss.php">
<input type="text" name="description">
<input type="submit">
</form>
<body>
<?php
$description=null;
if(isset($_POST["description"])){
    $description=$_POST["description"];
   
}
echo $description;


?> 
</body>
</html>


