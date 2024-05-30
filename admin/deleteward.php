<?php

	$id = $_GET['id'];

    include ('../dbConnect.php'); 

	$sql = "DELETE FROM wardens WHERE wardenno='$id'";

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
