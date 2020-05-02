<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/support.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/TestAn-style.css">

    <!--===============================================================================================-->
    
    <script>
        $(function () 
        {
            $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/navbar.html");
        });
    </script>

    <style type="text/css">
	h4.logo {margin-bottom:0 }
	container-contact100{   padding: 20px 0px 70px 0px;  padding-top: 5%; display: grid; grid-template-columns: 1fr 1fr; grid-gap: 0px;}
	.wrap-contact100{ margin: 0px 0px 0px 50px; align-items: center; justify-content: center; height: 100%;  font-size: 20px;  }
	.contact100-form-title{ font-size: 35px; padding: 20px 0px 70px 0px; color: teal; }
	.welcome{ width:100%; text-align:left; margin-bottom: -50px; color: DarkGoldenRod; font-size: 22px;}
	table, tr{  max-width: 100%; border-spacing: 2px 50px; border-collapse: separate;}
	td{border: 2px solid teal;  padding: 0px 10px 20px 5px; background-color: WhiteSmoke;}
	
    </style>
</head>

<body>
    
    <!-- START OF NAVIGATION BAR -->

    <div id="includedContent"></div>
    
    <!-- END OF NAVIGATION BAR -->

    
    <div class="form-gap" style="background-color:#1E4072;">
        <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
    </div>

    <div class="container-contact100" style="background-color:#1E4072;">
        <div class="wrap-contact100"  >
	        
		<form class="contact100-form validate-form" method="POST" action= "php/TestAn-PHP.php">
               
		<span class="contact100-form-title">
                    Announcements
                </span>
                <span align-text:left; style="font-size: 26px">
                    Write Your Announcement
                </span>
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
                        Post Announcement
                    </button>

                </div> 
            </form>
 		
        </div>

<div class="container-contact100" style="align-items: left; background-color:#1E4072;">
        <div class="wrap-contact100"  >
	
	<span class="contact100-form-title"> Announcements </span>	
	
	<span class="welcome" > Keep the spirit, Stay Updated! </span>

	<div class="RoundUp">  <?php include("php/ClientAn-PHP.php"); ?> </div>

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



</body>
</html>
