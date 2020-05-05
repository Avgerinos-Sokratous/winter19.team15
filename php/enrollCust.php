<?php
  include 'connectDB.php';

     if(isset($_POST['id'])){
        $cid= $_POST['id'];
    }

    if(isset($_POST['datediff'])){
      $diff= $_POST['datediff'];
    }

    session_start();
	$mail=$_SESSION["email"];
	
	

    //get user's id
    $sql="SELECT Customer_ID FROM Customer WHERE Email='".$mail."'";
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    $r = mysqli_fetch_assoc($result);
    $custID=$r['Customer_ID'];

    

    //get user's membership
    $sql="SELECT Type FROM Memberships WHERE CustomerID=".$custID;
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    $r = mysqli_fetch_assoc($result);
    $membership=$r['Type'];
    
    

    $three=true;   //user is allowed only 3 times a week
    //check if he is allowed only 3 times a week
    if((strpos($membership,"Unlimited") === 0)|| (strpos($membership,"Open Gym") === 0)){
        $three=false;
    }
    
    
    
    //if he is allowd only 3 times, check if he has enrolled three times for the week he wishes to enroll
    if($three){
        //get the week he wishes to enroll
        $sql="SELECT WEEK(DATE_ADD(CURRENT_DATE,INTERVAL ".$diff." Day)) AS WEEK";
        mysqli_query($conn,$sql);
        $result = $conn->query($sql);
        $r = mysqli_fetch_assoc($result);
        $week=$r['WEEK'];

        //get the totals of the weeks he has enrolled
        $sql="SELECT COUNT(Id),WEEK(Date) FROM Enrolled WHERE Username='".$mail."' GROUP BY WEEK(Date)";
        mysqli_query($conn,$sql);
        $result = $conn->query($sql);
        while($r = mysqli_fetch_assoc($result)) {
            if($r['WEEK(Date)']==$week){
                if($r['COUNT(Id)']>=3){
                    echo(-3);
                    exit();
                }
            }
        
        }
    }

    //check if he has open gym membership
    if(strpos($membership,"Open Gym") === 0){
        
        echo(-4);
        exit();
    }


    //check if user is enrolled in the class for the date you want
    $sql="SELECT Username,Date FROM Enrolled WHERE ClassID=".$cid ;
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    while($r = mysqli_fetch_assoc($result)) {
        if($r['Username']==$mail){
            $Today=date('Y-m-d');
            $NewDate=Date('Y-m-d', strtotime('+'.$diff.' days'));
            if($NewDate==$r['Date']){
                echo (-1);
                $conn->close();
                exit();
            }
        }
    }
    $check=true;
    $clname;
    $sql="SELECT ClassName,Number_of_available FROM ClassV1 WHERE ClassID=".$cid;
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    while($r = mysqli_fetch_assoc($result)) {
        if($r['Number_of_available']==0){
            $check=false;
        }
        $clname=$r['ClassName'];
        $numplaces=$r['Number_of_available']-1;
    }

    if($check==false){
        echo(-2);
        exit();
    }

    $sql="INSERT INTO Enrolled (Username,ClassID,Date,ClassName) Values('".$mail."',".$cid.",DATE_ADD(CURDATE(),INTERVAL ".$diff." DAY),'".$clname."')";
    //$sql="INSERT INTO Enrolled VALUES ('".$mail."',".$cid.",CURDATE()+".$diff.")";
    if (mysqli_query($conn, $sql)){
    $sql="UPDATE ClassV1 SET Number_of_available=".$numplaces." WHERE ClassID=".$cid;
        mysqli_query($conn, $sql);
        echo(1);
    }else{
        echo(0);
    }
    $conn->close();
?>
