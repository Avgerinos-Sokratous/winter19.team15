<?php
 include 'connectDB.php';


 $sql='UPDATE ClassV1 SET Number_of_available=Number_of_places WHERE DAYNAME(CURRENT_DATE())=Day';
 mysqli_query($conn, $sql);

 ?>