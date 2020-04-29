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
	<script src="./js/memb.js"></script>
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
                        <h3 class="mb-0">Register New Customer</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" id="RegisterForm" autocomplete="off" action="php/register.php" method="post">
                            <div class="form-group">
                                <label for="input5">Name</label>
                                <input type="text" class="form-control" id="Name" name="Name" placeholder="First Name" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Surname</label>
                                <input type="text" class="form-control" id="Surname" name="Surname" placeholder="Last name" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Email</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp" id="Email" name="Email" placeholder="Email" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Address</label>
                                <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Phone</label>
                                <input type="number" class="form-control" id="Phone" name="Phone" placeholder="Phone Number" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Membership</label>
                                <select name="Membership" id="Memb">
                                    <option selected value="hide">--Please Select--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" onsubmit="RegisterNew()" class="btn btn-success btn-lg float-right">Register</button>
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
                        <h3 class="mb-0">Post Announcement</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off">
                            <div class="form-group">
                                <label for="input5">Title</label>
                                <input type="text" class="form-control" id="input4" placeholder="Title" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Subject</label>
                                <input type="text" class="form-control" id="input4" placeholder="Subject" required="" />
                            </div>
                            <div class="form-group">
                                <label for="input5">Description</label>
                                <textarea class="form-control" id="input5"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg float-right">Post</button>
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
