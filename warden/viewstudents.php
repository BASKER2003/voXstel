<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Student Information</title>

  <link rel="icon" href="../images/logo.jpg" type="image/icon type">
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/viewstudentinfoStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

	<style>
  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
   font-family: helvetica;
  }

  .contact-bts{
	color: #FFFFFF;
	text-decoration: none;
	padding: 4px 12px;
	border-radius: 10px;
	border:1px solid #e67e22;
	background-color: #e67e22;
}
table {
	width: 750px;
	border-collapse: collapse;
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) {
	background: #eee;
	}

th {
	background: #3498db;
	color: white;
	font-weight: bold;
	}

td, th {
	padding: 10px;
	border: 1px solid #ccc;
	text-align: left;
	font-size: 18px;
	}
  .approvebtn{
    border-radius: 50px;
    background: #01bf71;
    whitespace: nowrap;
    padding: 10px 22px;
    color: #010606;
    font-size: 16px; */
     outline: none;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    text-decoration: none;

  }
  .rejectbtn{
    border-radius: 50px;
    background: red;
    whitespace: nowrap;
    padding: 10px 32px;
    color: #010606;
    font-size: 16px; */
     outline: none;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    text-decoration: none;
    margin-top: 5px;
  }
/*
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table {
	  	width: 100%;
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr {
		display: block;
	}

	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr {
		position: absolute;
		top: -9999px;
		left: -9999px;
	}

	tr { border: 1px solid #ccc; }

	td {
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee;
		position: relative;
		padding-left: 50%;
	}

	td:before {
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%;
		padding-right: 10px;
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}
</style>

   
</head>
<body>
    <?php include 'header1.php';?>
    <?php

  require_once('../dbConnect.php');
  $sql="SELECT name,regno,block,roomno FROM users WHERE gender='male';";
    // $sql="SELECT regno,name,email,phoneno,block,roomno FROM users WHERE ";
  $query=mysqli_query($conn,$sql);
 ?>
</head>
  <body>
    <?php
    if(mysqli_num_rows($query)>0)
    {
     ?>

  <table>
  <thead>
    <tr>
      <th style="text-align: center;" colspan="6">Male</th>
    </tr>
    <tr>
      <th>Name</th>
      <th>Reg No</th>
      <th>Block</th>
      <th>Room no</th>
    </tr>
  </thead>
  <tbody>


      		<?php while($rows=mysqli_fetch_assoc($query))
      		{
      		?>
      		<tr><td><?php echo $rows['name']; ?></td>
      		<td><?php echo $rows['regno']; ?></td>
          	<td><?php echo $rows['block']; ?></td>
            	<td><?php echo $rows['roomno']; ?></td>
      		</tr>
      	<?php
                     }
                ?>


  </tbody>
</table>
<?php
}
else{
  echo "<h3 style='text-align: center;'>No Male Students Registered</h3>";
}
 ?>

<?php

  require_once('../dbConnect.php');
  $sql="SELECT name,regno,block,roomno FROM users WHERE gender='female';";
    // $sql="SELECT regno,name,email,phoneno,block,roomno FROM users WHERE ";
  $query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){

 ?>
<table>
<thead>
  <tr>
    <th style="text-align: center;" colspan="6">Female</th>
  </tr>
  <tr>
    <th>Name</th>
    <th>Reg No</th>
    <th>Block</th>
    <th>Room no</th>
  </tr>
</thead>
<tbody>


        <?php while($rows=mysqli_fetch_assoc($query))
        {
        ?>
        <tr> <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['regno']; ?></td>
        <td><?php echo $rows['block']; ?></td>
        <td><?php echo $rows['roomno']; ?></td>
        </tr>
      <?php
                   }
              ?>


</tbody>
</table>

<?php
}
else
{
  echo "<h3 style='text-align: center;'>No Female Students Registered</h3>";
}
 ?>
</body>
</html>