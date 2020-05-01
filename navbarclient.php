<?php

include 'initSesh.php';

?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Windows version 5.6.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Latest compiled JavaScript -->


    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img id="myImg" src="images/ironsky2.png" style="width:100%;max-width:50px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="pastPrograms.php" tabindex="-1">Programs </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="announcements-client.html" tabindex="-1">Announcements</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="memberships.php" tabindex="-1">Memberships</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="clientNutrition.php" tabindex="-1">Nutritional Calculator</a>
                </li>
                 <li class="nav-item active">
                    <a class="nav-link" href="1RM.php" tabindex="-1">1RM Calculator</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="enroll.php" tabindex="-1">Enrollment</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="support.php" tabindex="-1">Contact Us</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item active">
                    <a class="nav-link" href="http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/php/logout.php" tabindex="-1">
                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>