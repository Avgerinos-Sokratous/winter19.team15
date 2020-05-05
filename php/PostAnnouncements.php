
<head>
</head>
<body>          
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</body>

<?php
include 'connectDB.php';


  //$id= $_POST["Id"];
  $date= date('Y-m-d');
  $subject= $_POST["subject"];
  $message= $_POST["message"];



 if(($date=="")||($subject=="")||($message==""))
 {
     header("Location:https://www.ironsky-app.com/TrainerAn.php");
     return false;
 }

 else
 {	
    $query = "INSERT INTO Announcements (Date, Title, Description) VALUES ('$date','$subject','$message')";

    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    if (!$result) 
    {
        printf("Error");
        exit();
    } 
       

     echo "<script> 
     swal({
     title: 'Success!',
     text: 'Your Post was uploaded successfully.',
     type: 'success',

     showConfirmButton: true
      }, function(){
      window.location.href = 'https://www.ironsky-app.com/TrainerAn.php';
      }); 
     $('.sweet-overlay').css('background-color','#1E4072');
     
      </script>";
      }

    
 

$conn->close();

?>