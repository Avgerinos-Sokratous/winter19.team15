<?php

include 'initSeshTrainer.php';

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Latest compiled JavaScript -->


    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
</head>

<body>
    <!-- START OF NAVIGATION BAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img id="myImg" src="images/ironsky2.png" style="width:100%;max-width:50px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="mainTrainer.php" tabindex="-1">Home </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="TrainerAn.php" tabindex="-1">Announcements</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="statistics.php" tabindex="-1">Statistics</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="subscriptionsDue.php" tabindex="-1">Subscriptions-Due</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="createClass.php" tabindex="-1"> Create Class</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="deleteClass.php" tabindex="-1"> Delete Class</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="clientData.php" tabindex="-1">Client Data</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item active">
                    <a class="nav-link" href="https://www.ironsky-app.com/php/logout.php" tabindex="-1">
                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END OF NAVIGATION BAR -->
</body>

</html>