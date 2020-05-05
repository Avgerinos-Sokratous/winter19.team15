<?php

    include 'initSesh.php';
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Latest compiled JavaScript -->
    <script>
    $(function () {
    $("#includedContent").load("https://www.ironsky-app.com/navbarclient.php");
    });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body style="background-color:#1E4072;">
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
	<div class="container py-5">   
    <div class="row">

        <div class="col-sm-6 col-md-6">  
        <br>
        <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Calculation of BMR and Calories</h3>
                </div>
        <div class="card-body">
            <form class="form">
                    <div class="form-group col-7">
                        <div id="radio">
						      <label for="gender">Gender:</label>
                                <br>
						      <input type="radio" name="gender" id="male-checked" value="male" checked> Male
                                <br>
							 <input type="radio" name="gender" id="female-checked" value="female"> Female
						</div>
                </div>
                <div class="form-group col-7 col-lg-4">
                    <label for="weighT">Weight</label>
                    <input type="text" placeholder="ex. 80 (in kg)" class="form-control" id="weight" name="weight" required="">
                </div>
                <div class="form-group  col-7 col-lg-4">
                    <label for="height">Height</label>
                    <input type="text" placeholder="ex. 180 (in cm)" class="form-control" id="height" name="height" required="">
                </div>              
                <div class="form-group  col-7 col-lg-4">
                    <label for="age">Age</label>
                    <input type="text" placeholder="ex. 25 (in years)" class="form-control" id="age" name="age" required="">
                </div>       
                    <div class="form-group col-10">
                      <label for="inputState">Lifestyle</label>
                      <select id="inputState" class="form-control">
                        <option value="1.2" selected>I am sedentary (little or no exercise)</option>
                        <option value="1.375">I am lightly active (light exercise or sports 1-3 days per week)</option>
                      	<option value="1.55">I am moderately active (moderate exercise or sports 3-5 days per week) </option>
                        <option value="1.725">I am very active (hard exercise or sports 6-7 days per week) </option>
                        <option value="1.9">I am super active (very hard exercise or sports and a physical job) </option>
                      </select>
                    </div>
                
                 </form>
                 </div>
                 <div class="card-header">
                        <h4 class="mb-0">Weight Gain/Loss Goal (Optional)</h4>
                    </div>
                 <div class="card-body">
            <form class="form">
                <div class="form-group col-7 col-lg-4">
                    <label for="weight-goal">Weight Goal</label>
                    <input type="text" placeholder="ex. 80 (in kg)" class="form-control" id="weight-goal" name="weight-goal" required="">
                </div>
                <div class="form-group  col-7 col-lg-4">
                    <label for="time-span">Time Span</label>
                    <input type="text" placeholder="ex. 60 (in days)" class="form-control" id="time-span" name="time-span" required="">
                </div>
                 <div class="form-group">
                <div class="row">
                <div class="col-7 mx-auto">
                    <h6><span hidden id="error-span" style="font-size:60%; color:red;">&#42;Please enter realistic information</span></h6>
                </div>
                
                 
                <div class="col-5">
                   <button type="button" onclick="calculate()"class="btn btn-success btn-lg float-right">Calculate</button>
                </div>
                </div>
                 </div>         
                          
            </form>
        </div>
    </div>
		</div>
        <div class="col-sm-4 col-md-4">
        <br>  
        <div class="card" id="bmrcard" hidden>
                
        <div class="card-body">
            <form class="form" role="form">
                    <div class="form-group ">
                       <h3> <label for="bmr">Your BMR is: </label> </h3>
                        <h1><span style="width:100%; padding-top:5%; font-size:150%;" class="badge badge-info" id="bmr"></span></h1>
                        <br>
                        <h5 >Body Fat %: <span style="width:100%; color:red; padding-top:5%; padding-left:1%; font-size:120%;" id="fat"></span><span style="width:100%; color:red; padding-top:5%; padding-left:1%; font-size:120%;">%</span></h5>
                        <br>
                        <h5 >Lean Mass: <span style="width:100%; color:green; padding-top:5%; padding-left:1%; font-size:120%;" id="lean"></span><span style="width:100%; color:green; padding-top:5%; padding-left:1%; font-size:120%;">kg</span></h5>
                        <br>
                        <h5 >Fat Mass: <span style="width:100%; color:red; padding-top:5%; padding-left:1%; font-size:120%;" id="fatmass"></span><span style="width:100%; color:red; padding-top:5%; padding-left:1%; font-size:120%;">kg</span></h5>
                        <br>
                        <h3><label for="calories">Maintenance calories per day:</label></h3>
                        <h1><span style="width:100%; padding-top:5%; font-size:150%;" class="badge badge-success" id="calories"></span></h1>

                </div>
                           
            </form>
        </div>   
        <div class="card-body" id="goalcard" hidden>
            <form class="form" role="form">
                    <div class="form-group ">
                       <h3> <label for="cal-goal">Calories per day to achieve goal: </label> </h3>
                        <h1><span style="width:100%; padding-top:5%; color:white; font-size:150%;" class="badge badge-warning" id="cal-goal"></span></h1>
                        

                </div>
                           
            </form>
        </div>     
        </div>
        
    
		</div>
        </div>
    
    <script>
        function calculate(){
        document.getElementById('error-span').hidden=true;
            if((document.getElementById('male-checked').checked)&&((document.getElementById('height').value)!="")&&((document.getElementById('age').value)!="")&&((document.getElementById('weight').value)!="")) { 
                //console.log("iuhgoiugoiugugoiug");
                
                var height = document.getElementById('height').value;
                var weight = document.getElementById('weight').value;
                var age = document.getElementById('age').value;
                if(((height<50)||(height>300))||((weight<5)||(weight>200))||((age<5)||(age>100))){
                   document.getElementById('error-span').hidden=false;
                   return;
                }
                var bmr = (10*weight) + (6.25*height) - (5*age) + 5;
                var lifestyle = document.getElementById('inputState').value;
                var calories = Math.round(bmr * lifestyle); 
                var bmi = weight/((height/100)*(height/100));
                
                if(age<18){
                   var fat= Math.round((1.51 * bmi - 0.70 * age - 2.2)*100)/100;  
                }else{
                   var fat= Math.round((1.20 * bmi - 0.23 * age - 16.2)*100)/100;
                }
                
                var fatmass= Math.round((weight * fat/100)*10)/10;
                var lean= Math.round((weight * (100 - fat) / 100)*10)/10;

                document.getElementById('bmrcard').hidden= false;
                document.getElementById('bmr').innerHTML= bmr;
                document.getElementById('fat').innerHTML= fat;
                document.getElementById('lean').innerHTML= lean;
                document.getElementById('fatmass').innerHTML= fatmass;
                document.getElementById('calories').innerHTML= calories;
                
                if(((document.getElementById('weight-goal').value)!="")&&((document.getElementById('time-span').value)!="")) {
                    var goal= document.getElementById('weight-goal').value;
                    var days= document.getElementById('time-span').value;
                    
                    if(goal>=weight){
                        var dif= goal-weight;
                    }else{
                        var dif= -(goal-weight);
                    }  
                    var temp = dif/0.0001296;
                    var calperday = Math.round(temp/days); 
                    if(goal>=weight){
                        var goalcal= calories + calperday;
                        document.getElementById('goalcard').hidden= false;
                        document.getElementById('cal-goal').innerHTML= goalcal;
                    }else{
                        var goalcal= calories - calperday;
                        document.getElementById('goalcard').hidden= false;
                        document.getElementById('cal-goal').innerHTML= goalcal;
                    }
                }else{
                    document.getElementById('goalcard').hidden= true;    
                }
                
                
            }else if((document.getElementById('female-checked').checked)&&((document.getElementById('height').value)!="")&&((document.getElementById('age').value)!="")&&((document.getElementById('weight').value)!="")){
                 
                var height = document.getElementById('height').value;
                var weight = document.getElementById('weight').value;
                var age = document.getElementById('age').value;
                if(((height<50)||(height>300))||((weight<40)||(weight>200))||((age<5)||(age>100))){
                   document.getElementById('error-span').hidden=false;
                   return;
                }
                var bmr = (10*weight) + (6.25*height) - (5*age) - 161;
                
                var lifestyle = document.getElementById('inputState').value;
                var calories = Math.round(bmr * lifestyle);
                var bmi = weight/((height/100)*(height/100));
                
                if(age<18){
                   var fat= Math.round((1.51 * bmi - 0.70 * age - 1.4)*100)/100;  
                }else{
                   var fat= Math.round((1.20 * bmi - 0.23 * age - 5.4)*100)/100;
                }
                
                var fatmass= Math.round((weight * fat/100)*10)/10;
                var lean= Math.round((weight * (100 - fat) / 100)*10)/10; 
                
                document.getElementById('bmrcard').hidden= false;
                document.getElementById('bmr').innerHTML= bmr;
                document.getElementById('fat').innerHTML= fat;
                document.getElementById('lean').innerHTML= lean;
                document.getElementById('fatmass').innerHTML= fatmass;
                document.getElementById('calories').innerHTML= calories;
                
                if(((document.getElementById('weight-goal').value)!="")&&((document.getElementById('time-span').value)!="")) {
                    var goal= document.getElementById('weight-goal').value;
                    var days= document.getElementById('time-span').value;
                    if(goal>=weight){
                        var dif= goal-weight;
                    }else{
                        var dif= -(goal-weight);
                    }  
                    var temp = dif/0.0001296;
                    var calperday = Math.round(temp/days);
                
                    if(goal>=weight){
                        var goalcal = calories + calperday;
                        document.getElementById('goalcard').hidden= false;
                        document.getElementById('cal-goal').innerHTML= goalcal;
                    }else{
                        var goalcal= calories - calperday;
                        document.getElementById('goalcard').hidden= false;
                        document.getElementById('cal-goal').innerHTML= goalcal;
                    }
                }else{
                    document.getElementById('goalcard').hidden= true;    
                }
            }else{
                 document.getElementById('error-span').hidden=false;
            }
        }
    
    </script>
</body>
</html>