<?php
include 'connectDB.php';

    //echo "Hello World!";
   
    $query = "SELECT * FROM Announcements ORDER BY Id DESC LIMIT 7"; 
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));
    
    if (!$result) 
    {
        printf("Error");
        exit();
    } 

    else
    {
    
    //echo "Else Test";

    /*    
    while($row = mysqli_fetch_assoc($result))
    { 
        $data[] = $row;
    }
    
    echo json_encode($data);
   */

    echo "<table>";
    
    while ($row=mysqli_fetch_assoc($result))
    {
	//echo $row["Date"]."<br>";
	//echo $row["Title"]."<br>";
	//echo $row["Description"]."<br><br>";
    	
	echo  "<tr>"."<strong>".$row["Date"]."</strong>"."<em>Subject: ".$row["Title"]."</em>"."Message: ".$row["Description"]."<br><br>"."</tr>";
	
    }

    echo "</table>";

    // frees the memory associated with the result
     mysqli_free_result($result);
	
    }
    
$conn->close();

?>