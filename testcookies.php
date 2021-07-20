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
<form method="post" action="testcookies.php">
<input type="text" name="description">
<input type="submit">
</form>

<?php
$description=null;
if($_POST["description"]!==" "){
    setcookie("username",'');
}else{
    setcookie("username",htmlspecialchars,time()-3600);
}
print_r($_COOKIE);
    
?>
</body>
</html>