<head>
</head>
<body>          
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</body>
<?php
   include 'connectDB.php';

$name=$_POST["Name"];
$surname=$_POST["Surname"];
$address=$_POST["Address"];
$tele=$_POST["Phone"];
$email=$_POST["Email"];
$memb=$_POST["Membership"];

$query = "SELECT * FROM Customer";
$result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

while($row = mysqli_fetch_assoc($result)) {
    $emaildb = $row['Email'];
    
    if($email === $emaildb) {
       
        echo "<script> 
       swal({
  title: 'This email already exists',
  text: 'Try a different one.',
  type: 'error',

  showConfirmButton: true
}, function(){
      window.location.href = 'https://www.ironsky-app.com/mainTrainer.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
     
      </script>"; 
      
        exit();
    }
}


$pass=generateRandomString();
$hash = password_hash($pass, PASSWORD_DEFAULT);

$sql="INSERT INTO Customer (Name,Surname,Address,Telephone,Email,Password) VALUES ('$name','$surname','$address','$tele','$email','$hash')";
mysqli_query($conn,$sql);
$last_id=$conn->insert_id;
$today = date("Y-m-d");
$date = date('Y-m-d', strtotime('+1 month', $today));
$reg="INSERT INTO Memberships (CustomerID,ExpirationDate,Type) VALUES ($last_id,DATE_ADD(CURDATE(),INTERVAL 1 MONTH),'$memb')";
$result=mysqli_query($conn,$reg);
$conn->close();

$subject='Account Activation';
$message='Hello ' . $name . '
Your Account has been activated. Your username is: ' . $email . '
and your password is: ' . $pass . '
Welcome to ironsky'.'
We recommend that you change your password';
$headers = "From: ironsky";
mail($email,$subject,$message,$headers);

echo "<script> 
              swal({
  title: 'Success!',
  text: 'User registered successfully.',
  type: 'success',

  showConfirmButton: true
}, function(){
      window.location.href = 'https://www.ironsky-app.com/mainTrainer.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";



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

