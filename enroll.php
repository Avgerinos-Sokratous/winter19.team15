<?php

    include 'initSesh.php';
    
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Windows version 5.6.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <script src="js\enroll.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <!-- Latest compiled JavaScript -->
    <script>
        $(function () {
            $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/navbarclient.php");
        });

/**/</script>

    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/main.css" rel="stylesheet">
</head>
<body style="background-color:#1E4072;" onload="fill()">
    <!-- START OF NAVIGATION BAR -->
    <div id="includedContent"></div>

    <!-- END OF NAVIGATION BAR -->

    <br>
    <div class="form-gap">
        <h4 class="logo ml-4 text-white">
            I R O N S K Y<br>
            <span>FITNESS</span>
        </h4>
    </div>
    <div class="container">
        <div class="card">


            <h2> <strong>Available Classes</strong></h2>

            <div style="overflow-x:auto;">
                <select name="day" id="selectDay">
                    <option selected value="hide">--Please Select--</option>

                </select>
                <button id="show_button" onClick="passItem('selectDay');"><i class="fa fa-search"></i></button>
                <label id="warn" class="warning" style="visibility: hidden;">Please select day!</label>
                <table class="table" id="Classes" style="background-color:white;">
                    
                </table>
            </div>

        </div>
    </div>

    </div>
</body>
</html>
