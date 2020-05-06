
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
	echo "<td class='fill'><a><button style='color:white' onclick="."confirmation(".$row[Id].")".">DELETE</button></a></td>"; 
	echo "<td class='fill'><a href= https://www.ironsky-app.com/TrainerUpdate.php?id=".$row['Id'].">EDIT </a></td>";
	echo "</tr>";
    }
    
    echo "</table>";

    // frees the memory associated with the result
     mysqli_free_result($result);
	      echo "<script>
    function confirmation(opas) { 
   console.log(opas);
   var result = confirm('Are you sure?'); 
   
   if (result == true) { 
   $.ajax({
    data: {'id':opas},
    url: 'https://www.ironsky-app.com/php/deletePost.php',
    method: 'GET', // or GET
    success: function() {
    location.reload();
    }
    });
   }
   }
</script>";
    }
    

$conn->close();

?>