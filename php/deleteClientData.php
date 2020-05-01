<?php
include 'connectDB.php';

$email = $_POST["Email"];
$password = $_POST["Password"];
echo "<script> alert($email); </script>";


if($email == "" || $password == "" )
{
	echo "<script> alert('You must give email and password'); </script>";
}
else
{
	//header("Location: http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/clientData.html");
	$query = "SELECT * FROM Customer WHERE Email='$email'";
	$result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));
	if (!$result) 
	{
		echo "<script> alert('FAILURE'); </script>";	
		printf("Error: %s\n", mysqli_error($conn));
    		exit();
	}
	else
	{
		$row = mysqli_fetch_assoc($result);
	
		if (password_verify($password,$row['Password']))
		{
			$cuid="SELECT Customer_ID FROM Customer WHERE Email = '$email'"; 
			$res=mysqli_query($conn,$cuid);
       			$row = mysqli_fetch_assoc($res);
       			$id=$row['Customer_ID'];
			//echo "<script> alert($id); </script>";

			$sql = "DELETE FROM Login_Log WHERE Customer_ID = '$id'";
			if (mysqli_query($conn, $sql)) 
			{
    				echo "Record deleted successfully 1";
			}
	 		else
	 		{
    				echo "Error deleting record 1: " . mysqli_error($conn);
			}

			$sql = "DELETE FROM Memberships WHERE CustomerID = '$id'";
			if (mysqli_query($conn, $sql)) 
			{
    				echo "Record deleted successfully 2";
			}
	 		else
	 		{
    				echo "Error deleting record 2: " . mysqli_error($conn);
			}
			
			$sql = "DELETE FROM Enrolled WHERE Username = '$email'";
			if (mysqli_query($conn, $sql)) 
			{
    				echo "Record deleted successfully 3";
			}
	 		else
	 		{
    				echo "Error deleting record 3: " . mysqli_error($conn);
			}

			$sql = "DELETE FROM Customer WHERE Customer_ID = '$id'";
			if (mysqli_query($conn, $sql)) 
			{
    				echo "Record deleted successfully 4";
			}
	 		else
	 		{
    				echo "Error deleting record 4: " . mysqli_error($conn);
			}


		}		
		else
		{
			echo "<script> alert('FAILED TO VERIFY USER'); </script>";		
		}
	}	
	mysqli_close($conn);


	

	$to = $email;
        $subject = 'Delete Data Request';
	$headers = "From: ironsky@cs.ucy.ac.cy";


        $message = "All you data has been deleted.";
 	mail($to, $subject, $message, $headers);

	echo "<script>setTimeout(\"location.href = ' http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/clientData.php';\",500);</script>";
}

?>
