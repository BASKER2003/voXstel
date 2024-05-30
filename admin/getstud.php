<html>

  <head>

  <style>
    /* Main container */
.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f5f5f5;
  border-radius: 10px;
}

/* Hostel title */
h1 {
  text-align: center;
  margin-bottom: 30px;
  font-size: 36px;
}

/* Hostel table */
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 30px;
}

/* Table header */
thead {
  background-color: #4CAF50;
  color: #fff;
}

/* Table header cells */
th {
  padding: 10px;
}

/* Table rows */
tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Table cells */
td {
  padding: 10px;
}

/* Link buttons */
a.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
}

a.button:hover {
  background-color: #3e8e41;
}


    </style>

</head>

<body>

<?php

include('../dbConnect.php');

// Retrieve the hostel value from the AJAX call
$hostel = $_POST['hostel'];

// SQL query to retrieve students from the selected hostel
$sql = "SELECT name, regno, email, phoneno, roomno FROM users WHERE block = '$hostel'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // Output table headers
    echo "<table class='table table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Reg No</th>";
    echo "<th>Email</th>";
    echo "<th>Phone No</th>";
    echo "<th>Room No</th>";
    echo "</tr>";
    echo "</thead>";

    // Output student data
    echo "<tbody>";
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["regno"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["phoneno"]."</td>";
        echo "<td>".$row["roomno"]."</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} 
else 
{
    // Output message if no students found in the selected hostel
    echo "No students found in this hostel";
}

$conn->close();

?>

</body>

</html>