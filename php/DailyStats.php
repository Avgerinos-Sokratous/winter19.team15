<?php
    include 'initSeshTrainer.php';

$contentType="application/json";
if(strcasecmp($contentType, "application/json") == 0) {

    include 'connectDB.php';
$hours = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

    $query = "SELECT * FROM Physical_Sign_In WHERE DATE(Date)=CURRENT_DATE";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        if(($row['Date']>=date('Y-m-d 00:00:00'))&&($row['Date']<=date('Y-m-d 08:29:59'))){
            $hours[0]=$hours[0]+1;
        }else if(($row['Date']>=date('Y-m-d 08:30:00'))&&($row['Date']<=date('Y-m-d 09:29:59'))){
            $hours[1]=$hours[1]+1;
        }else if(($row['Date']>=date('Y-m-d 09:30:00'))&&($row['Date']<=date('Y-m-d 10:29:59'))){
            $hours[2]=$hours[2]+1;
        }else if(($row['Date']>=date('Y-m-d 10:30:00'))&&($row['Date']<=date('Y-m-d 11:29:59'))){
            $hours[3]=$hours[3]+1;
        }else if(($row['Date']>=date('Y-m-d 11:30:00'))&&($row['Date']<=date('Y-m-d 12:29:59'))){
            $hours[4]=$hours[4]+1;
        }else if(($row['Date']>=date('Y-m-d 12:30:00'))&&($row['Date']<=date('Y-m-d 13:29:59'))){
            $hours[5]=$hours[5]+1;
        }else if(($row['Date']>=date('Y-m-d 13:30:00'))&&($row['Date']<=date('Y-m-d 14:29:59'))){
            $hours[6]=$hours[6]+1;
        }else if(($row['Date']>=date('Y-m-d 14:30:00'))&&($row['Date']<=date('Y-m-d 15:29:59'))){
            $hours[7]=$hours[7]+1;
        }else if(($row['Date']>=date('Y-m-d 15:30:00'))&&($row['Date']<=date('Y-m-d 16:29:59'))){
            $hours[8]=$hours[8]+1;
        }else if(($row['Date']>=date('Y-m-d 16:30:00'))&&($row['Date']<=date('Y-m-d 17:29:59'))){
            $hours[9]=$hours[9]+1;
        }else if(($row['Date']>=date('Y-m-d 17:30:00'))&&($row['Date']<=date('Y-m-d 18:29:59'))){
            $hours[10]=$hours[10]+1;
        }else if(($row['Date']>=date('Y-m-d 18:30:00'))&&($row['Date']<=date('Y-m-d 19:29:59'))){
            $hours[11]=$hours[11]+1;
        }else if(($row['Date']>=date('Y-m-d 19:30:00'))&&($row['Date']<=date('Y-m-d 20:29:59'))){
            $hours[12]=$hours[12]+1;
        }else if(($row['Date']>=date('Y-m-d 20:30:00'))&&($row['Date']<=date('Y-m-d 21:29:59'))){
            $hours[13]=$hours[13]+1;
        }else if(($row['Date']>=date('Y-m-d 21:30:00'))&&($row['Date']<=date('Y-m-d 23:59:59'))){
            $hours[14]=$hours[14]+1;
        }
        
    }
    //$data = json_decode($json);
    echo json_encode($hours);
    //$hours = array(1, 2, 3,5,3,7,12,23,45,6,42,43,12,22,34,45,5);
    
    //$sql="INSERT INTO requests(hours) VALUES (".time().",'".$data->address."','".$data->region."','".$data->city."')";
    //$result = mysqli_query($conn, $sql);
    
$conn->close();
}
?>