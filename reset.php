<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/reset.css" rel="stylesheet">
      <link href="css/main.css" rel="stylesheet">
  <title>Ironsky Fitness</title>
  </head>
  <body style="background-color:#1E4072;">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <div class="form-gap">
      <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
       
        </div>
          <br><br>
      <div class="container-fluid">
      
    <div class="row">
      
    	<div class="col-md-10 col-sm-10 col-lg-6 mx-auto ">
        <div class="card">
        <div class="card card-body">
        <div id="resetSuccess" class="d-none text-center alert alert-success">
        <p> You should receive an email very soon. <a href="sign-in.html"> Click here </a> to go to the login page</p>
        </div>
                  <div class="text-center">
                    <h3><i class="fa fa-lock fa-4x"></i></h3>
                    <h2 class="text-center ">Forgot Password?</h2>
                     <div class="space"><br><br><br><br><br></div>
                    <p><font size="6">You can reset your password here.</font></p>
                    <div class="space"><br><br><br><br><br></div>
                    <div class="panel-body">
      
                      <form id="register-form" role="form" autocomplete="off" class="form" method="POST" >
      
                        <div class="form-group">
                          <div class="input-group">                                                                             
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <input id="email" name="Email" placeholder="email address" required class="form-control" >    
                            
                          </div>
                        </div>
                        <div class="form-group">
                          <!--<input name="recover-submit" id="resetSubmit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">  -->  
                          <input name="submit" class="btn btn-lg btn-primary btn-block " id="resetSubmit" type="submit" value="Reset Password">
                          
                          
                          <!--<a href="sign-in.html" name="Cancel" id="resetSubmit" class="btn btn-lg btn-secondary btn-block" value="Cancel">Cancel</a>   -->
                        </div>
                        
                    
                      </form>
      
                    </div>
                  </div>
                  </div>
            </div>
            </div>
    </div>
  
    </div>
    <?php
     if(array_key_exists('submit', $_POST)) { 
            include 'php/connectDB.php';

$email=$_POST["Email"];
$flag=0;

    $query = "SELECT * FROM OTP_Passwords";
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        
        exit();
    }
   while($row = mysqli_fetch_assoc($result)){
       $emaildb=$row['Email'];
       
       if($emaildb===$email){
       $name= $row['Name'];
       $flag=1;
       $pass=generateRandomString();
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        
        $sql = "UPDATE OTP_Passwords SET Password='$hash' WHERE Email='$email'";
        mysqli_query($conn,$sql);

    
        $subject='Password Deactivation';
        $message='Hello '. $name. ',
        
To change your password press the following link: http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/changepass.php.
Your Security Password is '. $pass. '.';
        $headers = "From: ironsky";
         mail($email,$subject,$message,$headers);
    echo "<script> 
              swal({
  title: 'Email Sent!',
  text: 'Email was sent to the given email address.',
  type: 'success',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";
    return true;
    
       }
    
    }
    if($flag==0){
    $query = "SELECT * FROM Customer";
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        
        exit();
    }
   while($row = mysqli_fetch_assoc($result)){
       $emaildb=$row['Email'];
       
       if($emaildb===$email){
       $name= $row['Name'];
       $flag=1;
       $pass=generateRandomString();
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        
        $sql="INSERT INTO OTP_Passwords (Email,Password,Name) VALUES ('$email','$hash','$name')";
        mysqli_query($conn,$sql);
    
        $subject='Password Deactivation';
        $message='Hello, '. $name. ',
        
To change your password press the following link: http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/changepass.php.
Your Security Password is '. $pass. '.';
        $headers = "From: ironsky";
         mail($email,$subject,$message,$headers);
    echo "<script> 
              swal({
  title: 'Email Sent!',
  text: 'Email was sent to the given email address.',
  type: 'success',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";
    return true;
    
       }
    
    }
    }
    if($flag==0){
         $query = "SELECT * FROM Trainer";
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        
        exit();
    }
   while($row = mysqli_fetch_assoc($result)){
       $emaildb=$row['Email'];
                                  
       if($emaildb===$email){
       $name= $row['Name'];
       $flag=1;
       $pass=generateRandomString();
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        
        $sql="INSERT INTO OTP_Passwords (Email,Password,Name) VALUES ('$email','$hash','$name')";
        mysqli_query($conn,$sql);
        
        
    
        $subject='Password Deactivation';
        $message='Hello, '. $name. ',
        
To change your password press the following link: http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/changepass.php.
Your Security Password is '. $pass. '.';
        $headers = "From: ironsky";
          mail($email,$subject,$message,$headers);
    echo "<script> 
              swal({
  title: 'Email Sent!',
  text: 'Email was sent to the given email address.',
  type: 'success',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";
    return true;
    
       }
    
    }
    
    }
    if($flag==0){
        echo "<script> 
              swal({
  title: 'Email Not Found!',
  text: 'The email was not found in the database',
  type: 'error',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";
    return true;
    
    }
    
$conn->close();
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


