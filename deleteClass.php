<?php sleep(1); ?>

<?php


include 'initSeshTrainer.php';


$servername="localhost";
$username = "ironsky";
$password = "pfVGdTzSOoLh85yp";
$dbname = "ironsky";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$classes=array();

$query = "SELECT * FROM ClassV1";
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));
    $i=0;
while($row = mysqli_fetch_assoc($result)) {
       
        $classesTest = array(
            "className" => $row["ClassName"],
            "classIndex" => $row["ClassIndex"]
        );
         $classes[$i]=$classesTest; 
         $i=$i+1;
        }  
         
 
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
    
</head>
<style>
    .checked {
    background-color: #800000;
}
.alreadyChecked{
    background-color:#484848;
}
</style>
<body style="background-color:#1E4072;" >

    <!-- START OF NAVIGATION BAR -->

    <div id="includedContent"></div>

    <!-- END OF NAVIGATION BAR -->
    <br>
    <div class="form-gap">
        <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
    </div>
    <br><br>
    <!-- START OF CONTAINER FOR CLASS CREATION -->
    
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-12 mx-auto">
                <!-- form card register -->
                <form data-ajax=�false�>
                    <div class="card ">
                        <div style="overflow-x:auto;">
                            <div class="card-header">
                                <h3 class="mb-0">Delete Classes</h3>
                            </div>

                            <div class="card-body">

                                
                                <!-- Default panel contents -->

                                <div class="row">
                                    <div class="col-sm-12 mx-auto">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Hours</th>
                                                    <th scope="col">Monday</th>
                                                    <th scope="col">Tuesday</th>
                                                    <th scope="col">Wednesday</th>
                                                    <th scope="col">Thursday</th>
                                                    <th scope="col">Friday</th>
                                                    <th scope="col">Saturday</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- 7:30-8:15 -->
                                                <tr>
                                                    <td data-id="1">7:30-8:15</td>
                                                    <td data-id="0"  data-position="0-1"><div id="0-1"></div></td>
                                                    <td data-id="0"  data-position="0-2"><div id="0-2"></div></td>
                                                    <td data-id="0"  data-position="0-3"><div id="0-3"></div></td>
                                                    <td data-id="0"  data-position="0-4"><div id="0-4"></div></td>
                                                    <td data-id="0"  data-position="0-5"><div id="0-5"></div></td>
                                                    <td data-id="0"  data-position="0-6"><div id="0-6"></div></td>

                                                </tr>
                                                <!-- 8:15-9:00- -->
                                                <tr>
                                                    <td data-id="1">8:15-9:00</td>
                                                    <td data-id="0" data-position="1-1"><div id="1-1"></div></td>
                                                    <td data-id="0" data-position="1-2"><div id="1-2"></div></td>
                                                    <td data-id="0" data-position="1-3"><div id="1-3"></div></td>
                                                    <td data-id="0" data-position="1-4"><div id="1-4"></div></td>
                                                    <td data-id="0" data-position="1-5"><div id="1-5"></div></td>
                                                    <td data-id="0" data-position="1-6"><div id="1-6"></div></td>
                                                </tr>
                                                <!-- 9:00-12:30- -->
                                                <tr>
                                                    <td data-id="1">9:00-12:30</td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                </tr>
                                                <!-- 12:30-15:30- -->
                                                <tr>
                                                    <td data-id="1">12:30-15:30</td>
                                                    <td data-id="1"><div> CLOSED</div></td>
                                                    <td data-id="1"><div>CLOSED</div></td>
                                                    <td data-id="1"><div>CLOSED</div></td>
                                                    <td data-id="1"><div>CLOSED</div></td>
                                                    <td data-id="1"><div>CLOSED</div></td>
                                                    <td data-id="1"><div></div></td>
                                                </tr>
                                                <!-- 15:30-17:15- -->
                                                <tr>
                                                    <td data-id="1">15:30-17:15</td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div></div></td>
                                                </tr>
                                                <!-- 17:15-18:00- -->
                                                <tr>
                                                    <td data-id="1">17:15-18:00</td>
                                                    <td data-id="0" data-position="2-1"><div id="2-1"></div></td>
                                                    <td data-id="0" data-position="2-2"><div id="2-2"></div></td>
                                                    <td data-id="0" data-position="2-3"><div id="2-3"></div></td>
                                                    <td data-id="0" data-position="2-4"><div id="2-4"></div></td>
                                                    <td data-id="0" data-position="2-5"><div id="2-5"></div></td>
                                                    <td data-id="1" data-position="2-6"><div id="2-6"></div></td>
                                                </tr>
                                                <!-- 18:00-18:45- -->
                                                <tr>
                                                    <td data-id="1">18:00-18:45</td>
                                                    <td data-id="0" data-position="3-1"><div id="3-1"></div></td>
                                                    <td data-id="0" data-position="3-2"><div id="3-2"></div></td>
                                                    <td data-id="0" data-position="3-3"><div id="3-3"></div></td>
                                                    <td data-id="0" data-position="3-4"><div id="3-4"></div></td>
                                                    <td data-id="0" data-position="3-5"><div id="3-5"></div></td>
                                                    <td data-id="1" data-position="3-6"><div id="3-6"></div></td>
                                                </tr>
                                                <!-- 18:45-19:30- -->
                                                <tr>
                                                    <td data-id="1">18:45-19:30</td>
                                                    <td data-id="0" data-position="4-1"><div id="4-1"></div></td>
                                                    <td data-id="0" data-position="4-2"><div id="4-2"></div></td>
                                                    <td data-id="0" data-position="4-3"><div id="4-3"></div></td>
                                                    <td data-id="0" data-position="4-4"><div id="4-4"></div></td>
                                                    <td data-id="0" data-position="4-5"><div id="4-5"></div></td>
                                                    <td data-id="1" data-position="4-6"><div id="4-6"></div></td>
                                                </tr>
                                                <!-- 19:30-20:15- -->
                                                <tr>
                                                    <td data-id="1">19:30-20:15</td>
                                                    <td data-id="0" data-position="5-1"><div id="5-1"></div></td>
                                                    <td data-id="0" data-position="5-2"><div id="5-2"></div></td>
                                                    <td data-id="0" data-position="5-3"><div id="5-3"></div></td>
                                                    <td data-id="0" data-position="5-4"><div id="5-4"></div></td>
                                                    <td data-id="0" data-position="5-5"><div id="5-5"></div></td>
                                                    <td data-id="1" data-position="5-6"><div id="5-6"></div></td>
                                                </tr>
                                                <!-- 20:15-21:00- -->
                                                <tr>
                                                    <td data-id="1">20:15-21:00</td>
                                                    <td data-id="0" data-position="6-1"><div id="6-1"></div></td>
                                                    <td data-id="0" data-position="6-2"><div id="6-2"></div></td>
                                                    <td data-id="0" data-position="6-3"><div id="6-3"></div></td>
                                                    <td data-id="0" data-position="6-4"><div id="6-4"></div></td>
                                                    <td data-id="0" data-position="6-5"><div id="6-5"></div></td>
                                                    <td data-id="1" data-position="6-6"><div id="6-6"></div></td>
                                                </tr>
                                                <!-- 20:15-21:30- -->
                                                <tr>
                                                    <td data-id="1">20:15-21:30</td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div></div></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button id="submit" class="btn btn-success btn-lg float-right">Delete</button>
                            </div>

                        </div>
                    </div>
                </form>


            </div>
        </div> 

        <!-- /form card register -->
    </div>
      
    <script>  
   var php_var = <?php echo json_encode($classes); ?>;
    var obj=php_var;
        obj.forEach(function(obj) {
            $("table td").each(function () {
            if ($(this).attr("data-id") != "1"){
             if(($(this).attr("data-position") === obj.classIndex)&&(!($(this).hasClass("alreadyChecked")))){
              document.getElementById(($(this).attr("data-position"))).innerHTML=obj.className;   
                $(this).toggleClass("alreadyChecked");
                }
                }
         }); 
         }); 

        $("table td").click(function () {
            if (($(this).attr("data-id") != "1")&&(($(this).hasClass("alreadyChecked")))){
                 $(this).removeClass("alreadyChecked");
                $(this).toggleClass("checked");
                }else if (($(this).attr("data-id") != "1")&&(($(this).hasClass("checked")))){
                   $(this).removeClass("checked");
                $(this).toggleClass("alreadyChecked");
                }
        });
        var positionsR = [];
        $("#submit").on("click", function (e) {    
                $("table td").each(function () {
                    if ($(this).hasClass("checked")) {
                    //console.log("eprepe na mpi meston positions")
                        positionsR.push($(this).attr("data-position"));
                    }      
                                   
                });
                    console.log(positionsR.toString()); 
                    console.log("X");
                  $.ajax({
                    url:  "php/removeClass.php",
                    type: "POST",
                    data: { positionsR: positionsR },
                    success: function(data){
                    }
                });   
        });   
    </script>
    <!-- END OF CONTAINER FOR CLASS CREATION -->
</body>
</html>