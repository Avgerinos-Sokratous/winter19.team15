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


$email=$_POST["Email"];
$password=$_POST["Password"];


if(($email=="") || ($password=="") ){
      echo "<script>
       swal({
  title: 'Email or Password field is empty',
  text: 'The Email or Password field cannot be empty.',
  type: 'error',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php';
});
     $('.sweet-overlay').css('background-color','#1E4072');

      </script>";
    //header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/sign-in.php");
    return false;
}
session_start();
$_SESSION["email"] = $email;
$query = "SELECT * FROM Customer WHERE Email='$email'";
$result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

if (!$result) {
    echo "wrong input";
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
  $row = mysqli_fetch_assoc($result);

  if (password_verify($password,$row['Password'])){
       $cuid="SELECT Customer_ID FROM Customer WHERE Email='$email'";
       $res=mysqli_query($conn,$cuid);
       $row = mysqli_fetch_assoc($res);
       $id=$row['Customer_ID'];
       $log="INSERT INTO Login_Log(Customer_ID) VALUES ('$id')";
       mysqli_query($conn,$log);
       $expd="SELECT ExpirationDate FROM Memberships WHERE CustomerID='$id'";
       $res=mysqli_query($conn,$expd);
       $row=mysqli_fetch_assoc($res);
       $date=$row['ExpirationDate'];
       $today = new DateTime('now');
       $expire=date_create($date);
       $interval = date_diff($expire, $today);
       if($interval->days<5){
        echo "<script>
       swal({
  title: 'Membership',
  text: 'Your membership expires at {$date}',
  type: 'error',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/main.html';
});
     $('.sweet-overlay').css('background-color','#1E4072');

      </script>";
      }else{
	$cuid="SELECT Customer_ID FROM Customer WHERE Email='$email'";
       	$res=mysqli_query($conn,$cuid);
       	$row = mysqli_fetch_assoc($res);
       	$id=$row['Customer_ID'];

	$query="SELECT * FROM Login_Log WHERE Customer_ID=$id";
	$results=mysqli_query($conn,$query);
	if(mysqli_num_rows($results)==1)
	{
		header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/privacyPolicy.html");
	}
	else
	{
        		header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/main.html");
	}
}
       return true;
  }else{
        $query2 = "SELECT * FROM Trainer WHERE Email='$email'";
        $result2 = mysqli_query($conn, $query2)  or die("Could not connect database " .mysqli_error($conn));

        if (!$result2) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $row2 = mysqli_fetch_assoc($result2);
        if (password_verify($password, $row2['Password'])){
             header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/mainTrainer.html");
             return true;
        }else{
            echo "<script>
       swal({
  title: 'Password is Invalid',
  text: 'The Email or Password is invalid.',
  type: 'error',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php';
});
     $('.sweet-overlay').css('background-color','#1E4072');

      </script>";
            return false;
        }
    }


$conn->close();


?>
