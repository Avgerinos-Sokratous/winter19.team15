<?php

    include 'initSesh.php';
    
?>
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
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/support.css">
    
    <!--===============================================================================================-->
    
    <script>
        $(function () 
        {
            $("#includedContent").load("https://www.ironsky-app.com/navbarclient.php");
        });
    </script>
    <style type="text/css">
	.container-contact100 {  align-content: start; padding-top: 5%;}
	.wrap-contact100 { width: 70%; align-items: left;   font-size: 20px;  border-style: solid;
  	border-color: Gainsboro;  background-color: white; }
	.contact100-form-title{ font-size: 35px; padding: 20px 0px 70px 0px; line-height: normal; color: teal; }
	.welcome{ width:100%; text-align:left; margin-bottom: -50px; color: DarkGoldenRod; font-size: 22px;}
	table, tr{  max-width: 100%; border-spacing: 0px 50px; border-collapse: separate;}
	td{border: 2px solid teal;  padding: 0px 10px 20px 5px; background-color: WhiteSmoke;}
	</style>
</head>

<body>
    
    <!-- START OF NAVIGATION BAR -->

    <div id="includedContent"></div>
    
    <!-- END OF NAVIGATION BAR -->

    
    <div class="form-gap">
        <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
    </div>
 

    <div class="container-contact100" style="background-color: rgba(255, 255, 255, 0)">
         <div class="row">
        
            <div class="col-lg-12 mx-auto"> 
        
        <div class="card" >
	
	<span class="contact100-form-title"> Announcements </span>	
	
	<span class="welcome"> Keep the spirit, Stay Updated! </span>

	<div class="RoundUp">  <?php include("php/ClientAn-PHP.php"); ?> </div>

	</div>
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



</body>
</html>
