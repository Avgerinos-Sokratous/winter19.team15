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
  
  <body style="background-color:#1E4072;">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <!-- START OF NAVIGATION BAR -->
  
      <div id="includedContent"></div>
    <!-- END OF NAVIGATION BAR -->
  
   <br>
  <div class="form-gap">
      <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
  </div>
  
  <div class="container">
      <div class="row">
      <div class="col-md-10 mx-auto ">
      
      <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Current Day Statistics</h3>
                </div>
                <div class="card-body">
         <canvas id="myChart"></canvas>   
          <!--<script src="js/mdb.js"></script>
                     <script src="js/chart.js"></script>-->
 <script>                    
 var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        // Only run if the request is complete
        if (xhr.readyState !== 4) return;
        // Process our return data
        if (xhr.status >= 200 && xhr.status < 300) {
            //success code here

            //console.log(xhr.responseText);

		
        } else {
            console.log('error', xhr);
        }
    };
    xhr.open('POST', 'statsCollection.php');
    xhr.setRequestHeader("Content-Type", "application/json");
    data = {};
    data.address = advl;
    data.region = regval;
    data.city = cityval;
    xhr.send(JSON.stringify(data)); //calls the php file
    
  }
   var ctx = document.getElementById('myChart').getContext('2d');
   var hours = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
   var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        // Only run if the request is complete
        if (xhr.readyState !== 4) return;
        // Process our return data
        if (xhr.status >= 200 && xhr.status < 300) {
            //success code here

            //console.log(xhr.responseText);

		
        } else {
            console.log('error', xhr);
        }
    };
    xhr.open('POST', 'location.php');
    xhr.setRequestHeader("Content-Type", "application/json");
    data = {};
    data.address = advl;
    data.region = regval;
    data.city = cityval;
    xhr.send(JSON.stringify(data)); //calls the php file
    
  }
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['7:30', '8:30', '9:30', '10:30', '11:30', '12:30', '13:30', '14:30', '15:30', '16:30', '17:30', '18:30', '19:30', '20:30', '21:30'],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [ hours[0], hours[1], hours[2], hours[3], hours[4], hours[5], hours[6], hours[7], hours[8], hours[9], hours[10], hours[11], hours[12], hours[13], hours[14], hours[15] ]
        }]
    },

    // Configuration options go here
    options: {}
});
           </script>
                </div>
  </div>
  </div>
  
  </div>
  </div>
  </div>
  
  
  </body>
