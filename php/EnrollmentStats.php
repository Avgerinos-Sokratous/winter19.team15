<?php
    include 'initSeshTrainer.php';

$contentType="application/json";
if(strcasecmp($contentType, "application/json") == 0) {

    include 'connectDB.php';
    $count = 0;

    $query = "SELECT DISTINCT ClassName FROM Enrolled";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $count++;
        
    }
    $classes = array_fill(0, $count, 0);
    $names = array_fill(0, $count, '');
    $i=0;
    $query = "SELECT DISTINCT ClassName FROM Enrolled";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $names[$i]=$row['ClassName'];
        $i++;
    }
    $i=0;
    $query = "SELECT * FROM Enrolled";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        for($i=0;$i<$count;$i++){
            if($row['ClassName']==$names[$i]){
                $classes[$i]++;
            }
        }
        
    }
    $data = array($names,$classes,$count);
    //$data = json_decode($json);
    echo json_encode($data);
    //$hours = array(1, 2, 3,5,3,7,12,23,45,6,42,43,12,22,34,45,5);
    
    //$sql="INSERT INTO requests(hours) VALUES (".time().",'".$data->address."','".$data->region."','".$data->city."')";
    //$result = mysqli_query($conn, $sql);
    
$conn->close();
}
?>