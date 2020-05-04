
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


  //$date= date('Y-m-d');
  $subject= $_POST["subject"];
  $message= $_POST["message"];


    $query = "UPDATE Announcements SET Title='$subject', Description='$message' WHERE Id=$_GET[Id]";
    $result = mysqli_query($conn, $query)  or die("Error at Database");

    if (!$result) 
    {
        printf("Error");
        exit();
    } 
      
     
     else
     {	
     echo "<script> 
     swal({
     title: 'Success!',
     text: 'Your Post was Updated successfully.',
     type: 'success',

     showConfirmButton: true
      }, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/TrainerAn.php';
      }); 
     $('.sweet-overlay').css('background-color','#1E4072');
     
      </script>";
      
      }

$conn->close();

?>