
<?php sleep(1); ?>

<?php



    include 'initSeshTrainer.php';
   
include './php/connectDB.php';
$memberships=array();
$query = "SELECT * FROM Memberships inner join Customer WHERE Customer.Customer_ID=CustomerID AND ExpirationDate<=CURRENT_TIMESTAMP";
$result = mysqli_query($conn, $query)or die("Could not connect database " .mysqli_error($conn));
$i=0;
while($row = mysqli_fetch_assoc($result)) {
        //$row2 = mysqli_fetch_assoc($result2);
        $membershipRow = array(
            "customerID" => $row["CustomerID"],
            "customerName"=> $row["Name"],
             "customerSurname"=>$row["Surname"],
            "exp_date" => $row["ExpirationDate"],
            "type" => $row["Type"]  
        );
         $memberships[$i]=$membershipRow; 
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
    <link href="css/main.css" rel="stylesheet">
</head>
  
  <body style="background-color:#1E4072;" onload="generateTabs()">
  <!-- START OF NAVIGATION BAR -->
  
      <div id="includedContent"></div>
    <!-- END OF NAVIGATION BAR -->
  <!-- Modal -->
<!--<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Membership Renewed successfully.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->
<div class="list-group" id="memberships-tab" role="tablist"></div><br>
  <div class="form-gap">
      <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
  </div>
    <br><br>
<div class="container">
    <div style="color:white; font-size:4vw;"><strong>Expired Memberships</strong></div>
     
        <div class="col-8" id="clients"><div class="list-group" id="list-tab" role="tablist"> </div>
		
		<div id="details"><div class="tab-content" id="nav-tabContent"></div></div>
		</div>
        
   
</div>
      <script>
       var php_var = <?php echo json_encode($memberships); ?>;
        var obj=php_var;
      function generateTabs(){
        var i=0;
        obj.forEach(function(obj) {
         //Dynamically Create div for customer whose membership is expired.
        var expiredClient = document.createElement('div');
         
        if(i==0){
            expiredClient.className = 'list-group-item list-group-item-action active';
            expiredClient.classList.add("notCountable");
        }else{
            expiredClient.className = 'list-group-item list-group-item-action';
            expiredClient.classList.add("notCountable");
        }
      expiredClient.id = obj.customerID;
     // console.log(obj.customerID);
      expiredClient.setAttribute('data-toggle','list');
      expiredClient.setAttribute('role','tab');
      expiredClient.setAttribute('aria-controls','tab');
      expiredClient.setAttribute('style','text-align:center; font-size:3vw;');
      expiredClient.innerHTML=obj.customerName+" "+obj.customerSurname;
      var hreference="#inner";
      hreference+=obj.customerID;
      expiredClient.setAttribute('href',hreference);
      
     // console.log(hreference);
  
    //Dynamically Create div for details of expired membership.
    var innerDiv = document.createElement('div');
    var innerName="inner"+obj.customerID;
    innerDiv.id=innerName;
    //console.log(obj.customerID);
    if(i==0)
    innerDiv.className = 'tab-pane fade in active show';
    else
      innerDiv.className = 'tab-pane fade';
      
    innerDiv.setAttribute('role','tabpanel');
    innerDiv.setAttribute('aria-labelledby',expiredClient.id);
    var h5Tag = document.createElement('h5');
    h5Tag.setAttribute('class','text text-white');
    var strongTag = document.createElement('strong');
    var spanTag = document.createElement('span');
    var buttonTag = document.createElement('button')
    buttonTag.setAttribute('type','submit');
    innerName=obj.customerID;
    innerName+="b";
     buttonTag.setAttribute('onClick','reply_click(this.id)');
     buttonTag.setAttribute('id',innerName);
    buttonTag.setAttribute('class','btn btn-warning btn-lg float-right');
     //buttonTag.setAttribute('width','100%');
    //buttonTag.setAttribute('data-toggle','modal');
    //buttonTag.setAttribute('data-target','#successModal');
    buttonTag.innerHTML="Renew";
    strongTag.innerHTML="EXPIRED IN:<br>";
    spanTag.innerHTML=obj.exp_date+"<br><br>";
    h5Tag.appendChild(strongTag);
    h5Tag.appendChild(spanTag);
    
    h5Tag.appendChild(document.getElementById('memberships-tab'));
    //div class="list-group" id="memberships-tab" role="tablist">
    //  <a class="list-group-item list-group-item-action active" id="1" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Unlimited 3 Months</a>
    var membershipsDiv=document.createElement('div');
    membershipsDiv.setAttribute('class','list-group');
    var clientchoices="memberships-tab-of-client-"+obj.customerID;
    membershipsDiv.setAttribute('id',clientchoices);
    membershipsDiv.setAttribute('role','tablist');
    for(var j=1;j<11;j++){
    var innermembershipsDiv=document.createElement('div');
     innermembershipsDiv.setAttribute('data-toggle','list');
     innermembershipsDiv.setAttribute('role','tab');

      innermembershipsDiv.setAttribute('data-id',innerName);
     innermembershipsDiv.setAttribute('style','text-align:center; font-size:3vw;')
     //innermembershipsDiv.classList.add(innerDiv.id);
        switch(j) {
        case 1:
        if(obj.type==="Unlimited 3 Months")
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action active');
         else
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action'); 
        innermembershipsDiv.innerHTML="Unlimited 3 Months";     
        break;
        case 2:
        if(obj.type==="3 Sessions / Week 3 Months")
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action active');
         else
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action'); 
        innermembershipsDiv.innerHTML="3 Sessions / Week 3 Months";
        break;
        case 3:
        if(obj.type==="Open Gym 3 Months")
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action active');
         else
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action'); 
        innermembershipsDiv.innerHTML="Open Gym 3 Months";
        break;
        case 4:
        if(obj.type==="Grow Strong 3 Months")
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action active');
         else
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action'); 
       innermembershipsDiv.innerHTML="Grow Strong 3 Months";
        break;
        case 5:
        if(obj.type==="We Move 3 Months")
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action active');
         else
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action'); 
        innermembershipsDiv.innerHTML="We Move 3 Months";
        break;
        case 6:
        if(obj.type==="Unlimited")
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action active');
         else
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action'); 
        innermembershipsDiv.innerHTML="Unlimited";
        break;
        case 7:
        if(obj.type==="3 Sessions / Week")
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action active');
         else
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action'); 
       innermembershipsDiv.innerHTML="3 Sessions / Week";
        break;
        case 8:
        if(obj.type==="Open Gym")
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action active');
         else
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action'); 
        innermembershipsDiv.innerHTML="Open Gym";
        break;
        case 9:
        if(obj.type==="Grow Strong")
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action active');
         else
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action'); 
        innermembershipsDiv.innerHTML="Grow Strong";
        break;
        case 10:
        if(obj.type==="We Move")
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action active');
         else
            innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action'); 
        innermembershipsDiv.innerHTML="We Move";
        break;
      default:
        // Do nothing
        break;
    }
		  //innermembershipsDiv.classList.add(innerName);

   // console.log(j);
     membershipsDiv.appendChild(innermembershipsDiv);
  }
    h5Tag.appendChild(membershipsDiv);
    innerDiv.appendChild(buttonTag);  
    innerDiv.appendChild(h5Tag);
     
    //Append customer tab to navigationbar and corresponding detatails to details div.
    document.getElementById('nav-tabContent').appendChild(innerDiv);
    document.getElementById('list-tab').appendChild(expiredClient);
	
    i++;
   });
    
   }
   var updatedCustomers = [];
        function reply_click(clicked_id){
      //console.log(clicked_id);
        var buttonID=clicked_id;
        //buttonID+="b";
         //console.log(buttonID);     
                //$("div").each(function () {
				var tab;
                $("div").each(function () {
                    var selectFromTab=$(this).attr('id');
					selectFromTab+="b";
                    if(selectFromTab==buttonID){
					if($(this).hasClass("notCountable")){
						console.log($(this).attr("id"));
						var id=$(this).attr("id");
						//console.log(id);
					   tab=selectFromTab;
						updatedCustomers.push($(this).attr("id"));

                    }
					}
                });
				$("div").each(function () {
						if($(this).attr('role')=='tab')
							if($(this).attr('data-id')==tab)
								if($(this).hasClass('list-group-item list-group-item-action active')){
									console.log($(this).text());
									var newMembership=$(this).text();
									console.log(newMembership);
									updatedCustomers.push(newMembership);
								}
				});
                  $.ajax({
                    url:  "php/updateExpiredMembership.php",
                    type: "POST",
                    data: { customer_id:updatedCustomers[0],customer_membership:updatedCustomers[1]},
                    success: function(data){
                    //console.log(updatedCustomers);
                    }
                });
            
          location.reload();    
       }
   
      </script>

  </body>
