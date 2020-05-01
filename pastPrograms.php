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
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Latest compiled JavaScript -->
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/main.css" rel="stylesheet">
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
        
        <div class="container">
          <div class="row">
              <div class="col-md-12 col-xs-12 mb-3 py-0">
                 <!-- <div class="list-group" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action active" id="list-n1-list" data-toggle="list" href="#list-n1" role="tab" aria-controls="n1"></a>
                      <a class="list-group-item list-group-item-action" id="list-n2-list" data-toggle="list" href="#list-n2" role="tab" aria-controls="n2"></a>
                      <a class="list-group-item list-group-item-action" id="list-n3-list" data-toggle="list" href="#list-n3" role="tab" aria-controls="n3"></a>
                      <a class="list-group-item list-group-item-action" id="list-n4-list" data-toggle="list" href="#list-n4" role="tab" aria-controls="n4"></a>
                      <a class="list-group-item list-group-item-action" id="list-n5-list" data-toggle="list" href="#list-n5" role="tab" aria-controls="n5"></a>
                      <a class="list-group-item list-group-item-action" id="list-n6-list" data-toggle="list" href="#list-n6" role="tab" aria-controls="n6"></a>
                      <a class="list-group-item list-group-item-action" id="list-n7-list" data-toggle="list" href="#list-n7" role="tab" aria-controls="n7"></a>
                  </div>  -->
                  <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" id="list-n1-list" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 100%;">
                            Collapsible Group Item #1
                          </button>
                        </h5>
                      </div>                 
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="content0">
                         </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" id="list-n2-list" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: 100%;">
                            Collapsible Group Item #2
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body" id="content1">
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" id="list-n3-list" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="width: 100%;">
                            Collapsible Group Item #3
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body" id="content2">
                          </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" id="list-n4-list" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="width: 100%;">
                            Collapsible Group Item #4
                          </button>
                        </h5>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body" id="content3">
                         </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" id="list-n5-list" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="width: 100%;">
                            Collapsible Group Item #5
                          </button>
                        </h5>
                      </div>
                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body" id="content4">
                         </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" id="list-n6-list" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="width: 100%;">
                            Collapsible Group Item #6
                          </button>
                        </h5>
                      </div>
                      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body" id="content5">
                         </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingSeven">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" id="list-n7-list" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="width: 100%;">
                            Collapsible Group Item #7
                          </button>
                        </h5>
                      </div>           
                      <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body" id="content6">
                         </div>
                      </div>
                    </div>
                  </div>
              </div>
            
            
             <!-- <div class="col-md-7 col-xs-12"  >
                  <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="list-n1" role="tabpanel" aria-labelledby="list-n1-list">
                          <h5 class="text text-black">
                                <div class="card card-body" id="content0">
                                </div>
                      </div>
                      <div class="tab-pane fade" id="list-n2" role="tabpanel" aria-labelledby="list-n2-list">
                          <h5 class="text text-black">                              
                              <div class="card card-body" id="content1">
                              </div>   
                      </div>
                      <div class="tab-pane fade" id="list-n3" role="tabpanel" aria-labelledby="list-n3-list">
                          <h5 class="text text-black">
                              <div class="card card-body" id="content2">
                              </div> 
                      </div>
                      <div class="tab-pane fade" id="list-n4" role="tabpanel" aria-labelledby="list-n4-list">
                          <h5 class="text text-black">
                              <div class="card card-body" id="content3">
                              </div>
                      </div>
                      <div class="tab-pane fade" id="list-n5" role="tabpanel" aria-labelledby="list-n5-list">
                          <h5 class="text text-black">
                              <div class="card card-body" id="content4">
                              </div>
                      </div>     
                      <div class="tab-pane fade" id="list-n6" role="tabpanel" aria-labelledby="list-n6-list">
                          <h5 class="text text-black">
                              <div class="card card-body" id="content5">
                              </div>
                      </div>     
                      <div class="tab-pane fade" id="list-n7" role="tabpanel" aria-labelledby="list-n7-list">
                          <h5 class="text text-black">
                              <div class="card card-body" id="content6">
                              </div>
                      </div> 
                    </div>                
                  </div> -->
              </div>
          </div>                          
        </div>
