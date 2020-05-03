<?php
    include 'initSesh.php';

$contentType="application/json";
if(strcasecmp($contentType, "application/json") == 0) {

    include 'php/connectDB.php';

$email=$_SESSION['email'];
$flag=0;

    $query = "SELECT * FROM Physical_Sign_In WHERE DATE(Date)=CURRENT_DATE";
    $result = mysqli_query($conn, $query)  or die("Could not connect database");

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        
        exit();
    }
    while($row = mysqli_fetch_assoc($result)){
       $emaildb=$row['Email'];
       
       if($emaildb===$email){
            exit();
       }
    
    }
    
    $sql="INSERT INTO requests(timestamp,address,region,city) VALUES (".time().",'".$data->address."','".$data->region."','".$data->city."')";
    $result = mysqli_query($conn, $sql);
    
$conn->close();
}
?>