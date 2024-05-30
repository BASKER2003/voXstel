<?php

	$id = $_GET['id'];

    include ('../dbConnect.php'); 

	$sql =  "DELETE FROM users WHERE regno='$id'";

	$sql1 = "DELETE FROM complaints WHERE regno='$id'";

	mysqli_query($conn, $sql1);

	$sql2 = "DELETE FROM leaverequests WHERE regno='$id'";

	mysqli_query($conn, $sql2);

	

	if (mysqli_query($conn, $sql)) 
    {
		echo "Student record deleted successfully";
        header("location: ../admin/admindashboard.php");
	} 
    else 
    {
		echo "Error deleting record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	
?>