</body>
<script>
        $(function () {
            $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/navbarclient.php");
        });
        
        var dayEmpty0 = false;
        var dayEmpty1 = false;
        var dayEmpty2 = false;
        var dayEmpty3 = false;
        var dayEmpty4 = false;
        var dayEmpty5 = false;
        var dayEmpty6 = false;
       //$.ajax({ url: "./php/pastPrograms.php", type:"GET",  success: function(data) { console.log(data); } });
       var i;
         $.ajax({ url: "./php/day0.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("End of Program"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+25; j++) 
              {
                  text += data[j];
              }
             
              if( text.toString() == "")
              {
                dayEmpty0 = true;
              }                        
              $("#content0").html(text); 
              
            /* var i = 0;
             let x = document.getElementsByClassName("BlogItem-title");
             let y = document.getElementById("list-n1-list");
             if(!dayEmpty0)
             {              
                y.innerText = x[0].innerText;
                //i = i +1;
             }
             else
             {
                y.innerText = " ";
             }   */
          },async: false 
         });
         
         $.ajax({ url: "./php/day1.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("End of Program"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+25; j++) 
              {
                  text += data[j];
              }
            
              if( text.toString() == "")
              {
                dayEmpty1 = true;
              }                      
              $("#content1").html(text);
              
             let x = document.getElementsByClassName("BlogItem-title");
             let y = document.getElementById("list-n2-list");
             if(!dayEmpty1)
             {
                y.innerText = x[1].innerText;
               // i = i +1;
             }
             else
             {
                y.innerText = " ";
             }
          },async: false 
         });
         $.ajax({ url: "./php/day2.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("End of Program"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+25; j++) 
              {
                  text += data[j];
              }
               
              if( text.toString() == "")
              {
                dayEmpty2 = true;
              }                               
              $("#content2").html(text);  
          }, async: false 
         }); 
         $.ajax({ url: "./php/day3.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("End of Program"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+25; j++) 
              {
                  text += data[j];
              }
              
              if( text.toString() == "")
              {
                dayEmpty3 = true;
              }                               
              $("#content3").html(text);    
          }, async: false 
         });
         $.ajax({ url: "./php/day4.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("End of Program"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+25; j++) 
              {
                  text += data[j];
              }
              
              if( text.toString() == "")
              {
                dayEmpty4 = true;
              }                               
              $("#content4").html(text);   
          }, async: false 
         });
         $.ajax({ url: "./php/day5.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("End of Program"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+25; j++) 
              {
                  text += data[j];
              }
              
              if( text.toString() == "")
              {
                dayEmpty5 = true;
              }                               
              $("#content5").html(text);    
          }, async: false 
         });
         $.ajax({ url: "./php/day6.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("End of Program"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+25; j++) 
              {
                  text += data[j];
              }
              
              if( text.toString() == "")
              {
                dayEmpty6 = true;
              }                               
              $("#content6").html(text);    
          }, async: false 
         });
         
         $( document ).ready(function()
         {
           setTimeout(function()
           { 
             var i = 0;
             var x = document.getElementsByClassName("BlogItem-title");
             console.log(x);
             var y = document.getElementById("list-n1-list");
             if(!dayEmpty0)
             {
                y.innerText = x[i].innerText;
                i = i +1;
             }
             else
             {
                y.innerText = " ";
             }
             y = document.getElementById("list-n2-list");
             if(!dayEmpty1)
             {
                y.innerText = x[i].innerText;
                i = i +1;
             }
             else
             {
                y.innerText = " ";
             }
             y = document.getElementById("list-n3-list");
              if(!dayEmpty2)
             {
                y.innerText = x[i].innerText;
                i = i +1;
             }
             else
             {
                y.innerText = " ";
             }
             y = document.getElementById("list-n4-list");
              if(!dayEmpty3)
             {
                y.innerText = x[i].innerText;
                i = i +1;
             }
             else
             {
                y.innerText = " ";
             }
             y = document.getElementById("list-n5-list");
              if(!dayEmpty4)
             {
                y.innerText = x[i].innerText;
                i = i +1;
             }
             else
             {
                y.innerText = " ";
             }
             y = document.getElementById("list-n6-list");
              if(!dayEmpty5)
             {
                y.innerText = x[i].innerText;
                i = i +1;
             }
             else
             {
                y.innerText = " ";
             }
             y = document.getElementById("list-n7-list");
              if(!dayEmpty6)
             {
                y.innerText = x[i].innerText;
                i = i +1;
             }
             else
             {
                y.innerText = " ";
             } 
          }, 5);
           
           
        });  
</script>
</html>