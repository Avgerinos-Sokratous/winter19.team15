
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
    
 	header("Location:https://www.ironsky-app.com/TrainerAn.php");
	exit();
	
	}
    

$conn->close();

?>