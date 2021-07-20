

<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="post" action="testsession.php">
<input type="text" name="description">
<input type="submit">
</form>

<?php
$description=null;
if($_POST["description"]==="logout"){
    session_destroy();
    
}else {
    $description = htmlspecialchars($_POST["description"]);
    $_SESSION["$description"]=$description;
    
}

print_r ($_SESSION);

?> 


    
</body>
</html>