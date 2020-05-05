<?php

    include 'initSeshTrainer.php';
    
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Latest compiled JavaScript -->
   

    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
</head>
<body>
    <!-- START OF NAVIGATION BAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Trigger the Modal -->
        <img id="myImg" src="images/QR.png" alt="Scan with your phone to sign-in." style="width:100%;max-width:50px">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- The Close Button -->
            <span class="close">&times;</span>
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">
            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>
        <script src="js/QR.js"></script>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="mainTrainer.php" tabindex="-1">Home </a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="announcements.html" tabindex="-1">Announcements</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="messages.php" tabindex="-1">Messages</a>
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
                <li class="nav-item active">
                    <a class="nav-link" href="https://www.ironsky-app.com/php/logout.php" tabindex="-1">Logout</a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- END OF NAVIGATION BAR -->
</body>
</html>
