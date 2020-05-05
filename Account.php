<?php

    include 'initSesh.php';

    include './php/connectDB.php';
    $mail=$_SESSION["email"];
    $query ="SELECT * FROM Customer WHERE Email='".$mail."'";
    $result = mysqli_query($conn, $query);
    $resultCust=mysqli_fetch_assoc($result);
    //Draw from tables
    
    //Display relevant values
    $userID = $resultCust['Customer_ID'];
    $name = $resultCust['Name'];
    $surname = $resultCust['Surname'];
    $phone = $resultCust['Telephone'];

    $query2 ="SELECT * FROM Memberships WHERE CustomerID=".$userID;
    $result2 = mysqli_query($conn, $query2);
    $resultMemb=mysqli_fetch_assoc($result2);

    $expires = $resultMemb['ExpirationDate'];
    $type = $resultMemb['Type'];
    
   $futureMemberships=array();

   $query3="SELECT * FROM On_Hold_Memberships WHERE UserID=".$userID." ORDER BY PrevExp ASC";
    $result3 = mysqli_query($conn, $query3);
    $i=0;
    while($row = mysqli_fetch_assoc($result3)) {
        $currentRow = array(
            "startDate" => $row["PrevExp"],
            "endDate" => $row["CalcExp"],
            "futureMembership" => $row["MembershipType"]
        );
         $futureMemberships[$i]=$currentRow; 
         $i=$i+1;
        }  
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script>
        $(function() {
            $("#includedContent").load("https://www.ironsky-app.com/navbarclient.php");
        });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">

    <link href="css/memberships.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

</head>
<style>
   /* not active 
#pills-home-tab:not(.active) {
    background-color: rgba(0, 0, 0, 0);
}

#pills-profile-tab :not(.active) {
    background-color: rgba(0, 0, 0, 0);
}


 active (faded) 
#pills-home-tab {
    background-color: rgba(255, 0, 0, 0.2);
    color: white;
}

#pills-profile-tab {
    background-color: rgba(255, 0, 0, 0);
}*/


    
</style>
<body style="background-color:#1E4072;">
    <!-- START OF NAVIGATION BAR -->

    <div id="includedContent"></div>
    <!-- END OF NAVIGATION BAR -->
    <div class="form-gap">
        <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
    </div>

    <div class="container">
        
        <div class=" col-lg-3 mx-auto">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Membership</a>
            </li>

        </ul>
        </div>
        <div clas="container">
            <div class="row">
                <div class="card bg-Dark col-lg-5 col-md-5 col-sm-5 col-xm-5 mx-auto">
                    
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <br>
                            <div class="card bg-secondary text-white" >
                                <div class="card-body d-flex justify-content-left align-items-center">
                                    
                                    <p style="text-align:left;"><u>Name:</u>
                                        <?php echo $name?>
                                            <?php echo $surname?>
                                    </p>
                                    </div>
                            </div>
                            <br>
                            <div class="card bg-secondary text-white">
                                <div class="card-body d-flex justify-content-left align-items-center">

                                    <p style="text-align:left;"><u>User ID:</u>
                                        <?php echo $userID?>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="card bg-secondary text-white">
                                <div class="card-body d-flex justify-content-left align-items-center">

                                    <p style="text-align:left;"><u>Email address:</u>
                                        <?php echo $mail?>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="card bg-secondary text-white">
                                <div class="card-body d-flex justify-content-left align-items-center">

                                    <p style="text-align:left;"><u>Phone Number:</u>
                                        <?php echo $phone?>
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <br>
                            <h2 style="font-size:20px; text-align:left;"><u>Current Membership</u></h2>
                            <br>
                            <div class="card bg-success text-white ">
                                <div class="card-body d-flex justify-content-left align-items-center">
                                    <p style="text-align:left;">Current Membership:
                                        <?php echo $type?>
                                        <br><br>
                                     Expiration Date:
                                        <?php echo $expires?>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <h2 style="font-size:20px; text-align:left;"><u>Prepaid Memberships</u></h2>
                            <br>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
<script>
$('#pills-tab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
<script>
 var php_var = <?php echo json_encode($futureMemberships); ?>;
    var obj=php_var;
    
    if(!isEmpty(obj)){
        obj.forEach(function(obj) {
            var outerDiv = document.createElement('div');
            var br = document.createElement("br")
            var pStart = document.createElement('p');
            var pEnd = document.createElement('p');
            var pMemb = document.createElement('p');
            pStart.innerHTML="Start Date YY/MM/DD: "+obj.startDate;
            pEnd.innerHTML="End Date YY/MM/DD: "+obj.endDate;
            pMemb.innerHTML="Membership: "+obj.futureMembership;
            outerDiv.className = 'card bg-info text-white d-flex justify-content-left align-items-center';
            var innerDiv = document.createElement('div');
            innerDiv.className = 'card-body';
            innerDiv.appendChild(pStart);
            innerDiv.appendChild(pEnd);
            innerDiv.appendChild(pMemb);
            outerDiv.appendChild(innerDiv);
            document.getElementById('pills-profile').appendChild(outerDiv);
            document.getElementById('pills-profile').appendChild(br);
        });
    }else{
        var noMembDiv= document.createElement('div');
        noMembDiv.className = 'card bg-info text-white ';
        var inner = document.createElement('div');
        inner.className = 'card-body d-flex justify-content-left align-items-center';
        var pNomemb = document.createElement('h2');
        var utext = document.createElement('u');
        utext.innerHTML = "No prepaid memberships";
        pNomemb.setAttribute('style','font-size:20px; text-align:left;');
        pNomemb.appendChild(utext);
        inner.appendChild(pNomemb);
        noMembDiv.appendChild(inner);
        document.getElementById('pills-profile').appendChild(noMembDiv);
        document.getElementById('pills-profile').appendChild(br);
    }
    
    
    
    function isEmpty(obj) {
    for(var key in obj) {
        if(obj.hasOwnProperty(key))
            return false;
    }
    return true;
}
</script>


</html>