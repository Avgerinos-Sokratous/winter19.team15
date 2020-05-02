
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">

    <link href="css/sign-in.css" rel="stylesheet">
 
  </head>
  <body class="text-center center" style="background-color:#1E4072;">  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    <form method="POST"  class="form-signin center">
      <h2 class="font-weight-normal" style="color:white;">Welcome to Ironsky</h2>
      <h1 class="font-weight-normal motto">Be strong, brave and humble</h1>
      <a href="https://www.ironsky-fitness.com/"><img class="ironskyimg" src="images/ironsky2.png" alt=""> </a>
       <br>
      <div><input  type="username" name="Email" id="email" class="form-control" placeholder="Email*" autofocus required></div>
        <br>
      <div><input  type="password" name="Password" id="password" class="form-control" placeholder="Password*" required></div>
        <br>
      <!--<a class="buttons" width="800" height="450" type="button" >Sign in</a> -->
      <input class="buttons" name="submit" type="submit" value="Sign-in">
      <br> <br>
      <a href="reset.php" class="passwd">Forgot password</a>
       <br>     
      <div class="contact-info">
      <br>
    <a href="https://www.facebook.com/ironsky.fitness/"><img class="contact" src="images/facebook.png"> </a>
    <a href="https://www.instagram.com/ironsky.fitness/?hl=en"><img class="contact" src="images/insta.png" > </a>
    <a href="https://www.youtube.com/channel/UCEXv002x7GgComrUKPB130w/featured"><img class="contact" src="images/youtube.png" > </a>    
    <a href="supportTest.php"><img class="contact" src="images/email.png" > </a>
      </div> 
  
      <p class="mt-5 mb-3 text-muted"><font color="#4B5D7F">By proceding you also agree to the Terms of Service and Privacy Policy</p>
    </form>
    <?php
        if(array_key_exists('submit', $_POST)) { 
            include 'php/connectDB.php';


$email = $_POST["Email"];
$password = $_POST["Password"];


$auth = FALSE;
$authTrainer = FALSE;
$query = "SELECT * FROM Customer WHERE Email='$email'";
$result = mysqli_query($conn, $query)  or die("Could not connect database " . mysqli_error($conn));

if (!$result) {
      echo "wrong input";
      printf("Error: %s\n", mysqli_error($conn));
      exit();
}
$row = mysqli_fetch_assoc($result);

if (password_verify($password, $row['Password'])) {
      session_start();
      $_SESSION["email"] = $email;
      $_SESSION['auth'] = TRUE;
      session_write_close();
      $cuid = "SELECT Customer_ID FROM Customer WHERE Email='$email'";
      $res = mysqli_query($conn, $cuid);
      $row = mysqli_fetch_assoc($res);
      $id = $row['Customer_ID'];
      $log = "INSERT INTO Login_Log(Customer_ID) VALUES ('$id')";
      mysqli_query($conn, $log);
      $expd = "SELECT ExpirationDate FROM Memberships WHERE CustomerID='$id'";
      $res = mysqli_query($conn, $expd);
      $row = mysqli_fetch_assoc($res);
      $date = $row['ExpirationDate'];
      $today = new DateTime('now');
      $expire = date_create($date);
      $interval = date_diff($expire, $today);
      if ($interval->days < 5) {
            echo "<script>
                        swal({
                              title: 'Membership',
                              text: 'Your membership expires at {$date}',
                              type: 'error',

                              showConfirmButton: true
                              }, function(){
                                    window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/pastPrograms.php';
                              });
                          $('.sweet-overlay').css('background-color','#1E4072');

                  </script>";
      } else {
            $cuid = "SELECT Customer_ID FROM Customer WHERE Email='$email'";
            $res = mysqli_query($conn, $cuid);
            $row = mysqli_fetch_assoc($res);
            $id = $row['Customer_ID'];

            $query = "SELECT * FROM Login_Log WHERE Customer_ID=$id";
            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) == 1) {
                  header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/privacyPolicy.php");
            } else {
                  header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/pastPrograms.php");
            }
      }
      return true;
} else {
      $query2 = "SELECT * FROM Trainer WHERE Email='$email'";
      $result2 = mysqli_query($conn, $query2)  or die("Could not connect database " . mysqli_error($conn));

      if (!$result2) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
      }
      $row2 = mysqli_fetch_assoc($result2);
      if (password_verify($password, $row2['Password'])) {
            session_start();
            $_SESSION["emailTrainer"] = $email;
            $_SESSION['authTrainer'] = TRUE;
            session_write_close();

            header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/mainTrainer.php");
            return true;
      } else {
            echo "<script>
                        swal({
                              title: 'Email or Password is Invalid',
                              text: '',
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



        } 
        ?>
  </body>       
</html>