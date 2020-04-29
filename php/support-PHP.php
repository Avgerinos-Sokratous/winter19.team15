
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

$emailCustomer=$_POST["emailCustomer"];
$emailTrainer=$_POST["emailTrainer"];
$subject=$_POST["subject"];
$message=$_POST["message"];

if(($emailCustomer=="")||($emailTrainer=="")||($subject=="")||($message==""))
{
     header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/supportTest.php");
        return false;
}
else
{
    $query = "SELECT * FROM Customer WHERE Email='$emailCustomer'";
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    if (!$result) 
    {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    } 
    else
    {
        $query2 = "SELECT * FROM Trainer WHERE Email='$emailTrainer'";
        $result2 = mysqli_query($conn, $query2)  or die("Could not connect database " .mysqli_error($conn));

        if (!$result2)
        {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
        }
        $row = mysqli_fetch_assoc($result);
        //$row2 =  mysqli_fetch_assoc($result2);
        $name= $row['Name'];
        $surname = $row['Surname'];
        
        //printf($name);
          
        $headers = 'From: ' . $name . '< ' . $emailCustomer . ' >' . "\r\n" ;
        
         
        mail($emailTrainer,$subject,$message,$headers);
       
        echo "<script> 
       swal({
  title: 'Success!',
  text: 'Your email was sent successfully.',
  type: 'success',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
     
      </script>";
    }
    
}

$conn->close();

?>