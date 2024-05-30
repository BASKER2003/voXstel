<?php

$conn= mysqli_connect('localhost','root','','hms') or 
//$conn = mysqli_connect('sql308.infinityfree.com', 'if0_35891358', 'WebDev2003', 'if0_35891358_Voxstel')
//$conn = mysqli_connect('sql311.byethost31.com', 'b31_36304234', 'Basker@2003', 'b31_36304234_hms')

die("Connection failed:" .mysqli_connect_error());

return $conn;

?>
