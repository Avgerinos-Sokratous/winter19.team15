
<?php
include 'connectDB.php';


    $query = "DELETE FROM Announcements WHERE Id='$_GET[id]'";

    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    if (!$result) 
    {
        printf("Error");
        exit();
    } 
     else
	{
    
 	header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/TrainerAn.php");
	exit();
	
	}
    

$conn->close();

?>