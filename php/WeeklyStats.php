<?php
    include 'initSeshTrainer.php';

$contentType="application/json";
if(strcasecmp($contentType, "application/json") == 0) {

    include 'connectDB.php';
$days = array(0,0,0,0,0,0,0);

    $query = "SELECT * FROM Physical_Sign_In WHERE YEARWEEK(`date`, 1) = YEARWEEK(CURDATE(), 1)";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $datetime = date('D', strtotime($row['Date']));
        //$days[0]=$days[0]+1;
        if($datetime =='Sun'){
            $days[6]=$days[6]+1;
        }else if($datetime =='Mon'){
            $days[0]=$days[0]+1;
        }else if($datetime =='Tue'){
            $days[1]=$days[1]+1;
        }else if($datetime =='Wed'){
            $days[2]=$days[2]+1;
        }else if($datetime =='Thu'){
            $days[3]=$days[3]+1;
        }else if($datetime =='Fri'){
            $days[4]=$days[4]+1;
        }else if($datetime =='Sat'){
            $days[5]=$days[5]+1;
        }
        
    }
    //$data = json_decode($json);
    echo json_encode($days);
    //$hours = array(1, 2, 3,5,3,7,12,23,45,6,42,43,12,22,34,45,5);
    
    //$sql="INSERT INTO requests(hours) VALUES (".time().",'".$data->address."','".$data->region."','".$data->city."')";
    //$result = mysqli_query($conn, $sql);
    
$conn->close();
}
?>