<?php
    require('connectDB.php');
    $today=date("Y-m-d");
    $sql="SELECT * FROM On_Hold_Memberships WHERE PrevExp='$today'";
    $result=mysqli_query($conn,$sql);
    while($r = mysqli_fetch_assoc($result)) {
        $id=$r['Id'];
        $userID=$r['UserID'];
        $memb=$r['MembershipType'];
        $exp=$r['CalcExp'];
        $sql="UPDATE Memberships SET Type='$memb',ExpirationDate='$exp' WHERE CustomerID=".$userID;
        mysqli_query($conn, $sql);
        $sql="DELETE FROM On_Hold_Memberships WHERE Id=".$id;
        mysqli_query($conn, $sql);
    }

?>