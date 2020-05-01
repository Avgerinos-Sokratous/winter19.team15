<?php

    include 'initSeshTrainer.php';
    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
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
    <script>
    $(function () {
    $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/navTrainer.php");
    });
    </script>
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
        <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
    </div>

    <!-- START OF CONTAINER FOR NEW REGISTER -->
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-8 mx-auto">
                <!-- form card new register -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Retrieve Client Data</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" id="RetriveForm" autocomplete="off" action="php/retriveClientData.php" method="post">
                            <div class="form-group">
                                <label for="input5">Email</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp" id="Email" name="Email" placeholder="Email" required />
                            </div>
			    <div class="form-group">
                                <label for="input5">Password</label>
                                <input type="password" class="form-control" aria-describedby="emailHelp" id="Password" name="Password" placeholder="password" required />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg float-right">Retrieve</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form card register -->
            </div>
        </div>
    </div>
    <!-- END OF CONTAINER FOR FOR NEW REGISTER -->
    <!-- START OF CONTAINER FOR ANNOUNCEMENT -->
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-8 mx-auto">
                <!-- form card register -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Delete Client Data</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" id="RetriveForm" autocomplete="off" action="php/deleteClientData.php" method="post">
                            <div class="form-group">
                                <label for="input5">Email</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp" id="Email" name="Email" placeholder="Email" required />
                            </div>
			    <div class="form-group">
                                <label for="input5">Password</label>
                                <input type="password" class="form-control" aria-describedby="emailHelp" id="Password" name="Password" placeholder="password" required />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-lg float-right">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form card register -->
            </div>
        </div>
    </div>
    <!-- END OF CONTAINER FOR ANNOUNCEMENT -->


</body>
</html>
