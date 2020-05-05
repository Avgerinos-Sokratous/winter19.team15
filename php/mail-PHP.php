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

if(($email=="")){

     echo "<script> 
       swal({
  title: 'The Email field is empty',
  text: 'The Email field cannot be empty.',
  type: 'error',

  showConfirmButton: true
}, function(){
      window.location.href = 'https://www.ironsky-app.com/reset.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
     
      </script>";
        return false;
}else{
    $query = "SELECT * FROM Customer WHERE Email='$email'";
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        
        exit();
    }
    $row = mysqli_fetch_assoc($result);
    $name= $row['Name'];

    $subject='Password Deactivation';
    $message='Helllo, '. $name. '.
    To change your password press the following link: https://www.ironsky-app.com/changepass.php';
    $headers = "From: ironsky";



    mail($email,$subject,$message,$headers);
    echo "<script> 
              swal({
  title: 'Email Sent!',
  text: 'Email was sent to the given email address.',
  type: 'success',

  showConfirmButton: true
}, function(){
      window.location.href = 'https://www.ironsky-app.com/sign-in.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";
    return true;
}

$conn->close();
?>