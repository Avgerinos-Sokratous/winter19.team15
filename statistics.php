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
            $("#includedContent").load("https://www.ironsky-app.com/navTrainer.php");
        });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/main.css" rel="stylesheet">
</head>
  
  <body style="background-color:#1E4072;" onload="Logins()">
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
                        <h3 class="mb-0">Entries for Today</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart"></canvas>   
                    </div>
                </div>
            </div>
            <!--</div>
            <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Who Checked-In?</h3>
                    </div>
                    <div class="card-body">
                         
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto ">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Entries for Current Week</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart2"></canvas>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto ">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Class Enrollments</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart3"></canvas>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mx-auto ">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Daily Logins</h3>
                    </div>
                    <div class="card-body">
                        <h1><span style="width:100%; padding-top:5%; color:white; font-size:150%;" class="badge badge-success" id="numberoflogins"></span></h1>   
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mx-auto ">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Distinct Users</h3>
                    </div>
                    <div class="card-body">
                        <h1><span style="width:100%; padding-top:5%; color:white; font-size:150%;" class="badge badge-warning" id="distinctlogins"></span></h1>   
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-9 col-sm-9 mx-auto ">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Who Visited the Gym Today?</h3>
                    </div>
                    <div class="card-body">
                        <div style='overflow-y:auto; max-height: 100px;'>
                          <table id="people" class="table table-striped ">
                          
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
 
 <script>                    

   var ctx = document.getElementById('myChart').getContext('2d');

   //var hours = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
   var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        // Only run if the request is complete
        if (xhr.readyState !== 4) return;
        // Process our return data
        if (xhr.status >= 200 && xhr.status < 300) {
            //success code here

            //console.log(xhr.responseText);
            var hours = JSON.parse(xhr.responseText);
            var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',
        
            // The data for our dataset
            data: {
                labels: ['...7:30', '8:30', '9:30', '10:30', '11:30', '12:30', '13:30', '14:30', '15:30', '16:30', '17:30', '18:30', '19:30', '20:30', '21:30...'],
                datasets: [{
                    label: 'Number of people',
                    backgroundColor: 'rgb(0, 128, 255)',
                    borderColor: 'rgb(0, 128, 255)',
                    data: [ hours[0], hours[1], hours[2], hours[3], hours[4], hours[5], hours[6], hours[7], hours[8], hours[9], hours[10], hours[11], hours[12], hours[13], hours[14] ]
                }]
            },
        
            // Configuration options go here
            options: {
                scales: {
                    xAxes: [{
                       ticks: {
                        fontSize: 9
                       }
                      }],
                    yAxes: [{
                        ticks: {
                            suggestedMax: 10,
                            suggestedMin: 0,
                            beginAtZero: true,
                            stepSize: 5
                        }
                    }]
                    
                },
                legend: {
                    display: false,
                    labels: {
                    // This more specific font property overrides the global property
                    fontSize : 7
                    }
                }
                
            }
    });
		
        } else {
            console.log('error', xhr);
        }
    };
    xhr.open('POST', 'php/DailyStats.php');
    xhr.setRequestHeader("Content-Type", "application/json");
    data = {};
    //data.hours = hours;
    
    xhr.send(JSON.stringify(data)); //calls the php file
    //--------------------------------------------------
    //-----------------Chart2---------------------------
    
    var ctx2 = document.getElementById('myChart2').getContext('2d');
    var xhr2 = new XMLHttpRequest();
    xhr2.onreadystatechange = function () {
        // Only run if the request is complete
        if (xhr2.readyState !== 4) return;
        // Process our return data
        if (xhr2.status >= 200 && xhr2.status < 300) {
            //success code here

            //console.log(xhr.responseText);
            var days = JSON.parse(xhr2.responseText);
            
            var names = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            var colors = [ '#2685CB', '#4AD95A', '#FEC81B', '#FC3026', '#CE00E6', '#B8CCE3', '#6ADC88' ];
            var chart2 = new Chart(ctx2, {
            // The type of chart we want to create
            type: 'bar',
        
            // The data for our dataset
            data: {
                labels: names,
                datasets: [{
                    label: 'Number of people',
                    backgroundColor: colors,
                    borderColor: colors,
                    data:  days
                }]
            },
        
            // Configuration options go here
            options: {
                scales: {
                    xAxes: [{
                       ticks: {
                        fontSize: 9
                       }
                      }],
                    yAxes: [{
                        ticks: {
                            suggestedMax: 10,
                            suggestedMin: 0,
                            beginAtZero: true,
                            stepSize: 5
                        }
                    }]
                    
                },
                legend: {
                    display: false,
                    labels: {
                    // This more specific font property overrides the global property
                    fontSize : 7
                    }
                }
                
            }
    });
		
        } else {
            console.log('error', xhr2);
        }
    };
    xhr2.open('POST', 'php/WeeklyStats.php');
    xhr2.setRequestHeader("Content-Type", "application/json");
    data2 = {};
    //data.hours = hours;
    
    xhr2.send(JSON.stringify(data2)); //calls the php file
    
    //--------------------------------------------------
    //----------------------Chart3----------------------
    
    var ctx3 = document.getElementById('myChart3').getContext('2d');
    var xhr3 = new XMLHttpRequest();
    xhr3.onreadystatechange = function () {
        // Only run if the request is complete
        if (xhr3.readyState !== 4) return;
        // Process our return data
        if (xhr3.status >= 200 && xhr3.status < 300) {
            //success code here

            //console.log(xhr.responseText);
            var enrolls = JSON.parse(xhr3.responseText);
            var colors = [ '#2685CB', '#4AD95A', '#FEC81B', '#FC3026', '#B8CCE3', '#6ADC88', '#FEE45F', '#FD8D14', '#CE00E6', '#4B4AD3'  ];
            var i;
                    var data = {
                    labels: enrolls[0],
                      datasets: [
                        {
                            fill: true,
                            backgroundColor:colors,
                            data: enrolls[1],
                            // Notice the borderColor 
                            borderColor:colors,
                            borderWidth: [2]
                        }
                    ]
                };
            

// Notice the rotation from the documentation.

var options = {
      
        rotation: -0.7 * Math.PI,
        responsive:true,
        legend: {
            labels: {
                // This more specific font property overrides the global property
                fontSize : 7
            }
        }
    
};


// Chart declaration:
var myBarChart = new Chart(ctx3, {
    type: 'pie',
    data: data,
    options: options
});

		
        } else {
            console.log('error', xhr3);
        }
    };
    xhr3.open('POST', 'php/EnrollmentStats.php');
    xhr3.setRequestHeader("Content-Type", "application/json");
    data3 = {};
    //data.hours = hours;
    
    xhr3.send(JSON.stringify(data3)); //calls the php file
    
    function Logins(){
        var xhr4 = new XMLHttpRequest();
        xhr4.onreadystatechange = function () {
            // Only run if the request is complete
            if (xhr4.readyState !== 4) return;
            // Process our return data
            if (xhr4.status >= 200 && xhr4.status < 300) {
                //success code here
                var daily=JSON.parse(xhr4.responseText);
    		    document.getElementById('numberoflogins').innerHTML=daily[0];
    		    document.getElementById('distinctlogins').innerHTML=daily[1];
    		
            } else {
                console.log('error', xhr4);
            }
        };
        xhr4.open('POST', 'php/DailyLogins.php');
        xhr4.setRequestHeader("Content-Type", "application/json");
        data4 = {};
        /*data.address = advl;
        data.region = regval;
        data.city = cityval;*/
        xhr4.send(JSON.stringify(data4)); //calls the php file
        
        
        var xhr5 = new XMLHttpRequest();
        xhr5.onreadystatechange = function () {
            // Only run if the request is complete
            if (xhr5.readyState !== 4) return;
            // Process our return data
            if (xhr5.status >= 200 && xhr5.status < 300) {
                //success code here
                var people=JSON.parse(xhr5.responseText);

    		    var table = document.getElementById("people");
                for(var i=0; i<people[0]; i++){
                  var row = table.insertRow(0);
                  var cell1 = row.insertCell(0);
                  var cell2 = row.insertCell(0);
                  var cell3 = row.insertCell(0);
                  cell1.innerHTML = people[3][i];
                  cell2.innerHTML = people[2][i];
                  cell3.innerHTML = people[1][i];
                }
    		
            } else {
                console.log('error', xhr5);
            }
        };
        xhr5.open('POST', 'php/DailyPhysicalSignIns.php');
        xhr5.setRequestHeader("Content-Type", "application/json");
        data5 = {};
        /*data.address = advl;
        data.region = regval;
        data.city = cityval;*/
        xhr5.send(JSON.stringify(data5)); //calls the php file
      
    }

      

           </script>
  
  
  </body>
  </html>
