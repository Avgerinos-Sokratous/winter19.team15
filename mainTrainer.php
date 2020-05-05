<?php

    include 'initSeshTrainer.php';
    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Latest compiled JavaScript -->
    <script>
    $(function () {
        $("#includedContent").load("https://www.ironsky-app.com/navTrainer.php");
    });
    </script>
	<script src="./js/memb.js"></script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/main.css" rel="stylesheet">
</head>

<body style="background-color:#1E4072;" onload="fill()">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- START OF NAVIGATION BAR -->

    <div id="includedContent"></div>

    <!-- END OF NAVIGATION BAR -->

    <br>
    <div class="form-gap">
        <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
    </div>

    <!-- START OF CONTAINER FOR NEW REGISTER of client -->
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-8 mx-auto">
                <!-- form card new register -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Register New Customer</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" id="RegisterForm" autocomplete="off" method="post">
                            <div class="form-group">
                                <label for="input5">Name</label>
                                <input type="text" class="form-control" id="Name" name="Name" placeholder="First Name" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Surname</label>
                                <input type="text" class="form-control" id="Surname" name="Surname" placeholder="Last name" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Email</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp" id="Email" name="Email" placeholder="Email" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Address</label>
                                <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Phone</label>
                                <input type="number" class="form-control" id="Phone" name="Phone" placeholder="Phone Number" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Membership</label>
                                <select name="Membership" id="Memb" required>
                                <option value="">--Please Select--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register" onsubmit="RegisterNew()" class="btn btn-success btn-lg float-right">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form card register -->
            </div>
        </div>
    </div>
    <!-- END OF CONTAINER FOR FOR NEW REGISTER of client -->
    <!-- START OF CONTAINER FOR ANNOUNCEMENT of trainer -->
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-8 mx-auto">
                <!-- form card new register -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Register New Trainer</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" id="RegisterForm" autocomplete="off" method="post">
                            <div class="form-group">
                                <label for="input5">Name</label>
                                <input type="text" class="form-control" id="Name" name="Name" placeholder="First Name" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Email</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp" id="Email" name="Email" placeholder="Email" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Address</label>
                                <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Phone</label>
                                <input type="number" class="form-control" id="Phone" name="Phone" placeholder="Phone Number" required="" />
                            </div>
                            <div class="form-group">
                                <button type="submit" name="registerTrainer" onsubmit="RegisterNew()" class="btn btn-success btn-lg float-right">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form card register trainer -->
            </div>
        </div>
    </div>
    <!-- END OF CONTAINER FOR ANNOUNCEMENT -->
     <?php
    if(array_key_exists('register', $_POST)) { 
            include 'php/connectDB.php';

$name=$_POST["Name"];
$surname=$_POST["Surname"];
$address=$_POST["Address"];
$tele=$_POST["Phone"];
$email=$_POST["Email"];
$memb=$_POST["Membership"];

if($memb==''){
    exit();
}

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
$sql="SELECT Duration FROM Membership_Types WHERE Type='".$memb."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$dur=$row['Duration'];
$reg="INSERT INTO Memberships (CustomerID,ExpirationDate,Type) VALUES ($last_id,DATE_ADD(CURDATE(),INTERVAL ".$dur." MONTH),'$memb')";
$result=mysqli_query($conn,$reg);
$conn->close();

$subject='Account Activation';
$message='Hello ' . $name . '
Your Account has been activated. Your username is: ' . $email . '
and your password is: ' . $pass . '
Welcome to ironsky'.'
We recommend that you change your password';
$headers = "Ironsky App <info@ironsky-app.com>";
mail($email,$subject,$message,"From: ".$headers);

echo "<script> 
              swal({
  title: 'Success!',
  text: 'User registered successfully',
  type: 'success',

  showConfirmButton: true
}, function(){
      window.location.href = 'https://www.ironsky-app.com/mainTrainer.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";

 }   
    if(array_key_exists('registerTrainer', $_POST)) { 
            include 'php/connectDB.php';

$name=$_POST["Name"];
$address=$_POST["Address"];
$tele=$_POST["Phone"];
$email=$_POST["Email"];

$query = "SELECT * FROM Trainer";
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

$sql="INSERT INTO Trainer (Name,Address,Telephone,Password,Email) VALUES ('$name','$address','$tele','$hash','$email')";
mysqli_query($conn,$sql);
$conn->close();

$subject='Account Activation';
$message='Hello ' . $name . '
Your Account has been activated. Your username is: ' . $email . '
and your password is: ' . $pass . '
Welcome to ironsky'.'
We recommend that you change your password';
$headers = "Ironsky App <info@ironsky-app.com>";
mail($email,$subject,$message,"From: ".$headers);

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

 }

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

</body>
</html>
