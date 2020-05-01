<?php

    include 'initSesh.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ironsky Fitness</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/support.css">
    
    <!--===============================================================================================-->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Latest compiled JavaScript -->
    <script>
        $(function () {
            $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/navbarclient.php");
        });
     </script>
     <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-color:#1E4072;">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- START OF NAVIGATION BAR -->

    <div id="includedContent"></div>
    <!-- END OF NAVIGATION BAR -->
    <div class="form-gap" >
        <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
    </div>

    <div class="container" >
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" method="POST" >
                <span class="contact100-form-title">
                    Send Us A Message
                </span>


                <label class="label-input100" for="email">Enter your email *</label>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input id="email" class="input100" type="text" name="emailCustomer" placeholder="Eg. example@email.com">
                    <span class="focus-input100"></span>
                </div>
                
                 <label class="label-input100" for="email">Enter trainer email *</label>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input id="email" class="input100" type="text" name="emailTrainer" placeholder="Eg. example@email.com">
                    <span class="focus-input100"></span>
                </div>
                
                  <label class="label-input100" for="subject">Subject *</label>
                <div class="wrap-input100 validate-input" data-validate="Subject is required">
                    <input id="subject" class="input100" name="subject" placeholder="Write title of Subject">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="message">Message *</label>
                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn sub" type="submit" name="submit">
                        Send Message
                    </button>

                </div>

            </form>

            <div class="contact100-more flex-col-c-m" style="background-image: url('images/barbells.PNG');">
                <div class="flex-w size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-map-marker"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Address
                        </span>

                        <span class="txt2">
                            Old GSZ Stadium 13 Stadiou Street , Larnaca, 6021, Cyprus
                        </span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Lets Talk
                        </span>

                        <span class="txt3">
                            24 252226
                        </span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-envelope"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            General Support
                        </span>

                        <span class="txt3">
                            info@ironskyfitness.com
                        </span>
                    </div>
                </div>
                <div class="dis-flex size3 p-b-47 p-t-47">
                    <div class="txt3">
                        <a href="https://www.facebook.com/ironsky.fitness/"><img class="facebook" src="images/facebook-color.png"></a>
                        <a href="https://www.instagram.com/ironsky.fitness/?hl=en"><img class="contact" src="images/insta-color.png"> </a>
                        <a href="https://www.youtube.com/channel/UCEXv002x7GgComrUKPB130w/featured"><img class="contact" src="images/youtube-color.png"> </a>
                    </div>

                </div>
		
		<div>
			<a class="txt3" href="http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/privacyPolicy.php"> Privacy Policy</a>
		</div>
            </div>


        </div>


        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <script>
            $(".selection-2").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });
        </script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/support.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>

         <?php
        if(array_key_exists('submit', $_POST)) { 
            include 'php/connectDB.php';

$emailCustomer=$_POST["emailCustomer"];
$emailTrainer=$_POST["emailTrainer"];
$subject=$_POST["subject"];
$message=$_POST["message"];

if(($emailCustomer=="")||($emailTrainer=="")||($subject=="")||($message==""))
{
     header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/support.php");
        return false;
}
else
{
    $query = "SELECT * FROM Customer WHERE Email='$emailCustomer'";
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    if (!$result) 
    {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    } 
    else
    {
        $query2 = "SELECT * FROM Trainer WHERE Email='$emailTrainer'";
        $result2 = mysqli_query($conn, $query2)  or die("Could not connect database " .mysqli_error($conn));

        if (!$result2)
        {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
        }
        $row = mysqli_fetch_assoc($result);
        //$row2 =  mysqli_fetch_assoc($result2);
        $name= $row['Name'];
        $surname = $row['Surname'];
        
        //printf($name);
          
        $headers = 'From: ' . $name . '< ' . $emailCustomer . ' >' . "\r\n" ;
        
         
        mail($emailTrainer,$subject,$message,$headers);
       
        echo "<script> 
       swal({
  title: 'Success!',
  text: 'Your email was sent successfully.',
  type: 'success',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/support.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
     
      </script>";
    }
    
}

$conn->close();
} 
        ?>

</body>
</html>
