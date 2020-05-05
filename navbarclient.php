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
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/openlayers/4.6.5/ol.js"></script>
    
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/css/ol.css" type="text/css">
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
                    <a class="nav-link" href="ClientAn.php" tabindex="-1">Announcements</a>
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
                    <a class="nav-link" href="Account.php" tabindex="-1">My Account</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="support.php" tabindex="-1">Contact Us</a>
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
<script type="text/javascript">

var view = new ol.View({
  center: [0, 0],
  zoom: 2
});




var geolocation = new ol.Geolocation({
  // enableHighAccuracy must be set to true to have the heading value.
  trackingOptions: {
    enableHighAccuracy: true
  }
});


window.onload = function() {
  geolocation.setTracking(this);
};




var accuracyFeature = new ol.Feature();
geolocation.on('change', function() {
  accuracyFeature.setGeometry(geolocation.getAccuracyGeometry());
});

var positionFeature = new ol.Feature();



var positionFeature = new ol.Feature();


geolocation.on('change', function(){
      var coordinates = geolocation.getPosition();
  console.log("Coordinates: "+coordinates);

  var lat = coordinates[1];
  var lon = coordinates[0];

  var gymlat = 34.91449463277297;
  var gymlon = 33.62897792458534;
  var acc=geolocation.getAccuracy();
  var distance = getDistanceFromLatLonInKm(lat,lon,gymlat,gymlon);
  console.log("Accuracy: "+acc);
  console.log(distance);
  //if(acc>50){
    //  return;
 // }
  if(distance>50){
      
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        // Only run if the request is complete
        if (xhr.readyState !== 4) return;
        // Process our return data
        if (xhr.status >= 200 && xhr.status < 300) {
            //success code here
            
            console.log("Distance: "+distance);
            //console.log(xhr.responseText);

		
        } else {
            console.log('error', xhr);
        }
    };
    xhr.open('POST', 'location.php');
    xhr.setRequestHeader("Content-Type", "application/json");
    data = {};
    xhr.send(JSON.stringify(data)); //calls the php file
    
  }
  
});

function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  d = d*1000; //metres
  return d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180);
}


 				</script>
</body>

</html>