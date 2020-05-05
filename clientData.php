<?php

    include 'initSeshTrainer.php';
    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Latest compiled JavaScript -->
    <script>
    $(function () {
    $("#includedContent").load("https://www.ironsky-app.com/navTrainer.php");
    });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/main.css" rel="stylesheet">
</head>

<body style="background-color:#1E4072;" onload="fill()">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <!-- START OF NAVIGATION BAR -->

    <div id="includedContent"></div>

    <!-- END OF NAVIGATION BAR -->

    <br>
    <div class="form-gap">
        <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
    </div>

    <!-- START OF CONTAINER FOR NEW REGISTER -->
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-8 mx-auto">
                <!-- form card new register -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Retrieve Client Data</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" id="RetriveForm" autocomplete="off" method="post">
                            <div class="form-group">
                                <label for="input5">Email</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp" id="Email" name="Email" placeholder="Email" required />
                            </div>
			    <div class="form-group">
                                <label for="input5">Password</label>
                                <input type="password" class="form-control" aria-describedby="emailHelp" id="Password" name="Password" placeholder="password" required />
                            </div>
                            <div class="form-group">
                                <button type="submit" name="retrieve" class="btn btn-success btn-lg float-right">Retrieve</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form card register -->
            </div>
        </div>
    </div>
    <!-- END OF CONTAINER FOR FOR NEW REGISTER -->
    <!-- START OF CONTAINER FOR ANNOUNCEMENT -->
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-8 mx-auto">
                <!-- form card register -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Delete Client Data</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" id="RetriveForm" autocomplete="off" method="post">
                            <div class="form-group">
                                <label for="input5">Email</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp" id="Email" name="Email" placeholder="Email" required />
                            </div>
			    <div class="form-group">
                                <label for="input5">Password</label>
                                <input type="password" class="form-control" aria-describedby="emailHelp" id="Password" name="Password" placeholder="password" required />
                            </div>
                            <div class="form-group">
                                <button type="submit" name="delete" class="btn btn-danger btn-lg float-right">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form card register -->
            </div>
        </div>
    </div>
    <!-- END OF CONTAINER FOR ANNOUNCEMENT -->
<?php

