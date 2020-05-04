
<?php
include 'connectDB.php';

     
    $query = "SELECT * FROM Announcements ORDER BY Id DESC"; 
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));
    
    if (!$result) 
    {
        printf("Error");
        exit();
    } 

    else
    {
    
    echo "<table >";
   
    while ($row=mysqli_fetch_assoc($result))
    { 
	
	$Mydate = date('F d, Y ',strtotime($row["Date"]));
	echo "<tr>";
	echo "<td>"."<strong>".$Mydate."</strong>"."</br><em>Subject: ".$row["Title"]."</em></br></br>".$row["Description"]."<br>"."</td>";
	echo "<td class='fill'><a href= http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/php/deletePost.php?id=".$row['Id'].">DELETE </a></td>";
	echo "<td class='fill'><a href= http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/php/TrainerUpdate.php?id=".$row['Id'].">EDIT </a></td>";
	echo "</tr>";
    }
    
    echo "</table>";

    // frees the memory associated with the result
     mysqli_free_result($result);
	
    }
    
$conn->close();

?>