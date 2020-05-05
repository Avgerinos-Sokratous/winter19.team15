<?php
include 'initSesh.php';

$contentType="application/json";
if(strcasecmp($contentType, "application/json") == 0) {

    include 'php/connectDB.php';

$email=$_SESSION['email'];
$flag=0;
if($email==''){
    exit();
}

    $query = "SELECT DISTINCT Email FROM Physical_Sign_In WHERE DATE(Date)=CURRENT_DATE";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
       $emaildb=$row['Email'];
       
       if($emaildb===$email){
            exit();
       }
    
    }
    
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO Physical_Sign_In (Email,Date) VALUES ('$email','$date')";
    mysqli_query($conn,$sql);
    
$conn->close();
}


?>