if(array_key_exists('retrieve', $_POST)) { 
include 'php/connectDB.php';

$email = $_POST["Email"];
$password = $_POST["Password"];


	//header("Location: https://www.ironsky-app.com/clientData.html");
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
			
			$query = "SELECT * FROM Customer WHERE Customer_ID = '$id' "; 
			$res=mysqli_query($conn,$query);
			$data = mysqli_fetch_assoc($res);
			$fieldInfo = mysqli_fetch_fields($res);
			fwrite($myfile, "Client Details: \n");
			foreach ($fieldInfo as $field )
			{
				//echo "<script> alert($field->table); </script>";
				fwrite($myfile,$field->name . " => " . $data[$field->name] . "\n");
			}
			
			$query = "SELECT * FROM Memberships WHERE CustomerID = '$id' ";
			$res=mysqli_query($conn,$query);
			$data = mysqli_fetch_assoc($res);
			$fieldInfo = mysqli_fetch_fields($res);
			fwrite($myfile, "\nMemberships: \n");
			foreach ($fieldInfo as $field )
			{
				//echo "<script> alert($field->table); </script>";
				fwrite($myfile,$field->name . " => " . $data[$field->name] . "\n");
			}

			$query = "SELECT * FROM Enrolled WHERE Username = '$email'";
			$res=mysqli_query($conn,$query);
			//$data = mysqli_fetch_array($res);
			$fieldInfo = mysqli_fetch_fields($res);
			fwrite($myfile, "\nEnrolment: \n");
			foreach ($fieldInfo as $field )
			{
				fwrite($myfile,$field->name . "\t\t ");
			}	
			
    			while($row = $res->fetch_assoc()) 
			{
				fwrite($myfile, "\n". $row[Id] . "\t\t " . $row[Username] ."\t " . $row[ClassID] . "\t\t\t " . $row[Date]);
			}

			$query = "SELECT * FROM Login_Log WHERE Customer_ID = '$id' ";
			$res=mysqli_query($conn,$query);
			//$data = mysqli_fetch_array($res);
			$fieldInfo = mysqli_fetch_fields($res);
			fwrite($myfile, "\n\nLog-in  Details: \n");
			foreach ($fieldInfo as $field )
			{
				fwrite($myfile,$field->name . "\t ");
			}	
    			while($row = $res->fetch_assoc()) 
			{
				fwrite($myfile, "\n". $row[Id] . "\t " . $row[Customer_ID] ."\t\t " . $row[Date]); //TOFIX: missing the first login
				}
			
			$query = "SELECT * FROM Physical_Sign_In WHERE Email = '$email' ";
			$res=mysqli_query($conn,$query);
			//$data = mysqli_fetch_array($res);
			$fieldInfo = mysqli_fetch_fields($res);
			fwrite($myfile, "\n\nPhysical Sign In  Details: \n");
			foreach ($fieldInfo as $field )
			{
				fwrite($myfile,$field->name . "\t\t\t\t");
			}	
    			while($row = $res->fetch_assoc()) 
			{
				fwrite($myfile, "\n". $row[Id] . "\t\t\t\t" . $row[Email] ."\t\t" . $row[Date]); //TOFIX: missing the first login
				}
			
			$query = "SELECT * FROM On_Hold_Memberships WHERE UserID = '$id' ";
			$res=mysqli_query($conn,$query);
			//$data = mysqli_fetch_array($res);
			$fieldInfo = mysqli_fetch_fields($res);
			fwrite($myfile, "\n\nOn Hold Memberships  Details: \n");
			foreach ($fieldInfo as $field )
			{
				fwrite($myfile,$field->name . "\t\t\t\t");
			}	
    			while($row = $res->fetch_assoc()) 
			{
				fwrite($myfile, "\n". $row[Id] . "\t\t\t\t" . $row[UserID] ."\t\t\t\t" . $row[MembershipType] ."\t\t\t\t" . $row[PrevExp] ."\t\t\t" . $row[CalcExp]); //TOFIX: missing the first login
				}
				
			//send data to user
			$to = $email;
        		$subject = 'Your Data';

        		$message = "All the data we collected about you";
        		$attachment = chunk_split(base64_encode(file_get_contents("testData.txt")));
        		$filename = "testData.txt";

        		$boundary =md5(date('r', time())); 

       		 	$headers = "From: ironsky@cs.ucy.ac.cy";
        		$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

       	 		$message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";

       		 	mail($to, $subject, $message, $headers);
       		 	echo "<script> 
              swal({
  title: 'Success!',
  text: 'Email sent successfully',
  type: 'success',

  showConfirmButton: true
}, function(){
      window.location.href = 'https://www.ironsky-app.com/clientData.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";
			fclose($myfile);
			exit();
		}		

		echo "<script> 
              swal({
  title: 'Failed to Verify User!',
  text: 'Credentials incorrect or client does not exist.',
  type: 'error',

  showConfirmButton: true
}, function(){
      window.location.href = 'https://www.ironsky-app.com/clientData.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";
    return true;	
	}	
	
			
		
		
	mysqli_close($conn);


	

	

	//echo "<script>setTimeout(\"location.href = ' https://www.ironsky-app.com/clientData.php';\",500);</script>";

}
?>
<?php
if(array_key_exists('delete', $_POST)) { 
include 'php/connectDB.php';

$email = $_POST["Email"];
$password = $_POST["Password"];
echo "<script> alert($email); </script>";


if($email == "" || $password == "" )
{
	echo "<script> alert('You must give email and password'); </script>";
}
else
{
	//header("Location: https://www.ironsky-app.com/clientData.html");
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

			$sql = "DELETE FROM Physical_Sign_In WHERE Email = '$email'";
			if (mysqli_query($conn, $sql)) 
			{
    				echo "Record deleted successfully 3";
			}
	 		else
	 		{
    				echo "Error deleting record 3: " . mysqli_error($conn);
			}

			$sql = "DELETE FROM On_Hold_Memberships WHERE UserID = '$id'";
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
		    echo "<script> 
              swal({
  title: 'Failed to Verify User!',
  text: 'Credentials incorrect or client does not exist.',
  type: 'error',

  showConfirmButton: true
}, function(){
      window.location.href = 'https://www.ironsky-app.com/clientData.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";
    exit();		
		}
	}	
	mysqli_close($conn);


	

	$to = $email;
        $subject = 'Delete Data Request';
	$headers = "Ironsky App <info@ironsky-app.com>";


        $message = "All you data has been deleted.";
 	mail($to, $subject, $message,"From: ".$headers);
 	
 	echo "<script> 
              swal({
  title: 'Success!',
  text: 'Data have been deleted succesfully.',
  type: 'success',

  showConfirmButton: true
}, function(){
      window.location.href = 'https://www.ironsky-app.com/clientData.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
      </script>";
    exit();	

	//echo "<script>setTimeout(\"location.href = ' https://www.ironsky-app.com/clientData.php';\",500);</script>";
}
}

?>



</body>
</html>
