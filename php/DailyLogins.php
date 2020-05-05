<?php
include 'initSeshTrainer.php';

$contentType="application/json";
if(strcasecmp($contentType, "application/json") == 0) {

    include 'connectDB.php';
    $count=0;
    $countdistinct=0;

    $query = "SELECT * FROM Login_Log WHERE DATE(Date)=CURRENT_DATE";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $count++;
    }
    
    $query = "SELECT DISTINCT Customer_ID FROM Login_Log WHERE DATE(Date)=CURRENT_DATE";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $countdistinct++;
    }
    
    $data=array($count,$countdistinct);

    echo json_encode($data);
    
$conn->close();
}


?>