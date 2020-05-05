<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Latest compiled JavaScript -->
    <script>
    $(function () {
    $("#includedContent").load("https://www.ironsky-app.com/navbar.html");
    });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/main.css" rel="stylesheet">
</head>

<body style="background-color:#1E4072;">
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                    <span class="anchor" id="formChangePassword"></span>
                    <br><br><br>

                    <!-- form card change password -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" method="POST">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="Email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordOTP">Security Password</label>
                                    <input type="text" class="form-control" id="OTP" name="OTP" required="">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">New Password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew" name="NewPassword" required="">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">Verify</label>
                                    <input type="password" class="form-control" id="inputPasswordNewVerify" name="Verify" required="">
                                    <span class="form-text small text-muted">
                                            To confirm, type the new password again.
                                        </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success btn-lg float-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        
<?php
if (array_key_exists('submit', $_POST))
{
    include 'php/connectDB.php';

    $email = $_POST["Email"];
    $newpassword = $_POST["NewPassword"];
    $verifypass = $_POST["Verify"];
    $OTP = $_POST["OTP"];

    $query = "SELECT * FROM OTP_Passwords";
    $result = mysqli_query($conn, $query) or die("Could not connect database " . mysqli_error($conn));
    $flag = 0;
    $flag2 = 0;

    while ($row = mysqli_fetch_assoc($result))
    {
        $emaildb = $row['Email'];

        if ($email === $emaildb)
        {
            $flag2 = 1;
            if (password_verify($OTP, $row['Password']))
            {
                if ($newpassword != $verifypass)
                {
                    echo "<script> 
              swal({
                title: 'Invalid data!',
                text: 'New Password and verify password must be the same.',
                type: 'error',
                
                  showConfirmButton: true
                }, function(){
                      window.location.href = 'https://www.ironsky-app.com/changepass.php';
                }); 
                     $('.sweet-overlay').css('background-color','#1E4072');
                      </script>";
                    exit();

                }

                if ((strlen($newpassword) < 8) && (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $newpassword)))
                {
                    echo "<script> 
              swal({
                title: 'Invalid data!',
                text: 'New Password must be at least 8 characters long and must contain both letters and numbers.',
                type: 'error',
                
                  showConfirmButton: true
                }, function(){
                      window.location.href = 'https://www.ironsky-app.com/changepass.php';
                }); 
                     $('.sweet-overlay').css('background-color','#1E4072');
                      </script>";
                    exit();
                }

                $query = "SELECT * FROM Customer";
                $result = mysqli_query($conn, $query) or die("Could not connect database " . mysqli_error($conn));
                $flag = 0;

                while ($row = mysqli_fetch_assoc($result))
                {
                    $emaildb = $row['Email'];

                    if ($email === $emaildb)
                    {

                        $flag = 1;
                        $hash = password_hash($newpassword, PASSWORD_DEFAULT);
                        $sql = "UPDATE Customer SET Password='$hash' WHERE Email='$email'";

                        if ($conn->query($sql) === true)
                        {
                            $name = $row['Name'];

                            $subject = 'Password Changed';
                            $message = 'Hello, ' . $name . '.

Your password has changed.';
                            $headers = "Ironsky App <info@ironsky-app.com>";

                            mail($email, $subject, $message, "From: ".$headers);

                            $sql = "DELETE FROM OTP_Passwords WHERE Email='$email'";
                            mysqli_query($conn, $sql);

                            echo "<script> 
                  swal({
                        title: 'Password Updated!',
                        text: 'Your password has been updated.',
                        type: 'success',
                      
                        showConfirmButton: true
                      }, function(){
                            window.location.href = 'https://www.ironsky-app.com/sign-in.php';
                      }); 
                           $('.sweet-overlay').css('background-color','#1E4072');
                            </script>";
                            exit();
                        }
                        else
                        {
                            echo "Error updating record: " . $conn->error;
                        }
                    }
                }
                    $query = "SELECT * FROM Trainer";
                    $result = mysqli_query($conn, $query) or die("Could not connect database " . mysqli_error($conn));

                    while ($row = mysqli_fetch_assoc($result))
                    {
                        $emaildb = $row['Email'];

                        if ($email === $emaildb)
                        {

                            $flag = 1;
                            $hash = password_hash($newpassword, PASSWORD_DEFAULT);
                            $sql = "UPDATE Trainer SET Password='$hash' WHERE Email='$email'";

                            if ($conn->query($sql) === true)
                            {
                                $name = $row['Name'];

                                $subject = 'Password Changed';
                                $message = 'Hello, ' . $name . '.
                
Your password has changed.';
                                $headers = "Ironsky App <info@ironsky-app.com>";

                                mail($email, $subject, $message,"From:".$headers);

                                $sql = "DELETE FROM OTP_Passwords WHERE Email='$email'";
                                mysqli_query($conn, $sql);

                                echo "<script> 
                  swal({
                        title: 'Password Updated!',
                        text: 'Your password has been updated.',
                        type: 'success',
                      
                        showConfirmButton: true
                      }, function(){
                            window.location.href = 'https://www.ironsky-app.com/sign-in.php';
                      }); 
                           $('.sweet-overlay').css('background-color','#1E4072');
                            </script>";
                                exit();
                            }
                            else
                            {
                                echo "Error updating record: " . $conn->error;
                            }
                        }
                    }
            }
            else
            {
                echo "<script> 
                  swal({
                        title: 'Invalid Data!',
                        text: 'The security password is incorrect, please check your email.',
                        type: 'error',
                      
                        showConfirmButton: true
                      }, function(){
                            window.location.href = 'https://www.ironsky-app.com/changepass.php';
                      }); 
                           $('.sweet-overlay').css('background-color','#1E4072');
                            </script>";
                exit();
            }

        }
        else
        {
            echo "Error updating record: " . $conn->error;
        }
    }

    /*if($newpassword != $verifypass){
       echo "<script> 
              swal({
                title: 'Invalid data!',
                text: 'New Password and verify password must be the same.',
                type: 'error',
                
                  showConfirmButton: true
                }, function(){
                      window.location.href = 'https://www.ironsky-app.com/changepass.php';
                }); 
                     $('.sweet-overlay').css('background-color','#1E4072');
                      </script>";
          exit();
    
    } 
    
        if((strlen($newpassword)<8)&&(!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $newpassword))){
              echo "<script> 
              swal({
                title: 'Invalid data!',
                text: 'New Password must be at least 8 characters long and must contain both letters and numbers.',
                type: 'error',
                
                  showConfirmButton: true
                }, function(){
                      window.location.href = 'https://www.ironsky-app.com/changepass.php';
                }); 
                     $('.sweet-overlay').css('background-color','#1E4072');
                      </script>";
          exit();
        }       
        
    
        $query = "SELECT * FROM Customer";
        $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));
        $flag=0;
        
        while($row = mysqli_fetch_assoc($result)) {
            $emaildb = $row['Email'];
            
            if($email === $emaildb) {
            
                $flag=1;
                $hash = password_hash($newpassword, PASSWORD_DEFAULT);
                $sql = "UPDATE Customer SET Password='$hash' WHERE Email='$email'";
        
                mysqli_query($conn,$sql);
                $name= $row['Name'];
                
                $subject='Password Changed';
                $message='Helllo, '. $name. '.
    
    Your password has changed.';
                $headers = "From: ironsky";
                
                
                
                mail($email,$subject,$message,$headers);
                
                $sql = "DELETE FROM OTP_Passwords WHERE Email='$email'";
                mysqli_query($conn,$sql);
                
                    echo "<script> 
                  swal({
                        title: 'Password Updated!',
                        text: 'Your password has been updated.',
                        type: 'success',
                      
                        showConfirmButton: true
                      }, function(){
                            window.location.href = 'https://www.ironsky-app.com/sign-in.php';
                      }); 
                           $('.sweet-overlay').css('background-color','#1E4072');
                            </script>";
                        exit();
            }
        }
        if($flag==0){
        $query = "SELECT * FROM Trainer";
        $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));
        
        while($row = mysqli_fetch_assoc($result)) {
            $emaildb = $row['Email'];
            
            if($email === $emaildb) {
            
                $flag=1;
                $hash = password_hash($newpassword, PASSWORD_DEFAULT);
                $sql = "UPDATE Customer SET Password='$hash' WHERE Email='$email'";
        
                mysqli_query($conn,$sql);
                $name= $row['Name'];
                
                $subject='Password Changed';
                $message='Helllo, '. $name. '.
                
    Your password has changed.';
                $headers = "From: ironsky";
                
                
                
                mail($email,$subject,$message,$headers);
                
                $sql = "DELETE FROM OTP_Passwords WHERE Email='$email'";
                mysqli_query($conn,$sql);
                
                    echo "<script> 
                  swal({
                        title: 'Password Updated!',
                        text: 'Your password has been updated.',
                        type: 'success',
                      
                        showConfirmButton: true
                      }, function(){
                            window.location.href = 'https://www.ironsky-app.com/sign-in.php';
                      }); 
                           $('.sweet-overlay').css('background-color','#1E4072');
                            </script>";
                        exit();
            }
        }
        }
        if($flag==0){
        echo "<script> 
              swal({
    title: 'Email not found!',
    text: 'Unfortunately the email does not exist in the system.',
    type: 'error',
    
      showConfirmButton: true
    }, function(){
          window.location.href = 'https://www.ironsky-app.com/changepass.php';
    }); 
         $('.sweet-overlay').css('background-color','#1E4072');
          </script>";
          exit();
          }
    */

    if ($flag2 == 0)
    {
        echo "<script> 
                  swal({
                        title: 'Email Not Found!',
                        text: 'Email was not found in the system.',
                        type: 'error',
                      
                        showConfirmButton: true
                      }, function(){
                            window.location.href = 'https://www.ironsky-app.com/changepass.php';
                      }); 
                           $('.sweet-overlay').css('background-color','#1E4072');
                            </script>";
        exit();
    }
    $conn->close();
}
?>

  </body>
</html>
