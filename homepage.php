<?php
session_start();

if(empty($_SESSION["username"])){
    header('Location: index.php');
}



echo $_SESSION["username"];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="/login/logout.php">LOGOUT</a>
    
THIS IS HOMEPAGE
</body>
</html>