<?php

$servername="localhost";
$username = "ironsky";
$password = "pfVGdTzSOoLh85yp";
$dbname = "ironsky";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
}

$name=$_POST["Name"];
$surname=$_POST["Surname"];
$address=$_POST["Address"];
$tele=$_POST["Phone"];
$email=$_POST["Email"];
$pass=generateRandomString();
$hash = password_hash($pass, PASSWORD_DEFAULT);

$sql="INSERT INTO Customer (Name,Surname,Address,Telephone,Email,Password) VALUES ('$name','$surname','$address','$tele','$email','$hash')";
mysqli_query($conn,$sql);
$conn->close();

$subject='Account Activation';
$message='Hello ' . $name . '
Your Account has been activated. Your username is: ' . $email . '
and your password is: ' . $pass . '
Welcome to ironsky'.'
We recommend that you change your password';
$headers = "From: ironsky";
mail($email,$subject,$message,$headers);

header('Location: https://www.ironsky-app.com/mainTrainer.html'); 

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
