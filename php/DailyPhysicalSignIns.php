<?php
    include 'initSeshTrainer.php';

$contentType="application/json";
if(strcasecmp($contentType, "application/json") == 0) {

    include 'connectDB.php';
    $count=0;
    
    $query = "SELECT * FROM Physical_Sign_In WHERE DATE(Date)=CURRENT_DATE";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $count++;
        
    }
    $emails = array_fill(0, $count, '');
    $names = array_fill(0, $count, '');
    $surnames = array_fill(0, $count, '');
    $time = array_fill(0, $count, '');


    $i=0;
    $query = "SELECT * FROM Physical_Sign_In WHERE DATE(Date)=CURRENT_DATE";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
       $emails[$i]=$row['Email'];
       $temp = new DateTime($row['Date']);
       $time[$i] = $temp->format('H:i');
       $i++; 
    }
    $i=0;
    $query = "SELECT * FROM Customer";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        for($i=0;$i<$count;$i++){
            if($emails[$i]===$row['Email']){
                $names[$i] = $row['Name'];
                $surnames[$i] = $row['Surname'];
            }
        }
        
    }
    
    $data = array($count,$names,$surnames,$time);
    
    //$data = json_decode($json);
    echo json_encode($data);
    //$hours = array(1, 2, 3,5,3,7,12,23,45,6,42,43,12,22,34,45,5);
    
    //$sql="INSERT INTO requests(hours) VALUES (".time().",'".$data->address."','".$data->region."','".$data->city."')";
    //$result = mysqli_query($conn, $sql);
    
$conn->close();
}
?>