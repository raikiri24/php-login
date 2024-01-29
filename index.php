<?php 

session_start();
if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
    header('Location: homepage.php');
}

if(isset($_POST["username"]) && isset($_POST["password"])){
    
$servername = "localhost";
$username="root";
$password="";
$db_name = "practice";

$conn = new mysqli($servername, $username, $password,$db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM user WHERE username='" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "'";
$result = $conn->query($query);
if($result->num_rows > 0){
   $_SESSION["username"] = $_POST["username"];
   header('Location: homepage.php');
}


$conn->close();
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="index.php" method="post">
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
   <input type="submit" value="Submit"/>
</form>


</body>
</html>
