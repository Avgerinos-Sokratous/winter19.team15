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
        $(function () {
            $("#includedContent").load("https://www.ironsky-app.com/navbarclient.php");
        });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">

    <link href="css/memberships.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
 
</head>
  <body style="background-color:#1E4072;">
      <!-- START OF NAVIGATION BAR -->

      <div id="includedContent"></div>
      <!-- END OF NAVIGATION BAR -->
      <div class="form-gap">
          <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
      </div>
       
      <div class="container">
       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Membership</a>
  </li>

</ul>
<div clas="container">
    <div class="row">

              <div class="col-lg-6 mx-auto">  
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
           <div class="card bg-secondary text-white">
        <div class="card-body">
            
            <p>User ID: <?php echo $userID?></p></div>
      </div>
      <br>
          <div class="card bg-secondary text-white">
            <div class="card-body">
                 
                 <p>Name: <?php echo $name?> <?php echo $surname?></p>
            </div>
      </div>
      <br>
      <div class="card bg-secondary text-white">
        <div class="card-body">
            
            <p>Email address: <?php echo $mail?></p>
        </div>
      </div>
      <br>
      <div class="card bg-secondary text-white">
        <div class="card-body">
            
            <p>Phone Number: <?php echo $phone?></p></div>
      </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <h2 style="font-size:30;"><u>Current Membership</u></h2>   
                    <br>
      <div class="card p-3 mb-2 bg-success text-white">
            <div class="card-body">
                  <p>Current Membership: <?php echo $type?></p>
                  <p>Expiration Date: <?php echo $expires?></p>
            </div>
            </div>
            <br> <h2 style="font-size:30;"><u>Prepaid Memberships</u></h2>   
                    <br>
 </div>
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
            outerDiv.className = 'card p-3 mb-2 bg-info text-white';
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
        noMembDiv.className = 'card p-3 mb-2 bg-info text-white';
        var inner = document.createElement('div');
        inner.className = 'card-body';
        var pNomemb = document.createElement('h2');
        var utext = document.createElement('u');
        utext.innerHTML = "No prepaid memberships";
        pNomemb.setAttribute('style','font-size:30;');
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